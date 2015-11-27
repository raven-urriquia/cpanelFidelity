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
        <div id="content" class="merchant">
            <div class="noTab">
                <table data-toggle="table" class="data-table management ">
                    <thead>
                    <tr>
                        <th data-sortable="true">Merchant Name</th>
                        <th>Contact Person</th>
                        <th>Business Type</th>
                        <th>Location</th>
                        <th>Packaged Availed</th>
                        <th>Program Validity</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Vikings</td>
                        <td>John Doe</td>
                        <td>Food and Beverages</td>
                        <td>Mandaluyong</td>
                        <td>Punch Card</td>
                        <td>01/10/2016</td>
                        <td>
                            <a href="" class="delete"><i class="fa fa-trash"></i> Delete</a>
                            <a href="#merchantDetails" data-toggle="modal" onclick="return false"  class="edit"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Vikings</td>
                        <td>John Doe</td>
                        <td>Food and Beverages</td>
                        <td>Mandaluyong</td>
                        <td>Punch Card</td>
                        <td>01/10/2016</td>
                        <td>
                            <a href="" class="delete"><i class="fa fa-trash"></i> Delete</a>
                            <a href="#merchantDetails" data-toggle="modal" onclick="return false" class="edit"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div><!--noTab-->
        </div><!--/content-->
    </div> <!-- /container -->
</div> <!--rightcontent-->




<!--  MODALS -->
<div id="merchantDetails" class="modal fade" data-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="ex" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></span>
            <div class="modal-header">Merchant Details</div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="merchName" class="col-sm-5 control-label">Merchant Name</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchName" disabled value="Vikings">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchContactPerson" class="col-sm-5 control-label">Contact Person</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchContactPerson" disabled value="John Doe">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchMobile" class="col-sm-5 control-label">Mobile No.</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchMobile" disabled value="09171234567">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchEmail" class="col-sm-5 control-label">Email</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchEmail" disabled value="jdoe@gmail.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchBizType" class="col-sm-5 control-label">Business Type</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchBizType" disabled value="Food and Beverages">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchPkg" class="col-sm-5 control-label">Packaged Availed</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchPkg" disabled value="Punch Card">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchLoc" class="col-sm-5 control-label">Location</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchLoc" disabled value="Mandaluyong">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchPaySch" class="col-sm-5 control-label">Payment Scheme</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchPaySch" disabled value="OTC">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchDepSlip" class="col-sm-5 control-label">Upload Deposit Slip</label>
                    <div class="col-sm-7">
                        <input type="file" id="merchDepSlip">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchValidity" class="col-sm-5 control-label">Program Validity</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="merchValidity" disabled value="10/10/2016">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merchStatus" class="col-sm-5 control-label">Status</label>
                    <div class="col-sm-7">
                        <select name="" id="merchStatus" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group actionButton">
                    <button class="btn btn-default" data-dismiss="modal" >CANCEL</button>
                    <button class="btn btn-primary pull-right">SAVE</button>
                </div>


            </div>

        </div>
    </div>
</div>