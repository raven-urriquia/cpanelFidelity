<?php include_once('include/header.php'); ?>
<div id="rightcontent">
    <div class="header">
        <div class="row">
            <div class="col-xs-7">
                <h3>Dashboard</h3>
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

        <div id="content" class="dashboard">
            <h4>Monthly Reports</h4>
            <div id="monthlyReport"></div>

            <div class="row counts">
                <div class="col-sm-6">
                    <ul class="count">
                        <li>
                            <p>NEW SIGNUPS</p>
                            <h3>10</h3>
                        </li>
                        <li>
                            <p>PRODUCT <br> REWARDED</p>
                            <h3>30</h3>
                        </li>
                        <li>
                            <p>DAILY <br> TRANSACTIONS</p>
                            <h3>100</h3>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div><!--/content-->
    </div> <!-- /container -->
</div> <!--rightcontent-->




<?php include_once('include/footer.php'); ?>