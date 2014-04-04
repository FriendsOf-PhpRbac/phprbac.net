<?php
require_once __DIR__ . "/PhpRbac/autoload.php";
$rbac = new \PhpRbac\Rbac ();
function Titles(array $array, $prefix = "") {
	return array_map ( function ($ar) use($prefix) {
		return $prefix . $ar ['Title'];
	}, $array );
}
function setup(PhpRbac\Rbac $rbac) {
	$r = $rbac->Roles->PathID ( "/CEO/Financial/Sales" );
	if ($r)
		return false;
	$rbac->Users->Assign ( "/CEO", 2 );
	$rbac->Users->Assign ( "/CEO/Operations", 3 );
	$rbac->Users->Assign ( "/CEO/IT", 4 );
	$rbac->Users->Assign ( "/CEO/Financial", 5 );
	$rbac->Users->Assign ( "/CEO/IT/Security", 6 );
	$rbac->Users->Assign ( "/CEO/Operations", 6 );
	
	$rbac->Roles->AddPath ( "/CEO/Operations" );
	$rbac->Roles->AddPath ( "/CEO/Financial/Sales" );
	$rbac->Roles->AddPath ( "/CEO/Financial/Marketing" );
	$rbac->Roles->AddPath ( "/CEO/Financial/Payroll" );
	$rbac->Roles->AddPath ( "/CEO/IT/Network" );
	$rbac->Roles->AddPath ( "/CEO/IT/Security" );
	$rbac->Roles->AddPath ( "/CEO/IT/Admin" );
	
	$rbac->Permissions->AddPath ( "/Money/Order" );
	$rbac->Permissions->AddPath ( "/Money/Transfer" );
	$rbac->Permissions->AddPath ( "/System/Rooms/Server" );
	$rbac->Permissions->AddPath ( "/System/Rooms/Vault" );
	$rbac->Permissions->AddPath ( "/System/Users/Add" );
	$rbac->Permissions->AddPath ( "/System/Users/Edit" );
	$rbac->Permissions->AddPath ( "/System/Users/Pass Change" );
	$rbac->Permissions->AddPath ( "/System/Users/Remove" );
	$rbac->Permissions->AddPath ( "/Reports/General" );
	$rbac->Permissions->AddPath ( "/Reports/Financial" );
	$rbac->Permissions->AddPath ( "/Reports/Security" );
	
	$rbac->assign ( "/CEO", "/Money" );
	$rbac->assign ( "/CEO", "/System" );
	$rbac->assign ( "/CEO", "/Reports" );
	$rbac->assign ( "/CEO/IT", "/System" );
	$rbac->assign ( "/CEO/IT", "/Reports/Security" );
	$rbac->assign ( "/CEO/IT/Network", "/Reports/Security" );
	$rbac->assign ( "/CEO/IT/Network", "/System/Rooms/Server" );
	$rbac->assign ( "/CEO/IT/Security", "/Reports/Security" );
	$rbac->assign ( "/CEO/IT/Security", "/System/Users/Pass Change" );
	$rbac->assign ( "/CEO/IT/Admin", "/System" );
	$rbac->assign ( "/CEO/IT/Admin", "/Report/General" );
	$rbac->assign ( "/CEO/IT/Admin", "/Reports/Security" );
	$rbac->assign ( "/CEO/Operations", "/Reports/Financial" );
	$rbac->assign ( "/CEO/Operations", "/Reports/General" );
	$rbac->assign ( "/CEO/Operations", "/Systems/Users" );
	$rbac->assign ( "/CEO/Financial", "/Money" );
	$rbac->assign ( "/CEO/Financial", "/Reports/Financial" );
	$rbac->assign ( "/CEO/Financial/Sales", "/Money" );
	$rbac->assign ( "/CEO/Financial/Payroll", "/Money/Transfer" );
	
	return true;
}
setup ( $rbac );

$users = array (
		1 => 'Root',
		"Abbas Naderi",
		"Rahul Chaudhary",
		"John Doe",
		"Alice Wonderland",
		"Oliver Twist" 
);
if (isset ( $_POST ['Q'] )) {
	$userid = jf::SQL ( "SELECT UserID FROM phprbac_userroles GROUP BY UserID ORDER BY RAND() LIMIT 1" );
	$userid = $userid [0] ['UserID'];
	$username = $users [$userid];
	$permissionid = jf::SQL ( "SELECT ID FROM phprbac_permissions ORDER BY RAND() LIMIT 1" );
	$permission = $rbac->Permissions->Path ( $permissionid [0] ['ID'] );
	$result = $rbac->check ( $permission, ( int ) $userid ) ? "1" : "0";
	if ($permission == "/")
		$permission = "root";
	echo "{$username}|{$permission}|{$result}";
	
	die ();
} elseif (isset ( $_POST ['role'] )) {
	$roleID = $rbac->Roles->TitleID ( $_POST ['role'] );
	if ($roleID) {
		$permissions = $rbac->Roles->Permissions ( $roleID, false );
		if ($permissions)
			echo implode ( ",", Titles ( $permissions, ".permission#" ) );
	}
	die ();
} elseif (isset ( $_POST ['permission'] )) {
	$permissionID = $rbac->Permissions->TitleID ( $_POST ['permission'] );
	if ($permissionID) {
		$roles = $rbac->Permissions->Roles ( $permissionID, false );
		if ($roles)
			echo implode ( ",", Titles ( $roles, ".role#" ) );
	}
	die ();
} elseif (isset ( $_POST ['user'] )) {
	$userID = $_POST ['user'];
	$roles = $rbac->Users->AllRoles ( $userID );
	if ($roles)
		echo implode ( ",", Titles ( $roles, ".role#" ) );
	die ();
}
