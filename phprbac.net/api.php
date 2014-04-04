<?php require_once 'header.php'; ?>

    	<div class="container bs-docs-container">
  			<div class="row">
    			<div class="col-md-3">
      				<div class="bs-sidebar hidden-print affix" role="complementary">
        				<ul class="nav bs-sidenav">
							<li class="active"><a href="#api">PHP-RBAC API</a></li>

							<li>
							    <a href="#api_general_methods">Rbac->{methods}</a>
							    <ul class="nav">
								    <li><a href="#api_general_assign">Rbac->assign()</a></li>
								    <li><a href="#api_general_check">Rbac->check()</a></li>
								    <li><a href="#api_general_enforce">Rbac->enforce()</a></li>
								    <li><a href="#api_general_reset">Rbac->reset()</a></li>
							  	</ul>
						    </li>

						    <li>
						        <a href="#api_entity_methods">Rbac->{Entity}->{methods}</a>
						        <ul class="nav">
								    <li><a href="#api_entity_add">Rbac->{Entity}->add()</a></li>
								    <li><a href="#api_entity_addPath">Rbac->{Entity}->addPath()</a></li>
								    <li><a href="#api_entity_assign">Rbac->{Entity}->assign()</a></li>
								    <li><a href="#api_entity_children">Rbac->{Entity}->children()</a></li>
								    <li><a href="#api_entity_count">Rbac->{Entity}->count()</a></li>
								    <li><a href="#api_entity_depth">Rbac->{Entity}->depth()</a></li>
								    <li><a href="#api_entity_descendants">Rbac->{Entity}->descendants()</a></li>
								    <li><a href="#api_entity_edit">Rbac->{Entity}->edit()</a></li>
								    <li><a href="#api_entity_getDescription">Rbac->{Entity}->getDescription()</a></li>
								    <li><a href="#api_entity_getPath">Rbac->{Entity}->getPath()</a></li>
								    <li><a href="#api_entity_getTitle">Rbac->{Entity}->getTitle()</a></li>
								    <li><a href="#api_entity_parentNode">Rbac->{Entity}->parentNode()</a></li>
								    <li><a href="#api_entity_pathId">Rbac->{Entity}->pathId()</a></li>
								    <li><a href="#api_entity_returnId">Rbac->{Entity}->returnId()</a></li>
								    <li><a href="#api_entity_titleId">Rbac->{Entity}->titleId()</a></li>
								    <li><a href="#api_entity_unassign">Rbac->{Entity}->unassign()</a></li>
								    <li><a href="#api_entity_reset">Rbac->{Entity}->reset()</a></li>
								    <li><a href="#api_entity_resetAssignments">Rbac->{Entity}->resetAssignments()</a></li>
							  	</ul>
					        </li>

						    <li>
						        <a href="#api_permissions_methods">Rbac->Permissions->{methods}</a>
						        <ul class="nav">
								    <li><a href="#api_permissions_remove">Rbac->Permissions->remove</a></li>
								    <li><a href="#api_permissions_roles">Rbac->Permissions->roles</a></li>
								    <li><a href="#api_permissions_unassignRoles">Rbac->Permissions->unassignRoles</a></li>
							    </ul>
					        </li>

						    <li>
						        <a href="#api_roles_methods">Rbac->Roles->{methods}</a>
						        <ul class="nav">
								    <li><a href="#api_roles_hasPermission">Rbac->Roles->hasPermission()</a></li>
								    <li><a href="#api_roles_permissions">Rbac->Roles->permissions()</a></li>
								    <li><a href="#api_roles_remove">Rbac->Roles->remove()</a></li>
								    <li><a href="#api_roles_unassignPermissions">Rbac->Roles->unassignPermissions()</a></li>
								    <li><a href="#api_roles_unassignUsers">Rbac->Roles->unassignUsers()</a></li>
							    </ul>
					        </li>

						    <li>
						        <a href="#api_users_methods">Rbac->Users->{methods}</a>
						        <ul class="nav">
								    <li><a href="#api_users_allRoles">Rbac->Users->allRoles()</a></li>
								    <li><a href="#api_users_assign">Rbac->Users->assign()</a></li>
								    <li><a href="#api_users_hasRole">Rbac->Users->hasRole()</a></li>
								    <li><a href="#api_users_resetAssignments">Rbac->Users->resetAssignments()</a></li>
								    <li><a href="#api_users_roleCount">Rbac->Users->roleCount()</a></li>
								    <li><a href="#api_users_unassign">Rbac->Users->unassign()</a></li>
							    </ul>
						    </li>

						</ul>
      				</div>
    			</div>

                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h1 id="api">PHP-RBAC API</h1>
                        </div>

                        <p class="lead">
                            Namespace: \PhpRbac\Rbac
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="api_general_methods">Rbac->{methods}</h2>
                        </div>

                        <h3 id="api_general_assign">Rbac->assign()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->assign(mixed $Role, mixed $Permission)</code>
</pre>

                                <p>
                                    Assign a role to a permission.
                                </p>

                                <p>
                                    Alias for <code><a href="api.php#api_entity_assign">Rbac->{Entity}->assign()</a></code>.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Permission</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_general_check">Rbac->check()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->check(mixed $Permission, int $UserID = null)</code>
</pre>

                                <p>
                                    Checks whether a user has a permission or not.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Permission</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>UserID</dt>
                                    <dd>
                                        User ID of a user. Must be an <code>int</code>.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if a user has a permission, <code>false</code> if otherwise.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_general_enforce">Rbac->enforce()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public mixed Rbac->enforce(mixed $Permission, int $UserID = null)</code>
</pre>

                                <p>
                                    Enforces a permission on a user.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Permission</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>UserID</dt>
                                    <dd>
                                        User ID of a user. Must be an <code>int</code>.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if the user has the permission.
                                </p>

                                <p>
                                    If the user does not have the permission two things happen:
                                </p>

                                <ul>
                                    <li>A <code>403 HTTP status code</code> header will be sent to the web client.</li>
                                    <li>Script execution will terminate with a '<code>Forbidden: You do not have permission to access this resource.</code>' message.</li>
                                </ul>

                            </div>

                        </div>

                        <h3 id="api_general_reset">Rbac->reset()</h3>

                        <div class="alert alert-warning">
                            <strong>Warning:</strong> This method removes all Roles, Permissions and Assignments from the database. Usually used for testing purposes.
                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->reset(bool $Ensure = false)</code>
</pre>

                                <p>
                                    Remove all roles, permissions and assignments.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Ensure</dt>
                                    <dd>
                                        This is a required <code>boolean</code> parameter. If <code>true</code> is not passed an <code>\Exception</code> will be thrown.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if a all roles, permissions and assignments have been reset to default values, <code>false</code> if otherwise.
                                </p>

                                <p>
                                    If <code>$ensure</code> does not equal <code>true</code>, an <code>\Exception</code> will be thrown.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="api_entity_methods">Rbac->{Entity}->{methods}</h2>
                        </div>

                        <p class="lead">
                            {Entity} methods are methods that are shared between the <code>Rbac->Permissions</code> and
                            <code>Rbac->Roles</code> Classes. The return value is specific to which Class you are using.
                        </p>

                        <p>
                            <strong>Example:</strong>
                        </p>

                        <ul>
                            <li><code>Rbac->Permissions->add()</code> will add a Permission</li>
                            <li><code>Rbac->Roles->add()</code> will add a Role</li>
                        </ul>

                        <h3 id="api_entity_add">Rbac->{Entity}->add()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->{Entity}->add(string $Title, string $Description, int $ParentID = null)</code>
</pre>

                                <p>
                                    Adds a new Role or Permission.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Title</dt>
                                    <dd>
                                        Accepts <code>string</code> Title of the new entry.
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Description</dt>
                                    <dd>
                                        Accepts <code>string</code> Description of the new entry.
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>ParentID</dt>
                                    <dd>
                                        Optional <code>int</code> ID of the parent Entity in the hierarchy.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>int</code> ID of the new entry.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_addPath">Rbac->{Entity}->addPath()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->{Entity}->addPath(string $Path, array $Descriptions = null)</code>
</pre>

                                <p>
                                    Adds a Path and all its components.
                                </p>

                                <p>
                                    Will not replace or create siblings if a component exists.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Path</dt>
                                    <dd>
                                        Accepts a <code>string</code> Path. Must begin with a <code>/</code> (forward slash).
                                    </dd>
                                    <dd>

<!-- Code Blocks can not be indented due to the <pre> tags -->
<br />
Example:
<pre class="pre-scrollable">
<code class="prettyprint">$myPath = '/blog_admin/blog_editor/blog_writer/blog_member';</code>
</pre>

                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Descriptions</dt>
                                    <dd>
                                        Accepts an <code>array</code> of <code>string</code> Descriptions. Will add with empty Description if not available.
                                    </dd>
                                    <dd>

<!-- Code Blocks can not be indented due to the <pre> tags -->
<br />
Example:
<pre class="pre-scrollable">
<code class="prettyprint">$pathDescriptions = array(
    'Blog Admin',
    'Blog Editor',
    'Blog Writer',
    'Blog Member'
);</code>
</pre>

                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>int</code> Number of Entities created (0 if none created).
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_assign">Rbac->{Entity}->assign()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->{Entity}->assign(mixed $Role, mixed $Permission)</code>
</pre>

                                <p>
                                    Assigns a role to a permission (or vice-verse).
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Permission</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if association already exists.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_children">Rbac->{Entity}->children()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public array Rbac->{Entity}->children(int $ID)</code>
</pre>

                                <p>
                                    Returns children of an Entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        <code>int</code> ID of an Entity
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns a multidimensional <code>array</code> containing all children of the Entity.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_count">Rbac->{Entity}->count()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->{Entity}->count()</code>
</pre>

                                <p>
                                    Return count of the entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt></dt>
                                    <dd>
                                        No Parameters.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>int</code> count of created Entities.
                                </p>

Examples:
<pre class="pre-scrollable">
<code class="prettyprint">// Returns <code>20</code> if 20 Permissions have been created
$countPermissions = $rbac->Permissions->count();

// Returns <code>20</code> if 20 Roles have been created
$countRoles = $rbac->Roles->count();</code>
</pre>


                            </div>

                        </div>

                        <h3 id="api_entity_depth">Rbac->{Entity}->depth()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->{Entity}->depth(int $ID)</code>
</pre>

                                <p>
                                    Return depth of an Entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of an Entity
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns an <code>int</code> depth of specified Entity.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_descendants">Rbac->{Entity}->descendants()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public array Rbac->{Entity}->descendants(int $ID)</code>
</pre>

                                <p>
                                    Returns descendants of an Entity, with their depths in integer.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts an <code>int</code> ID of a specific Entity
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns an <code>array</code> with keys as titles and:
                                </p>

                                <ul>
                                    <li><code>string</code> Title</li>
                                    <li><code>int</code> ID</li>
                                    <li><code>int</code> Depth</li>
                                    <li><code>string</code> Description</li>
                                </ul>

                            </div>

                        </div>

                        <h3 id="api_entity_edit">Rbac->{Entity}->edit()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->{Entity}->edit(int $ID, string $NewTitle = null, string $NewDescription = null)</code>
</pre>

                                <p>
                                    Edits an Entity, changing the Title and/or Description. Maintains ID.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of the Entity you would like to change.
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>NewTitle</dt>
                                    <dd>
                                        Accepts a new <code>string</code> Title.
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>NewDescription</dt>
                                    <dd>
                                        Accepts a new <code>string</code> Description.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if the Entity does not exist.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_getDescription">Rbac->{Entity}->getDescription()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public mixed Rbac->{Entity}->getDescription(int $ID)</code>
</pre>

                                <p>
                                    Return description of an Entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of an Entity
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>string</code> Description if Entity exists, <code>null</code> if Entity does not exist.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_getPath">Rbac->{Entity}->getPath()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public string Rbac->{Entity}->getPath(int $ID)</code>
</pre>

                                <p>
                                    Returns the Path of an Entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of an Entity
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>string</code> Path of the specified Entity.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_getTitle">Rbac->{Entity}->getTitle()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public string Rbac->{Entity}->getTitle(int $ID)</code>
</pre>

                                <p>
                                    Returns the Title of an Entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of an Entity
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>string</code> Title of the specified Entity.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_parentNode">Rbac->{Entity}->parentNode()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public array Rbac->{Entity}->parentNode(int $ID)</code>
</pre>

                                <p>
                                    Returns parent node of an Entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of an Entity
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns an <code>array</code> including:
                                </p>

                                <ul>
                                    <li><code>string</code> Title</li>
                                    <li><code>string</code> Description</li>
                                    <li><code>int</code> ID</li>
                                </ul>

                            </div>

                        </div>

                        <h3 id="api_entity_pathId">Rbac->{Entity}->pathId()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public mixed Rbac->{Entity}->pathId(string $Path)</code>
</pre>

                                <p>
                                    Returns ID of a Path.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Path</dt>
                                    <dd>
                                        Accepts a <code>string</code> Path
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>int</code> ID of the Path if it exists, <code>null</code> if the Path does not exist.
                                </p>

Example:
<pre class="pre-scrollable">
<code class="prettyprint">$somePath = '/role1/role2/role3'; // A single slash is root</code>
</pre>


                            </div>

                        </div>

                        <h3 id="api_entity_returnId">Rbac->{Entity}->returnId()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public mixed Rbac->{Entity}->returnId(string $Entity = null)</code>
</pre>

                                <p>
                                    Returns the ID of an Entity.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Entity</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the Entity's ID if successful, <code>null</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_titleId">Rbac->{Entity}->titleId()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->{Entity}->titleId(string $Title)</code>
</pre>

                                <p>
                                    Returns the ID belonging to a Title. Returns the ID to the first node found with the specified Title.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Title</dt>
                                    <dd>
                                        Accepts a <code>string</code> Title
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>int</code> ID of specified Title. Returns the <code>int</code> ID to the first node found with the specified Title.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_unassign">Rbac->{Entity}->unassign()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->{Entity}->unassign(mixed $Role, mixed $Permission)</code>
</pre>

                                <p>
                                    Unassigns a Role-Permission relation.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Permission</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_reset">Rbac->{Entity}->reset()</h3>

                        <div class="alert alert-warning">
                            <strong>Warning:</strong> This method removes all Entities of the specified type from the database. Usually used for testing purposes.
                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->{Entity}->reset(bool $Ensure = false)</code>
</pre>

                                <p>
                                    Reset the table back to its initial state.
                                </p>

                                <p>
                                    Keep in mind that this will not touch relations.
                                </p>

Examples:
<pre class="pre-scrollable">
<code class="prettyprint">// Resets all Permissions
$rbac->Permissions->reset(true);

// Resets all Roles
$rbac->Roles->reset(true);</code>
</pre>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Ensure</dt>
                                    <dd>
                                        Accepts <code>true</code> or <code>false</code>. Must be <code>true</code> to work, otherwise an <code>\Exception</code> will be thrown.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>int</code> count of deleted entries.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_entity_resetAssignments">Rbac->{Entity}->resetAssignments()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->{Entity}->resetAssignments(bool $Ensure = false)</code>
</pre>

                                <p>
                                    Remove all role-permission relations.
                                </p>

                                <p>
                                    Mostly used for testing.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Ensure</dt>
                                    <dd>
                                        Accepts <code>true</code> or <code>false</code>. Must be <code>true</code> to work, otherwise an <code>\Exception</code> will be thrown.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>int</code> count of deleted assignments.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="api_permissions_methods">Rbac->Permissions->{methods}</h2>
                        </div>

                        <p class="lead">
                            These methods can only be called using the <code>Rbac->Permissions</code> Class.
                        </p>

                        <h3 id="api_permissions_remove">Rbac->Permissions->remove()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->Permissions->remove(int $ID, bool $Recursive = false)</code>
</pre>

                                <p>
                                    Remove Permissions from system.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        The <code>int</code> ID of the Permission.
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Recursive</dt>
                                    <dd>
                                        If set to <code>true</code>, all descendants of the Permission will also be removed.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_permissions_roles">Rbac->Permissions->roles()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public array Rbac->Permissions->roles(mixed $Permission, bool $OnlyIDs = true)</code>
</pre>

                                <p>
                                    Returns all Roles assigned to a Permission.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Permission</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>OnlyIDs</dt>
                                    <dd>
                                        If <code>true</code>, result will be a 1D array of IDs
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns a 1D or 2D <code>array</code> depending on the parameter $OnlyIDs.
                                </p>

                                <p>
                                    Returns <code>null</code> if no Roles are assigned to specified Permission.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_permissions_unassignRoles">Rbac->Permissions->unassignRoles()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->Permissions->unassignRoles(int $ID)</code>
</pre>

                                <p>
                                    Unassigns all Roles belonging to a Permission.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of the Permission in question.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>int</code> number of assignments deleted.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="api_roles_methods">Rbac->Roles->{methods}</h2>
                        </div>

                        <p class="lead">
                            These methods can only be called using the <code>Rbac->Roles</code> Class.
                        </p>

                        <h3 id="api_roles_hasPermission">Rbac->Roles->hasPermission()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->Roles->hasPermission(int $Role, integer $Permission)</code>
</pre>

                                <p>
                                    Checks to see if a Role has a Permission or not.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of a Role
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Permission</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of a Permission
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if the specified Role has the specified Permission, <code>false</code> if otherwise.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_roles_permissions">Rbac->Roles->permissions()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public mixed Rbac->Roles->permissions(int $Role, bool $OnlyIDs = true)</code>
</pre>

                                <p>
                                    Returns all Permissions assigned to a Role.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        The <code>int</code> ID of the Role you would like to inspect.
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>OnlyIDs</dt>
                                    <dd>
                                        If set to <code>true</code>, result is a 1D <code>array</code> of Permission ID's.
                                    </dd>
                                    <dd>
                                        If set to <code>false</code> the result is a 2d <code>array</code> that includes the ID, Title and Description of Permissions assigned to the Role.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    If the parameter <code>$OnlyIDs</code> is set to <code>true</code>, result is a 1D <code>array</code> of Permission ID's.
                                </p>

                                <p>
                                    If the parameter <code>$OnlyIDs</code> is set to <code>false</code> the result is a 2d <code>array</code> that includes the ID, Title and Description of Permissions assigned to the Role.
                                </p>

                                <p>
                                    Returns <code>null</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_roles_remove">Rbac->Roles->remove()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->Roles->remove(int $ID, bool $Recursive = false)</code>
</pre>

                                <p>
                                    Remove Roles from system.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        The <code>int</code> ID of the Role
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>Recursive</dt>
                                    <dd>
                                        If set to <code>true</code>, all descendants of the Permission will also be removed.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_roles_unassignPermissions">Rbac->Roles->unassignPermissions()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->Roles->unassignPermissions(int $ID)</code>
</pre>

                                <p>
                                    Unassigns all Permissions belonging to a Role.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of the Role in question.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>int</code> number of assignments deleted.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_roles_unassignUsers">Rbac->Roles->unassignUsers()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->Roles->unassignUsers(int $ID)</code>
</pre>

                                <p>
                                    Unassign all Users that have a certain Role.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>ID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of a Role
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>int</code> number of assignments deleted.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2 id="api_users_methods">Rbac->Users->{methods}</h2>
                        </div>

                        <p class="lead">
                            These methods can only be called using the <code>Rbac->Users</code> Class.
                        </p>

                        <h3 id="api_users_allRoles">Rbac->Users->allRoles()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public mixed Rbac->Users->allRoles(int $UserID = null)</code>
</pre>

                                <p>
                                    Returns all Roles of a User.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>UserID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of a User (<strong>Not optional</strong>)
                                    </dd>
                                    <dd>
                                        Throws <code>RbacUserNotProvidedException</code> if not provided
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns an <code>array</code> of all Roles assigned to the User.
                                </p>

                                <p>
                                    Returns <code>null</code> if no Roles are assigned to the User.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_users_assign">Rbac->Users->assign()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->Users->assign(mixed $Role, int $UserID = null)</code>
</pre>

                                <p>
                                    Assigns a role to a user
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>UserID</dt>
                                    <dd>
                                        Accepts an <code>int</code> UserID, provided from external User Management System.
                                    </dd>
                                    <dd>
                                        Use 0 for Guest.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if the assignment was created successfuly.
                                </p>

                                <p>
                                    Returns <code>false</code> if the assignment already exists.
                                </p>

                                <p>
                                    Throws <code>\RbacUserNotProvidedException</code> Exception if UserID is not provided.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_users_hasRole">Rbac->Users->hasRole()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->Users->hasRole(mixed $Role, int $UserID = null)</code>
</pre>

                                <p>
                                    Checks to see whether a User has a Role or not.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>UserID</dt>
                                    <dd>
                                        Accepts an <code>int</code> UserID, provided from external User Management System.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_users_resetAssignments">Rbac->Users->resetAssignments()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->Users->resetAssignments(bool $Ensure = false)</code>
</pre>

                                <p>
                                    Remove all Role-User assignments.
                                </p>

                                <p>
                                    Mostly used for testing.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Ensure</dt>
                                    <dd>
                                        Accepts <code>true</code> or <code>false</code>. Must be <code>true</code> to work, otherwise an <code>\Exception</code> will be thrown.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns the <code>int</code> count of deleted assignments.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_users_roleCount">Rbac->Users->roleCount()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<pre class="pre-scrollable">
<code class="prettyprint">public int Rbac->Users->roleCount(int $UserID = null)</code>
</pre>

                                <p>
                                    Return count of Roles assigned to a User.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>UserID</dt>
                                    <dd>
                                        Accepts the <code>int</code> ID of a User (<strong>Not optional</strong>)
                                    </dd>
                                    <dd>
                                        Throws <code>RbacUserNotProvidedException</code> if not provided
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>int</code> number of Roles assigned to the User.
                                </p>

                            </div>

                        </div>

                        <h3 id="api_users_unassign">Rbac->Users->unassign()</h3>

                        <div class="panel panel-default">

                            <div class="panel-heading">Description</div>

                            <div class="panel-body">

<!-- Code Blocks can not be indented due to the <pre> tags -->
<!-- <strong>Example:</strong> Using AuraPHP's autoloader -->
<pre class="pre-scrollable">
<code class="prettyprint">public bool Rbac->Users->unassign(mixed $Role, int $UserID = null)</code>
</pre>

                                <p>
                                    Unassigns a Role from a User.
                                </p>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Parameters</div>

                            <div class="panel-body">

                                <dl>
                                    <dt>Role</dt>
                                    <dd>
                                        Accepts one of the following:
                                        <ul>
                                            <li><code>int</code> ID</li>
                                            <li><code>string</code> Title</li>
                                            <li><code>string</code> Path</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>UserID</dt>
                                    <dd>
                                        Accepts an <code>int</code> UserID, provided from external User Management System.
                                    </dd>
                                    <dd>
                                        Use 0 for Guest.
                                    </dd>
                                </dl>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading">Return Values</div>

                            <div class="panel-body">

                                <p>
                                    Returns <code>true</code> if successful, <code>false</code> if unsuccessful.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>
