<?php require_once 'header.php'; ?>

    	<div class="container bs-docs-container">
  			<div class="row">
    			<div class="col-md-3">
      				<div class="bs-sidebar hidden-print affix" role="complementary">
        				<ul class="nav bs-sidenav">
							<li class="active"><a href="#getting_started">Getting Started</a></li>

							<li><a href="#requirements">Requirements</a></li>

							<li>
							    <a href="#installation">Installation</a>
							    <ul class="nav">
								    <li><a href="#get_the_code">Get the code</a></li>
								    <li><a href="#setup_database">Setup the database</a></li>
								    <li><a href="#load_the_code">Load the code</a></li>
							  	</ul>
						    </li>

							<li><a href="#continue">Continue...</a></li>

						</ul>
      				</div>
    			</div>

                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h1 id="getting_started">Getting Started</h1>
                        </div>

                        <p class="lead">
                            Let's get everything setup correctly so you can start using PHP-RBAC.
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="requirements">Requirements</h2>
                        </div>

                        <p>
                            PHP-RBAC requires PHP 5.3+ with a SQL database. Currently SQLite and MySQL are supported, but you can easily add any other DBMS you like.
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="installation">Installation</h2>
                        </div>

                        <p class="lead">
                            Installing PHP-RBAC is a three step process:
                        </p>

                        <ol>
                            <li>Get the code</li>
                            <li>Load the code</li>
                            <li>Setup the database</li>
                        </ol>

                        <h3 id="get_the_code">Get the code</h3>

                        <h4>Get the code</h4>

                        <p>
                            There are three ways to get PHP-RBAC:
                        <ul>
                            <li>
                                The easiest way to install and autoload PHP-RBAC is to use <a href="https://getcomposer.org/">Composer</a>.
                                <ul>
                                    <li>Add the following "require" element to your "composer.json" file:</li>

<!-- Code Blocks can not be indented due to the <pre> tags -->
<pre>
<code class="prettyprint">"require": {
    "owasp/phprbac": "2.0.*@dev"
}</code>
</pre>
                                </ul>
                            </li>
                            <li>The latest stable version can be found <a href="http://sourceforge.net/projects/phprbac/files/latest/download">Here</a></li>
                            <li>Head over to <a href="https://github.com/OWASP/rbac">Github</a></li>
                        </ul>

                        <h3 id="setup_database">Setup the database</h3>

                        <h4>Using the GUI Installer</h4>

                        <ol>
                            <li>Navigate to '/path/to/PhpRbac/install.php'</li>
                            <li>Enter proper database credentials</li>
                            <li>Click 'Install'</li>
                        </ol>

                        <p>
                            The installer will:
                        </p>

                        <ul>
                            <li>Create the proper 'database.config' file</li>
                            <li>Create the required Database Tables</li>
                            <li>Populate the Database Tables with the required initial data</li>
                        </ul>

                        <h4>Manual Installation</h4>

                        <ol>
                            <li>Create a Database and Database User with the proper permissions</li>
                            <li>
                                Import the Database Tables and initial data using the provided *.sql file<br />
                                <strong>Warning: Make sure you change 'PREFIX_' in the SQL statements to the prefix you would like to use!</strong>
                                <ul>
                                    <li>For MySQL: '/path/to/PhpRbac/database/mysql.sql'</li>
                                    <li>For SQLite: '/path/to/PhpRbac/database/sqlite.sql'</li>
                                </ul>
                            </li>
                            <li>
                                Edit the '/path/to/PhpRbac/database/database.config'
                                <ul>
                                    <li>Enter the proper credentials</li>
                                    <li>Choose the correct $adapter and $tablePrefix</li>
                                </ul>
                            </li>
                        </ol>

                        <h3 id="load_the_code">Load the code</h3>

                        <p>
                            There are four methods provided to load the 'PhpRbac\Rbac' Class...
                        </p>

                        <h4 id="composer">Using Composer</h4>

                        <p>
                            If you have installed PHP-RBAC using Composer simply include the Composer generated 'vendor/autoload.php' file:
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
<strong>Example:</strong> Using Composer's autoloader
<pre class="pre-scrollable">
<code class="prettyprint">require 'vendor/autoload.php';</code>
</pre>

                        <h4>Using a PSR-0 Autoloader</h4>

                        <p>
                            Point your Autoloader to 'PhpRbac/src' using the 'PhpRbac' namespace.
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
<strong>Example:</strong> Using AuraPHP's autoloader
<pre class="pre-scrollable">
<code class="prettyprint">$loader->add('PhpRbac\\', '/path/to/PhpRbac/src');</code>
</pre>

                        <h4>Using the provided Autoloader</h4>

                        <p>
                            Include the provided autoload.php:
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
<strong>Example:</strong>
<pre class="pre-scrollable">
<code class="prettyprint">require_once '/path/to/PhpRbac/autoload.php';</code>
</pre>

                        <h4>Manually including 'Rbac.php'</h4>

                        <p>
                            Manually include 'Rbac.php':
                        </p>

<!-- Code Blocks can not be indented due to the <pre> tags -->
<strong>Example:</strong>
<pre class="pre-scrollable">
<code class="prettyprint">require_once '/path/to/PhpRbac/src/PhpRbac/Rbac.php';</code>
</pre>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="continue">Continue...</h2>
                        </div>

                        <p>
                            You are now ready for the next step: <a href="docs_tutorial.php">Tutorial</a>
                        </p>

                    </div>

                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>