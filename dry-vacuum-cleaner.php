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
<title>Karcher Dry Vacuum Cleaning Machines by Delta Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content="We are a leading distributors of Karcher Dry Vacuum Cleaning Machines. We provide all types of Karcher Dry Vacuum Cleaners. Click to know more!" name="description"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/dry-vacuum-cleaner" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/dry-vacuum-cleaner" hreflang="en-in" rel="alternate"/>
<link href="https://delta-solutions.in/dry-vacuum-cleaner" hreflang="x-default" rel="alternate"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<link as="image" href="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Dry%20Vacuum/T12_1-HEPA.jpg" rel="preload"/>
<!-- OG Tags -->
<meta content="Karcher Dry Vacuum Cleaner" property="og:title"/>
<meta content="Dry vacuum cleaners designed for commercial and industrial use, intended for efficient removal of dry dust, debris, and particulate matter." property="og:description"/>
<meta content="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Dry%20Vacuum/T12_1-HEPA.jpg" property="og:image"/>
<!-- <link rel="stylesheet" href="dist/drift-basic.css"> -->
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": ["WebPage", "CollectionPage"],
      "@id": "https://delta-solutions.in/dry-vacuum-cleaner/#webpage",
      "url": "https://delta-solutions.in/dry-vacuum-cleaner/",
      "name": "Dry Vacuum Cleaner",
      "description": "Category page listing professional dry vacuum cleaners used for commercial and industrial cleaning applications across multiple facility environments.",
      "isPartOf": {
        "@id": "https://delta-solutions.in/#website"
      },
      "about": {
  "@type": "Thing",
  "name": "Dry Vacuum Cleaner",
  "description": "Dry vacuum cleaners designed for commercial and industrial use, intended for efficient removal of dry dust, debris, and particulate matter."
      },
      "breadcrumb": {
        "@id": "https://delta-solutions.in/dry-vacuum-cleaner/#breadcrumbs"
      },
      "mainEntity": {
        "@id": "https://delta-solutions.in/dry-vacuum-cleaner/#itemlist"
      },
      "hasPart": {
        "@id": "https://delta-solutions.in/dry-vacuum-cleaner/#faq"
      }
    },

    {
      "@type": "ItemList",
      "@id": "https://delta-solutions.in/dry-vacuum-cleaner/#itemlist",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 4,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Karcher Dry Vacuum - Basic (T 12/1)",
          "url": "https://delta-solutions.in/dry-vacuum-cleaner-t-12-1.php"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Karcher Dry Vacuum Premium (T 15/1)",
          "url": "https://delta-solutions.in/dry-vacuum-cleaner-t-15-1.php"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Karcher Carpet Vacuum (CV 48/2)",
          "url": "https://delta-solutions.in/dry-vacuum-cleaner-cv-48-2.php"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Karcher Backpack Vacuum (BV 5/1)",
          "url": "https://delta-solutions.in/dry-vacuum-cleaner-bv-5-1.php"
        }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://delta-solutions.in/dry-vacuum-cleaner/#breadcrumbs",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://delta-solutions.in/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Dry Vacuum Cleaner",
          "item": "https://delta-solutions.in/dry-vacuum-cleaner/"
        }
      ]
    }

  ]
}
</script>
</head>
<style type="text/css">
    input {
      text-align: center;
      width: 40px;
      margin: 2px;
      font-size: 14px;
      padding-right: 10px;
      padding-left: 10px;
      color: salmon;
      font-weight: 600;
      border: 1px solid #c2c2c2;
    }
</style>
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
<li class="active"><a href="#t121">T 12/1</a></li>
<li><a href="#t151">T 15/1</a></li>
<li><a href="#cv482">CV 48/2</a></li>
<li><a href="#bv51">BV 5/1</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="cleaning-machines.php">Cleaning Machines</a></li>
<li>Karcher Dry Vacuum Cleaner</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('t121');">T 12/1</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('t151');">T 15/1</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('cv482');">CV 48/2</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('bv51');">BV 5/1</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="t121">
<div class="auto-container">
<div class="sec-title text-center">
<h1 style="=font-weight: bold; color: black;">Karcher Dry Vacuum Cleaner</h1>
</div>
<!-- <div class="detail"></div> -->
<div class="row">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box"><a href="dry-vacuum-cleaner-t-12-1.php">
<img alt="T12 1 Hepa - Dry Vacuum | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Dry Vacuum/T12_1-HEPA-large.jpg" src="images/product-images/Cleaning Machines/Dry Vacuum/T12_1-HEPA.jpg"/> </a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Dry Vacuum - Basic </h2>
<h5>(T 12/1)</h5>
<h4>Technical data:</h4>
<ul>
<li>Air flow rate (l/s) : <span>61</span></li>
<li>Vacuum (mbar/kPa)  : <span>244/24.4</span></li>
<li>Container capacity (l) <span>12</span> </li>
<li>Max. power rating (W) : <span>max. 1300</span></li>
<li>Standard nominal width (mm) : <span>32</span></li>
<li>Cable length (m) : <span> 12</span></li>
<li>Sound pressure level (dB(A) : <span>61</span></li>
<li>Weight (kg) : <span>6.6</span></li>
<li>Dimensions (L x W x H) (mm) : <span> 340x315x410</span></li>
</ul>
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="dry-vacuum-cleaner-t-12-1.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["01"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["01"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["01"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["01"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["01"]["code"]; ?>" name="remark" value="" />
                                   
                            </div>
</div>
</div>
</div>
</div>
<hr id="t151"/>
<div class="row">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box"><a href="dry-vacuum-cleaner-t-15-1.php">
<img alt="T 15 1 - Dry Vacuum | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Dry Vacuum/T-15_1-large.jpg" src="images/product-images/Cleaning Machines/Dry Vacuum/T-15_1.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Dry Vacuum Premium </h2>
<h5>(T 15/1)</h5>
<h4>Technical data:</h4>
<ul>
<li>Air flow rate (l/s) : <span>61</span></li>
<li>Vacuum (mbar/kPa)  : <span>244/24.4</span></li>
<li>Container capacity (l) <span>15</span> </li>
<li>Max. power rating (W) : <span>1300</span></li>
<li>Standard nominal width (mm) : <span>32</span></li>
<li>Cable length (m) : <span> 15</span></li>
<li>Sound pressure level (dB(A) : <span>59</span></li>
<li>Weight (kg) : <span>8</span></li>
<li>Dimensions (L x W x H) (mm) : <span> 406x320x434</span></li>
</ul>
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="dry-vacuum-cleaner-t-15-1.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["02"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["02"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["02"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["02"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["02"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="cv482"/>
<div class="row">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="dry-vacuum-cleaner-cv-48-2.php">
<img alt="Cv 48 2 - Dry Vacuum | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Dry Vacuum/CV-48_2-large.jpg" src="images/product-images/Cleaning Machines/Dry Vacuum/CV-48_2.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Carpet Vacuum </h2>
<h5>(CV 48/2)</h5>
<h4>Technical data:</h4>
<ul>
<li>Working width (mm): <span>480</span></li>
<li>Air flow rate (l/s) : <span>48</span></li>
<li>Vacuum (mbar/kPa)  : <span>250 / 25</span></li>
<li>Container capacity (l) <span>5.5</span> </li>
<li>Max. power rating (W) : <span>1200</span></li>
<li>Standard nominal width (mm) : <span>35</span></li>
<li>Cord length (m) : <span> 12</span></li>
<li>Sound level dB(A) : <span>67</span></li>
<li>Sound Power level dB(A) : <span>80</span></li>
<li>Quantity of motors : <span>2</span></li>
<li>Brush motor power rating (w) : <span>150</span></li>
<li>Weight (kg) : <span>10</span></li>
<li>Dimensions (L x W x H) (mm) : <span>350×485×1215</span></li>
<li>Energy efficiency class : <span>B</span></li>
</ul>
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="dry-vacuum-cleaner-cv-48-2.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["03"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["03"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["03"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["03"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["03"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="bv51"/>
<div class="row">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="dry-vacuum-cleaner-bv-5-1.php">
<img alt="Bv 5 1 - Dry Vacuum | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Dry Vacuum/BV-5_1-large.jpg" src="images/product-images/Cleaning Machines/Dry Vacuum/BV-5_1.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Backpack Vacuum </h2>
<h5>(BV 5/1)</h5>
<h4>Technical data:</h4>
<ul>
<li>Air flow rate (l/s) : <span>61</span></li>
<li>Vacuum (mbar/kPa)   : <span>244/24.4</span></li>
<li>Container capacity (l)   : <span>5</span></li>
<li>Max. power rating (W) : <span>max. 1300</span></li>
<li>Standard nominal width (mm) : <span>32</span></li>
<li>Cable length (m) : <span> 15</span></li>
<li>Sound pressure level (dB(A)) : <span> 62</span></li>
<li>Weight (kg)  : <span> 5.3</span></li>
<li>Dimensions (L x W x H) (mm)  : <span>400x320x540</span></li>
</ul>
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="dry-vacuum-cleaner-bv-5-1.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["04"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["04"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["04"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["04"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["04"]["code"]; ?>" name="remark" value="" />
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