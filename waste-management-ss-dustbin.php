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
<title>Delta Stainless Steel Dustbins</title>
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
<meta content="High quality Stainless Steel SS dustbins for commercial purpose from Delta Solutions" name="description"/>
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
<link href="https://delta-solutions.in/waste-management-ss-dustbin" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 1000px; width:100%;}
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
<li class="active"><a href="#Plain">Open Plain</a></li>
<li><a href="#Perforated">Open Perforated</a></li>
<li><a href="#Pedal-Plain">Pedal</a></li>
<li><a href="#Swing">Swing</a></li>
<li><a href="#Ashtray">Ashtray</a></li>
<li><a href="#2-Chamber">2 Chamber</a></li>
<li><a href="#3-Chamber">3 Chamber</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="waste-management.php">Waste Management</a></li>
<li>Stainless Steel Dustbin</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Plain');">Open Plain</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Perforated');">Open Perforated</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Pedal-Plain');">Pedal</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Swing');">Swing</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Ashtray');">Ashtray</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('2-Chamber');">2 Chamber</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('3-Chamber');">3 Chamber</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Plain">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Stainless Steel Dustbin</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/SS Dustbin/SS Plain Dustbin.jpg"><img alt="Ss Plain Dustbin - Ss Dustbin | Delta Solutions" src="images/product-images/Waste Management/SS Dustbin/SS Plain Dustbin.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Open Plain Dustbin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["184"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["184"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["184"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["184"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["184"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(2350)</h5> --><br/>
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
<p><b>Other Sizes Available</b></p>
<table style="max-width: 600px;margin: 10px 5px;">
<tr>
<th width="150px"><b>Item Code</b></th>
<th width="300px"><b>Dimension (Diameter x Height)</b></th>
<th width="150px"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BS-001-0710</b></td>
<td>7"x10"</td>
<td>6 ltr</td>
</tr>
<tr>
<td><b>BS-001-0812</b></td>
<td>8"x12"</td>
<td>10 ltr</td>
</tr>
<tr>
<td><b>BS-001-1014</b></td>
<td>10"x14"</td>
<td>18 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Perforated"/>
<div class="row clearfix">
<div align="center" class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="vertical-item">
<div align="center" class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/SS Dustbin/SS Perforated Dustbin.jpg"><img alt="Ss Perforated Dustbin - Ss Dustbin | Delta Solutions" src="images/product-images/Waste Management/SS Dustbin/SS Perforated Dustbin.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
<div class="vertical-item">
<div class="item-content">
<h4><span>Open Perforated Dustbin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["185"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["185"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["185"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["185"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["185"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6500)</h5> --><br/>
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
<p><b>Other Sizes Available</b></p>
<table style="max-width: 600px;margin: 10px 5px;">
<tr>
<th width="150px"><b>Item Code</b></th>
<th width="300px"><b>Dimension (Diameter x Height)</b></th>
<th width="150px"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BS-002-0710</b></td>
<td>7"x10"</td>
<td>6 ltr</td>
</tr>
<tr>
<td><b>BS-002-0812</b></td>
<td>8"x12"</td>
<td>10 ltr</td>
</tr>
<tr>
<td><b>BS-002-1014</b></td>
<td>10"x14"</td>
<td>18 ltr</td>
</tr>
<tr>
<td><b>BS-002-1218</b></td>
<td>12"x18"</td>
<td>33 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Pedal-Plain"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/SS Dustbin/SS Pedal Dustbin.jpg"><img alt="Ss Pedal Dustbin - Ss Dustbin | Delta Solutions" src="images/product-images/Waste Management/SS Dustbin/SS Pedal Dustbin.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Pedal Dustbin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["186"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["186"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["186"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["186"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["186"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(8850)</h5> --><br/>
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
<p><b>Other Sizes Available</b></p>
<table style="max-width: 600px;margin: 10px 5px;">
<tr>
<th width="150px"><b>Item Code</b></th>
<th width="300px"><b>Dimension (Diameter x Height)</b></th>
<th width="150px"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BS-003-05</b></td>
<td>7"x11"</td>
<td>5 ltr</td>
</tr>
<tr>
<td><b>BS-003-07</b></td>
<td>8"x13"</td>
<td>7 ltr</td>
</tr>
<tr>
<td><b>BS-003-11</b></td>
<td>10"x15"</td>
<td>11 ltr</td>
</tr>
<tr>
<td><b>BS-003-20</b></td>
<td>12"x21"</td>
<td>20 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Swing"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/SS Dustbin/SS Swing Dustbin.jpg"><img alt="Ss Swing Dustbin - Ss Dustbin | Delta Solutions" src="images/product-images/Waste Management/SS Dustbin/SS Swing Dustbin.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Swing Dustbin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["187"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["187"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["187"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["187"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["187"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5> --><br/>
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
<p><b>Other Sizes Available</b></p>
<table style="max-width: 600px;margin: 10px 5px;">
<tr>
<th width="150px"><b>Item Code</b></th>
<th width="300px"><b>Dimension (Diameter x Height)</b></th>
<th width="150px"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BS-004-0812</b></td>
<td>8"x12"</td>
<td>10 ltr</td>
</tr>
<tr>
<td><b>BS-004-0824</b></td>
<td>8"x24"</td>
<td>20 ltr</td>
</tr>
<tr>
<td><b>BS-004-1028</b></td>
<td>10"x28"</td>
<td>36 ltr</td>
</tr>
<tr>
<td><b>BS-004-1228</b></td>
<td>12"x28"</td>
<td>50 ltr</td>
</tr>
<tr>
<td><b>BS-004-1232</b></td>
<td>12"x32"</td>
<td></td>
</tr>
<tr>
<td><b>BS-004-1428</b></td>
<td>14"x28"</td>
<td>70 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Ashtray"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/SS Dustbin/SS Ash Can Dustbin.jpg"><img alt="Ss Ash Can Dustbin - Ss Dustbin | Delta Solutions" src="images/product-images/Waste Management/SS Dustbin/SS Ash Can Dustbin.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Ashtray Dustbin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["188"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["188"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["188"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["188"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["188"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(7150)</h5> --><br/>
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
<p><b>Other Sizes Available</b></p>
<table style="max-width: 600px;margin: 10px 5px;">
<tr>
<th width="150px"><b>Item Code</b></th>
<th width="300px"><b>Dimension (Diameter x Height)</b></th>
<th width="150px"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BS-005-0824</b></td>
<td>8"x24"</td>
<td>20 ltr</td>
</tr>
<tr>
<td><b>BS-005-0828</b></td>
<td>8"x28"</td>
<td>23 ltr</td>
</tr>
<tr>
<td><b>BS-005-1028</b></td>
<td>10"x28"</td>
<td>36 ltr</td>
</tr>
<tr>
<td><b>BS-005-1428</b></td>
<td>14"x28"</td>
<td>70 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="2-Chamber"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/SS Dustbin/"><img alt=" - Waste Management | Delta Solutions" src="images/product-images/Waste Management/SS Dustbin/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>2 Chamber Dustbin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["189"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["189"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["189"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["189"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["189"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(BS-006-60)</h5><br/>
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
<li>2 chambers</li>
<li>Capacity : 60 ltr x 2</li>
<li>Outer covering with vinyl</li>
<li>SS 202 Grade</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="3-Chamber"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/SS Dustbin/"><img alt=" - Waste Management | Delta Solutions" src="images/product-images/Waste Management/SS Dustbin/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3 Chamber Dustbin</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["190"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["190"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["190"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["190"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["190"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(BS-007-60)</h5><br/>
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
<li>3 chambers</li>
<li>Capacity : 60 ltr x 3</li>
<li>Outer covering with vinyl</li>
<li>SS 202 Grade</li>
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