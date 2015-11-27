<?php include_once('include/header.php'); ?>
    <div id="rightcontent">
        <div class="header">
            <div class="row">
                <div class="col-xs-7">
                    <h3>DESIGN</h3>
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

            <div id="content" class="design spacing">

                <div class="row">
                    <div class="mobileTablet col-md-12 clearfix">
                        <button class="btn btn-default" id="btnTablet">Tablet</button>
                        <button class="btn btn-default" id="btnCard">Card</button>
                        <button class="btn btn-primary active" id="btnMobile">Mobile</button>
                    </div>
                    <div class="mobileTab">
                        <div class="col-md-4">
                            <div class="row left">
                                <div class="col-md-12 clearfix uploadLogo">
                                    <h5 class="withIco"><img src="images/oneIco.jpg" alt="">Upload Logo</h5>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 200px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix addBackImage">
                                    <h5 class="withIco"><img src="images/twoIco.jpg" alt="">Add Background Image</h5>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 640px x 1136px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix choosePalete">
                                    <h5 class="withIco"><img src="images/threeIco.jpg" alt="">Choose Color Palete</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="dropdown presetPalette">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="prePalette" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="p1"></span><span class="p2"></span><span class="p3"></span>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu prePaletteMnu" aria-labelledby="prePalette">
                                                    <li class="palette1">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 1</span>
                                                    </li>
                                                    <li class="palette2">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 2</span>
                                                    </li>
                                                    <li class="palette3">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 3</span>
                                                    </li>
                                                    <li class="palette4">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 4</span>
                                                    </li>
                                                    <li class="custPalette">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Custom Palette</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-default savePalette">Save Palette</button>
                                        </div>
                                        <div class="customPaletteBox">
                                            <div class="col-md-4">
                                                <i>Theme</i>
                                                <input type='text' id="pOverlay" />
                                                <span class="hex">#00A8A4</span>
                                            </div>
                                            <div class="col-md-4">
                                                <i>Text</i>
                                                <input type='text' id="pText" />
                                                <span class="hex">#00E6C5</span>
                                            </div>
                                            <div class="col-md-4">
                                                <i>Buttons</i>
                                                <input type='text' id="pButtons" />
                                                <span class="hex">#8BFF6F</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix upStampC">
                                    <h5 class="withIco"><img src="images/twoIco.jpg" alt="">Upload Stamp Design</h5>
                                    <span class="sp">Colored</span>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 200px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix upStampG">
                                    <span class="sp">Grayscale</span>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 200px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary saveDesign">Save Design</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 right">
                            <div class="mobileFrame">
                                <div class="col-md-6">
                                    <div class="screen1">
                                        <div class="customMobileBgImg">
                                            <div class="customMobileBgColor">
                                                <div class="inside"><img src="images/fidelityLogo.png" alt="" class="customLogo"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="screen2">
                                        <div class="screen2box">
                                            <div class="topPane"></div>
                                            <div class="text customText">
                                                <p>Get 1 stamp for every succeeding amount of P60000 ordered. Complete 5-10 stamps to get awesome prizes!. You can claim your rewards at all Vikings Branch.</p>
                                            </div>
                                            <div class="stampWrap">
                                                <ul>
                                                    <li class="c">1</li>
                                                    <li class="c">2</li>
                                                    <li class="c">3</li>
                                                    <li class="c">4</li>
                                                    <li class="c">5</li>
                                                    <li class="g">6</li>
                                                    <li class="g">7</li>
                                                    <li class="g">8</li>
                                                    <li class="g">9</li>
                                                </ul>
                                            </div><!--stampWrap-->
                                            <button class="redeem btn">REDEEM</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--mobileFrame-->
                             
                        </div><!--right-->
                    </div><!--mobileTab-->
                    <div class="cardTab">
                        <div class="col-md-4">
                            <div class="row left">
                                <div class="col-md-12 clearfix cardUploadLogo">
                                    <h5 class="withIco"><img src="images/oneIco.jpg" alt="">Upload Logo</h5>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 200px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix cardAddBackImage">
                                    <h5 class="withIco"><img src="images/twoIco.jpg" alt="">Add Background Image</h5>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 500px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix cardAddBackColor">
                                    <h5 class="withIco"><img src="images/threeIco.jpg" alt="">Choose Background Color</h5>
                                    <div class="hexwrap">
                                        <input type='text' id="cardBgColor" />
                                        <span class="hex">#00A8A4</span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-primary saveDesign">Save Design</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 right">
                            <div class="cardFrame">
                                <div class="cardWrap">
                                    <div class="overlay">
                                        <img src="images/cardLogo.png" class="cardLogo" alt="">
                                        <img src="images/qr.png" alt="" class="qr">
                                    </div>
                                </div><!--cardWrap-->
                            </div><!--cardFrame-->
                        </div><!--right-->
                    </div><!--cardTab-->
                    <div class="tabletTab">
                        <div class="col-md-4">
                            <div class="row left">
                                <div class="col-md-12 clearfix tabletUploadLogo">
                                    <h5 class="withIco"><img src="images/oneIco.jpg" alt="">Upload Logo</h5>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 200px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix tabletAddBackImage">
                                    <h5 class="withIco"><img src="images/twoIco.jpg" alt="">Add Background Image</h5>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 640px x 1136px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix tabletChoosePalete">
                                    <h5 class="withIco"><img src="images/threeIco.jpg" alt="">Choose Color Palete</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="dropdown presetPalette">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="tabletPrePalette" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="tp1"></span><span class="tp2"></span><span class="tp3"></span>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu prePaletteMnu" aria-labelledby="tabletPrePalette">
                                                    <li class="palette1">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 1</span>
                                                    </li>
                                                    <li class="palette2">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 2</span>
                                                    </li>
                                                    <li class="palette3">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 3</span>
                                                    </li>
                                                    <li class="palette4">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Palette 4</span>
                                                    </li>
                                                    <li class="custPalette">
                                                        <a href="" onclick="return false"><i></i><i></i><i></i></a>
                                                        <span>Custom Palette</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-default savePalette">Save Palette</button>
                                        </div>
                                        <div class="customPaletteBox">
                                            <div class="col-md-4">
                                                <i>Theme</i>
                                                <input type='text' id="tpOverlay" />
                                                <span class="hex">#00A8A4</span>
                                            </div>
                                            <div class="col-md-4">
                                                <i>Text</i>
                                                <input type='text' id="tpText" />
                                                <span class="hex">#00E6C5</span>
                                            </div>
                                            <div class="col-md-4">
                                                <i>Buttons</i>
                                                <input type='text' id="tpButtons" />
                                                <span class="hex">#8BFF6F</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix upStampC">
                                    <h5 class="withIco"><img src="images/twoIco.jpg" alt="">Upload Stamp Design</h5>
                                    <span class="sp">Colored</span>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 200px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix upStampG">
                                    <span class="sp">Grayscale</span>
                                    <img src="images/addImage.jpg" class="imgPrev" alt="">
                                    <div class="pull-left">
                                    <span class="btn btn-default btn-file">
                                    Choose File <input type="file">
                                    </span>
                                        <i>At least 200px x 200px</i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary saveDesign">Save Design</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 right">
                             <div class="tabletFrame">
                                 <div class="tabletLayout">
                                    <div class="customTablet">
                                        <img src="images/fidelityLogo.png" alt="" class="tabletCustomLogo">
                                        <button class="btn btn-default customButton">Login</button>
                                    </div>
                                 </div>
                             </div><!--tabletFrame-->

                        </div><!--right-->
                    </div><!--mobileTab-->

                </div><!--row->
            </div><!--/content-->
        </div> <!-- /container -->
    </div> <!--rightcontent-->




<?php include_once('include/footer.php'); ?>