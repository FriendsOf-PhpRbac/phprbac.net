<?php require_once 'header.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <div class="container">
                            <h1 id="1"><img src="img/logo.png" class="img-thumbnail" class="img-responsive" width="72" alt="" title="" />PHP-RBAC</h1>

                            <p>
                                <a href="https://twitter.com/intent/tweet?button_hashtag=phprbac&text=I%20just%20found%20PHP-RBAC%2C%20the%20de-facto%20PHP%20Role%20Based%20Access%20Control%20Library!" class="twitter-hashtag-button" data-related="AbiusX" data-url="http://phprbac.net">Tweet #phprbac</a>
                            </p>

                            <p>
                                PHP-RBAC is the de-facto authorization library for PHP. It provides developers with
                                <strong>NIST Level 2 Standard Role Based Access Control</strong> and more, in the
                                fastest implementation yet.
                            </p>

                            <p>
                                <a href="https://sourceforge.net/projects/phprbac/files/latest/download" class="btn btn-primary btn-lg" target="_blank">Download Now!</a>
                            </p>
                        </div>
                    </div>


                    <h2 id="2">Why RBAC?</h2>

                    <p>
                        Role Based Access Control is the standard means of authorization (access control). The
                        other approach is ACLs, where a table defines who can do what. ACLs are only good for
                        very small systems, because of the following reasons:
                    </p>

                    <div class="row">
                        <div class="col-lg-8">
                            <ul>
                                <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Big systems have lots of permits</li>
                                <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> People move in organizations, and all their permits should be changed when they do</li>
                                <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Maintenance (adding, changing, removing) of 100,000 permits requires a handful of staff</li>
                                <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> Maintenance of the permits assigned to each user, requires more staff than above!</li>
                                <li><img src="img/wrong16.png" class="img-thumbnail" class="img-responsive" alt="" title="" /> One wrong user-permit and you have a serious breach in your security, so no room for error</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <p class="text-center">
                                <img src="img/acl.png" class="img-responsive" width="450" alt="" title="" />
                            </p>

                            <p class="text-center">
                                <strong>Example of an ACL</strong>
                            </p>
                        </div>
                    </div>

                    <p>
                        Usage of ACLs has led to broken authorization and access control all over applications,
                        and authorization is limited only to critical operations to keep number of permits low.
                    </p>

                    <p>
                        <strong>But RBAC is here to save the day.</strong>
                    </p>

                    <h2 id="3">What is RBAC?</h2>

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

                    <h2 id="4">Continue...</h2>

                    <p>
                        You are now ready for the next step: <a href="docs_before_you_begin.php">Before you begin</a>
                    </p>

                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>