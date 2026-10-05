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
<title>Cleaning Tools Wipes | Delta Solutions</title>
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
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet" type="text/css"/>
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
<meta content="Explore microfiber wipes and professional cleaning cloths from Delta Solutions. Ideal for hospitals, hotels, offices and industrial surface cleaning." name="description"/><link href="https://delta-solutions.in/cleaning-tools-wipes" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 20px;  }
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
<li class="active"><a href="#LD">Microfiber Cloth - LD</a></li>
<li><a href="#SD">Microfiber Cloth - SD</a></li>
<li><a href="#Microfiber">3M Microfiber Cloth</a></li>
<li><a href="#Sponge-Wipe">3M Sponge Wipe</a></li>
<li><a href="#MicronQuick">Vileda MicronQuick</a></li>
<li><a href="#NanoTech">Vileda NanoTech Micro</a></li>
<li><a href="#MicroGlass">Vileda MicroGlass</a></li>
<li><a href="#PVAmicro">Vileda PVAmicro</a></li>
<li><a href="#MicronSolo">Vileda MicronSolo</a></li>
<li><a href="#SpillEx">Vileda SpillEx</a></li>
<li><a href="#MultiDuster">Vileda MultiDuster</a></li>
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
<li>Wipes</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('LD');">Microfiber Cloth - LD</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('SD');">Microfiber Cloth - SD</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Microfiber');">3M Microfiber Cloth</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Sponge-Wipe');">3M Sponge Wipe</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('MicronQuick');">Vileda MicronQuick</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('NanoTech');">Vileda NanoTech Micro</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('MicroGlass');">Vileda MicroGlass</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PVAmicro');">Vileda PVAmicro</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('MicronSolo');">Vileda MicronSolo</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('SpillEx');">Vileda SpillEx</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('MultiDuster');">Vileda MultiDuster</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="LD">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Wipes</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<div class="carouselmain" id="mainCarousel">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 BL.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 GN.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 RD.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 YW.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 WH.jpg"/>
</div>
</div>
<div class="carouselnav" id="navCarousel">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 BL.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 GN.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 RD.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 YW.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 WH.jpg"/>
</div>
</div>
<!--  <a href="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 YW.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 YW.jpg" alt=""></a> -->
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Microfiber Cloth - LD</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["201"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["201"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["201"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["201"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["201"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(8850)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1" style="overflow-x:auto;overflow-y:auto;">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="200px"><b>Item Code</b></th>
<th width="200px"><b>Size</b></th>
<th width="150px"><b>Weight</b></th>
<th width="150px"><b>Colors</b></th>
</tr>
<tr>
<td><b>TWP-002-BL</b></td>
<td>40cm x 40cm</td>
<td>280 gsm</td>
<td>Blue</td>
</tr>
<tr>
<td><b>TWP-002-GN</b></td>
<td>40cm x 40cm</td>
<td>280 gsm</td>
<td>Green</td>
</tr>
<tr>
<td><b>TWP-002-RD</b></td>
<td>40cm x 40cm</td>
<td>280 gsm</td>
<td>Red</td>
</tr>
<tr>
<td><b>TWP-002-YW</b></td>
<td>40cm x 40cm</td>
<td>280 gsm</td>
<td>Yellow</td>
</tr>
<tr>
<td><b>TWP-002-GY</b></td>
<td>40cm x 40cm</td>
<td>280 gsm</td>
<td>Grey</td>
</tr>
<tr>
<td><b>TWP-002-WH</b></td>
<td>40cm x 40cm</td>
<td>280 gsm</td>
<td>White</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="SD"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<div class="carouselmain" id="mainCarousel1">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 BL.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 GN.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 RD.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 YW.jpg"/>
</div>
</div>
<div class="carouselnav" id="navCarousel1">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 BL.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 GN.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 RD.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 YW.jpg"/>
</div>
</div>
<!-- <a href="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 RD.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 RD.jpg" alt=""></a> -->
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Microfiber Cloth - SD</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["202"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["202"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["202"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["202"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["202"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2" style="overflow-x:auto;overflow-y:auto;">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="200px"><b>Item Code</b></th>
<th width="200px"><b>Size</b></th>
<th width="150px"><b>Weight</b></th>
<th width="150px"><b>Colors</b></th>
</tr>
<tr>
<td><b>TWP-003-BL</b></td>
<td>40cm x 40cm</td>
<td>350 gsm</td>
<td>Blue</td>
</tr>
<tr>
<td><b>TWP-003-GN</b></td>
<td>40cm x 40cm</td>
<td>350 gsm</td>
<td>Green</td>
</tr>
<tr>
<td><b>TWP-003-RD</b></td>
<td>40cm x 40cm</td>
<td>350 gsm</td>
<td>Red</td>
</tr>
<tr>
<td><b>TWP-003-YW</b></td>
<td>40cm x 40cm</td>
<td>350 gsm</td>
<td>Yellow</td>
</tr>
</table>
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
<div class="carouselmain" id="mainCarousel2">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - BLUE.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - GREEN.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - RED.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - YELLOW.jpg"/>
</div>
</div>
<div class="carouselnav" id="navCarousel2">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - BLUE.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - GREEN.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - RED.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - YELLOW.jpg"/>
</div>
</div>
<!-- <a href="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - BLUE.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - BLUE.jpg" alt=""></a> -->
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Microfiber Cloth</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["203"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["203"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["203"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["203"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["203"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
<li><a data-toggle="tab" href="#two3">Details</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="100px"><b>Colors</b></th>
<th width="200px"><b>Size</b></th>
<th width="100px"><b>Weight</b></th>
<th width="300px"><b>Packing</b></th>
</tr>
<tr>
<td><b>Blue</b></td>
<td>36cm x 36cm</td>
<td></td>
<td>10 pcs per packet; 5 packets per case</td>
</tr>
<tr>
<td><b>Green</b></td>
<td>36cm x 36cm</td>
<td></td>
<td>10 pcs per packet; 5 packets per case</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>36cm x 36cm</td>
<td></td>
<td>10 pcs per packet; 5 packets per case</td>
</tr>
<tr>
<td><b>Yellow</b></td>
<td>36cm x 36cm</td>
<td></td>
<td>10 pcs per packet; 5 packets per case</td>
</tr>
</table>
</div>
<div class="tab-pane" id="two3">
<ul>
<li>Scratch-free, Lint-free</li>
<li>Unprecedented dry dusting and damp polishing ability</li>
<li>Reusable, Machine Washable</li>
<li>Can be used for: Commercial, Industrial, Residential, Manufacturing, Automotive, Office &amp; More</li>
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
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/Sponge Wipe.jpg"><img alt="Sponge Wipe - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/Sponge Wipe.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Sponge Wipe</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["204"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["204"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["204"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["204"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["204"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<ul>
<li>Size : 15cm x 18 cm</li>
<li>Packing : 4 pcs per packet; 30 packets per case</li>
<li>Made of ultra-absorbent cellulose sponge that absorbs 10 times its weight</li>
<li>Absorbs spills in a moment. One swipe cleaning</li>
<li>Does not leave behind any water marks or lint. Scratch free cleaning.</li>
<li>Easy to wash &amp; maintain. Always ready use</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="MicronQuick"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/Vileda MIcronQuick.jpg"><img alt="Vileda Micron Quick - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/Vileda MIcronQuick.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda MicronQuick</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["285"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["285"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["285"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["285"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["285"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
<li><a data-toggle="tab" href="#two5">Details</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="100px"><b>Colors</b></th>
<th width="200px"><b>Size</b></th>
<th width="400px"><b>Packing</b></th>
</tr>
<tr>
<td><b>Blue</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Green</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Yellow</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
</table>
</div>
<div class="tab-pane" id="two5">
<p>Revolutionary new technology of microfibre production leading to finest split microfibre.</p>
<ul>
<li>Superior cleaning performance</li>
<li>99.99% bacteria or germs removal (certified by BMA)</li>
<li>Streak-free and lint free cleaning</li>
<li>Improved wear resistance</li>
<li>Ideal for the pre-prepared cleaning method</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="NanoTech"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/11 Vileda NanoTech micro.jpg"><img alt="11 Vileda Nano Tech Micro - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/11 Vileda NanoTech micro.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda NanoTech Micro</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["286"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["286"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["286"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["286"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["286"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one6">Specifications</a></li>
<li><a data-toggle="tab" href="#two6">Details</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one6">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="100px"><b>Colors</b></th>
<th width="200px"><b>Size</b></th>
<th width="400px"><b>Packing</b></th>
</tr>
<tr>
<td><b>Blue</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Green</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Yellow</b></td>
<td>38cm x 40cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
</table>
</div>
<div class="tab-pane" id="two6">
<p>Antibacterial cleaning cloth based on Microfibre Evolon technology.</p>
<ul>
<li>Designed with a combination of endless microfibre and nano silver particles</li>
<li>99.9% bacteria or germs removal when wiping surfaces (certified by BMA)</li>
<li>No growth of bacteria or germs on cloths</li>
<li>Antibacterial effect does not fade away when cloths are being washed</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="MicroGlass"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/vileda MicroGlass.jpg"><img alt="Vileda Micro Glass - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/vileda MicroGlass.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda MicroGlass</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["287"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["287"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["287"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["287"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["287"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one7">
<p>Designed for its one-step drying and polishing function without leaving streaks, MicroGlass is great for time saving and higher efficiency.</p>
<ul>
<li>One-step drying and polishing</li>
<li>No linting due to endless fibres</li>
<li>Size: 48cm x 50cm</li>
<li>Packing: 5 pcs per pack; 25 packs per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PVAmicro"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/13 Vileda PVAmicro.jpg"><img alt="13 Vileda Pvamicro - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/13 Vileda PVAmicro.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda PVAmicro</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["288"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["288"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["288"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["288"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["288"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one8">Specifications</a></li>
<li><a data-toggle="tab" href="#two8">Details</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one8">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="100px"><b>Colors</b></th>
<th width="200px"><b>Size</b></th>
<th width="400px"><b>Packing</b></th>
</tr>
<tr>
<td><b>Blue</b></td>
<td>38cm x 35cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Green</b></td>
<td>38cm x 35cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>38cm x 35cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
<tr>
<td><b>Yellow</b></td>
<td>38cm x 35cm</td>
<td>5 pcs per packet; 20 packets per case</td>
</tr>
</table>
</div>
<div class="tab-pane" id="two8">
<p>PVAmicro is a unique, innovative, all-purpose cloth made from microfibre fibre impregnated with PVA.</p>
<ul>
<li>Microfibres ensure perfect cleaning performance on almost all surfaces</li>
<li>Good water absorbency for streak-free wiping without after-drying</li>
<li>Holds 40 times less particles residue after rinsing, compared to ordinary knitted microfibre cloth.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="MicronSolo"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/vileda micronsolo.jpg"><img alt="Vileda Micronsolo - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/vileda micronsolo.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda MicronSolo</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["289"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["289"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["289"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["289"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["289"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one9">Specifications</a></li>
<li><a data-toggle="tab" href="#two9">Details</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one9">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="100px"><b>Colors</b></th>
<th width="200px"><b>Size</b></th>
<th width="400px"><b>Packing</b></th>
</tr>
<tr>
<td><b>Blue</b></td>
<td>30cm x 40cm</td>
<td>100 pcs per packet; 5 packets per case</td>
</tr>
<tr>
<td><b>Green</b></td>
<td>30cm x 40cm</td>
<td>100 pcs per packet; 5 packets per case</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>30cm x 40cm</td>
<td>100 pcs per packet; 5 packets per case</td>
</tr>
<tr>
<td><b>Yellow</b></td>
<td>30cm x 40cm</td>
<td>100 pcs per packet; 5 packets per case</td>
</tr>
</table>
</div>
<div class="tab-pane" id="two9">
<p>Single-use micronfibre wipe with superior cleaning performance and excellent absorbency. Cleaning with MicronSolo is easier and prevents infection in hygiene sensitive areas.</p>
<ul>
<li>Made from the finest microfibres for superior cleaning performance</li>
<li>Efficient removal even of fatty dirt</li>
<li>High particle removal performance for fast results.</li>
<li>99.98% bacteria and germs removal certified by independent institute</li>
<li>99.99% bovine corona virus removal certified by independent test institute</li>
<li>Very high absorbency for good spill pick up in one wipe</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="SpillEx"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/Vileda Spillex.jpg"><img alt="Vileda Spillex - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/Vileda Spillex.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda SpillEx</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["290"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["290"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["290"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["290"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["290"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one10">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one10">
<p>SpillEx is a disposable super-absorbing floor cloth that takes care of liquid spillages in minutes. One SpillEx absorbs and holds up to 1.200 ml of water and up to 500 ml of NaCl 0.9% (similar to urine) and it will not drip when lifting and moving, as SpillEx transforms the liquid spill into a gel.</p>
<ul>
<li>Super absorbant cloth</li>
<li>No risk of cross-contamination</li>
<li>No risk of soiling the bucket water with the spillage</li>
<li>Weight: 45g</li>
<li>Size: 51cm x 37cm.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="MultiDuster"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wipes/vileda multiduster 3.jpg"><img alt="Vileda Multiduster 3 - Wipes | Delta Solutions" src="images/product-images/Cleaning Tools/Wipes/vileda multiduster 3.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda MultiDuster</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["291"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["291"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["291"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["291"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["291"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-017)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one11">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one11">
<p>MultiDuster has a unique mechanism that brings significant benefits during use. Bend it into the required position, and the ratchets ensure that enough pressure is put on the surface to achieve effective cleaning. This product comes with the mop and handle. </p>
<ul>
<li>Easy to wipe clean</li>
<li>Does not harbour bacteria</li>
<li>Slim design for narrow spaces</li>
<li>Fits telescopic handles</li>
<li>Can clean up to 5 m above floor.</li>
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
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script type="text/javascript">
  
  // Swiper Configuration
var swiper = new Swiper(".swiper-container", {
  slidesPerView: 1.5,
  spaceBetween: 10,
  centeredSlides: true,
  freeMode: true,
  grabCursor: true,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  autoplay: {
    delay: 1000000,
    disableOnInteraction: false
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  
  
});

</script>
<script type="text/javascript">
  
  const mainCarousel = new Carousel(document.querySelector("#mainCarousel"), { Dots: false, });
  const navCarousel = new Carousel(document.querySelector("#navCarousel"), {
  Sync: {
    target: mainCarousel,
  },
  Dots: false,
  Navigation: false,

  infinite: false,
  center: true,
  slidesPerPage: 1,
  });

  const mainCarousel1 = new Carousel(document.querySelector("#mainCarousel1"), { Dots: false,});
  const navCarousel1 = new Carousel(document.querySelector("#navCarousel1"), {
  Sync: {
    target: mainCarousel1,
  },
  Dots: false,
  Navigation: false,

  infinite: false,
  center: true,
  slidesPerPage: 1,
  });

  const mainCarousel2 = new Carousel(document.querySelector("#mainCarousel2"), { Dots: false,});
  const navCarousel2 = new Carousel(document.querySelector("#navCarousel2"), {
  Sync: {
    target: mainCarousel2,
  },
  Dots: false,
  Navigation: false,

  infinite: false,
  center: true,
  slidesPerPage: 1,
  });

</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>