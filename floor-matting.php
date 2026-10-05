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
<title>Floor Matting | Rubber, Vinyl &amp; PVC Floor Mat Rolls for Office</title>
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
<meta content="Delta Solutions offers high-quality floor matting products, including vinyl, rubber, PVC floor mats for offices and carpet mats for floors. Explore us!" name="description"/>
<meta content="floor matting, floor mats, pvc floor mat for office, pvc floor mat, vinyl floor mat, rubber floor mats, carpet mat for floor" name="keywords"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/floor-matting" rel="canonical">
<link href="https://delta-solutions.in/floor-matting" hreflang="en-in" rel="alternate">
<meta content="Floor Matting &amp; Rolls | Rubber, Vinyl &amp; PVC Floor Mats for Office" property="og:title"/>
<meta content="Delta Solutions" property="og:site_name"/>
<meta content="https://delta-solutions.in/" property="og:url"/>
<meta content="Delta Solutions offers high-quality floor matting products, including vinyl, rubber, PVC floor mat rolls for offices and carpet mats for floors. Explore us!" property="og:description"/>
<meta content="website" property="og:type"/>
<meta content="https://delta-solutions.in/images/300x75.png" property="og:image"/>
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
</link></link></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 1000px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 20px; }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 26px;}
    .projects-section-three h1{font-size: 30px;color: #666;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}


      table{

        width: 680px;
        margin: 10px 5px;      
    }   

    td {
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
<li class="active"><a href="#Loop-Mats">Loop Mats</a></li>
<li><a href="#Carpet-Mats">Carpet Mats</a></li>
<li><a href="#Zig-Zag-Mats">Zig-Zag Mats</a></li>
<li><a href="#Foot-Sanitisation-Mat">Foot Sanitisation Mat</a></li>
<li><a href="#Hole-Mats">Rubber Hole Mats</a></li>
<li><a href="#Shower-Mats">Shower Mats</a></li>
<li><a href="#Logo-Mat">Logo Mat</a></li>
<li><a href="#Aluminium-Carpet">Aluminium Carpet Mat</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li>Floor Matting</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Loop-Mats');">Loop Mats</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Carpet-Mats');">Carpet Mats</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Zig-Zag-Mats');">Zig-Zag Mats</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Foot-Sanitisation-Mat');">Foot Sanitisation Mat</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Hole-Mats');">Rubber Hole Mats</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Shower-Mats');">Shower Mats</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Logo-Mat');">Logo Mat</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Aluminium-Carpet');">Aluminium Carpet Mat</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Loop-Mats">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Floor Matting</h1>
</div>
<h2 align="center">Loop Mats</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/2350 green cushion mat.jpg"><img alt="2350 Green Cushion Mat - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/2350 green cushion mat.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>3M 2350 Matting - Vinyl Green</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["169"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["169"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["169"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["169"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["169"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(2350)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two1">
<ul>
<li>Size : 4' x 40' roll</li>
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
<a data-fancybox="gallery" href="images/product-images/Floor matting/3M 6850.jpg"><img alt="3 M 6850 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/3M 6850.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>3M Nomad Terra Loop Medium Duty Matting-6850</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["172"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["172"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["172"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["172"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["172"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(6850)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two4">
<ul>
<li>Size : 4' x 40' roll</li>
<li>Colors: Grey, Light Red</li>
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
<a data-fancybox="gallery" href="images/product-images/Floor matting/3m 7150.jpg"><img alt="3M 7150 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/3m 7150.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>3M NomadTerra Loop Heavy Duty Matting-7150</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["173"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["173"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["173"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["173"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["173"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(7150)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two5">
<ul>
<li>Size : 4' x 40' roll</li>
<li>Colors: Grey, Light Red</li>
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
<div class="carouselmain" id="mainCarousel">
<div class="carousel__slide">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-008-BG.jpg"><img data-lazy-src="images/product-images/Floor matting/FM-008-BG.jpg"/></a>
</div>
<div class="carousel__slide">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-008-BR.jpg"><img data-lazy-src="images/product-images/Floor matting/FM-008-BR.jpg"/></a>
</div>
<div class="carousel__slide">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-008-DGN.jpg"><img data-lazy-src="images/product-images/Floor matting/FM-008-DGN.jpg"/></a>
</div>
<div class="carousel__slide">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-008-GY.jpg"><img data-lazy-src="images/product-images/Floor matting/FM-008-GY.jpg"/></a>
</div>
<div class="carousel__slide">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-008-LGY.jpg"><img data-lazy-src="images/product-images/Floor matting/FM-008-LGY.jpg"/></a>
</div>
</div>
<div class="carouselnav" id="navCarousel">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Floor matting/FM-008-BG.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Floor matting/FM-008-BR.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Floor matting/FM-008-DGN.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Floor matting/FM-008-GY.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Floor matting/FM-008-LGY.jpg"/>
</div>
</div>
<!-- <a href="images/product-images/Floor matting/FM-008-BG.jpg" data-fancybox="gallery"><img src="images/product-images/Floor matting/FM-008-BG.jpg" alt=""></a> -->
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Delta Cusion/Loop Matting</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["183"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["183"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["183"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["183"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["183"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(FM-008)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two17">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two17" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="150px"><b>Item Code</b></th>
<th width="100px"><b>Thickness</b></th>
<th width="150px"><b>Size</b></th>
<th width="200px"><b>Color</b></th>
</tr>
<tr>
<td><b>FM-008-BK</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Black</td>
</tr>
<tr>
<td><b>FM-008-BG</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Burgundy</td>
</tr>
<tr>
<td><b>FM-008-BR</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Chocolate Brown</td>
</tr>
<tr>
<td><b>FM-008-DGN</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Dark Green</td>
</tr>
<tr>
<td><b>FM-008-DGY</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Dark Grey</td>
</tr>
<tr>
<td><b>FM-008-LGN</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Light Green</td>
</tr>
<tr>
<td><b>FM-008-LGY</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Light Grey</td>
</tr>
<tr>
<td><b>FM-008-RD</b></td>
<td>17 mm</td>
<td>4' x 27' roll</td>
<td>Red</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Carpet-Mats"/>
<h2 align="center">Carpet Mats</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/3M 6500 AQUA MAT MED DUTY.jpg"><img alt="3 M 6500 Aqua Mat Med Duty - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/3M 6500 AQUA MAT MED DUTY.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>3M Nomad Aqua Medium Duty-6500</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["170"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["170"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["170"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["170"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["170"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(6500)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two2">
<ul>
<li>Size : 4' x 40' roll</li>
<li>Colors: Grey, Red</li>
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
<a data-fancybox="gallery" href="images/product-images/Floor matting/3m-8850.jpg"><img alt="3M 8850 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/3m-8850.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>3M Nomed-8850 Aqua Heavy Duty Matting - Grey</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["171"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["171"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["171"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["171"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["171"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(8850)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two3">
<ul>
<li>Size : 4' x 40' roll</li>
<li>Colors: Grey, Red</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Zig-Zag-Mats"/>
<h2 align="center">Zig-Zag Mats</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/3m 3200 z web.jpg"><img alt="3M 3200 Z Web - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/3m 3200 z web.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>3M Nomed Z- Web Medium Duty-3200</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["174"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["174"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["174"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["174"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["174"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(3200)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two7">
<ul>
<li>Size : 4' x 40' roll</li>
<li>Colors: Grey, Red</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="9100"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/3m 9100.jpg"><img alt="3M 9100 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/3m 9100.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>3M Z-Web Heavy Duty Matting - 9100</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["175"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["175"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["175"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["175"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["175"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<!-- <h5>(9100)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two9">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two9">
<ul>
<li>Size : 3' x 40' roll</li>
<li>Colors: Grey</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Foot-Sanitisation-Mat"/>
<h2 align="center">Foot Sanitisation Mat</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/"><img alt=" | Delta Solutions" src="images/product-images/Floor matting/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
                            3&gt;<span>Delta Footwear Sanitising Mat</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["176"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["176"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["176"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["176"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["176"]["code"]; ?>" name="remark" value="" />

                                </p>
<h5>(FSM-001)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two10">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two10">
<ul>
<li>100% Rubber</li>
<li>Size : 80cm x 98 cm</li>
<li>Color : Black</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Hole-Mats"/>
<h2 align="center">Rubber Hole Mats</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-001.jpg"><img alt="Fm 001 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/FM-001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Delta Rubber Hole Mat</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["177"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["177"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["177"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["177"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["177"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<h5>(FM-001)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two11">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two11">
<ul>
<li>Size : 1 mtr x 1.5 mtr (40"x60")</li>
<li>Color : Black</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="FM-002"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/"><img alt=" | Delta Solutions" src="images/product-images/Floor matting/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Delta Rubber Hole Mat 1mtr x 1.5mtr -Premium</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["178"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["178"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["178"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["178"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["178"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<h5>(FM-002)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two12">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two12">
<ul>
<li>Size : 1 mtr x 1.5 mtr (40"x60")</li>
<li>Color : Black</li>
<li>Premium quality rubber</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Shower-Mats"/>
<h2 align="center">Shower Mats</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-003.jpg"><img alt="Fm 003 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/FM-003.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Delta PVC Mats Ribbed</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["179"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["179"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["179"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["179"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["179"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<h5>(FM-003)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two13">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two13">
<ul>
<li>Anti skid shower mat</li>
<li>Size : 45cm x 60cm</li>
<li>Color : Beige</li>
<li>PVC strips</li>
<li>Rubber strip backing</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="FM-004"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-004.jpg"><img alt="Fm 004 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/FM-004.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Delta PVC Mats Ribbed - 3 mtr roll</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["180"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["180"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["180"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["180"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["180"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<h5>(FM-004)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two14">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two14">
<ul>
<li>Anti skid shower mat</li>
<li>Size : 0.61mtr x 3.05mtr</li>
<li>Color : Beige</li>
<li>PVC strips</li>
<li>Rubber strip backing</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Logo-Mat"/>
<h2 align="center">Logo Mat</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-005.jpg"><img alt="Fm 005 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/FM-005.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Delta Customised Logo Mat</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["181"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["181"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["181"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["181"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["181"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<h5>(FM-005)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two15">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two15">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Aluminium-Carpet"/>
<h2 align="center">Aluminium Carpet</h2><br/><br/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-007.jpg"><img alt="Fm 007 - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/FM-007.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Delta Aluminium Carpet Mat</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["182"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["182"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["182"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["182"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["182"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<h5>(FM-007)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two16">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two16">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix" style="display :none;">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Floor matting/FM-008-BG.jpg"><img alt="Fm 008 Bg - Floor Matting | Delta Solutions" src="images/product-images/Floor matting/FM-008-BG.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h3><span>Cushion/Loop Matting- Burgundy</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["175"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["175"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["175"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["175"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["175"]["code"]; ?>" name="remark" value="" />

                                </p></h3>
<h5>(FM-008-BG)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two18">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two18">
<ul>
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

</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>