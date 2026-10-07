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
<title>Blueair Classic Air Purifier by Delta Solutions</title>
<link rel="canonical" href="https://delta-solutions.in/blueair-classic-air-purifier"/>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content="Blueair Classic Air Purifier is highly efficient and uses minimal energy. Blueair classic air purifier uses a revolutionary combination of electrostatic and mechanical filtration. Click to learn more!" name="description"/>
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
<li class="active"><a href="#205">Classic 205</a></li>
<li><a href="#280">Classic 280i</a></li>
<li><a href="#480">Classic 480i</a></li>
<li><a href="#680">Classic 680i</a></li>
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
<li>Blueair Classic Air Purifier</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('205');">Classic 205</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('280');">Classic 280i</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('480');">Classic 480i</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('680');">Classic 680i</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="205">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Blueair Classic Air Purifier</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Classic/classic_205.jpg">
<img alt="Classic 205 - Classic | Delta Solutions" src="images/product-images/Air Purifiers/Classic/classic_205.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Classic 205</h2>
<h4>Advantages:</h4>
<ul>
<li>The Highly efficient particle filtration is combined with activated carbon filtration media to remove gaseous pollutants.</li>
<li>Minimal energy consumption</li>
<li>Less dense filter media, which means lower noise levels</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/blueair-classic-air-purifier-205">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["116"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["116"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["116"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["116"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["116"]["code"]; ?>" name="remark" value="" /> 
                            </div>
</div>
</div>
</div>
</div>
<hr id="280"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Classic/classic_280i.jpg">
<img alt="Classic 280I - Classic | Delta Solutions" src="images/product-images/Air Purifiers/Classic/classic_280i.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Classic 280i</h2>
<h4>Advantages:</h4>
<ul>
<li>The Highly efficient particle filtration is combined with activated carbon filtration media to remove gaseous pollutants.</li>
<li>Minimal energy consumption</li>
<li>Less dense filter media, which means lower noise levels</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/blueair-classic-air-purifier-280">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["117"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["117"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["117"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["117"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["117"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="480"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Classic/classic_480i.jpg">
<img alt="Classic 480I - Classic | Delta Solutions" src="images/product-images/Air Purifiers/Classic/classic_480i.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Classic 480i</h2>
<h4>Advantages:</h4>
<ul>
<li>The Highly efficient particle filtration is combined with activated carbon filtration media to remove gaseous pollutants.</li>
<li>Minimal energy consumption</li>
<li>Less dense filter media, which means lower noise levels</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/blueair-classic-air-purifier-480">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["118"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["118"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["118"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["118"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["118"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="680"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a data-fancybox="gallery" href="images/product-images/Air Purifiers/Classic/classic_680i.jpg">
<img alt="Classic 680I - Classic | Delta Solutions" src="images/product-images/Air Purifiers/Classic/classic_680i.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Classic 680i</h2>
<h4>Advantages:</h4>
<ul>
<li>The Highly efficient particle filtration is combined with activated carbon filtration media to remove gaseous pollutants.</li>
<li>Minimal energy consumption</li>
<li>Less dense filter media, which means lower noise levels</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/blueair-classic-air-purifier-680">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["119"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["119"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["119"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["119"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["119"]["code"]; ?>" name="remark" value="" />
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