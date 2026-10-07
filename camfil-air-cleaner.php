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
<title>Camfil Industrial Air Cleaners</title>
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
<meta content="Get cleaner air within your facility with Camfil Industrial Air Cleaners." name="description"/>
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
<link href="https://delta-solutions.in/camfil-air-cleaner" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#cc410">CC 410</a></li>
<li><a href="#cc400">CC 400</a></li>
<li><a href="#cc800">CC 800</a></li>
<li><a href="#cc1700">CC 1700</a></li>
<li><a href="#cc2000">CC 2000</a></li>
<li><a href="#cc6000">CC 6000</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="clean-air-solutions.php">Clean Air Solutions</a></li>
<li>Industrial Air Cleaners</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('cc410');">CC 410</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('cc400');">CC 400</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('cc800');">CC 800</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('cc1700');">CC 1700</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('cc2000');">CC 2000</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('cc6000');">CC 6000</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="cc410">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Camfil Industrial Air Cleaners</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-410.png">
<img alt="Cc 410 - Camfil Air Cleaner | Delta Solutions" src="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-410.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Camfil Air Cleaner - CC 410</h2>
<h4>Advantages:</h4>
<ul>
<li>Healthier employees</li>
<li>Less cleaning</li>
<li>Lower energy costs</li>
<li>Reduced environmental impact</li>
<li>Clean products, fewer operational disruptions</li>
<li>Easy to adapt ducts and diffusors</li>
<li>Less odour</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/camfil-air-cleaner-cc-410">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["105"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["105"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["105"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["105"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["105"]["code"]; ?>" name="remark" value="" /> 
                            </div>
</div>
</div>
</div>
</div>
<hr id="cc400"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-400.png">
<img alt="Cc 400 - Camfil Air Cleaner | Delta Solutions" src="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-400.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Camfil Air Cleaner - CC 400</h2>
<h4>Advantages:</h4>
<ul>
<li>Healthier employees</li>
<li>Less cleaning</li>
<li>Lower energy costs</li>
<li>Reduced environmental impact</li>
<li>Clean products, fewer operational disruptions</li>
<li>Easy to adapt ducts and diffusors</li>
<li>Less odour</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/camfil-air-cleaner-cc-400">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["106"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["106"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["106"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["106"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["106"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="cc800"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-800.jpg">
<img alt="Cc 800 - Camfil Air Cleaner | Delta Solutions" src="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-800.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Camfil Air Cleaner - CC 800</h2>
<h4>Advantages:</h4>
<ul>
<li>Healthier employees</li>
<li>Less cleaning</li>
<li>Less asthma and allergy suffering</li>
<li>Reduced environmental impact</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/camfil-air-cleaner-cc-800">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["107"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["107"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["107"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["107"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["107"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="cc1700"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-1700.jpg">
<img alt="Cc 1700 - Camfil Air Cleaner | Delta Solutions" src="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-1700.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Camfil Air Cleaner - CC 1700</h2>
<h4>Advantages:</h4>
<ul>
<li>Pressure drop alarm</li>
<li>Silent performance</li>
<li>On/Off timer</li>
<li>Constant Air flow features</li>
<li>High efficient HEPA and molecular filtration options</li>
<li>Easy to service</li>
<li>Touch Screen control</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/camfil-air-cleaner-cc-1700">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["108"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["108"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["108"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["108"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["108"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="cc2000"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-2000.jpg">
<img alt="Cc 2000 - Camfil Air Cleaner | Delta Solutions" src="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-2000.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Camfil Air Cleaner - CC 2000</h2>
<h4>Advantages:</h4>
<ul>
<li>Save cleaning cost</li>
<li>Higher airflow</li>
<li>Adaptable filter configuration</li>
<li>Versatile unit to fit your need.</li>
<li>Connectivity for IAQ control</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/camfil-air-cleaner-cc-2000">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["109"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["109"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["109"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["109"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["109"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="cc6000"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-6000.png">
<img alt="Cc 6000 - Camfil Air Cleaner | Delta Solutions" src="images/product-images/Air Purifiers/Camfil Air Cleaner/CC-6000.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Camfil Air Cleaner - CC 6000</h2>
<h4>Advantages:</h4>
<ul>
<li>Healthier employees</li>
<li>Less cleaning</li>
<li>Lower energy costs</li>
<li>Reduced environmental impact</li>
<li>Clean products, fewer operational disruptions</li>
<li>Less mold and extended product shelf life</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/camfil-air-cleaner-cc-6000">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["110"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["110"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["110"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["110"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["110"]["code"]; ?>" name="remark" value="" />
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