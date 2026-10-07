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
<title>Karcher Cold Water High Pressure | Delta Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<link href="dist/drift-basic.css" rel="stylesheet"/>
<!-- Responsive -->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/cold-water-high-pressure" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/cold-water-high-pressure" hreflang="en-in" rel="alternate"/>
<link href="https://delta-solutions.in/cold-water-high-pressure" hreflang="x-default" rel="alternate"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<link as="image" href="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Cold%20water%20high%20pressure/5_11-cage-classic.png" rel="preload"/>
<!-- OG Tags -->
<meta content="Cold Water High Pressure" property="og:title"/>
<meta content="Cold water high-pressure cleaning machines designed for professional use, delivering powerful water pressure to remove heavy dirt, grease, and contaminants from hard surfaces." property="og:description"/>
<meta content="https://delta-solutions.in/cold-water-high-pressure" property="og:url"/>
<meta content="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Cold%20water%20high%20pressure/5_11-cage-classic.png" property="og:image"/>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<meta content="Get Karcher Cold Water High Pressure Machines at best price. Click to learn more." name="description"/>
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
      "@id": "https://delta-solutions.in/cold-water-high-pressure/#webpage",
      "url": "https://delta-solutions.in/cold-water-high-pressure/",
      "name": "Cold Water High Pressure",
      "description": "Category page listing professional cold water high-pressure cleaners used for intensive surface, vehicle, and equipment cleaning in commercial and industrial environments.",
      "isPartOf": {
        "@id": "https://delta-solutions.in/#website"
      },
      "about": {
  "@type": "Thing",
  "name": "Cold Water High Pressure",
  "description": "Cold water high-pressure cleaning machines designed for professional use, delivering powerful water pressure to remove heavy dirt, grease, and contaminants from hard surfaces."
      },
      "breadcrumb": {
        "@id": "https://delta-solutions.in/cold-water-high-pressure/#breadcrumbs"
      },
      "mainEntity": {
        "@id": "https://delta-solutions.in/cold-water-high-pressure/#itemlist"
      },
      "hasPart": {
        "@id": "https://delta-solutions.in/cold-water-high-pressure/#faq"
      }
    },

    {
      "@type": "ItemList",
      "@id": "https://delta-solutions.in/cold-water-high-pressure/#itemlist",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 11,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Karcher Cold Water High Pressure - Basic (Item Code : HD 5/11 Cage Classic)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-5-11-c"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Karcher Cold Water High Pressure - Compact (Item Code : HD 5/12 C)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-5-12-c"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Karcher Cold Water High Pressure - Classic (Item Code : HD 6/15-4 Classic Kap)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-6-15-4-c"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Karcher Cold Water High Pressure - Middle Class (Item Code : HD 6/15 M)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-6-15-m"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Karcher Cold Water High Pressure - Middle Class (Item Code : HD 8/18-4 M)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-8-18-4-m"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Karcher Cold Water High Pressure - Middle Class (Item Code : HD 9/20-4 Classic KAP)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-9-20-4-c"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "Karcher Cold Water High Pressure - Super Class (Item Code : HD 10/25-4 S)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-10-25-4-s"
        },
        {
          "@type": "ListItem",
          "position": 8,
          "name": "Karcher Cold Water High Pressure - Ultra Class (Item Code : HD 9/50-4)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-9-50-4"
        },
        {
          "@type": "ListItem",
          "position": 9,
          "name": "Karcher Cold Water High Pressure - Ultra Class (Item Code : HD 9/100-4)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-9-100-4"
        },
        {
          "@type": "ListItem",
          "position": 10,
          "name": "Karcher Cold Water High Pressure - Special Class (Item Code : HD 7/16 Cage Classic)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-7-16-c"
        },
        {
          "@type": "ListItem",
          "position": 11,
          "name": "Karcher Cold Water High Pressure - Special Class (Item Code : HD 10/15-4 Cage Food)",
          "url": "https://delta-solutions.in/product/cold-water-high-pressure-hd-10-15-4-c"
        }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://delta-solutions.in/cold-water-high-pressure/#breadcrumbs",
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
          "name": "Cold Water High Pressure",
          "item": "https://delta-solutions.in/cold-water-high-pressure/"
        }
      ]
    }

  ]
}
</script>
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
<li class="active"><a href="#hd511">HD 5/11</a></li>
<li><a href="#hd512">HD 5/12 C</a></li>
<li><a href="#hd6154">HD 6/15-4</a></li>
<li><a href="#hd615">HD 6/15 M</a></li>
<li><a href="#hd8184">HD 8/18-4 M</a></li>
<li><a href="#hd9204">HD 9/20-4</a></li>
<li><a href="#hd10254">HD 10/25-4 S</a></li>
<li><a href="#hd9504">HD 9/50-4</a></li>
<li><a href="#hd91004">HD 9/100-4</a></li>
<li><a href="#hd716">HD 7/16</a></li>
<li><a href="#hd10154">HD 10/15-4</a></li>
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
<li>Karcher Cold Water High Pressure</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('hd511');">HD 5/11</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd512');">HD 5/12 C</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd6154');">HD 6/15-4</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd615');">HD 6/15 M</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd8184');">HD 8/18-4 M</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd9204');">HD 9/20-4</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd10254');">HD 10/25-4 S</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd9504');">HD 9/50-4</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd91004');">HD 9/100-4</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd716');">HD 7/16</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hd10154');">HD 10/15-4</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="hd511">
<div class="auto-container">
<div class="sec-title text-center">
<h1 style="=font-weight: bold; color: black;">Karcher Cold Water High Pressure</h1>
</div>
<!-- <div class="detail"></div> -->
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-5-11-c">
<img alt="5 11 Cage Classic - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/5_11-cage-classic-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/5_11-cage-classic.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Basic</h2>
<h5>Item Code : HD 5/11 Cage Classic</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>500</span></li>
<li>Current type Ph / V / Hz : <span>1 / 230 / 50</span></li>
<li>Working pressure bar / MPa : <span>110 / 11</span></li>
<li>Max. pressure bar : <span>160</span></li>
<li>Max. inlet temperature °C : <span>60</span></li>Karcher Cold water high pressure
                            <li>Connection load kW : <span>2.2</span></li>
<li>Weight (kg) <span>17.8</span></li>
<li>Dimensions (L × W × H) (mm) <span>475 × 335 × 340</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-5-11-c">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["16"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["16"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["16"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["16"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["16"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd512"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-5-12-c">
<img alt="Hd 5 12 C - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/HD-5_12-C-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/HD-5_12-C.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Compact</h2>
<h5>Item Code : HD 5/12 C</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>500</span></li>
<li>Current type Ph / V / Hz : <span>1 / 230 / 50</span></li>
<li>Working pressure bar / MPa : <span>120 / 12</span></li>
<li>Max. pressure bar : <span>175 / 17.5</span></li>
<li>Max. inlet temperature °C : <span>bis zu 60</span></li>
<li>Connection load kW : <span>2.5</span></li>
<li>Weight (kg) <span>20.7</span></li>
<li>Dimensions (L × W × H) (mm) <span>380 × 360 × 930</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-5-12-c">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["17"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["17"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["17"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["17"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["17"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd6154"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-6-15-4-c">
<img alt="6 15 4 Classic Kap - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/6_15-4-classic-KAP-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/6_15-4-classic-KAP.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Classic</h2>
<h5>Item Code : HD 6/15-4 Classic Kap</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>560</span></li>
<li>Supply voltage Ph / V / Hz : <span>1 / 230 / 50</span></li>
<li>Working pressure bar / MPa : <span>150 / 15</span></li>
<li>Max. pressure bar : <span>225 / 22.5</span></li>
<li>Max. inlet temperature °C : <span>60</span></li>
<li>Connection load kW : <span>3.1</span></li>
<li>Weight (kg) <span>30</span></li>
<li>Dimensions (L × W × H) (mm) <span>400 × 455 × 700</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-6-15-4-c">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["18"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["18"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["18"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["18"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["18"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd615"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-6-15-m">
<img alt="Hd 6 15 M - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/hd-6_15-M-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/hd-6_15-M.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Middle Class</h2>
<h5>Item Code : HD 6/15 M</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>560</span></li>
<li>Current type Ph / V / Hz : <span>1 / 230 / 50</span></li>
<li>Working pressure bar / MPa : <span>150 / 15</span></li>
<li>Max. pressure bar : <span>225 / 22.5</span></li>
<li>Max. inlet temperature °C : <span>60</span></li>
<li>Connection load kW : <span>3.1</span></li>
<li>Weight (kg) <span>30</span></li>
<li>Dimensions (L × W × H) (mm) <span>400 × 455 × 700</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-6-15-m">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["19"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["19"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["19"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["19"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["19"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd8184"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-8-18-4-m">
<img alt="Hd 8 18 4 M - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/hd-8_18-4-M-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/hd-8_18-4-M.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Middle Class</h2>
<h5>Item Code : HD 8/18-4 M</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>380–760</span></li>
<li>Current type Ph / V / Hz : <span>3 / 400 / 50</span></li>
<li>Working pressure bar / MPa : <span>30–180 / 3–18</span></li>
<li>Max. pressure bar : <span>270 / 27</span></li>
<li>Max. inlet temperature °C : <span>60</span></li>
<li>Connection load kW : <span>4.6</span></li>
<li>Weight (kg) <span>39.3</span></li>
<li>Dimensions (L × W × H) (mm) <span>400 × 455 × 700</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-8-18-4-m">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["20"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["20"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["20"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["20"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["20"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd9204"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-9-20-4-c">
<img alt="9 20 4 Kap Classic - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/9_20-4-KAP-Classic-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/9_20-4-KAP-Classic.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Middle Class</h2>
<h5>Item Code : HD 9/20-4 Classic KAP</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>520–900</span></li>
<li>Supply voltage Ph / V / Hz : <span>3 / 400 / 50</span></li>
<li>Working pressure bar / MPa : <span>70–200 / 7–20</span></li>
<li>Max. pressure bar : <span>240</span></li>
<li>Max. inlet temperature °C : <span>60</span></li>
<li>Connection load kW : <span>6.9</span></li>
<li>Weight (kg) <span>56</span></li>
<li>Dimensions (L × W × H) (mm) <span>700 × 455 × 1010</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-9-20-4-c">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["21"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["21"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["21"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["21"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["21"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd10254"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-10-25-4-s">
<img alt="Hd 10 25 4 S - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/HD-10_25-4-S-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/HD-10_25-4-S.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Super Class </h2>
<h5>Item Code : HD 10/25-4 S</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>500–1000</span></li>
<li>Supply voltage Ph / V / Hz : <span>3 / 400 / 50</span></li>
<li>Working pressure bar / MPa : <span>30–250 / 3–25</span></li>
<li>Max. pressure bar : <span>275 / 27.5</span></li>
<li>Max. inlet temperature °C : <span>bis zu 60</span></li>
<li>Connection load kW : <span>9.2</span></li>
<li>Weight (kg) <span>63.6</span></li>
<li>Dimensions (L × W × H) (mm) <span>560 × 500 × 1090</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-10-25-4-s">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["22"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["22"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["22"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["22"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["22"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd9504"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-9-50-4">
<img alt="Hd 9 50 4 - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/HD-9_50-4-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/HD-9_50-4.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Ultra Class</h2>
<h5>Item Code : HD 9/50-4</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>500–900</span></li>
<li>Working pressure bar / MPa : <span>150–500 / 15–50</span></li>
<li>Max. pressure bar : <span>275 / 27.5</span></li>
<li>Max. water inlet temperature °C : <span>60</span></li>
<li>Pump type : <span>Kärcher high-performance crankshaft pump</span></li>
<li>Drive : <span>E-Motor 400 V / 50 Hz</span></li>
<li>Motor rating kW : <span>9.2</span></li>
<li>Weight (kg) <span>190</span></li>
<li>Dimensions (L × W × H) (mm) <span>930 × 800 × 920</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-9-50-4">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["23"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["23"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["23"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["23"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["23"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd91004"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-9-100-4">
<img alt="Hd 9 100 4 - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/HD-9_100-4-large.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/HD-9_100-4.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Ultra Class</h2>
<h5>Item Code : HD 9/100-4</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>980</span></li>
<li>Working pressure bar / MPa : <span>1000100</span></li>
<li>Max. inlet temperature °C : <span>45</span></li>
<li>Drive : <span>E-Motor 400 V / 50 Hz</span></li>
<li>Fuel : <span>electric</span></li>
<li>Pump type : <span>Crankshaft</span></li>
<li>Engine rating kW : <span>30</span></li>
<li>Weight without accessories (kg) <span>378</span></li>
<li>Weight (with accessories) (kg) <span>392</span></li>
<li>Dimensions (L × W × H) (mm) <span>1395 × 789 × 1088</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-9-100-4">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["24"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["24"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["24"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["24"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["24"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd716"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-7-16-c">
<img alt="Hd 7 16 Cage Classic - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/HD-7-16-Cage-Classic.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/HD-7-16-Cage-Classic.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Special Class</h2>
<h5>Item Code : HD 7/16 Cage Classic</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>400–700</span></li>
<li>Working pressure bar / MPa : <span>70–160 / 7–16</span></li>
<li>Max. pressure bar : <span>220</span></li>
<li>Max. inlet temperature °C : <span>60</span></li>
<li>Connection load kW : <span>4.3</span></li>
<li>Current type Ph / V / Hz : <span>3 / 400 / 50</span></li>
<li>Weight (kg) : <span>55</span></li>
<li>Dimensions (L × W × H) (mm) : <span>625 × 500 × 360</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-7-16-c">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["25"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["25"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["25"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["25"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["25"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hd10154"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/cold-water-high-pressure-hd-10-15-4-c">
<img alt="Hd 10 15 4 Cage Food - Cold Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Cold water high pressure/HD-10-15-4-cage-food.jpg" src="images/product-images/Cleaning Machines/Cold water high pressure/HD-10-15-4-cage-food.jpg"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Cold Water High Pressure - Special Class</h2>
<h5>Item Code : HD 10/15-4 Cage Food</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>440 – 990</span></li>
<li>Working pressure bar / MPa : <span>20 – 145 / 2 – 14.5</span></li>
<li>Working pressure PSI : <span>290290 / 2100</span></li>
<li>Max. pressure bar / MPa : <span>175 / 17.5</span></li>
<li>Max. inlet temperature °C : <span>85</span></li>
<li>Connection load kW : <span>6.4</span></li>
<li>Current type Ph / V / Hz : <span>3 / 400 / 50</span></li>
<li>Number of simultaneous users : <span>1</span></li>
<li>Mobility : <span>cart</span></li>
<li>Weight (kg) : <span>78.4</span></li>
<li>Dimensions (L × W × H) (mm) : <span>650 × 521 × 1100</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/cold-water-high-pressure-hd-10-15-4-c">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["26"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["26"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["26"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["26"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["26"]["code"]; ?>" name="remark" value="" />
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