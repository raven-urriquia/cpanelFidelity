<div id="rightcontent">
    <div class="header">
        <div class="row">
            <div class="col-xs-7">
                <h3>Transaction History</h3>
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
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">Filter</span>
                    <select name="amountPoints" class="form-control" id="amountPoints" aria-describedby="basic-addon2">
                        <option value="1">All Branches</option>
                        <option value="1">Branch 1</option>
                        <option value="1">Branch 2</option>
                    </select>

                </div>
            </div>
        </div>
        <div id="content" class="transHistory">
                <div class="noTab">
                    <table data-toggle="table" class="data-table management ">
                        <thead>
                        <tr>
                            <th>Date &amp; Time</th>
                            <th>Transaction Type</th>
                            <th data-sortable="true">Customer Name</th>
                            <th>Transaction Amount</th>
                            <th>OR No.</th>
                            <th>Branch</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>12/30/2015 12:59PM</td>
                            <td>Purchase</td>
                            <td>John Doe</td>
                            <td>P 100.00</td>
                            <td>0001888641</td>
                            <td>SM Megamall</td>
                        </tr>
                        <tr>
                            <td>12/30/2015 12:59PM</td>
                            <td>Redeem</td>
                            <td>Jane Doe</td>
                            <td>P 100.00</td>
                            <td>0001888641</td>
                            <td>SM Megamall</td>
                        </tr>

                        </tbody>
                    </table>
                </div><!--noTab-->
            </div>
        </div><!--/content-->
    </div> <!-- /container -->
</div> <!--rightcontent-->