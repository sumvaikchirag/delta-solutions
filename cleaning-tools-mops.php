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
<title>Products</title>
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
</head>
<body>
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

    table, td {
      border: 1px solid #777;
      border-collapse: collapse;
      text-align: center;
      height: 30px;
      padding: 3px;
    }   
     th {
      border: 1px solid #777;
      border-collapse: collapse;
      text-align: center;
      height: 30px;
      padding: 3px;
      background-color: #e1e1e1;
      color: #666;
      
    }  
   
    </style>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#Dust-Mop-Frame">Aluminium Dust Mop Frame (3)</a></li>
<li><a href="#Dust-Mop-Refill">Aluminium Dust Mop Refill (3)</a></li>
<li><a href="#Acrylic-Mop-Frame">Acrylic Mop Frame</a></li>
<li><a href="#Acrylic-Mop-Refill">Acrylic Mop Refill</a></li>
<li><a href="#Kent-Mop-Frame">Kent Mop Frame</a></li>
<li><a href="#Cotton-Refill">Kent Mop Cotton Refill (2)</a></li>
<li><a href="#Microfiber-Refill">Kent Mop Microfiber Refill</a></li>
<li><a href="#Break-Mop-Frame">Break Mop Frame</a></li>
<li><a href="#Break-Mop-Refill">Break Mop Refill</a></li>
<li><a href="#TH-001">Delta Aluminium Handle</a></li>
<li><a href="#TH-002">Delta Aluminium Handle - Telescopic</a></li>
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
<li><a href="cleaning-tools.php">Cleaning Tools</a></li>
<li>Mops &amp; Handles</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Dust-Mop-Frame');">Aluminium Dust Mop Frame (3)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Dust-Mop-Refill');">Aluminium Dust Mop Refill (3)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Acrylic-Mop-Frame');">Acrylic Mop Frame</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Acrylic-Mop-Refill');">Acrylic Mop Refill</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Kent-Mop-Frame');">Kent Mop Frame</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Cotton-Refill');">Kent Mop Cotton Refill (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Microfiber-Refill');">Kent Mop Microfiber Refill</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Break-Mop-Frame');">Break Mop Frame</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Break-Mop-Refill');">Break Mop Refill</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TH-001');">Delta Aluminium Handle</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TH-002');">Delta Aluminium Handle - Telescopic</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Dust-Mop-Frame">
<div class="auto-container">
<div class="sec-title text-center">
<h2>Mops &amp; Handles</h2>
</div>
<h1 align="center">Mops</h1><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Dust Mop Frame</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["205"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["205"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["205"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["205"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["205"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-001</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<ul>
<li>Size - 90 cms</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Dust Mop Frame</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["206"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["206"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["206"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["206"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["206"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-003</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2">
<ul>
<li>Size - 60 cms</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Dust Mop Frame</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["207"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["207"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["207"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["207"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["207"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-005</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3">
<ul>
<li>Size - 40 cms</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Dust-Mop-Refill"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Dust Mop Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["208"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["208"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["208"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["208"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["208"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-002-BL</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<ul>
<li>With color coded tags</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Dust Mop Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["209"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["209"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["209"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["209"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["209"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-004-BL</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5">
<ul>
<li>With color coded tags</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Dust Mop Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["210"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["210"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["210"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["210"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["210"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-006-BL</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one6">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one6">
<ul>
<li>With color coded tags</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Acrylic-Mop-Frame"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Acrylic Mop Frame</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["211"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["211"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["211"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["211"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["211"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-007</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one7">
<ul>
<li>Size : 60cm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Acrylic-Mop-Refill"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Acrylic Mop Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["212"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["212"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["212"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["212"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["212"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-008</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one8">
<ul>
<li>Size - 60cm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Kent-Mop-Frame"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/TM-009-RD.jpg"><img alt="Tm 009 Rd - Mops | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/TM-009-RD.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Kent Mop Frame</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["213"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["213"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["213"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["213"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["213"]["code"]; ?>" name="remark" value="" />
                                </p></h4>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one9">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one9">
<p><b>Other Colors Available</b></p>
<table style="max-width: 500px;margin: 10px 5px;">
<tr>
<th width="200px"><b>Item Code</b></th>
<th width="200px"><b>Colors</b></th>
</tr>
<tr>
<td><b>TM-009-BL</b></td>
<td>Blue</td>
</tr>
<tr>
<td><b>TM-009-GN</b></td>
<td>Green</td>
</tr>
<tr>
<td><b>TM-009-YW</b></td>
<td>Yellow</td>
</tr>
<tr>
<td><b>TM-009-RD</b></td>
<td>Red</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Cotton-Refill"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/TM-010.jpg"><img alt="Tm 010 - Mops | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/TM-010.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Kent Mop Cotton Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["214"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["214"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["214"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["214"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["214"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-010</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one10">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one10">
<ul>
<li>Color : white</li>
<li>350 gms</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Kent Mop Cotton Refill </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["215"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["215"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["215"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["215"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["215"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one11">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one11">
<p><b>Other Colors Available</b></p>
<table style="max-width: 500px;margin: 10px 5px;">
<tr>
<th width="200px"><b>Item Code</b></th>
<th width="150px"><b>Colors</b></th>
<th width="150px"><b></b></th>
</tr>
<tr>
<td><b>TM-011-BL</b></td>
<td>Blue</td>
<td>325 gms</td>
</tr>
<tr>
<td><b>TM-011-GN</b></td>
<td>Green</td>
<td>325 gms</td>
</tr>
<tr>
<td><b>TM-011-YW</b></td>
<td>Yellow</td>
<td>325 gms</td>
</tr>
<tr>
<td><b>TM-011-RD</b></td>
<td>Red</td>
<td>325 gms</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Microfiber-Refill"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/TM-012-BL.jpg"><img alt="Tm 012 Bl - Mops | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/TM-012-BL.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Kent Mop Microfiber Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["216"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["216"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["216"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["216"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["216"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one12">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one12">
<p><b>Other Colors Available</b></p>
<table style="max-width: 500px;margin: 10px 5px;">
<tr>
<th width="200px"><b>Item Code</b></th>
<th width="200px"><b>Colors</b></th>
</tr>
<tr>
<td><b>TM-012-BL</b></td>
<td>Blue</td>
</tr>
<tr>
<td><b>TM-012-GN</b></td>
<td>Green</td>
</tr>
<tr>
<td><b>TM-012-YW</b></td>
<td>Yellow</td>
</tr>
<tr>
<td><b>TM-012-RD</b></td>
<td>Red</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Break-Mop-Frame"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Break Mop Frame</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["217"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["217"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["217"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["217"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["217"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-013</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one13">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one13">
<ul>
<li>Size : 45cm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Break-Mop-Refill"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Mops/TM-014-BL.jpg"><img alt="Tm 014 Bl - Mops | Delta Solutions" src="images/product-images/Cleaning Tools/Mops/TM-014-BL.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Break Mop Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["218"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["218"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["218"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["218"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["218"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TM-014-BL</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one14">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one14">
<ul>
<li>Size : 45cm</li>
<li>With color coded tags</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TH-001"/>
<h1 align="center">Handles</h1><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Handles/TH-001.jpg"><img alt="Th 001 - Handles | Delta Solutions" src="images/product-images/Cleaning Tools/Handles/TH-001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Handle</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["219"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["219"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["219"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["219"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["219"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TH-001</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<ul>
<li>Common for Break Mop</li>
<li>One Mop</li>
<li>Aluminium Dust Mop</li>
<li>Dust mop Wire</li>
<li>Kent mop</li>
<li>Floor Squeezee</li>
<li>Height - 4.5 ft</li>
<li>Length - 22mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TH-002"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Handles/TH-002.jpg"><img alt="Th 002 - Handles | Delta Solutions" src="images/product-images/Cleaning Tools/Handles/TH-002.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Aluminium Handle - Telescopic</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["220"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["220"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["220"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["220"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["220"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TH-002</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2">
<ul>
<li>Minimum Length - 36"</li>
<li>Maximum Length - 73"</li>
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
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="js/map-script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>