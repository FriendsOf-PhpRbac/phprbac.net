<?php require_once 'header.php'; ?>

    	<div class="container bs-docs-container">
  			<div class="row">
    			<div class="col-md-3">
      				<div class="bs-sidebar hidden-print affix" role="complementary">
        				<ul class="nav bs-sidenav">
							<li class="active"><a href="#phprbac_tutorial">PHP-RBAC Tutorial</a></li>

							<li>
							    <a href="#concepts_and_terminology">Concepts and Terminology</a>
							  	<ul class="nav">
								    <li><a href="#perms_roles_users">Permissions, Roles and Users</a></li>
								    <li><a href="#assignments">Role/Permission and Role/User assignment</a></li>
								    <li><a href="#hierarchies">Permission and Role Hierarchies</a></li>
								    <li><a href="#id_title_path">Id, Title, Path</a></li>
							  	</ul>
							</li>
						    <li>
							    <a href="#the_basics">The Basics</a>
							  	<ul class="nav">
								    <li><a href="#examining_rbac_class">Examining the 'PhpRbac\Rbac' Class</a></li>
								    <li><a href="#creating_permissions_roles">Creating Permissions and Roles</a></li>
								    <li><a href="#creating_role_permission_associations">Creating Role/Permission Associations</a></li>
								    <li><a href="#creating_user_role_associations">Creating User/Role Associations</a></li>
							  	</ul>
							</li>

							<li>
							    <a href="#making_changes">Making Changes</a>
							  	<ul class="nav">
								    <li><a href="#editing_entities">Editing Existing Entities</a></li>
								    <li><a href="#removing_entities">Removing Existing Entities</a></li>
								    <li><a href="#unassign_role_perm_associations">Unassigning Role/Permission Associations</a></li>
								    <li><a href="#unassign_user_role_associations">Unassigning User/Role Associations</a></li>
							  	</ul>
							</li>

							<li>
							    <a href="#validating_user_access">Validating User Access</a>
							  	<ul class="nav">
								    <li><a href="#check_user_roles_perms">Checking for a User’s Roles and Permissions</a></li>
							  	</ul>
							</li>

							<li><a href="#beyond_the_basics">Beyond the Basics</a></li>

						</ul>
      				</div>
    			</div>

                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h1 id="phprbac_tutorial">PHP-RBAC Tutorial</h1>
                        </div>

                        <p class="lead">
                            This tutorial is designed to teach you the concepts and terminology needed to work with PHP-RBAC, explain
                            the basics of working with PHP-RBAC, and then finish off with a quick reference of the tasks you can
                            perform with PHP-RBAC.
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="concepts_and_terminology">Concepts and Terminology</h2>
                        </div>

                        <p class="lead">
                            Key concepts and terminology you'll need to understand while working with PHP-RBAC.
                        </p>

                        <h3 id="perms_roles_users">Permissions, Roles and Users</h3>

                        <p>
                            When working with PHP-RBAC you will be working with three things: Permissions, Roles and Users
                        </p>

                        <p>
                            <strong>Permissions</strong>
                        </p>

                        <p>
                            Permissions are essentially 'labels' stored in PHP-RBAC's database. They can be used to allow/restrict
                            access to a resource. It is up to your application logic to define what a Permission means and how it is
                            enforced.
                        </p>

                        <p>
                            Examples: 'can_delete_posts', 'restricted_content', 'print_balance'
                        </p>

                        <p>
                            <strong>Roles</strong>
                        </p>

                        <p>
                            A Role is a 'label' that signifies a Users responsibilities.
                        </p>

                        <p>
                            Examples: 'forum_moderator', 'accounts_payable', 'lead_engineer'
                        </p>

                        <p>
                            <strong>Users</strong>
                        </p>

                        <p>
                            A User is defined in your application logic, outside of PHP-RBAC. PHP-RBAC uses the User's Id to make
                            Role assignments.
                        </p>

                        <p>
                            <strong>Note:</strong> When we mention 'Entity' we mean either a Role or Permission.
                        </p>

                        <h3 id="assignments">Role/Permission and Role/User assignment</h3>

                        <p>
                            PHP-RBAC uses assignment to manage the relation of Permissions->Roles->Users.
                        </p>

                        <p>
                            Simply put, Permissions are assigned to Roles, and Roles are assigned to Users.
                        </p>

                        <h3 id="hierarchies">Permission and Role Hierarchies</h3>

                        <p>
                            Both Permissions and Roles are hierarchical. This means that both Entities can have an unlimited
                            amount of children Entities.
                        </p>

                        <p>
                            When you assign a Permission to a Role, that Role not only inherits the Permission being assigned,
                            but also all children of the assigned Permission.
                        </p>

                        <p>
                            The same goes for User->Role assignments. When a Role is assigned to a User, the User not only inherits
                            the Role being assigned, but also all children of the assigned Role.
                        </p>

                        <h3 id="id_title_path">Id, Title, Path</h3>

                        <p>
                            A Role or Permission can be referenced three ways: By Id, Title, Path
                        </p>

                        <p>
                            <strong>Id</strong>
                        </p>

                        <p>
                            An Id is simply an auto-incremented integer value created when you create an Entity. All Entities can be
                            referenced by using its Id.
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Example:
<pre class="pre-scrollable">
<code class="prettyprint">$perm_id = 5;</code>
</pre>

                        <p>
                            <strong>Title</strong>
                        </p>

                        <p>
                            A Title is a simple string value. If a Title is used to create an Entity you will be able to refer to
                            it using it's Title or Id.
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Example:
<pre class="pre-scrollable">
<code class="prettyprint">$perm_title = 'edit_post';</code>
</pre>

                        <p>
                            <strong>Path</strong>
                        </p>

                        <p>
                            A Path is a string value that contains a hierarchy of Entities separated by a '/' (forward slash). If a Path
                            is used to create an Entity you will be able to refer to it using it's Path, Title or Id.
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Example:
<pre class="pre-scrollable">
<code class="prettyprint">$role_path = '/admin/forum_moderator/forum_user';</code>
</pre>

                        <p>
                            When this Path is created it will create the 'admin', 'forum_moderator' and 'forum_user' Roles with those Titles.
                            If a Role in this Path already exists PHP-RBAC will not recreate it.
                        </p>

                        <p>
                            Paths are the easiest way to reference Entities, although retrieving Entities using Paths is slower than using Id's or Titles.
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="the_basics">The Basics</h2>
                        </div>

                        <p class="lead">
                            Let's get into the code!
                        </p>

                        <h3 id="examining_rbac_class">Examining the 'PhpRbac\Rbac' Class</h3>

                        <hr />

                        <h4>Instantiate a 'PhpRbac\Rbac' Object</h4>

                        <p>
                            After <a href="docs_getting_started.php#load_the_code">Autoloading</a> PHP-RBAC you can create an Rbac Object.
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
With a 'use' statement:
<pre class="pre-scrollable">
<code class="prettyprint">use PhpRbac\Rbac;
$rbac = new Rbac();</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Without a 'use' statement, outside of a namespace:
<pre class="pre-scrollable">
<code class="prettyprint">$rbac = new PhpRbac\Rbac();</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Without a 'use' statement, inside of another namespace (notice the leading backslash):
<pre class="pre-scrollable">
<code class="prettyprint">$rbac = new \PhpRbac\Rbac();</code>
</pre>

                        <hr />

                        <h4>The structure of an PhpRbac\Rbac object</h4>

                        <p>
                            The $rbac object contains three Objects and four Methods:
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Objects:
<pre class="pre-scrollable">
<code class="prettyprint">$rbac->Permissions
$rbac->Roles
$rbac->Users</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Methods:
<pre class="pre-scrollable">
<code class="prettyprint">$rbac->assign()
$rbac->check()
$rbac->enforce()
$rbac->reset() // Should be used mainly for testing purposes</code>
</pre>

                        <h3 id="creating_permissions_roles">Creating Permissions and Roles</h3>

                        <p>
                            You can create Entities using a Title or a Path.
                        </p>

                        <hr />

                        <h4>With a Title</h4>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Creating an Entity using a Title:
<pre class="pre-scrollable">
<code class="prettyprint">// Create a Permission
$perm_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Permissions->add('delete_posts', 'Can delete forum posts')</a>;

// Create a Role
$role_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Roles->add('forum_moderator', 'User can moderate forums')</a>;</code>
</pre>

                        <hr />

                        <h4>With a Path</h4>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Creating an Entity using a Path:
<pre class="pre-scrollable">
<code class="prettyprint">$perm_descriptions = array(
    'Can delete users',
    'Can edit user profiles',
    'Can view users'
);

<a href="api.php#api_entity_addPath" target="_blank">$rbac->Permissions->addPath('/delete_users/edit_users/view_users', $perm_descriptions)</a>;

$role_descriptions = array(
    'Forum Administrator',
    'Forum Moderator',
    'Registered Forum Member'
);

<a href="api.php#api_entity_addPath" target="_blank">$rbac->Roles->addPath('/admin/forum_moderator/forum_member', $role_descriptions)</a>;</code>
</pre>

                        <h3 id="creating_role_permission_associations">Creating Role/Permission Associations</h3>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Assigning Permissions to Roles using Entity Object:
<pre class="pre-scrollable">
<code class="prettyprint">// Create Role and Permission
$perm_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Permissions->add('delete_posts', 'Can delete forum posts')</a>;
$role_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Roles->add('forum_moderator', 'User can moderate forums')</a>;

// The following are equivalent statements
<a href="api.php#api_entity_assign" target="_blank">$rbac->Permissions->assign($role_id, $perm_id)</a>;
<a href="api.php#api_entity_assign" target="_blank">$rbac->Roles->assign($role_id, $perm_id)</a>;</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Alternate Method:
<pre class="pre-scrollable">
<code class="prettyprint">// Create Role and Permission
$perm_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Permissions->add('delete_posts', 'Can delete forum posts')</a>;
$role_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Roles->add('forum_moderator', 'User can moderate forums')</a>;

// Assign Permission to Role
<a href="api.php#api_general_assign" target="_blank">$rbac->assign($role_id, $perm_id)</a>;</code>
</pre>

                        <h3 id="creating_user_role_associations">Creating User/Role Associations</h3>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Assigning Roles to Users:
<pre class="pre-scrollable">
<code class="prettyprint">// Create Role and Permission
$perm_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Permissions->add('delete_posts', 'Can delete forum posts')</a>;
$role_id = <a href="api.php#api_entity_add" target="_blank">$rbac->Roles->add('forum_moderator', 'User can moderate forums')</a>;

// Assign Permission to Role
<a href="api.php#api_entity_assign" target="_blank">$rbac->Roles->assign($role_id, $perm_id)</a>;

// Assign Role to User (The UserID is provided by the application's User Management System)
<a href="api.php#api_users_assign" target="_blank">$rbac->Users->assign($role_id, 5)</a>;</code>
</pre>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="making_changes">Making Changes</h2>
                        </div>

                        <p class="lead">
                            Use these Methods to make changes to Entities.
                        </p>

                        <h3 id="editing_entities">Editing Existing Entities</h3>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Editing Entities:
<pre class="pre-scrollable">
<code class="prettyprint">// Get Entity Id's
$perm_id = <a href="api.php#api_entity_returnId" target="_blank">$rbac->Permissions->returnId('delete_posts')</a>;
$role_id = <a href="api.php#api_entity_returnId" target="_blank">$rbac->Roles->returnId('forum_moderator')</a>;

// Edit Entities
<a href="api.php#api_entity_edit" target="_blank">$rbac->Permissions->edit($perm_id, 'delete_own_posts', 'Can delete posts they create')</a>;
<a href="api.php#api_entity_edit" target="_blank">$rbac->Roles->edit('forum_spam_moderator', 'User is responsible for spam moderation)</a>;</code>
</pre>

                        <h3 id="removing_entities">Removing Existing Permissions and Roles</h3>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Removing Permissions:
<pre class="pre-scrollable">
<code class="prettyprint">// Get Permission Id
$perm_id = <a href="api.php#api_entity_returnId" target="_blank">$rbac->Permissions->returnId('delete_posts')</a>;

// Remove single Permission
<a href="api.php#api_permissions_remove" target="_blank">$rbac->Permissions->remove($perm_id)</a>;

// Remove Permission and all descendants
<a href="api.php#api_permissions_remove" target="_blank">$rbac->Permissions->remove($perm_id, true)</a>;</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Removing Roles:
<pre class="pre-scrollable">
<code class="prettyprint">// Get Permission Id
$role_id = <a href="api.php#api_entity_returnId" target="_blank">$rbac->Roles->returnId('forum_moderator')</a>;

// Remove single Role
<a href="api.php#api_roles_remove" target="_blank">$rbac->Roles->remove($role_id)</a>;

// Remove Role and all descendants
<a href="api.php#api_roles_remove" target="_blank">$rbac->Roles->remove($role_id, true)</a>;</code>
</pre>

                        <h3 id="unassign_role_perm_associations">Unassigning Role/Permission Associations</h3>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Unassign a single Permission/Role assignment:
<pre class="pre-scrollable">
<code class="prettyprint">// Unassign a single Permission/Role assignment using Titles.
// The following are equivalent statements.
<a href="api.php#api_entity_unassign" target="_blank">$rbac->Permissions->unassign('forum_moderator', 'delete_posts')</a>;
<a href="api.php#api_entity_unassign" target="_blank">$rbac->Roles->unassign('forum_moderator', 'delete_posts')</a>;</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Unassign all Permissions assigned to a Role:
<pre class="pre-scrollable">
<code class="prettyprint">// Get Role Id
$role_id = <a href="api.php#api_entity_returnId" target="_blank">$rbac->Roles->returnId('forum_moderator')</a>;

// Unassign all Permissions assigned to a Role
<a href="api.php#api_roles_unassignPermissions" target="_blank">$rbac->Roles->unassignPermissions($role_id)</a>;</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Unassign all Permission/Role assignments related to Permission:
<pre class="pre-scrollable">
<code class="prettyprint">// Get Permission Id
$perm_id = <a href="api.php#api_entity_returnId" target="_blank">$rbac->Permissions->returnId('delete_posts')</a>;

// Unassign all Permission/Role assignments related to Permission
<a href="api.php#api_permissions_unassignRoles" target="_blank">$rbac->Permissions->unassignRoles($perm_id)</a>;</code>
</pre>

                        <h3 id="unassign_user_role_associations">Unassigning User/Role Associations</h3>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Unassign a Role belonging to a User:
<pre class="pre-scrollable">
<code class="prettyprint">// Unassign 'forum_user' Role assigned to a User using the Role's Path
<a href="api.php#api_users_unassign" target="_blank">$rbac->Users->unassign('/admin/forum_moderator/forum_user', 26)</a>;</code>
</pre>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="validating_user_access">Validating User Access</h2>
                        </div>

                        <p class="lead">
                            Use these Methods to make sure a User has a Permission or Role.
                        </p>

                        <h3 id="check_user_roles_perms">Checking for a User’s Roles and Permissions</h3>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Make sure a User has a Role:
<pre class="pre-scrollable">
<code class="prettyprint">// Get Role Id
$role_id = <a href="api.php#api_entity_returnId" target="_blank">$rbac->Roles->returnId('forum_moderator')</a>;

// Make sure User has 'forum_user' Role
<a href="api.php#api_users_hasRole" target="_blank">$rbac->Users->hasRole($role_id, 105)</a>;</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Checks whether a User has a Permission or not:
<pre class="pre-scrollable">
<code class="prettyprint">// Check to see if User has 'delete_posts' Permission
<a href="api.php#api_general_check" target="_blank">$rbac->check('delete_posts', 105)</a>;</code>
</pre>

<!-- Code Blocks can not be indented due to the <pre> tags -->
Enforce a Permission on a User:
<pre class="pre-scrollable">
<code class="prettyprint">// Will return a 403 HTTP status code and an 'Access Denied' message if User does not have Role
<a href="api.php#api_general_enforce" target="_blank">$rbac->enforce('forum_moderator', 105)</a>;</code>
</pre>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="beyond_the_basics">Beyond the Basics</h2>
                        </div>

                        <p class="lead">
                            This is a good start regarding the proper use of PHP-RBAC. For in depth knowledge regarding PHP-RBAC please refer to the <a href="docs_other_topics.php">PHP-RBAC API</a>.
                        </p>

                    </div>

                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>