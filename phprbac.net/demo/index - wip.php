<?php
require_once __DIR__ . "/rbac.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>PhpRbac.net | PHP Role Based Access Control Library</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification"
	content="IZE-3qnT2kFbc9j263Pe54HQ8_c2urr1dRixnhwqfBA" />
<meta name="description"
	content="PHPRBAC is the de-facto PHP NIST Level 2 Standard Hierarchical Role Based Access Control library" />
<meta name="keywords"
	content="PHPRBAC, OWASP, Authorization, Access Control, RBAC, Role Based Access Control, NIST RBAC, PHP" />
<meta name="author" content="AbiusX">

<link rel="shortcut icon" href="../img/logo.png" />

<!-- Bootstrap -->
<link href="../bootstrap/dist/css/flatly.min.css" rel="stylesheet"
	media="screen">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
            <script src="../bootstrap/assets/js/html5shiv.js"></script>
            <script src="../bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->

<style type='text/css'>
body {
	padding-top: 70px;
}
</style>

<script src='./jquery-2.0.3.min.js'></script>
<style>
a.button {
	display: inline-block;
	padding: 5px;
	border-radius: 25%;
	border: 1px solid gray;
	background-color: #DDD;
	cursor: pointer;
	margin: 2px;
}

a.button:HOVER {
	background-color: #BBB;
}

#question {
	padding: 15px;
	margin: 5px;
	border: 3px double gray;
	float: right;
	width: auto;
}

.placeholder {
	font-weight: bold;
}

.node {
	display: inline-block;
	padding: 6px;
	border: 2px solid black;
	border-radius: 50%;
	width: 77px;
	height: 25px;
	text-align: center;
	font-size: 12px;
	font-weight: bold;
	line-height: 25px;
	position: relative;
	text-decoration: none;
	font-family: "Comic Sans MS";
}

.role {
	background-color: blue;
	color: yellow;
}

.role:HOVER {
	background-color: darkblue;
}

.role.active {
	background-color: black;
}

.permission {
	background-color: yellow;
	color: blue;
}

.permission:HOVER {
	background-color: #FB5;
}

.permission.active {
	background-color: red;
}

.container {
	padding: 10px;
	border: 1px solid gray;
	margin: 5px;
}
</style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="/">PhpRbac</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">

				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="documentation.php">Documentation</a></li>
				<li class="active"><a href="demo/index.php">Demo</a></li>
				<li><a href="https://github.com/OWASP/rbac">Github Project Page</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-left">
				<li><a
					href="http://sourceforge.net/projects/phprbac/files/2.0/PhpRbac_v2.0-beta.tar.gz/download">Download
						Now!</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
                	
                	<?php if ($currentFile == 'commercial-support.php'): ?>
                		<li class="active"><a href="commercial-support.php">Commercial
						Support</a></li>
                	<?php else: ?>
                		<li><a href="commercial-support.php">Commercial
						Support</a></li>
                	<?php endif; ?>
                    
                    
                </ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<h1>RBAC Demonstration Sample</h1>

			</div>
			<fieldset id='question'>
				<legend>RBAC Challenge</legend>
				<h3 style='margin: 0;'>Rules</h3>
				<ol>
					<li>If you someone has role X, s/he also has all descendants of X.</li>
					<li>If someone can do Y, s/he can do descendants of Y.</li>
				</ol>
				<p>Play with the simulator to the left, and answer the questions:</p>
				<div>
					Does <span class='placeholder' id='userQ'></span> have access to <span
						class='placeholder' id='permissionQ'></span>? <span id='answerQ'>
						<a class='button'>Yes</a><a class='button'>No</a>
					</span> <span id='solutionQ' style='display: none;'></span>
				</div>
			</fieldset>
			<p>Select a user to see the set of roles they have:</p>
			<select multiple="multiple" style='height: 150px; overflow: auto;'
				id='userList'>
<?php foreach ($users as $k=>$u){?>
<option value='<?php echo $k;?>'><?php echo $u;?></option>
<?php }?>
</select>
			<p>You can select a role, to see the set of associated permissions:</p>
			<div class='container'
				style='height: 275px; width: 650px; overflow: hidden;' id='roles'>
				<img src='./roles.png' width="673" /> <a href='#' class='node role'
					style='top: -70; left: 19;' id='Sales'>Sales</a> <a href='#'
					class='node role' style='top: -70; left: 28;' id='Marketing'>Marketing</a>
				<a href='#' class='node role' style='top: -70; left: 37;'
					id='Payroll'>Payroll</a> <a href='#' class='node role'
					style='top: -70; left: 47;' id='Network'>Network</a> <a href='#'
					class='node role' style='top: -70; left: 55;' id='Security'>Security</a>
				<a href='#' class='node role' style='top: -70; left: 61;' id='Admin'>Admin</a>

				<a href='#' class='node role' style='top: -185; left: 390;' id='IT'>IT</a>
				<a href='#' class='node role'
					style='top: -185; left: -35; width: 85px;' id='Operations'>Operations</a>
				<a href='#' class='node role' style='top: -185; left: -25;'
					id='Financial'>Financial</a> <a href='#' class='node role'
					style='top: -256; left: -104; width: 40px;' id='CEO'>CEO</a> <a
					href='#' class='node role'
					style='top: -328; left: -164; width: 40px;' id='root'>root</a>
			</div>
			<p>Or select a permission, and see the associated roles:</p>
			<div class='container'
				style='height: 280px; width: 760px; overflow: hidden;'
				id='permissions'>
				<img src='./permissions.png' width='760' /> <a href='#'
					class='node permission' style='top: -40; left: 80;' id='Server'>Server</a>
				<a href='#' class='node permission' style='top: -40; left: 88;'
					id='Vault'>Vault</a> <a href='#' class='node permission'
					style='top: -40; left: 95;' id='Add'>Add</a> <a href='#'
					class='node permission' style='top: -40; left: 105;' id='Edit'>Edit</a>
				<a href='#' class='node permission' style='top: -40; left: 115;'
					id='Pass Change'>Pass Change</a> <a href='#'
					class='node permission' style='top: -40; left: 125;' id='Remove'>Remove</a>

				<a href='#' class='node permission' style='top: -114; left: -582;'
					id='Order'>Order</a> <a href='#' class='node permission'
					style='top: -155; left: 105;' id='Transfer'>Transfer</a> <a
					href='#' class='node permission' style='top: -155; left: 115;'
					id='Rooms'>Rooms</a> <a href='#' class='node permission'
					style='top: -155; left: 150;' id='Users'>Users</a> <a href='#'
					class='node permission' style='top: -155; left: 170;' id='General'>General</a>
				<a href='#' class='node permission' style='top: -155; left: 180;'
					id='Financial'>Financial</a> <a href='#' class='node permission'
					style='top: -155; left: 182;' id='Security'>Security</a> <a
					href='#' class='node permission' style='top: -225; left: -410;'
					id='Money'>Money</a> <a href='#' class='node permission'
					style='top: -267; left: 345;' id='System'>System</a> <a href='#'
					class='node permission' style='top: -267; left: 365;' id='Reports'>Reports</a>

				<a href='#' class='node permission'
					style='top: -355; left: 60; width: 45px;' id='root'>root</a>

			</div>
		</div>
	</div>

	<script>
function callbackHandler(data) {
	$(".node").removeClass("active");
	$(data).each(function(){
		$(this).addClass("active");
	});
}
function roleClick(e){
	$.post("",{"role":e.target.id},callbackHandler);
	return false;
}
function permissionClick(e){
	$.post("",{"permission":e.target.id},callbackHandler);
	return false;
}
function userClick(e)
{
	userid=(e.target.value);
	$.post("",{"user":userid},callbackHandler);
	return false;
}
function questionCallback(data){
	$("#userQ").text(data.split("|")[0]);
	$("#permissionQ").text(data.split("|")[1]);
	$("#solutionQ").text(data.split("|")[2]);
}
function generateQuestion(){
	$.post("",{"Q":"1"},questionCallback);
	$(".button").click(checkAnswer);
}
function checkAnswer(e) {
	if ((e.target.innerHTML=="Yes" &&
			$("#solutionQ").text()=="1"	)
			||
		(e.target.innerHTML=="No" && 
			$("#solutionQ").text()=="0" )
		)
	{		color="darkgreen";response="Correct"; 	}
	else
	{		color="red";response="Wrong";			}
			
	$("#answerQ").text(response).css("color",color).delay(1000).fadeOut("slow",function()
			{
				$("#answerQ").html("<a class='button'>Yes</a><a class='button'>No</a>").css("color","black").show();
				generateQuestion();
			});
		
}
$(function() {
	$(".permission").click(permissionClick);
	$(".role").click(roleClick);
	$("#userList").click(userClick);
	generateQuestion();
// 	setInterval(function() {$(".node").toggle();},2000);
});

</script>



	<!-- Javascript
        ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<script type="text/javascript">prettyPrint();</script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Twitter "Tweet" Button -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>