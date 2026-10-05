<?php
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();

    $in_session = "0";
    if(!empty($_SESSION["cart_item"])) {
    $session_code_array = array_keys($_SESSION["cart_item"]);
    if(in_array($productArray[$key]["code"],$session_code_array)) {
    $in_session = "1";
    }
    }

?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8"/>
<title>Soap Dispensers Ss | Delta Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-0WPY5YR5W4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0WPY5YR5W4');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K4ZLQJJ');</script>
<!-- End Google Tag Manager -->
<meta content="Explore stainless steel soap dispensers from Delta Solutions. Premium manual and automatic dispensers for hospitals, hotels, offices and commercial washrooms." name="description"/><link href="https://delta-solutions.in/soap-dispensers-ss" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 40px; width: 350px; height: 350px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 22px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}
   
    </style>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#Manual-Dispenser">Manual Dispenser (4)</a></li>
<li><a href="#Automatic-Dispenser">Automatic Dispenser (2)</a></li>
<!--<li class="active"><a href="javascript:void(0)" onclick="slideTo('DSS-001');">DSS-001-AT</a></li>
                        <li><a href="javascript:void(0)" onclick="slideTo('DSS-002');">DSS-002</a></li>
                        <li><a href="javascript:void(0)" onclick="slideTo('DSS-003');">DSS-003</a></li>
                        <li><a href="javascript:void(0)" onclick="slideTo('DSS-004');">DSS-004</a></li> 
                        <li><a href="javascript:void(0)" onclick="slideTo('DSS-005');">DSS-005</a></li>
                        <li><a href="javascript:void(0)" onclick="slideTo('DSS-009');">DSS-009-AT</a></li> -->
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="dispensers.php">Dispensers</a></li>
<li><a href="soap-dispensers.php">Soap &amp; Sanitiser Dispenser</a></li>
<li>Stainless Steel Dispenser (SS)</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Manual-Dispenser');">Manual Dispenser (4)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Automatic-Dispenser');">Automatic Dispenser (2)</a></li>
<!--<li class="active"><a href="javascript:void(0)" onclick="slideTo('DSS-001');">DSS-001-AT</a></li>
                    <li><a href="javascript:void(0)" onclick="slideTo('DSS-002');">DSS-002</a></li>
                    <li><a href="javascript:void(0)" onclick="slideTo('DSS-003');">DSS-003</a></li>
                    <li><a href="javascript:void(0)" onclick="slideTo('DSS-004');">DSS-004</a></li> 
                    <li><a href="javascript:void(0)" onclick="slideTo('DSS-005');">DSS-005</a></li>
                    <li><a href="javascript:void(0)" onclick="slideTo('DSS-009');">DSS-009-AT</a></li> -->
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Manual-Dispenser">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Stainless Steel Soap Dispenser (SS)</h1>
</div>
<!--<hr id="DSS-002"> -->
<h2 align="center">Manual Dispenser</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/SS/DSS-002.jpg"><img alt="Dss 002 - Ss | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/SS/DSS-002.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta SS Soap Dispenser - 500ml </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["134"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["134"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["134"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["134"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["134"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSS-002</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 500ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : SS304</li>
<li>Capacity : 500ml</li>
<li>Drop Volume : 1ml</li>
<li>Dimensions WxDxH: 100x52x151mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="DSS-003"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/SS/DSS-003.jpg"><img alt="Dss 003 - Ss | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/SS/DSS-003.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta SS Soap Dispenser - 800ml </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["135"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["135"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["135"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["135"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["135"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSS-003</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one5" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two5">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one5">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 800ml </p>                
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two5">
<ul>
<li>Material : SS304</li>
<li>Capacity : 800ml</li>
<li>Drop Volume : 1ml</li>
<li>Dimensions WxDxH: 115x57x178mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="DSS-004"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/SS/DSS-004.jpg"><img alt="Dss 004 - Ss | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/SS/DSS-004.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta SS Soap Dispenser -1000ml </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["136"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["136"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["136"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["136"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["136"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSS-004</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two4">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser -1000ml</p>               
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two4">
<ul>
<li>Material : SS304</li>
<li>Capacity : 1000ml</li>
<li>Drop Volume : 1ml</li>
<li>Dimensions WxDxH: 121x65x190mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="DSS-005"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/SS/DSS-005.jpg"><img alt="Dss 005 - Ss | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/SS/DSS-005.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta SS Soap Dispenser Horizontal - 1000ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["137"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["137"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["137"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["137"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["137"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSS-005</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one14" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two14">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one14">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser Horizontal - 1000ml</p>               
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two14">
<ul>
<li>Material : SS304</li>
<li>Capacity : 1000ml</li>
<li>Drop Volume : 1ml</li>
<li>Dimensions WxDxH: 210x65x107mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="Automatic-Dispenser"/>
<h2 align="center">Automatic Dispenser</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/SS/DSS-001-AT.jpg"><img alt="Dss 001 At - Ss | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/SS/DSS-001-AT.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta SS Automatic Soap/Sanitiser Dispenser - 900 ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["133"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["133"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["133"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["133"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["133"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSS-001-AT</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one10" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two10">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one10">
                                    <ul> 
                                        <p>Delta SS Automatic Soap/Sanitiser Dispenser - 900 ml</p>               
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two10">
<ul>
<li>Material : SS304</li>
<li>Capacity : 900ml</li>
<li>Drop Volume : 1ml</li>
<li>Detection Zone : 10-15cms</li>
<li>Battery : 6*AA Duracell / Alkaline Battery (not inculded)</li>
<li>Suitable for Gel base hand sanitizer and Liquid Soap</li>
<li>No Provision for adaptor for electrical operation</li>
<li>Dimensions WxDxH: 110x106x275mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="DSS-009"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/SS/DSS-009-AT.jpg"><img alt="Dss 009 At - Ss | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/SS/DSS-009-AT.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta SS Automatic Soap/Sanitiser Dispenser - 700 ml </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["138"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["138"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["138"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["138"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["138"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSS-009-AT</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one15" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two15">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one15">
                                    <ul> 
                                        <p>Delta SS Automatic Soap/Sanitiser Dispenser - 700 ml</p>                
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two15">
<ul>
<li>Material : SS304</li>
<li>Capacity : 700ml</li>
<li>Drop Volume : 0.8ml to 2.5ml (adjustable)</li>
<li>Detection Zone : 10-15cms</li>
<li>Battery : 6*AA Duracell / Alkaline Battery (not inculded)</li>
<li>Suitable for Gel base hand sanitizer and Liquid Soap</li>
<li>No Provision for adaptor for electrical operation</li>
<li>Dimensions WxDxH: 110x100x220mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End Project Section Two -->
<?php include 'footer.php';?>
</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="js/map-script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>