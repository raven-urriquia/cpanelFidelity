/**
 * Custom jQuery's
 * Created by PhpStorm.
 * User: G.ELLURANGGO
 */


//-- fittext for responsive text
$("#sidemenu #menu ul li a").fitText(1 , { minFontSize: '8px', maxFontSize: '14px' });
$(".count li h3").fitText( 0.2, { minFontSize: '30px', maxFontSize: '65px' });
//-- end

$(document).ready(function() {
    $(document).activeNavigation("#menu");


    //-- make sidemenu height equals to windows height
    $("#sidemenu").height($(window).height());
    //-- end

    //-- tabs stay active on page load
    $('#tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var tabId = $(e.target).attr("href").substr(1);
        window.location.hash = tabId;
    });
    var hash = window.location.hash;
    $('#tabs a[href="' + hash + '"]').tab('show');
    //-- end

    //-- remove bg image of siblings tab on load
    $(".nav-tabs li.active").prev("li").children("a").css("background-image","none");
    //-- end

    //-- stay add button of active tab
    if (window.location.hash == "#branch"){
        addBranch();
    }
    if (window.location.hash == "#employee"){
        addEmployee();
    }
    if (window.location.hash == "#customer"){
        addCustomer();
    }
    //-- end

    //-- stay tablet or mobile in modafuking design module
    if (window.location.hash == "#tablet"){
        designTablet($('#btnTablet'));
    }
    if (window.location.hash == "#mobile"){
        designMobile($('#btnmobile'));
    }
    if (window.location.hash == "#card"){
        designCard($('#btnCard'));
    }
    //-- end

    //- stay addProduct in promos module
    if (window.location.hash == "#addProduct"){
        apProd($(".apProd"));
    }
    if (window.location.hash == "#addAmount"){
        apAmnt($(".apAmnt"));
    }
    //-- end

});

//-- remove bg image of prev tab
$(document).on("click", ".management .nav-tabs li", function(){
    $(".nav-tabs li a").css("background-image","url('images/navtabsborder.jpg')");
    $(".nav-tabs li.active a").css("background-image","none");
    $(".nav-tabs li.active").prev("li").children("a").css("background-image","none");

});
//-- end

// change add button on tab click
$(document).on("click", ".management .nav-tabs li a", function(){
    var tabHref = $(this).attr("href");

    if (tabHref == "#branch"){
        addBranch()
    }
    if (tabHref == "#employee"){
        addEmployee();
    }
    if (tabHref == "#customer"){
        addCustomer();
    }
});
//-- end

//--center modal
function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}
$('.modal').on('show.bs.modal', centerModal);
//-- end

//-- button effects like android L
var button = document.querySelectorAll('.btn');
for (var i = 0; i < button.length; i++) {
    button[i].onmousedown = function(e) {

        var x = (e.offsetX == undefined) ? e.layerX : e.offsetX;
        var y = (e.offsetY == undefined) ? e.layerY : e.offsetY;
        var effect = document.createElement('div');
        effect.className = 'effect';
        effect.style.top = y + 'px';
        effect.style.left = x + 'px';
        e.srcElement.appendChild(effect);
        setTimeout(function() {
            e.srcElement.removeChild(effect);
        }, 1100);
    }
}
//-- end

//-- input file type
$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});
//-- end

//-- design module ==MOBILE==
function upLogo(input) {
    var getImagePath = URL.createObjectURL(event.target.files[0]);
    $('.uploadLogo .imgPrev').attr('src', getImagePath);
    $('.customLogo').attr('src', getImagePath);
}

function upBg(input) {
    var getImagePath = URL.createObjectURL(event.target.files[0]);
    $('.addBackImage .imgPrev').attr('src', getImagePath);
    $('.customMobileBgImg').css('background-image', 'url(' + getImagePath + ')');
}

function upStampColored(input) {
    var getImagePath = URL.createObjectURL(event.target.files[0]);
    $('.upStampC .imgPrev').attr('src', getImagePath);
    $('.stampWrap .c').css('background-image','url(' + getImagePath + ')');

}
function upStampGrayscale(input) {
    var getImagePath = URL.createObjectURL(event.target.files[0]);
    $('.upStampG .imgPrev').attr('src', getImagePath);
    $('.stampWrap .g').css('background-image','url(' + getImagePath + ')');
}

$(".uploadLogo .btn-file :file").change(function(){
    upLogo(this);
});
$(".addBackImage .btn-file :file").change(function(){
    upBg(this);
});
$(".upStampC .btn-file :file").change(function(){
    upStampColored(this);
});
$(".upStampG .btn-file :file").change(function(){
    upStampGrayscale(this);
});



//-- end

//-- design module ==CARD

function upCLogo(input) {
    var getImagePath = URL.createObjectURL(event.target.files[0]);
    $('.cardUploadLogo .imgPrev').attr('src', getImagePath);
    $('.cardLogo').attr('src', getImagePath);
}
function upCBgImage(input) {
    var getImagePath = URL.createObjectURL(event.target.files[0]);
    $('.cardAddBackImage .imgPrev').attr('src', getImagePath);
    $('.cardWrap').css('background-image','url(' + getImagePath + ')');
}
function cardBgColorPrev(){
    var rgbaCol = 'rgba(' + parseInt(cardBgHex.slice(-6,-4),16)
        + ',' + parseInt(cardBgHex.slice(-4,-2),16)
        + ',' + parseInt(cardBgHex.slice(-2),16)
        +',0.4)';
    $('.cardWrap .overlay').css('background-color', rgbaCol);
}

$(".cardUploadLogo .btn-file :file").change(function(){
    upCLogo(this);
});
$(".cardAddBackImage .btn-file :file").change(function(){
    upCBgImage(this);
});
//-- end


//-- Design Palette
$(document).ready( function() {
    $('span.p1,span.tp1, .custPalette i:first-child').css('background-color','#00A8A4');
    $('span.p2,span.tp2, .custPalette i:nth-child(2)').css('background-color','#00E6C5');
    $('span.p3,span.tp3, .custPalette i:last-child').css('background-color','#8BFF6F');
});

$('.prePaletteMnu li').on('click', function(e) {

    if ($(this).hasClass('custPalette')) {
        //$('.customPaletteBox,.savePalette').show();
        getSelectedPalette($(this));
        overlayHex = bgColor1;
        buttonHex = bgColor3;
        textHex = bgColor2;
        bgColorPrev();
        buttonColorPrev();
        textColorPrev();
        if (window.location.hash == "#mobile"){
            changeColorPalette();
        }
        else if (window.location.hash == "#tablet") {
            tChangeColorPalette();
        }
    }
    else if ($(this).hasClass('palette1')) {
        //$('.custompresetPalette Box,.savePalette').hide();
        getSelectedPalette($(this));
        overlayHex = bgColor1;
        buttonHex = bgColor3;
        textHex = bgColor2;
        bgColorPrev();
        buttonColorPrev();
        textColorPrev();
        if (window.location.hash == "#mobile"){
            changeColorPalette();
        }
        else if (window.location.hash == "#tablet") {
            tChangeColorPalette();
        }
    }
    else if ($(this).hasClass('palette2')) {
        //$('.customPaletteBox,.savePalette').hide();
        getSelectedPalette($(this));
        overlayHex = bgColor1;
        buttonHex = bgColor3;
        textHex = bgColor2;
        bgColorPrev();
        buttonColorPrev();
        textColorPrev();
        if (window.location.hash == "#mobile"){
            changeColorPalette();
        }
        else if (window.location.hash == "#tablet") {
            tChangeColorPalette();
        }
    }
    else if ($(this).hasClass('palette3')) {
        //$('.customPaletteBox,.savePalette').hide();
        getSelectedPalette($(this));
        overlayHex = bgColor1;
        buttonHex = bgColor3;
        textHex = bgColor2;
        bgColorPrev();
        buttonColorPrev();
        textColorPrev();
        if (window.location.hash == "#mobile"){
            changeColorPalette();
        }
        else if (window.location.hash == "#tablet") {
            tChangeColorPalette();
        }
    }
    else if ($(this).hasClass('palette4')) {
        //$('.customPaletteBox,.savePalette').hide();
        getSelectedPalette($(this));
        overlayHex = bgColor1;
        buttonHex = bgColor3;
        textHex = bgColor2;
        bgColorPrev();
        buttonColorPrev();
        textColorPrev();
        if (window.location.hash == "#mobile"){
            changeColorPalette();
        }
        else if (window.location.hash == "#tablet") {
            tChangeColorPalette();
        }
    }
});

function bgColorPrev(){
    var rgbaCol = 'rgba(' + parseInt(overlayHex.slice(-6,-4),16)
        + ',' + parseInt(overlayHex.slice(-4,-2),16)
        + ',' + parseInt(overlayHex.slice(-2),16)
        +',0.4)';
    if (window.location.hash == "#mobile") {
        $('.customMobileBgColor').css('background-color', rgbaCol);
        $('.topPane').css('background-color', overlayHex);
    }
    if (window.location.hash == "#tablet") {
        $('.customTablet').css('background-color',rgbaCol);
    }
}
function buttonColorPrev(){
    if (window.location.hash == "#mobile") {
        $('.redeem').css('background-color', buttonHex);
    }
    if (window.location.hash == "#tablet") {
        $('.customButton').css('background-color',buttonHex);
    }
}
function textColorPrev(){
    if (window.location.hash == "#mobile") {
        $('.customText').css('color', textHex);
    }
    if (window.location.hash == "#tablet") {

    }
}



$("#pOverlay").on('move.spectrum', function() {
    var hexcolor = $("#pOverlay").spectrum('get').toHexString();
    //alert(hexcolor);
    $(this).siblings('.hex').html(hexcolor);
    $('span.p1').css('background-color',hexcolor);
    overlayHex = hexcolor;
    bgColorPrev();
});
$("#pText").on('move.spectrum', function() {
    var hexcolor = $("#pText").spectrum('get').toHexString();
    $(this).siblings('.hex').html(hexcolor);
    $('span.p2').css('background-color',hexcolor);
    textHex = hexcolor;
    textColorPrev();
});
$("#pButtons").on('move.spectrum', function() {
    var hexcolor = $("#pButtons").spectrum('get').toHexString();
    $(this).siblings('.hex').html(hexcolor);
    $('span.p3').css('background-color',hexcolor);
    buttonHex = hexcolor;
    buttonColorPrev();
});
$("#cardBgColor").on('move.spectrum', function() {
    var hexcolor = $("#cardBgColor").spectrum('get').toHexString();
    $(this).siblings('.hex').html(hexcolor);
    cardBgHex = hexcolor;
    cardBgColorPrev();
});
$("#tpOverlay").on('move.spectrum', function() {
    var hexcolor = $("#tpOverlay").spectrum('get').toHexString();
    $(this).siblings('.hex').html(hexcolor);
    $('span.tp1').css('background-color',hexcolor);
    overlayHex = hexcolor;
    bgColorPrev();
});
$("#tpText").on('move.spectrum', function() {
    var hexcolor = $("#tpText").spectrum('get').toHexString();
    $(this).siblings('.hex').html(hexcolor);
    $('span.tp2').css('background-color',hexcolor);
    textHex = hexcolor;
    textColorPrev();
});
$("#tpButtons").on('move.spectrum', function() {
    var hexcolor = $("#tpButtons").spectrum('get').toHexString();
    $(this).siblings('.hex').html(hexcolor);
    $('span.tp3').css('background-color',hexcolor);
    buttonHex = hexcolor;
    buttonColorPrev();
});

$("#pOverlay").spectrum({
    color: "#00A8A4",
    preferredFormat: "hex",
    showInput: true,
    showButtons: true,
    chooseText: "Select",
    cancelText: "Cancel"
});
$("#pText").spectrum({
    color: "#00E6C5",
    preferredFormat: "hex",
    showInput: true,
    showButtons: true,
    chooseText: "Select",
    cancelText: "Cancel"
});
$("#pButtons").spectrum({
    color: "#8BFF6F",
    preferredFormat: "hex",
    showInput: true,
    showButtons: true,
    chooseText: "Select",
    cancelText: "Cancel"
});

$("#cardBgColor").spectrum({
    color: "#E2E0DC",
    preferredFormat: "hex",
    showInput: true,
    showButtons: true,
    chooseText: "Select",
    cancelText: "Cancel"
});
$("#tpOverlay").spectrum({
    color: "#00A8A4",
    preferredFormat: "hex",
    showInput: true,
    showButtons: true,
    chooseText: "Select",
    cancelText: "Cancel"
});
$("#tpText").spectrum({
    color: "#00E6C5",
    preferredFormat: "hex",
    showInput: true,
    showButtons: true,
    chooseText: "Select",
    cancelText: "Cancel"
});
$("#tpButtons").spectrum({
    color: "#8BFF6F",
    preferredFormat: "hex",
    showInput: true,
    showButtons: true,
    chooseText: "Select",
    cancelText: "Cancel"
});
//-- end

//Design tablet or mobile

$("#btnTablet").on('click',function(){
    designTablet($(this));
    window.location.hash = "tablet";
});
$("#btnCard").on('click',function(){
    designCard($(this));
    window.location.hash = "card";
});
$("#btnMobile").on('click',function(){
    designMobile($(this));
    window.location.hash = "mobile";
});

// bootstrap date time picker
$('#datetimepicker').datetimepicker({
    format: 'DD/MM/YYYY'
});


// Promos amount or product

$(".apProd").on('click',function(){
    apProd($(this));
});
$(".apAmnt").on('click',function(){
    apAmnt($(this));
});