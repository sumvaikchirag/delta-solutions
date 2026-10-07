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
<li class="active"><a href="#Pad-17">3M Floor Pad 17"</a></li>
<li><a href="#Pad-20">3M Floor Pads 20"</a></li>
<li><a href="#Clean-Shine">3M Floor Pad - 17" - Clean &amp; Shine</a></li>
<li><a href="#Pad-White">3M Light Duty Pad White</a></li>
<li><a href="#Microfiber">3M Microfiber Cloth</a></li>
<li><a href="#Scrub-Sponge">3M Scotch Brite 2 In1 Scrub Sponge</a></li>
<li><a href="#Heavy-Duty">3M Scotch Brite Heavy Duty</a></li>
<li><a href="#Power-Pad">3M Scotch Brite Power Pad</a></li>
<li><a href="#Scrub-Pad">3M Scotch Brite Scrub Pad</a></li>
<li><a href="#Sponge-Wipe">3M Sponge Wipe</a></li>
<li><a href="#Steel-Cleaner">3M Stainless Steel Cleaner</a></li>
<li><a href="#Triggers">3M Sharpshooter with Triggers</a></li>
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
<li>Wipes and Scrub</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Pad-17');">3M Floor Pad 17"</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Pad-20');">3M Floor Pads 20"</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Clean-Shine');">3M Floor Pad - 17" - Clean &amp; Shine</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Pad-White');">3M Light Duty Pad White</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Microfiber');">3M Microfiber Cloth</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Scrub-Sponge');">3M Scotch Brite 2 In1 Scrub Sponge</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Heavy-Duty');">3M Scotch Brite Heavy Duty</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Power-Pad');">3M Scotch Brite Power Pad</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Scrub-Pad');">3M Scotch Brite Scrub Pad</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Sponge-Wipe');">3M Sponge Wipe</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Steel-Cleaner');">3M Stainless Steel Cleaner</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Triggers');">3M Sharpshooter with Triggers</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Pad-17">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Wipes and Scrub</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/17inch pads/3m pads white.jpg"><img alt="3M Pads White - 17Inch Pads | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/17inch pads/3m pads white.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pad 17"</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["184"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["184"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["184"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["184"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["184"]["code"]; ?>" name="remark" value="" />

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
<p><b>Other Colors Available</b></p>
<table style="max-width: 500px;margin: 10px 5px;">
<tr>
<th width="200px"><b>Colors</b></th>
<th width="300px"><b>Dimension (Diameter)</b></th>
</tr>
<tr>
<td><b>White</b></td>
<td>17"</td>
</tr>
<tr>
<td><b>Black</b></td>
<td>17"</td>
</tr>
<tr>
<td><b>Blue</b></td>
<td>17"</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>17"</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix" style="display:none">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/17inch pads/3m pads black.jpg"><img alt="3M Pads Black - 17Inch Pads | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/17inch pads/3m pads black.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pads 17" Black</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["185"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["185"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["185"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["185"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["185"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
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
<li>Color : Black</li>
<li>Diameter - 17"</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Pad-20"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/20inch pads/3m pads green.jpg"><img alt="3M Pads Green - 20Inch Pads | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/20inch pads/3m pads green.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pads 20"</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["185"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["185"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["185"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["185"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["185"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two7">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                                     
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two7">
<p><b>Other Colors Available</b></p>
<table style="max-width: 500px;margin: 10px 5px;">
<tr>
<th width="200px"><b>Colors</b></th>
<th width="300px"><b>Dimension (Diameter)</b></th>
</tr>
<tr>
<td><b>Green / Blue</b></td>
<td>20"</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>20"</td>
</tr>
<tr>
<td><b>White</b></td>
<td>20"</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix" style="display:none">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/20inch pads/3m pads white.jpg"><img alt="3M Pads White - 20Inch Pads | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/20inch pads/3m pads white.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pads 20" White</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["190"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["190"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["190"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["190"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["190"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two9">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                                     
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two9">
<ul>
<li>Color : White</li>
<li>Diameter - 20"</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Clean-Shine"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/CLEAN &amp; SHINE PAD.jpg"><img alt="Clean &amp; Shine Pad - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/CLEAN &amp; SHINE PAD.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pads 17" Clean &amp; Shine</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["186"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["186"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["186"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["186"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["186"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two10">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                                     
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two10">
<ul>
<li>Diameter - 17"</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Pad-White"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/Light Duty Pad.jpg"><img alt="Light Duty Pad - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/Light Duty Pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Light Duty Pad White</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["187"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["187"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["187"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["187"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["187"]["code"]; ?>" name="remark" value="" />
                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two11">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                                     
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two11">
<ul>
<li>Use for stainless steel, chrome, coPTer, porcelain and ceramic.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Microfiber"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/microfibre cloth/3M MICROFIBER CLOTH - BLUE.jpg"><img alt="3 M Microfiber Cloth Blue - Microfibre Cloth | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/microfibre cloth/3M MICROFIBER CLOTH - BLUE.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Microfiber Cloth - Blue</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["188"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["188"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["188"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["188"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["188"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two12">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                                     
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two12">
<p><b>Other Colors Available</b></p>
<table style="max-width: 500px;margin: 10px 5px;">
<tr>
<th width="100px"><b>Colors</b></th>
<th width="200px"><b></b></th>
<th width="200px"><b></b></th>
</tr>
<tr>
<td><b>Blue</b></td>
<td>10 pcs per packet</td>
<td>5 packets per case</td>
</tr>
<tr>
<td><b>Green</b></td>
<td>10 pcs per packet</td>
<td>5 packets per case</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>10 pcs per packet</td>
<td>5 packets per case</td>
</tr>
<tr>
<td><b>Yellow</b></td>
<td>10 pcs per packet</td>
<td>5 packets per case</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix" style="display:none">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/microfibre cloth/3M MICROFIBER CLOTH - YELLOW.jpg"><img alt="3 M Microfiber Cloth Yellow - Microfibre Cloth | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/microfibre cloth/3M MICROFIBER CLOTH - YELLOW.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Microfiber Cloth - Yellow</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["196"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["196"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["196"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["196"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["196"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!--  <h5>(7150)</h5> --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one5" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two15">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one5">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two15">
<ul>
<li>10 pcs per packet</li>
<li>5 packets per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Scrub-Sponge"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/scrub sponge 2-in-1.jpg"><img alt="Scrub Sponge 2 In 1 - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/scrub sponge 2-in-1.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotch Brite 2 In1 Scrub Sponge</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["189"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["189"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["189"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["189"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["189"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-012)</h5> --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one6" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two16">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one6">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two16">
<ul>
<li>2 pcs per packet</li>
<li>54 packets per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Heavy-Duty"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/Heavy Duty Pad.jpg"><img alt="Heavy Duty Pad - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/Heavy Duty Pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotchbrite Heavy Duty</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["190"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["190"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["190"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["190"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["190"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-014)</h5> --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one7" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two17">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one7">
                                    <ul> 
                                                      
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two17">
<ul>
<li>Size : 9cm x 7.5 cm</li>
<li>2 pcs per packet</li>
<li>54 packets per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Power-Pad"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/Power Pad.jpg"><img alt="Power Pad - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/Power Pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotch Brite Power Pad</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["191"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["191"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["191"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["191"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["191"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-015)</h5> --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one8" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two18">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one8">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two18">
<ul>
<li>20 pcs per box</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Scrub-Pad"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/Scrub pad.jpg"><img alt="Scrub Pad - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/Scrub pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotch Brite - Scrub Pad</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["192"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["192"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["192"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["192"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["192"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-016)</h5> --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one9" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two19">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one9">
                                    <ul> 
                                                        
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two19">
<ul>
<li>Size : 4" x 6"</li>
<li>4 pcs per packet</li>
<li>48 packet per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Sponge-Wipe"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/Sponge Wipe.jpg"><img alt="Sponge Wipe - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/Sponge Wipe.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Sponge Wipe</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["193"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["193"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["193"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["193"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["193"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one10" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two20">Specifications</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one10">
                                    <ul> 
                                                       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two20">
<ul>
<li>Size : 15cm x 18 cm</li>
<li>4 pcs per packet</li>
<li>30 packet per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Steel-Cleaner"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/3M Stainless Steel Cleaner.jpg"><img alt="3 M Stainless Steel Cleaner - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/3M Stainless Steel Cleaner.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Stainless Steel Cleaner</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["194"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["194"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["194"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["194"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["194"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(2350)</h5> --> <br/>
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
<li>621ml (21 fl.oz.)</li>
<li>12 pcs per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Triggers"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes and scrubs/Sharpshooter.jpg"><img alt="Sharpshooter - Wipes And Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes and scrubs/Sharpshooter.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Sharpshooter with Triggers</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["195"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["195"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["195"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["195"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["195"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!--  <h5>(6500)</h5>      --> <br/>
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
<li>1 ltr</li>
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