<?php include_once('include/header.php'); ?>
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

        <div id="content" class="promos spacing">
                <div class="noTab">
                    <div class="row">
                      <div class="col-md-12">
                        <h4>Setup your Punch Card</h4>
                      </div>
                      <div class="col-md-12">
                        <h5 class="withIco"><img src="images/oneIco.jpg" alt=""> Create Card Stamp</h5>
                      </div>

                        <div class="col-md-7">
                            <label for="complete">Complete 9 steps and get:</label>
                            <input type="text" class="form-control" name="complete" id="complete">
                        </div>
                        <div class="col-md-2">
                            <label for="numStamps">No. of Stamps</label>
                            <select name="numStamps" id="numStamps" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="expiration">Expiration</label>
                            <div class='input-group date' id='datetimepicker'>
                                <input type='text' class="form-control" name="expiration" id="expiration" />
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="withIco"><img src="images/twoIco.jpg" alt=""> Add Earning & Reward</h5>
                        </div>
                        <div class="amountProduct col-md-12">
                            <a href="" class="apAmnt active" onclick="return false">Amount</a>
                            <a href="" class="apProd" onclick="return false">Product</a>
                        </div>
                        <div class="col-md-12">
                            <div class="earningReward1">
                                <div class="row">
                                    <h6 class="col-md-12">Point Conversation</h6>
                                    <div class="col-md-2 col-sm-6 noPadRight">
                                        <div class="input-group">
                                          <span class="input-group-addon">Php</span>
                                          <input type="text" class="form-control" id="exampleInputAmount" value="0.00">
                                          <span class="input-group-addon">= </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6 noPadLeft">
                                        <div class="input-group">
                                            <select name="amountPoints" class="form-control" id="amountPoints" aria-describedby="basic-addon2">
                                                <option value="1">0</option>
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                            </select>
                                            <span class="input-group-addon" id="basic-addon2">Php</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="col-md-12">N-th Stamp Reward</h6>
                                    <div class="rewards">
                                        <div class="col-md-2 col-xs-4">
                                            <select name="nthStamp" class="form-control" id="nthStamp" >
                                                <option value="1">1st</option>
                                                <option value="1">2nd</option>
                                                <option value="1">3rd</option>
                                            </select>
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <input type="text" class="form-control" name="10Off" id="10Off" placeholder="10% Off on Dinnner Buffet">
                                        </div>
                                    </div><!--rewards-->

                                    <div class="col-md-12">
                                        <button class="btn btn-default addReward"><i class="fa fa-plus"></i> Add Reward</button>
                                    </div>
                                </div>
                            </div><!--earningReward1-->

                            <div class="earningReward2">
                                <div class="row">
                                    <h6 class="col-md-12">Point Conversation</h6>
                                    <div class="prodWrap">
                                        <div class="col-md-1 col-sm-6">
                                            <a href=""><img src="images/addImage.jpg" class="imgPrev" alt=""></a>
                                        </div>
                                        <div class="col-md-8 noPadRight">
                                            <div class="input-group">
                                              <input type="text" class="form-control" id="prodName" placeholder="Product Name">
                                              <span class="input-group-addon">=</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 noPadLeft">
                                            <div class="input-group">
                                              <select name="amountPoints" class="form-control" id="amountPoints" aria-describedby="basic-addon2">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                              </select>
                                              <span class="input-group-addon" id="basic-addon2">Php</span>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="" onclick="return false"><i class="fa del fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-default addReward"><i class="fa fa-plus"></i> Add Product</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="col-md-12">N-th Stamp Reward</h6>
                                    <div class="rewards">
                                        <div class="col-md-2 col-xs-4">
                                            <select name="nthStamp" class="form-control" id="nthStamp" >
                                                <option value="1">1st</option>
                                                <option value="1">2nd</option>
                                                <option value="1">3rd</option>
                                            </select>
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <input type="text" class="form-control" name="10Off" id="10Off" placeholder="Reward Description">
                                        </div>
                                    </div><!--rewards-->

                                    <div class="col-md-12">
                                        <button class="btn btn-default addReward"><i class="fa fa-plus"></i> Add Reward</button>
                                    </div>
                                </div>

                            </div><!--earningReward2-->

                        </div>
                        <div class="col-md-12">
                                <button class="btn btn-primary saveButton">Save Card</button>
                        </div>
                    </div>
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