<?php require_once 'header.php'; ?>

    	<div class="container bs-docs-container">
  			<div class="row">
    			<div class="col-md-3">
      				<div class="bs-sidebar hidden-print affix" role="complementary">
        				<ul class="nav bs-sidenav">

							<li class="active"><a href="#before_you_begin">Before You Begin</a></li>
							<li><a href="#why_use_rbac">Why use RBAC?</a></li>
							<li><a href="#what_is_rbac">What is RBAC?</a></li>
							<li>
							    <a href="#authorization_vs_authentication">Authorization vs Authentication</a>
							  	<ul class="nav">
								    <li><a href="#authentication">Authentication</a></li>
								    <li><a href="#authorization">Authorization</a></li>
								    <li><a href="#keep_in_mind">Keep in mind</a></li>
							  	</ul>
							</li>
							<li>
							    <a href="#what_does_phprbac_offer">What does PHP-RBAC offer?</a>
							    <ul class="nav">
								    <li><a href="#nist_rbac">NIST Level 2 Standard Hierarchical Role Based Access Control</a></li>
								    <li><a href="#extremely_fast">An extremely fast implementation</a></li>
								    <li><a href="#ease_of_use">Ease of use</a></li>
								    <li><a href="#sense_of_security">A sense of security</a></li>
							  	</ul>
						    </li>
							<li><a href="#continue">Continue...</a></li>

						</ul>
      				</div>
    			</div>

                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h1 id="before_you_begin">Before You Begin</h1>
                        </div>

                        <!--
                        <p class="lead">
                            Before we dive into any code we think it would be a good idea to explain what RBAC is, how leveraging
                            RBAC can help you manage and improve your project's access control and security, and what PHP-RBAC has
                            to offer you and your project.
                        </p>
                        -->

                        <p class="lead">
                            Before we dive into some code we think it would be a good idea to explain:
                        </p>

                        <ul>
                            <li>What RBAC is</li>
                            <li>How leveraging RBAC can help you manage and improve your application's access control and security</li>
                            <li>How Authentication and Authorization differ</li>
                            <li>What PHP-RBAC has to offer you and your project</li>
                        </ul>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="why_use_rbac">Why use RBAC?</h2>
                        </div>

                        <p>
                            Role Based Access Control is the standard means of authorization (access control). The
                            other approach is ACLs, where a table defines who can do what. ACLs are only good for
                            very small systems, because of the following reasons:
                        </p>

                        <ul>
                            <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Big systems have lots of permissions</li>
                            <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> People move in organizations, and all their permissions should be changed when they do</li>
                            <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Maintenance (adding, changing, removing) of 100,000 permissions requires a handful of staff</li>
                            <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Maintenance of the permissions assigned to each user, requires more staff than above!</li>
                            <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> One wrong user-permissions and you have a serious breach in your security, so no room for error</li>
                        </ul>

                        <div class="row">
                            <div class="col-md-7 col-md-offset-2">
                                <p>
                                    <img src="img/acl.png" class="img-responsive" width="450" alt="" title="" />
                                </p>

                                <p class="text-center">
                                    <strong>Example of an ACL</strong>
                                </p>
                            </div>
                        </div>

                        <p>
                            Usage of ACLs has led to broken authorization and access control all over applications,
                            and authorization is limited only to critical operations to keep the number of permissions low.
                        </p>

                        <p>
                            <strong>But RBAC is here to save the day.</strong>
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="what_is_rbac">What is RBAC?</h2>
                        </div>

                        <p>
                            RBAC separates the concepts of Users, Roles and Permissions. Roles are defined in a
                            system, then Permissions defined separately. Then the security administrator decides
                            what role should be permitted to do what action, by assigning that role to the
                            permission. Finally users are assigned to roles. The system does the rest.
                        </p>

                        <ul>
                            <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Still lots of permits in the system are the problem</li>
                            <li><img src="img/tick16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> People move, and only their roles need to be changed</li>
                            <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Maintenance of permits is still an issue</li>
                            <li><img src="img/tick16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Maintenance of permits assigned to each role is easy, it doesn't change much logically.</li>
                            <li><img src="img/tick16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Role-Permission assignments can be double checked so that no wrong permit is given to any role</li>
                        </ul>

                        <p>
                            That was NIST Level 1 standard RBAC above, and it still had issues. NIST Level 2 RBAC
                            requires Roles and/or Permissions to be hierarchical, so that management of them can
                            easily be handled in hierarchies. The figure below demonstrates a system in hierarchical
                            RBAC:
                        </p>

                        <p>
                            <img src="img/rbac.png" class="img-responsive" alt="" title="" />
                        </p>

                        <p class="text-center">
                            <strong>A hierarchical RBAC model of a system</strong>
                        </p>

                        <p class="text-center">
                            <strong>Blue: roles, Gray: users, Yellow: permissions</strong>
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="authorization_vs_authentication">Authorization vs Authentication</h2>
                        </div>

                        <p class="lead">
                            Authorization and Authentication are two different beasts!
                        </p>

                        <p>
                            A reliable Access Control System should include at least these four pieces:
                        </p>

                        <ul>
                            <li>Authentication</li>
                            <li>Authorization</li>
                            <li>Access Approval</li>
                            <li>Audit (audit logs/trails)</li>
                        </ul>

                        <p>
                            In this discussion we will focus on the two pieces that often cause confusion to those new to Access
                            Control Systems:
                        </p>

                        <ul>
                            <li><strong>Authentication</strong> and <strong>Authorization</strong></li>
                        </ul>

                        <h3 id="authentication">Authentication</h3>

                        <blockquote>
                            <p>
                                Authentication... is the act of confirming the truth of an attribute of a datum or entity. This might involve
                                confirming the identity of a person or software program, tracing the origins of an artifact, or ensuring that
                                a product is what its packaging and labeling claims to be. Authentication often involves verifying the validity
                                of at least one form of identification.
                            </p>

                            <footer>
                                <cite><a href="http://en.wikipedia.org/wiki/Authentication">Wikipedia: Authentication</a></cite>
                            </footer>
                        </blockquote>

                        <p>
                            Authentication verifies and confirms that something really is what it says it is.
                        </p>

                        <p>
                            In most cases you will be Authenticating the identity of a User, so lets use a User Entity as a basic example
                            of how an Authentication System works:
                        </p>

                        <ul>
                            <li>The User is provided with a Form which prompts the User for their Username and Password</li>
                            <li>
                                The Authentication System will then attempt to validate the provided credentials
                                <ul>
                                    <li>
                                        If the provided credentials are incorrect the Authorization System, depending on the defined
                                        Authorization Policies, may allow the User to attempt to provide the proper credentials again
                                    </li>
                                    <li>
                                        If the provided credentials are valid the Authentication System will then perform the neccessary
                                        "Magic" to 'Log In' the User
                                    </li>
                                </ul>
                            </li>
                            <li>
                                From this point on it is up to the Authentication System to track/monitor the User and make sure the User
                                continues to be validly Authenticated.
                            </li>
                        </ul>

                        <h3 id="authorization">Authorization</h3>

                        <blockquote>
                            <p>
                                Authorization or authorisation is the function of specifying access rights to resources,
                                which is related to information security and computer security in general and to access
                                control in particular. More formally, "to authorize" is to define access policy.
                            </p>

                            <footer>
                                <cite><a href="http://en.wikipedia.org/wiki/Authorization">Wikipedia: Authorization</a></cite>
                            </footer>
                        </blockquote>

                        <p>
                            An Authorization System is used to manage Access Rights, and to keep track of what Access Rights an Entity
                            has.
                        </p>

                        <h4>This is the sole purpose of PHP-RBAC</h4>

                        <p>
                            PHP-RBAC makes it easy for you to define Access Rights by creating hierarchies of Permissions and Roles,
                            assigning Permissions to Roles, and then assigning Roles to Users/Entities.
                        </p>

                        <p>
                            PHP-RBAC then allows you to easily check if a User has the proper Access Rights that are needed to access a
                            specific Resource (Does the User have Role_x or Permission_y assigned to them?).
                        </p>

                        <p>
                            When a User navigates to a restricted Resource your application will ask PHP-RBAC if this User has the proper Access
                            Rights to access this Resource:
                        </p>

                        <ul>
                            <li>If the User has the proper Access Rights (Role/Permission) PHP-RBAC will return 'true'</li>
                            <li>If the User does not have the proper Access Rights (Role/Permission) then PHP-RBAC will return 'false'</li>
                        </ul>

                        <h3 id="keep_in_mind">Keep in mind</h3>

                        <ul>
                            <li>An Authorization System allows you to easily create and manage Access Rights</li>
                            <li>An Authorization System lets you know if an Entity has the proper Access Rights to a Resource when asked</li>
                            <li>
                                An Authorization System does not define application behavior (grant/deny) that is triggered when an Entity does
                                or does not meet the requirements of a Resource's Access Rights
                            </li>
                            <li>It is up to your application to Authenticate your Users</li>
                            <li>
                                It is up to your application to grant/deny access to Resources based on what PHP-RBAC returns regarding the Users
                                Access Rights
                            </li>
                        </ul>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="what_does_phprbac_offer">What does PHP-RBAC offer?</h2>
                        </div>

                        <h3 id="nist_rbac">NIST Level 2 Standard Hierarchical Role Based Access Control</h3>

                        <p>
                            PHP-RBAC is the de-facto authorization library for PHP because it provides developers with a NIST Level 2
                            RBAC compliant Access Control System right at your finger tips.
                        </p>

                        <!--
                        <h3>PHP-RBAC is the de-facto authorization library for PHP</h3>

                        <p>
                            PHP-RBAC provides developers with <strong>NIST Level 2 Standard Hierarchical Role Based Access Control</strong>.
                        </p>
                        -->

                        <p>
                            <strong>NIST Level 2 RBAC compliance means:</strong>
                        </p>

                        <ul>
                            <li>
                                A secure, flexible, reliable, and standardized RBAC system that will conform to your application's custom
                                Access Control Policy needs without the headache.
                            </li>
                        </ul>

                        <p>
                            To learn more about NIST Role Based Access Control standards please visit the NIST website:
                        </p>

                        <ul>
                            <li><a href="http://csrc.nist.gov/groups/SNS/rbac/index.html">http://csrc.nist.gov/groups/SNS/rbac/index.html</a></li>
                        </ul>

                        <h3 id="extremely_fast">An extremely fast implementation</h3>

                        <p>
                            PHP-RBAC is designed to be used in applications with a high load of Access Right checks, and has been optimized
                            for blazingly fast queries.
                        </p>

                        <h3 id="ease_of_use">Ease of use</h3>

                        <p>
                            PHP-RBAC is not only extremely fast, but it is extremely easy to use!
                        </p>

                        <p>
                            Because of the thought and care that went into designing our API, PHP-RBAC's simple and elegant API hides the
                            power and complexity of it's core, allowing you to get your work done as fast and painless as possible.
                        </p>

                        <h3 id="sense_of_security">A sense of security</h3>

                        <p>
                            While using PHP-RBAC you can feel safe and secure that you are using a powerful, professional tool developed by
                            knowledgeable developers that are just as aware and concerned about application security as you are, and who work
                            hard to release only the highest quality profession tools possible.
                        </p>

                        <p>
                            Even though we provide these tools for other developers to leverage, we use these tools in our own applications.
                            Our goals towards quality and usefulness isn't just aimed at you. We want to make our lives easier too!
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="continue">Continue...</h2>
                        </div>

                        <p>
                            You are now ready for the next step: <a href="docs_getting_started.php">Getting Started</a>
                        </p>

                    </div>

                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>