<?php include_once('include/header.php'); ?>
<div id="rightcontent">
    <div class="header">
        <div class="row">
            <div class="col-xs-7">
                <h3>ADD-ONS</h3>
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
            <div class="col-md-4 forAddBtn pull-right">
                <a href="#addTablet" data-toggle="modal" class="btn btn-default" onclick="return false"><i class="fa fa-plus"></i> Add Tablet</a>
            </div>
        </div>
        <div id="content" class="addons">
                <div class="noTab">
                    <table data-toggle="table" class="data-table management ">
                        <thead>
                        <tr>
                            <th>Tablet ID</th>
                            <th data-sortable="true">Tablet Brand</th>
                            <th>Branch Assigned to </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>000923764812</td>
                            <td>Lenovo</td>
                            <td>SM Megamall</td>
                        </tr>
                        <tr>
                            <td>000923764813</td>
                            <td>Samsung Galaxy Tab 2</td>
                            <td>SM Makati</td>
                        </tr>

                        </tbody>
                    </table>
                </div><!--noTab-->
            </div>
        </div><!--/content-->
    </div> <!-- /container -->
</div> <!--rightcontent-->




<!--  MODALS -->
<div id="addTablet" class="modal fade" data-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modlogin">
            <span class="ex" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></span>
            <div class="modal-header">Add Tablet</div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="tabletID">Tablet ID (IMEI)</label>
                            <input type="text" class="form-control" name="tabletID" id="tabletID">
                        </div>
                        <div class="col-md-12">
                            <label for="tabletBrand">Tablet Brand</label>
                            <select name="tabletBrand" id="tabletBrand" class="form-control">
                                <option value="">Samsung</option>
                                <option value="">Apple</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="branchAssigned">Branch Assigned to</label>
                            <select name="branchAssigned" id="branchAssigned" class="form-control">
                                <option value="">Megamall</option>
                            </select>
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