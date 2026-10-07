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
<title>Cleaning Tools Window | Delta Solutions</title>
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
<meta content="Buy professional window cleaning tools from Delta Solutions. Window squeegees, scrapers, washers and accessories for streak-free commercial cleaning." name="description"/><link href="https://delta-solutions.in/cleaning-tools-window" rel="canonical"/></head>
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
<!-- <li ><a href="#IPC">IPC Window Combi - Microtiger (Pulex) </a></li> -->
<li class="active"><a href="#TWD-001">Window Squeegee (2)</a></li>
<li><a href="#TWD-003">Window Washer</a></li>
<li><a href="#TWD-004">Window Washer Refill</a></li>
<li><a href="#TWD-005">Window Combi (2)</a></li>
<li><a href="#TWD-006">Rubber Strip</a></li>
<li><a href="#TWD-007">Window Cleaning Trolley</a></li>
<li><a href="#TWD-008">Floor Scrapper</a></li>
<li><a href="#TWD-009">Floor Scrapper Blade</a></li>
<li><a href="#TWD-010">Mini Scrapper</a></li>
<li><a href="#TWD-011">Mini Scrapper Blade</a></li>
<li><a href="#TWD-012">Telescopic Pole (2)</a></li>
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
<li>Window Tools</li>
</ul>
<div class="page-scroller">
<ul>
<!-- <li><a href="javascript:void(0)" onclick="slideTo('IPC');">IPC Window Combi - Microtiger (Pulex) </a></li>    -->
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('TWD-001');">Window Squeegee (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-003');">Window Washer</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-004');">Window Washer Refill</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-005');">Window Combi (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-006');">Rubber Strip</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-007');">Window Cleaning Trolley</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-008');">Floor Scrapper</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-009');">Floor Scrapper Blade</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-010');">Mini scrapper</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-011');">Mini scrapper Blade</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWD-012');">Telescopic Pole (2)</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="TWD-001">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Window Tools</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-001.jpg"><img alt="Twd 001 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Window Squeegee</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["234"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["234"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["234"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["234"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["234"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-001</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2">
<ul>
<li>14" (35cm)</li>
<li>Used for streak-free glass cleaning</li>
<li>Can be used with a telescopic pole for high access cleaning</li>
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
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-002.jpg"><img alt="Twd 002 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-002.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Window Squeegee</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["235"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["235"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["235"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["235"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["235"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-002</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3">
<ul>
<li>16" (40cm)</li>
<li>Used for streak-free glass cleaning</li>
<li>Can be used with a telescopic pole for high access cleaning</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-003"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-003.jpg"><img alt="Twd 003 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-003.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Window Washer</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["236"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["236"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["236"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["236"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["236"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-003</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<ul>
<li>14" (35cm)</li>
<li>Microfiber cloth ensures proper application of glass cleaning chemical on the glass</li>
<li>Can be used with a telescopic pole for high access cleaning</li>
<li>Window washer refill to be put under the tab of Window washer only.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-004"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-004.jpg"><img alt="Twd 004 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-004.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Window Washer Refill</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["237"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["237"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["237"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["237"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["237"]["code"]; ?>" name="remark" value="" />
                                </p></h4>
<h5>Item Code : TWD-004</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5">
<ul>
<li>14" (35cm)</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-005"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-005.jpg"><img alt="Twd 005 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-005.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Window Combi</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["238"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["238"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["238"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["238"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["238"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-005</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one6">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one6">
<table style="max-width: 500px;margin: 10px 5px;">
<tr>
<th width="300px"><b>Dimension (Diameter)</b></th>
</tr>
<tr>
<td>Round 10" (25cm)</td>
</tr>
<tr>
<td>Round 12" (30cm)</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="IPC"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/IPC MICROTIGER.jpg"><img alt="Ipc Microtiger - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/IPC MICROTIGER.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>IPC Window Combi</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["233"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["233"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["233"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["233"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["233"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>Item Code : TWD-001</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<ul>
<li><b>Dimension (Diameter)</b> : 14"</li>
<li>Squeeze and washer in the same tool</li>
<li>Can be used with a telescopic pole for high access cleaning</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-006"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-006.jpg"><img alt="Twd 006 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-006.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Rubber Strip</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["239"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["239"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["239"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["239"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["239"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-006</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one7">
<ul>
<li>42" (105cm)</li>
<li>Replaceable rubber blade for window squeeze</li>
<li>To be inside the TAB of a window squeegee</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-007"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-007.jpg"><img alt="Twd 007 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-007.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Window Cleaning Trolley</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["240"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["240"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["240"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["240"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["240"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-007</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one8">
<ul>
<li><b>Capacity</b> : 28 ltr</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-008"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-008.jpg"><img alt="Twd 008 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-008.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Floor Scrapper</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["241"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["241"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["241"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["241"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["241"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-008</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one9">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one9">
<li>To be used for removal of stubborn stains and dirt from the floor</li>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-009"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-009.jpg"><img alt="Twd 009 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-009.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Floor Scrapper Blade</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["242"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["242"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["242"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["242"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["242"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-009</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one10">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one10">
<li>Replaceable blade for floor scraper</li>
<li>To be inside the TAB of the Floor scraper</li>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-010"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-010.jpg"><img alt="Twd 010 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-010.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Mini Scrapper</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["243"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["243"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["243"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["243"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["243"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-010</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one11">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one11">
<li>Small pocket scraper for stubborn dirt removal</li>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-011"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-011.jpg"><img alt="Twd 011 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-011.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Mini Scrapper Blade</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["244"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["244"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["244"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["244"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["244"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-011</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one12">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one12">
<ul>
<li>Packet of 5</li>
<li>Replaceable blade for mini scraper</li>
<li>To be inside the TAB of mini scraper</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWD-012"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-012.jpg"><img alt="Twd 012 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-012.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Telescopic Pole</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["245"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["245"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["245"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["245"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["245"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-012</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one13">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one13">
<ul>
<li>4 mtr</li>
<li>3 piece</li>
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
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Window/TWD-013.jpg"><img alt="Twd 013 - Window | Delta Solutions" src="images/product-images/Cleaning Tools/Window/TWD-013.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Telescopic Pole</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["246"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["246"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["246"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["246"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["246"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWD-013</h5> <br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one14">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one14">
<ul>
<li>3 mtr</li>
<li>3 piece</li>
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