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
<title>Soap Dispensers Abs | Delta Solutions</title>
<meta content="Discover durable ABS soap dispensers from Delta Solutions. Manual and automatic dispenser solutions designed for commercial washrooms and hygiene facilities." name="description"/>
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
<link href="https://delta-solutions.in/soap-dispensers-abs" rel="canonical"/></head>
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
    .item-content h4{font-size: 23px;}
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
<li class="active"><a href="#Manual-Dispenser">Manual Dispenser (6)</a></li>
<li><a href="#Automatic-Dispenser">Automatic Dispenser (4)</a></li>
<!-- <li class="active"><a href="#" onclick="slideTo('DSA-006');">DSA-006-S-AT</a></li>
                        <li><a href="#" onclick="slideTo('DSA-023');">DSA-023-S-AT</a></li>  -->
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
<li>ABS Plastic Dispenser</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Manual-Dispenser');">Manual Dispenser (6)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Automatic-Dispenser');">Automatic Dispenser (4)</a></li>
<!-- <li class="active"><a href="javascript:void(0)" onclick="slideTo('DSA-006');">DSA-006-S-AT</a></li>
                    <li><a href="javascript:void(0)" onclick="slideTo('DSA-023');">DSA-023-S-AT</a></li> -->
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Manual-Dispenser">
<div class="auto-container">
<div class="sec-title text-center">
<h1>ABS Plastic Soap Dispenser</h1>
</div>
<h2 align="center">Manual Dispenser</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/"><img alt=" - Soap Dispenser | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Spray Dispenser- 400ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["161"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["161"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["161"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["161"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["161"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-007-S</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 500ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS Plastic</li>
<li>Capacity : 400ml</li>
<li>Spray Volume : 0.3ml</li>
<li>Nozzle : Spray</li>
<li>Dimensions WxDxH: 101x93x209mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-019.jpg"><img alt="Dsa 019 - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-019.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Soap Dispenser- 2 Chamber - 400ml x 2</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["162"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["162"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["162"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["162"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["162"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-019</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 500ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS Plastic</li>
<li>Capacity : 400ml x 2</li>
<li>Drop Volume : 2 ml</li>
<li>Dimensions WxDxH: 134x78x244mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-020.jpg"><img alt="Dsa 020 - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-020.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Soap Dispenser- 3 Chamber - 400ml x 3</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["163"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["163"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["163"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["163"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["163"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-020</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 500ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS Plastic</li>
<li>Capacity : 400ml x 3</li>
<li>Drop Volume : 2 ml</li>
<li>Dimensions WxDxH: 1934x78x244mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-024-S.jpg"><img alt="Dsa 024 S - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-024-S.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Spray Dispenser - 800ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["164"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["164"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["164"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["164"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["164"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-024-S</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 500ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS Plastic</li>
<li>Nozzle : Spray</li>
<li>Capacity : 800ml</li>
<li>Drop Volume : 1 ml</li>
<li>Dimensions WxDxH: 130x95x235mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-025.jpg"><img alt="Dsa 025 - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-025.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Soap/ Sanitiser Dispenser - 500ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["165"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["165"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["165"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["165"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["165"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-025</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 500ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS Plastic</li>
<li>Nozzle : Drop (Ideal for Soap and Gel Sanitiser)</li>
<li>Capacity : 500ml</li>
<li>Drop Volume : 1-2 ml</li>
<li>Dimensions WxDxH: 95x82x184 mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-026.jpg"><img alt="Dsa 026 - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-026.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Soap/ Sanitiser Dispenser - 1000ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["166"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["166"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["166"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["166"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["166"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-026</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta SS Soap Dispenser - 500ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS Plastic</li>
<li>Nozzle : Drop (Ideal for Soap and Gel Sanitiser)</li>
<li>Capacity : 1000ml</li>
<li>Drop Volume : 1-2 ml</li>
<li>Dimensions WxDxH: 127x112x225 mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="Automatic-Dispenser"/>
<h1 align="center">Automatic Dispenser</h1><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-006-S-AT.jpg"><img alt="Dsa 006 S At - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-006-S-AT.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Automatic Spray Sanitiser dispenser - 1000 ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["131"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["131"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["131"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["131"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["131"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : DSA-006-S-AT</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one1" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two1">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one1">
                                    <ul> 
                                        <p>Automatic Spray Sanitiser dispenser - 1000 ml</p>       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two1">
<ul>
<li>Material : ABS Plastic</li>
<li>Capacity : 1000ml</li>
<li>Drop Volume : 1ml</li>
<li>Nozzle : Spray</li>
<li>Detection Zone : 2-10cm</li>
<li>Suitable : Alcohol, Liquid Alcohol, Liquid Sanitizers, Sterilised Iodine</li>
<li>Battery Required : 4*C size Duracell/Alkaline Battery (not included)</li>
<li>Provision for electric operations through adaptor of 6 volt 1 ampere (not included)</li>
<li>Dimensions WxDxH: 127x110x260mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/"><img alt=" - Soap Dispenser | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Automatic Soap/Sanitiser dispenser - 1000 ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["167"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["167"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["167"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["167"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["167"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : DSA-006-AT</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one1" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two1">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one1">
                                    <ul> 
                                        <p>Automatic Spray Sanitiser dispenser - 1000 ml</p>       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two1">
<ul>
<li>Material : ABS Plastic</li>
<li>Capacity : 1000ml</li>
<li>Drop Volume : 1ml</li>
<li>Nozzle : Drop</li>
<li>Detection Zone : 2-10cm</li>
<li>Suitable for : Gel based Sanitiser or Liquid soap</li>
<li>Battery Required : 4*C size Duracell/Alkaline Battery (not included)</li>
<li>Provision for electric operations through adaptor of 6 volt 1 ampere (not included)</li>
<li>Dimensions WxDxH: 127x110x260mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-023-S-AT.jpg"><img alt="Dsa 023 S At - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-023-S-AT.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Automatic Sanitiser Spray Dispenser-2400ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["132"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["132"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["132"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["132"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["132"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-023-S-AT</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one9" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two9">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one9">
                                    <ul> 
                                        <p>Automatic Sanitiser Spray Dispenser-2400ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two9">
<ul>
<li>Material : ABS Plastic</li>
<li>Capacity : 2400ml</li>
<li>Spray Volume : 10 ml-100 ml according sense time.1 sec - 10 ml,2 sec - 15 ml,till 1 min.-100 ml</li>
<li>Dimensions WxDxH: 205x90x220mm</li>
<li>Operating Voltage : AC 220-240V 50/60Hz</li>
<li>Sensing Range : 5-12 cm</li>
<li>Power : 20W</li>
<li>Meets IPX1 Waterproof Classification</li>
<li>Infrared Auto Shut Off</li>
<li>Electric wiring included</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/soap dispenser/ABS/DSA-027-AT.jpg"><img alt="Dsa 027 At - Abs | Delta Solutions" src="images/product-images/Dispensers/soap dispenser/ABS/DSA-027-AT.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Auomatic Soap/Sanitiser Dispenser - 1000 ml</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["168"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["168"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["168"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["168"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["168"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>Item Code : DSA-027-AT</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one9" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two9">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one9">
                                    <ul> 
                                        <p>Automatic Sanitiser Spray Dispenser-2400ml</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two9">
<ul>
<li>Material : ABS Plastic</li>
<li>Capacity : 1000ml</li>
<li>Drop Volume : 1- 2 ml</li>
<li>Nozzle : Drop</li>
<li>Detection Zone : 2-10cm</li>
<li>Suitable for : Gel based Sanitiser or Liquid soap</li>
<li>Battery Required : 4*C size Duracell/Alkaline Battery (not included)</li>
<li>Dimensions WxDxH: 127x110x260mm</li>
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
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>