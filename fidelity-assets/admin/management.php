<?php include_once('include/header.php'); ?>
<div id="rightcontent">
    <div class="header">
        <div class="row">
            <div class="col-xs-7">
                <h3>Management</h3>
            </div>
            <div class="col-xs-5">
                <div class="howdy">

                    <!-- Split button -->
                    <div class="btn-group">
                        <!-- Large button group -->
                        <div class="btn-group">
                            <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/avatar.png" alt=""/> <span>Hi, John Doe!</span>
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
        </div>
        <div id="content" class="management">
            <!-- Nav tabs -->
            <div class="navTabsWrap">
                <ul class="nav nav-tabs" role="tablist" id="tabs">
                    <li role="presentation" class="active"><a href="#branch" aria-controls="branch" role="tab" data-toggle="tab">BRANCH</a></li>
                    <li role="presentation"><a href="#employee" aria-controls="employee" role="tab" data-toggle="tab">EMPLOYEE</a></li>
                    <li role="presentation"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">CUSTOMER</a></li>
                </ul>
                <a href="#addBranch" data-toggle="modal" class="addNew" onclick="return false"><i class="fa fa-plus"></i> Add Branch</a>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="branch">
                    <table data-toggle="table" class="data-table management ">
                        <thead>
                        <tr>
                            <th>Branch ID</th>
                            <th>Branch Name</th>
                            <th>Branch Address</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>00001210</td>
                            <td>Vikings SM Megamall</td>
                            <td>Mega D, L4, SM Megamall, EDSA ...</td>
                            <td>
                                <a href="" class="delete"><i class="fa fa-trash"></i> Delete</a>
                                <a href="" class="edit"><i class="fa fa-pencil"></i> Edit</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="employee">
                    <table data-toggle="table" class="data-table management ">
                        <thead>
                        <tr>
                            <th>Employee ID No.</th>
                            <th  data-sortable="true">Employee Name</th>
                            <th>Branch Assigned</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>00001210</td>
                            <td>John Doe</td>
                            <td>SM Megamall</td>
                            <td>Enabled</td>
                            <td>
                                <a href="" class="delete"><i class="fa fa-trash"></i> Delete</a>
                                <a href="" class="edit"><i class="fa fa-pencil"></i> Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="customer">
                    <table data-toggle="table" class="data-table management ">
                        <thead>
                        <tr>
                            <th data-sortable="true">Customer Name</th>
                            <th>Mobile No.</th>
                            <th>Email Address</th>
                            <th>Birthdate</th>
                            <th>Gender</th>
                            <th>Registration Channel</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>09171234567</td>
                            <td>jdoe@gmail.com</td>
                            <td>Aug 10, 1965</td>
                            <td>Male</td>
                            <td>Customer App</td>
                            <td>
                                <a href="" class="delete"><i class="fa fa-trash"></i> Delete</a>
                                <a href="" class="edit"><i class="fa fa-pencil"></i> Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/content-->
    </div> <!-- /container -->
</div> <!--rightcontent-->




<!--  MODALS -->
<div id="addBranch" class="modal fade" data-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modlogin">
            <span class="ex" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></span>
            <div class="modal-header">Add Branch</div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="branchName">Branch Name</label>
                            <input type="text" class="form-control" name="branchName" id="branchName"/>
                        </div>
                        <div class="col-md-12">
                            <label for="branchAddress">Branch Address</label>
                            <textarea class="form-control" name="branchAddress" id="branchAddress" cols="30" rows="5"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-default" data-dismiss="modal" >CANCEL</button>
                            <button class="btn btn-primary pull-right">ADD</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
    <div id="addEmployee" class="modal fade" data-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modlogin">
                <span class="ex" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></span>
                <div class="modal-header">Add Employee</div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="employeeName">Employee Name</label>
                                <input type="text" class="form-control" name="employeeName" id="employeeName"/>
                            </div>
                            <div class="col-md-8">
                                <label for="selectBranch">Select Branch</label>
                                <select class="form-control" name="selectBranch" id="selectBranch">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="fourDigit">4 Digit Code <a href=""><i class="fa fa-question-circle"></i></a></label>
                                <input type="text" class="form-control" name="fourDigit" id="fourDigit"/>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-default" data-dismiss="modal" >CANCEL</button>
                                <button class="btn btn-primary pull-right">ADD</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

<?php include_once('include/footer.php'); ?>