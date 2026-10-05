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
<title>Blueair Blue Series Air Purifier by Delta Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content="Get Blueair Blue Series Air Purifiers from Delta Solutions. Improve indoor air quality with blue air purifier. Unique 360° air intake. Super easy on button control.Click to know more!" name="description"/>
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
</head>
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
<li class="active"><a href="#JoyS">Joy S</a></li>
<li><a href="#211">Blue Pure 211</a></li>
<li><a href="#121">Blue Pure 121</a></li>
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
<li><a href="air-purifiers.php">Air Purifiers</a></li>
<li>Blueair Blue Series Air Purifier</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('JoyS');">Joy S</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('211');">Blue Pure 211</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('121');">Blue Pure 121</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="JoyS">
<div class="auto-container">
<div class="sec-title text-center">
<h2>Blueair Blue Series Air Purifier</h2>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Blue Series/joy S.jpg">
<img alt="Joy S - Blue Series | Delta Solutions" src="images/product-images/Air Purifiers/Blue Series/joy S.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Joy S</h2>
<h4>Advantages:</h4>
<ul>
<li>Super easy one-button control.</li>
<li>Pre-filter in different colors.</li>
<li>Change filter with a simple twist.</li>
<li>Unique 360° air intake for best-in-class performance.</li>
<li>Very low energy usage</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="blueair-blue-series-air-purifier-joy-s.php">Know More</a>
<!--<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["113"]["code"]; ?>"  onClick="cartAction('add','<?php echo $productArray["113"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket&nbsp;  -->
<!--     <img src="images/add-to-cart.png" />-->
<!-- </button>-->
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["113"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["113"]["code"]; ?>" name="quantity" value="1" size="2" /> 
                                    <input type="hidden" id="remark_<?php echo $productArray["113"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="211"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Blue Series/Blue Pure 211.jpg">
<img alt="Blue Pure 211 - Blue Series | Delta Solutions" src="images/product-images/Air Purifiers/Blue Series/Blue Pure 211.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Blue Pure 211</h2>
<h4>Advantages:</h4>
<ul>
<li>Powerful fan that covers 50 m² (540 ft²).</li>
<li>Pre-filter in different colors.</li>
<li>Unique 360° air intake for best-in-class performance.</li>
<li>Super easy one-button control.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="blueair-blue-series-air-purifier-b-p-211.php">Know More</a>
<!--<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["114"]["code"]; ?>"  onClick="cartAction('add','<?php echo $productArray["114"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket&nbsp;  -->
<!--    <img src="images/add-to-cart.png" />-->
<!--</button>-->
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["114"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["114"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["114"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="121"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Blue Series/Blue Pure 121.jpg">
<img alt="Blue Pure 121 - Blue Series | Delta Solutions" src="images/product-images/Air Purifiers/Blue Series/Blue Pure 121.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Blue Pure 121</h2>
<h4>Advantages:</h4>
<ul>
<li>Powerful fan that covers 57 m² (620 ft²).</li>
<li>High-quality steel mesh maximizes airflow.</li>
<li>Unique 360° air intake for best-in-class performance.</li>
<li>Super easy one-button control.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="blueair-blue-series-air-purifier-b-p-121.php">Know More</a>
<!--<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["115"]["code"]; ?>"  onClick="cartAction('add','<?php echo $productArray["115"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket&nbsp;  -->
<!--    <img src="images/add-to-cart.png" />-->
<!--</button>-->
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["115"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["115"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["115"]["code"]; ?>" name="remark" value="" />
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
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
</html>