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
<title>Karcher Industrial Machines | Delta Solutions</title>
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
<link href="https://delta-solutions.in/industrial-machines" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/industrial-machines" hreflang="en-in" rel="alternate"/>
<link href="https://delta-solutions.in/industrial-machines" hreflang="x-default" rel="alternate"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<link as="image" href="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Industrial/IB-7_40-Classic.png" rel="preload"/>
<!-- OG Tags -->
<meta content="Karcher Industrial Machines" property="og:title"/>
<meta content="Get Karcher Industrial Machines at best price. Click to learn more." property="og:description"/>
<meta content="https://delta-solutions.in/industrial-machines" property="og:url"/>
<meta content="https://delta-solutions.in/images/product-images/Cleaning%20Machines/Industrial/IB-7_40-Classic.png" property="og:image"/>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<meta content="Get Karcher Industrial Machines at best price. Click to learn more." name="description"/>
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
      "@id": "https://delta-solutions.in/industrial-machines/#webpage",
      "url": "https://delta-solutions.in/industrial-machines/",
      "name": "Industrial Machines",
      "description": "Explore a range of industrial machines from Delta Solutions, including dry ice blasters and parts cleaners, designed for heavy-duty cleaning, maintenance, and manufacturing applications.",
      "isPartOf": {
        "@id": "https://delta-solutions.in/#website"
      },
      "about": {
  "@type": "Thing",
  "name": "Industrial Machines",
  "description": "Industrial machines engineered for professional and industrial applications, offering high-performance solutions for cleaning, maintenance, and parts processing in factories and workshops."
      },
      "breadcrumb": {
        "@id": "https://delta-solutions.in/industrial-machines/#breadcrumbs"
      },
      "mainEntity": {
        "@id": "https://delta-solutions.in/industrial-machines/#itemlist"
      },
      "hasPart": {
        "@id": "https://delta-solutions.in/industrial-machines/#faq"
      }
    },

    {
      "@type": "ItemList",
      "@id": "https://delta-solutions.in/industrial-machines/#itemlist",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 2,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Karcher Dry Ice Blaster (IB 7/40 Classic)",
          "url": "https://delta-solutions.in/product/industrial-machines-ib-7-40-c"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Karcher Parts Cleaner (PC 100 M2 Bio)",
          "url": "https://delta-solutions.in/product/industrial-machines-pc-100-m2-b"
        }
      ]
    },

        {
      "@type": "BreadcrumbList",
      "@id": "https://delta-solutions.in/industrial-machines/#breadcrumbs",
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
          "name": "Industrial Machines",
          "item": "https://delta-solutions.in/industrial-machines/"
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
<li class="active"><a href="#IB740">IB 7/40 Classic</a></li>
<li><a href="#PC100">PC 100 M2 Bio</a></li>
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
<li>Karcher Industrial Machines</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('IB740');">IB 7/40 Classic</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PC100');">PC 100 M2 Bio</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="IB740">
<div class="auto-container">
<div class="sec-title text-center">
<h1 style="=font-weight: bold; color: black;">Karcher Industrial Machines</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="/product/industrial-machines-ib-7-40-c">
<img alt="Ib 7 40 Classic - Industrial | Delta Solutions" src="images/product-images/Cleaning Machines/Industrial/IB-7_40-Classic.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Dry Ice Blaster</h2>
<h5> (IB 7/40 Classic)</h5>
<h4>Technical data:</h4>
<ul>
<li>Pressure (bar / MPa) : <span>0.3 / 0.03</span></li>
<li>flow rate (l/h)   : <span>900</span></li>
<li>Connection load kW : <span>29.5</span></li>
<li>Working area (mm) : <span>1041 × 660</span></li>
<li>Casing / frame : <span>HDPE – plastic</span></li>
<li>Tested by : <span>CE, GS</span></li>
<li>Heating output (kW) : <span>1</span></li>
<li>Max. temperature °C : <span>40</span></li>
<li>Load capacity (kg) : <span>100</span></li>
<li>Sound pressure level dB(A) : <span>58</span></li>
<li>Tank capacity (l) : <span>80</span></li>
<li>Number of current phases Ph  : <span>1</span></li>
<li>Frequency (Hz) : <span>50–60</span></li>
<li>Voltage (V) : <span>220–240</span></li>
<li>Weight (kg) <span>44</span></li>
<li>Dimensions (L × W × H) (mm) <span>952 × 1181 × 1067</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/industrial-machines-ib-7-40-c">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["50"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["50"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["50"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["50"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["50"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="PC100"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="/product/industrial-machines-pc-100-m2-b">
<img alt="Pc 100 M2 Bio - Industrial | Delta Solutions" src="images/product-images/Cleaning Machines/Industrial/PC-100-M2-Bio.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Parts Cleaner</h2>
<h5>(PC 100 M2 Bio)</h5>
<h4>Technical data:</h4>
<ul>
<li>Pressure (bar / MPa) : <span>0.3 / 0.03</span></li>
<li>flow rate (l/h)   : <span>900</span></li>
<li>Connection load kW : <span>29.5</span></li>
<li>Working area (mm) : <span>1041 × 660</span></li>
<li>Casing / frame : <span>HDPE – plastic</span></li>
<li>Tested by : <span>CE, GS</span></li>
<li>Heating output (kW) : <span>1</span></li>
<li>Max. temperature °C : <span>40</span></li>
<li>Load capacity (kg) : <span>100</span></li>
<li>Sound pressure level dB(A) : <span>58</span></li>
<li>Tank capacity (l) : <span>80</span></li>
<li>Number of current phases Ph  : <span>1</span></li>
<li>Frequency (Hz) : <span>50–60</span></li>
<li>Voltage (V) : <span>220–240</span></li>
<li>Weight (kg) <span>44</span></li>
<li>Dimensions (L × W × H) (mm) <span>952 × 1181 × 1067</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/industrial-machines-pc-100-m2-b">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["51"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["51"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["51"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["51"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["51"]["code"]; ?>" name="remark" value="" />
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