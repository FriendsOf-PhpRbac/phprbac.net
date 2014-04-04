<?php
$currentFile = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PhpRbac.net | PHP Role Based Access Control Library</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="IZE-3qnT2kFbc9j263Pe54HQ8_c2urr1dRixnhwqfBA" />
        <meta name="description" content="PHP-RBAC is the de-facto PHP NIST Level 2 Standard Hierarchical Role Based Access Control library" />
        <meta name="keywords" content="PHPRBAC, PHP-RBAC, OWASP, Authorization, Access Control, RBAC, Role Based Access Control, NIST RBAC, PHP" />
        <meta name="author" content="AbiusX">

        <link rel="shortcut icon" href="img/logo.png" />

        <!-- Bootstrap -->
        <link href="bootstrap/assets/css/docs.css" rel="stylesheet" media="screen">
        <link href="bootstrap/dist/css/flatly.min.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
            <script src="bootstrap/assets/js/html5shiv.js"></script>
            <script src="bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->

        <style type='text/css'>
            <?php if ($currentFile == 'demo.php'): ?>
                body { padding-top: 60px; }
                html, body { height: 99%; }
                .container-fluid { height: 100%; }
                .row { height: 100%; }
                .demo_iframe { height: 100%; }
            <?php else: ?>
                body { padding-top: 70px; }
            <?php endif; ?>
        </style>
    </head>

    <body data-target=".bs-sidebar" data-spy="scroll" data-offset="200">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">PHP-RBAC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">

                	<?php if ($currentFile == 'index.php'): ?>
                		<li class="active"><a href="index.php">Home</a></li>
                	<?php else: ?>
                		<li><a href="index.php">Home</a></li>
                	<?php endif; ?>

                	<?php if ($currentFile == 'about.php'): ?>
                		<li class="active"><a href="about.php">About</a></li>
                	<?php else: ?>
                		<li><a href="about.php">About</a></li>
                	<?php endif; ?>

                	<?php if ($currentFile == 'demo.php'): ?>
                	    <li class="active"><a href="demo.php">Demo</a></li>
            	    <?php else: ?>
                	    <li><a href="demo.php">Demo</a></li>
                	<?php endif; ?>

                	<?php
            	    if (
                	    ($currentFile == 'docs_before_you_begin.php') ||
                        ($currentFile == 'docs_getting_started.php') ||
                        ($currentFile == 'docs_tutorial.php') ||
                        ($currentFile == 'docs_other_topics.php')
                    ):
                    ?>
                	    <li class="dropdown active">
                	<?php else: ?>
                	    <li class="dropdown">
                	<?php endif; ?>

					    <a class="dropdown-toggle" data-toggle="dropdown" href="docs_contents.php">
					      	Documentation <span class="caret"></span>
					    </a>
					    <ul class="dropdown-menu">

					        <?php if ($currentFile == 'docs_before_you_begin.php'): ?>
					      	    <li class="active"><a href="docs_before_you_begin.php">Before you begin</a></li>
				      	    <?php else: ?>
					      	    <li><a href="docs_before_you_begin.php">Before you begin</a></li>
				      	    <?php endif; ?>

					        <?php if ($currentFile == 'docs_getting_started.php'): ?>
					      	    <li class="active"><a href="docs_getting_started.php">Getting started</a></li>
				      	    <?php else: ?>
					      	    <li><a href="docs_getting_started.php">Getting started</a></li>
				      	    <?php endif; ?>

					        <?php if ($currentFile == 'docs_tutorial.php'): ?>
					      	    <li class="active"><a href="docs_tutorial.php">Tutorial</a></li>
				      	    <?php else: ?>
					      	    <li><a href="docs_tutorial.php">Tutorial</a></li>
				      	    <?php endif; ?>

				      	    <!--
					        <?php if ($currentFile == 'docs_other_topics.php'): ?>
					      	    <li class="active"><a href="docs_other_topics.php">Other topics</a></li>
				      	    <?php else: ?>
					      	    <li><a href="docs_other_topics.php">Other topics</a></li>
				      	    <?php endif; ?>
				      	    -->

					    </ul>
				  	</li>

                	<?php if ($currentFile == 'api.php'): ?>
                		<li class="active"><a href="api.php">API</a></li>
                	<?php else: ?>
                		<li><a href="api.php">API</a></li>
                	<?php endif; ?>

                </ul>

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="https://sourceforge.net/projects/phprbac/files/latest/download" target="_blank">Download Now!</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://github.com/OWASP/rbac" target="_blank">Github Project Page</a></li>
                    <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="">Support<span class="caret"></span></a>
				        <ul class="dropdown-menu">
			          	    <li><a href="https://github.com/OWASP/rbac/issues?state=open" target="_blank">Issue Tracker</a></li>
			          	    <li><a href="https://lists.owasp.org/mailman/listinfo/owasp-phprbac" target="_blank">Mailing List</a></li>
				        </ul>
				  	</li>

                </ul>

            </div><!-- /.navbar-collapse -->
        </nav>
