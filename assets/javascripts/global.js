/**
 * Custom jQuery's
 * Created by PhpStorm.
 * User: G.ELLURANGGO
 */



//--Global Variable
var addNew = $('.navTabsWrap .addNew');
var overlayHex;
var textHex;
var buttonHex;
var mLogo;
var mbgImg;
var mTheme;
var mText;
var mButton;
var mStampC;
var mStampG;

//-- end

//-Global function

function populateStorage(){
    localStorage.setItem('mLogo', mLogo);
}

function addBranch(){
    addNew.show();
    addNew.attr("href","#addBranch");
    addNew.html("<i class='fa fa-plus'></i> Add Branch");
}
function  addEmployee(){
    addNew.show();
    addNew.attr("href","#addEmployee");
    addNew.html("<i class='fa fa-plus'></i> Add Employee");
}
function addCustomer(){
    addNew.hide();
}

function designMobile(btnMobile){
    $(btnMobile).removeClass('btn-default').addClass('btn-primary active');
    $('#btnTablet,#btnCard').removeClass('btn-primary active').addClass('btn-default');
    //$('.cardFrame,.tabletFrame').hide();
    //$('.mobileFrame').show();
    $('.cardTab,.tabletTab').hide();
    $('.mobileTab').show();
}
function designTablet(btnTablet){
    $(btnTablet).removeClass('btn-default').addClass('btn-primary active');
    $('#btnMobile,#btnCard').removeClass('btn-primary active').addClass('btn-default');
    //$('.mobileFrame,.cardFrame').hide();
    //$('.tabletFrame').show();
    $('.mobileTab,.cardTab').hide();
    $('.tabletTab').show();
}
function designCard(btnCard){
    $(btnCard).removeClass('btn-default').addClass('btn-primary active');
    $('#btnMobile,#btnTablet').removeClass('btn-primary active').addClass('btn-default');
    //$('.mobileFrame,.tabletFrame').hide();
    //$('.cardFrame').show();
    $('.mobileTab,.tabletTab').hide();
    $('.cardTab').show();
}
function apProd(dis){
    window.location.hash = "addProduct";
    $(dis).addClass('active');
    $(".apAmnt").removeClass('active');
    $(".earningReward1").slideUp('normal');
    $(".earningReward2").slideDown('normal');
}
function apAmnt(dis){
    window.location.hash = "addAmount";
    $(dis).addClass('active');
    $(".apProd").removeClass('active');
    $(".earningReward2").slideUp('normal');
    $(".earningReward1").slideDown('normal');
}

//convert hex to a rgb color
function rgb2hex(rgb) {
    var hexDigits = ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"];
    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
    }
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

// Get Selected Palette
function getPBox1(bgColor){
    bgColor = bgColor.find("i:first-child").css('background-color');
    bgColor = rgb2hex(bgColor);
    bgColor1 = bgColor;
    console.log(bgColor);

}
function getPBox2(bgColor){
    bgColor = bgColor.find("i:nth-child(2)").css('background-color');
    bgColor = rgb2hex(bgColor);
    bgColor2 = bgColor;
    console.log(bgColor);
}
function getPBox3(bgColor){
    bgColor = bgColor.find("i:last-child").css('background-color');
    bgColor = rgb2hex(bgColor);
    bgColor3 = bgColor;
    console.log(bgColor);
}
function getSelectedPalette(selected3Color){
    getPBox1(selected3Color);
    getPBox2(selected3Color);
    getPBox3(selected3Color);
}

function changeColorPalette(){
    $('span.p1').css('background-color',bgColor1);
    $('span.p2').css('background-color',bgColor2);
    $('span.p3').css('background-color',bgColor3);
}
function tChangeColorPalette(){
    $('span.tp1').css('background-color',bgColor1);
    $('span.tp2').css('background-color',bgColor2);
    $('span.tp3').css('background-color',bgColor3);
}
//-- end


function saveLocalStorage(targetResult){
    var target = targetResult;
    if($('#btnMobile').hasClass('active')){
        console.log("mobile");
        $('.customLogo').attr('src', target);
    }
    if($('#btnTablet').hasClass('active')){
        console.log("tablet");
    }
    if($('#btnCard').hasClass('active')){
        console.log("card");
    }
}