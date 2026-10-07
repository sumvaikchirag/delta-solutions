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
<title>Karcher Carpet Cleaner</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- <link rel="stylesheet" href="dist/drift-basic.css"> -->
<!-- Responsive -->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/carpet-cleaner" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/carpet-cleaner" hreflang="en-in" rel="alternate"/>
<link href="https://delta-solutions.in/carpet-cleaner" hreflang="x-default" rel="alternate"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<link as="image" href="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Carpet%20Cleaning/Puzzi-10_1.png" rel="preload"/>
<!-- OG Tags -->
<meta content="Karcher Carpet &amp; Upholstery Cleaner" property="og:title"/>
<meta content="Karcher Carpet Cleaners for commercial purpose. Robust &amp; German-quality machines for leaner carpets and upholstery. Click to learn more." property="og:description"/>
<meta content="https://delta-solutions.in/carpet-cleaner" property="og:url"/>
<meta content="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Carpet%20Cleaning/Puzzi-10_1.png" property="og:image"/>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<meta content="Karcher Carpet Cleaners for commercial purpose. Robust &amp; German-quality machines for leaner carpets and upholstery. Click to learn more." name="description"/>
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
      "@id": "https://delta-solutions.in/carpet-cleaner/#webpage",
      "url": "https://delta-solutions.in/carpet-cleaner/",
      "name": "Carpet & Upholstery Cleaner",
      "description": "Category page featuring professional carpet and upholstery cleaning machines used for deep extraction, rinsing, and drying in commercial and institutional interiors.",
      "isPartOf": {
        "@id": "https://delta-solutions.in/#website"
      },
      "about": {
  "@type": "Thing",
  "name": "Carpet & Upholstery Cleaner",
  "description": "Carpet and upholstery cleaning machines designed for professional spray extraction, deep soil removal, and controlled drying of fabric surfaces."
      },
      "breadcrumb": {
        "@id": "https://delta-solutions.in/carpet-cleaner/#breadcrumbs"
      },
      "mainEntity": {
        "@id": "https://delta-solutions.in/carpet-cleaner/#itemlist"
      },
      "hasPart": {
        "@id": "https://delta-solutions.in/carpet-cleaner/#faq"
      }
    },

    {
      "@type": "ItemList",
      "@id": "https://delta-solutions.in/carpet-cleaner/#itemlist",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 2,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Karcher Spray Extractor (Item Code : Puzzi 10/1)",
          "url": "https://delta-solutions.in/product/carpet-cleaner-puzzi-10-1"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Karcher Air Blower (Item Code : AB 30)",
          "url": "https://delta-solutions.in/product/carpet-cleaner-ab-30"
        }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://delta-solutions.in/carpet-cleaner/#breadcrumbs",
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
          "name": "Carpet & Upholstery Cleaner",
          "item": "https://delta-solutions.in/carpet-cleaner/"
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
<li class="active"><a href="#Puzzi101">Puzzi 10/1</a></li>
<li><a href="#AB30">AB 30</a></li>
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
<li>Karcher Carpet &amp; Upholstery Cleaner</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Puzzi101');">Puzzi 10/1</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('AB30');">AB 30</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="Puzzi101">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Karcher Carpet &amp; Upholstery Cleaner</h1>
</div>
<!-- <div class="detail"></div> -->
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/carpet-cleaner-puzzi-10-1">
<img alt="Puzzi 10 1 - Carpet Cleaning | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Carpet Cleaning/Puzzi-10_1-large.jpg" src="images/product-images/Cleaning Machines/Carpet Cleaning/Puzzi-10_1.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Spray Extractor</h2>
<h5>Item Code : Puzzi 10/1</h5>
<h4>Technical data:</h4>
<ul>
<li>Max. area performance (m2/h) : <span>25</span></li>
<li>Air flow rate (l/s) : <span>54</span></li>
<li>Vacuum (mbar/kPa)  : <span>220/22</span></li>
<li>Spray rate l/min : <span>1</span></li>
<li>Spray pressure/back pressure bar : <span>1</span></li>
<li>Fresh/waste water tank (l) : <span>10/9</span></li>
<li>Turbine power rating (W) : <span>1250</span></li>
<li>Power rating pump (W) : <span>40</span></li>
<li>Brush motor power rating (W) <span>-</span></li>
<li>Weight (kg) : <span>8</span></li>
<li>Dimensions (L x W x H) (mm) : <span> 406x320x434</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/carpet-cleaner-puzzi-10-1">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["14"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["14"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["14"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["14"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["14"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="AB30"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="/product/carpet-cleaner-ab-30">
<img alt="Ab 30 - Carpet Cleaning | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Carpet Cleaning/AB-30-large.jpg" src="images/product-images/Cleaning Machines/Carpet Cleaning/AB-30.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Air Blower </h2>
<h5>Item Code : AB 30</h5>
<h4>Technical data:</h4>
<ul>
<li>Speed settings : <span>3</span></li>
<li>Blower speed (levels 1/2/3) rpm :<span>1000 / 1250 / 1400</span></li>
<li>Rated input power W  : <span>520</span></li>
<li>Weight kg : <span>8.5</span></li>
<li>Dimensions (L × W × H) mm : <span>400 × 400 × 402</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/carpet-cleaner-ab-30">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["15"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["15"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["15"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["15"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["15"]["code"]; ?>" name="remark" value="" />
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