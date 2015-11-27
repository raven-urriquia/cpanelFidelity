<div id="rightcontent">
    <div class="header">
        <div class="row">
            <div class="col-xs-7">
                <h3>PROMO MECHANICS</h3>
            </div>
            <div class="col-xs-5">
                <div class="howdy">

                    <!-- Split button -->
                    <div class="btn-group">
                        <!-- Large button group -->
                        <div class="btn-group">
                            <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/avatar.png" alt=""/> <span>Hi, John Doe!</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">.......</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container">
        <div class="row">
            <div class="search col-md-4">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                      </span>
                    </div><!-- /input-group -->
                </form>
            </div>
            <div class="col-md-4 forAddBtn pull-right">
                <a href="#addUser" data-toggle="modal" class="btn btn-default" onclick="return false"><i class="fa fa-plus"></i> Add User</a>
            </div>
        </div>
        <div id="content" class="addons">
            <div class="noTab">
                <table data-toggle="table" class="data-table management ">
                    <thead>
                    <tr>
                        <th data-sortable="true">Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>admin</td>
                        <td>active</td>
                        <td>
                            <a href="" class="delete"><i class="fa fa-trash"></i> Delete</a>
                            <a href="#merchantDetails" data-toggle="modal" onclick="return false"  class="edit"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>admin</td>
                        <td>active</td>
                        <td>
                            <a href="" class="delete"><i class="fa fa-trash"></i> Delete</a>
                            <a href="#merchantDetails" data-toggle="modal" onclick="return false"  class="edit"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div><!--noTab-->

        </div><!--/content-->
    </div> <!-- /container -->
</div> <!--rightcontent-->




<!--  MODALS -->
<div id="addUser" class="modal fade" data-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modlogin">
            <span class="ex" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></span>
            <div class="modal-header">Add User</div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="userName">Name</label>
                            <input type="text" class="form-control" name="userName" id="userName">
                        </div>
                        <div class="col-md-12">
                            <label for="userEmail">Email</label>
                            <input type="text" class="form-control" name="userEmail" id="userEmail">
                        </div>
                        <div class="col-md-12">
                            <label for="userRole">Role</label>
                            <select name="userRole" id="userRole" class="form-control">
                                <option value="">Admin</option>
                            </select>
                        </div>
                        <label for="userStatus" class="col-md-4">Status</label>
                        <div class="radio col-md-4">
                            <label>
                                <input type="radio" name="statusOpt" id="userInactive" value="active" checked>
                                Active
                            </label>
                        </div>
                        <div class="radio col-md-4">
                            <label>
                                <input type="radio" name="statusOpt" id="userActive" value="inactive">
                                Inactive
                            </label>
                        </div>
                        <div class="col-md-12 actionButton">
                            <button class="btn btn-default" data-dismiss="modal" >CANCEL</button>
                            <button class="btn btn-primary pull-right">ADD</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>