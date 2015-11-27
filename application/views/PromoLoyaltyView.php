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

        <div id="content" class="promos spacing setupPunch">
            <div class="noTab">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Setup your Punch Card</h4>
                    </div>
                    <div class="col-sm-6 noPadRight">
                        <div class="input-group">
                            <span class="input-group-addon">Php</span>
                            <input type="text" class="form-control" id="exampleInputAmount" value="0.00">
                            <span class="input-group-addon">= </span>
                        </div>
                    </div>
                    <div class="col-sm-6 noPadLeft">
                        <div class="input-group">
                            <select name="amountPoints" class="form-control" id="amountPoints" aria-describedby="basic-addon2">
                                <option value="1">0</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                            </select>
                            <span class="input-group-addon" id="basic-addon2">Point</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 noPadRight">
                        <div class="input-group">
                            <span class="input-group-addon">Php</span>
                            <select name="amountPoints" class="form-control" id="amountPoints" aria-describedby="basic-addon2">
                                <option value="1">0</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                            </select>
                            <span class="input-group-addon">= </span>
                        </div>
                    </div>
                    <div class="col-sm-6 noPadLeft">
                        <div class="input-group">
                            <input type="text" class="form-control" id="exampleInputAmount" value="0.00">
                            <span class="input-group-addon" id="basic-addon2">Point</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 actionButton">
                        <button class="btn btn-default resetButton">Reset</button>
                        <button class="btn btn-primary saveButton">Save Card</button>
                    </div>
                </div>
            </div><!--noTab-->
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