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
<title>Delta Paper Tissue</title>
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
<meta content="Explore a wide range of Tissue Paper of different variety for commercial purpose" name="description"/>
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
<link href="https://delta-solutions.in/paper-tissue" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 40px; width: 400px; height: 400px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 28px;}
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
<li class="active"><a href="#PP001">Delta Centre Feed Roll</a></li>
<li><a href="#PP003">Delta Cube Napkin</a></li>
<li><a href="#PP005">Delta Face Tissue Box</a></li>
<li><a href="#PP008">Delta HBT Paper</a></li>
<li><a href="#PP010">Delta HRT Roll</a></li>
<li><a href="#PP012">Delta M Fold Paper Towels</a></li>
<li><a href="#PP011">Kitchen Roll (2)</a></li>
<li><a href="#PP014">Delta Paper Napkin (4)</a></li>
<!--<li><a href="#PP017">Paper Napkin 40cm x 40cm</a></li>-->
<li><a href="#PP018">Delta Toilet Roll (2)</a></li>
<!--<li><a href="#PP019">Toilet Roll - 90gm</a></li>-->
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="cleaning-consumables.php">Cleaning Consumables</a></li>
<li>Paper Tissue</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('PP001');">Delta Centre Feed Roll</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PP003');">Delta Cube Napkin</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PP005');">Delta Face Tissue Box</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PP008');">Delta HBT Paper</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PP010');">Delta HRT Roll</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PP012');">Delta M Fold Paper Towels</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PP011');">Kitchen Roll (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PP014');">Delta Paper Napkin (4)</a></li>
<!--<li><a href="javascript:void(0)" onclick="slideTo('PP017');">Paper Napkin 40cm x 40cm</a></li>-->
<li><a href="javascript:void(0)" onclick="slideTo('PP018');">Delta Toilet Roll (2)</a></li>
<!--<li><a href="javascript:void(0)" onclick="slideTo('PP019');">Toilet Roll - 90gm</a></li>-->
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="PP001">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Paper Tissue</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-001.jpg"><img alt="Pp 001 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Centre Feed Roll </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["93"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["93"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["93"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["93"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["93"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-001</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one1" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two1">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one1">
                                    <ul> 
                                                      
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two1">
<ul>
<li>Size : 20cm x 240mtr</li>
<li>No of pulls : Na</li>
<li>Ply : 1</li>
<li>Specs : 6 Rolls/Case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP003"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-005.jpg"><img alt="Pp 005 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-005.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Cube Napkin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["94"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["94"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["94"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["94"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["94"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-003</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one2" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two2">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one2">
                                    <ul> 
                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two2">
<ul>
<li>Size : 21cm x 27cm</li>
<li>No of pulls : 100</li>
<li>Ply : 2</li>
<li>Specs : 100 Packets/Case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP005"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-005.jpg"><img alt="Pp 005 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-005.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Face Tissue Box</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["95"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["95"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["95"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["95"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["95"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-005</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Size : </li>
<li>No of pulls : 100</li>
<li>Ply : 2</li>
<li>Specs : 60 box/case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP008"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-008.jpg"><img alt="Pp 008 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-008.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta HBT Paper</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["96"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["96"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["96"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["96"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["96"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-008</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two4">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                                     
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two4">
<ul>
<li>Size : </li>
<li>No of pulls : 125</li>
<li>Ply : 2</li>
<li>Specs : 100 Roll/Case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP010"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-010.jpg"><img alt="Pp 010 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-010.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta HRT Roll</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["97"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["97"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["97"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["97"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["97"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-010</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one5" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two5">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one5">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two5">
<ul>
<li>Size : 20cm x 150 mtr</li>
<li>No of pulls : na</li>
<li>Ply : 1</li>
<li>Specs : 12 Roll/Case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP012"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-012.jpg"><img alt="Pp 012 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-012.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta M Fold Paper Towels</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["98"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["98"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["98"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["98"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["98"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-012</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one6" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two6">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one6">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two6">
<ul>
<li>Size : 20cm x 22cm</li>
<li>No of pulls : 125</li>
<li>Ply : 1</li>
<li>Specs : 40 Packets/Case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP011"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/4 Kitchen Roll.jpg"><img alt="4 Kitchen Roll - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/4 Kitchen Roll.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Kitchen Roll</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["159"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["159"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["159"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["159"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["159"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-011</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one5" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two5">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one5">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two5">
<ul>
<li>Width: 20 cm</li>
<li>Weight : 2 kgs</li>
<li>RC paper</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP013"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/4 Kitchen Roll.jpg"><img alt="4 Kitchen Roll - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/4 Kitchen Roll.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Kitchen Roll</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["160"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["160"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["160"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["160"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["160"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-013</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one6" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two6">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one6">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two6">
<ul>
<li>Size : 20cm x 22cm</li>
<li>No of pulls : 150</li>
<li>Specs : 40 Packets/Case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP014"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-014.jpg"><img alt="Pp 014 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-014.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Paper Napkin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["99"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["99"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["99"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["99"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["99"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-014</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one7" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two7">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one7">
                                    <ul> 
                                                      
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two7">
<ul>
<li>Size : 28cm x 28cm</li>
<li>No of pulls : 100</li>
<li>Ply : 1</li>
<li>Specs : 60 Packets/case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP015"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-015.jpg"><img alt="Pp 015 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-015.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Paper Napkin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["100"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["100"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["100"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["100"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["100"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-015</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one8" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two8">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one8">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two8">
<ul>
<li>Size : 30cm x 30cm</li>
<li>No of pulls : 100</li>
<li>Ply : 1</li>
<li>Specs : 60 Packets/case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP016"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-016.jpg"><img alt="Pp 016 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-016.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Paper Napkin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["101"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["101"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["101"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["101"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["101"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-016</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one9" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two9">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one9">
                                    <ul> 
                                                        
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two9">
<ul>
<li>Size : 30cm x 30cm</li>
<li>No of pulls : 50</li>
<li>Ply : 2</li>
<li>Specs : 60 Packets/case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP017"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-017.jpg"><img alt="Pp 017 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-017.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Paper Napkin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["102"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["102"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["102"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["102"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["102"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-017</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one10" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two10">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one10">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two10">
<ul>
<li>Size : 40cm x 40cm</li>
<li>No of pulls : 50</li>
<li>Ply : 2</li>
<li>Specs : 40 Packets/case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP018"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-018.jpg"><img alt="Pp 018 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-018.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Toilet Roll - 120gm</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["103"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["103"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["103"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["103"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["103"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-018</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one11" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two11">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one11">
                                    <ul> 
                                                 
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two11">
<ul>
<li>Size : 10cm x ?</li>
<li>No of pulls : 72</li>
<li>Ply : 2</li>
<li>Specs : 72 Rolls/case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PP019"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Paper Tissue/PP-019.jpg"><img alt="Pp 019 - Paper Tissue | Delta Solutions" src="images/product-images/Paper Tissue/PP-019.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Toilet Roll - 90gm</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["104"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["104"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["104"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["104"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["104"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : PT-019</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one12" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two12">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one12">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two12">
<ul>
<li>Size : 10cm x ?</li>
<li>No of pulls : na</li>
<li>Ply : 2</li>
<li>Specs : 100 Rolls/case</li>
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