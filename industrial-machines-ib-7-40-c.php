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
<title>IB 7/40 Classic - Karcher Industrial Machines | Delta Solutions</title>
<link rel="canonical" href="https://delta-solutions.in/product/industrial-machines-ib-7-40-c"/>
<meta name="description" content="IB 7/40 Classic - Karcher Industrial Machines: The KÄRCHER ice blaster IB 7/40 Classic features impressive cleaning power. It's air flow has been optimised…"/>
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet"/>
<link href="/css/style.css" rel="stylesheet"/>
<link href="/css/responsive.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--Favicon-->
<link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="/images/favicon.png" rel="icon" type="image/x-icon"/>
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
  "@type": "Product",
  "name": "IB 7/40 Classic - Karcher Industrial Machines",
  "image": [
    "https://delta-solutions.in/images/product-images/Cleaning%20Machines/Industrial/IB-7_40-Classic.png"
  ],
  "description": "The K\u00c4RCHER ice blaster IB 7/40 Classic features impressive cleaning power. It's air flow has been optimised so that even low air pressures bring about excellent cleaning results. Like all K\u00c4RCHER ice blasters, the IB 7/40 Classic is impressively reliable. Dry ice blasting with the K\u00c4RCHER IB 7/40 Classic means working without unwanted interruptions. A new feature is integrated tank emptying that is activated by the touch of a button. It's compact build makes it possible to manoeuvre it easily even in narrow spaces.",
  "sku": "IB 7/40 Classic",
  "mpn": "IB 7/40 Classic",
  "brand": {
    "@type": "Brand",
    "name": "K\u00e4rcher"
  },
  "manufacturer": {
    "@type": "Organization",
    "name": "K\u00e4rcher"
  },
  "additionalProperty": [
    {
      "@type": "PropertyValue",
      "name": "Connection load kW",
      "value": "0.6"
    },
    {
      "@type": "PropertyValue",
      "name": "Compressed air connection",
      "value": "Claw coupling (DIN 3238)"
    },
    {
      "@type": "PropertyValue",
      "name": "Housing / frame",
      "value": "Stainless steel (1.4301)"
    },
    {
      "@type": "PropertyValue",
      "name": "Cord length",
      "value": "7 m"
    },
    {
      "@type": "PropertyValue",
      "name": "Air pressure bar / MPa",
      "value": "2\u201310 / 0.2\u20131"
    },
    {
      "@type": "PropertyValue",
      "name": "Air quality",
      "value": "dry & oil free"
    },
    {
      "@type": "PropertyValue",
      "name": "Air flow",
      "value": "0.5\u20133.5 m3/min"
    },
    {
      "@type": "PropertyValue",
      "name": "Sound level dB(A)",
      "value": "99"
    },
    {
      "@type": "PropertyValue",
      "name": "Dry ice capacity",
      "value": "15 kg"
    },
    {
      "@type": "PropertyValue",
      "name": "Dry ice pellets (diameter)",
      "value": "3 mm"
    },
    {
      "@type": "PropertyValue",
      "name": "Dry ice consumption",
      "value": "15\u201350 kg/h"
    },
    {
      "@type": "PropertyValue",
      "name": "Weight without accessories",
      "value": "69 kg"
    },
    {
      "@type": "PropertyValue",
      "name": "Dimensions (L \u00d7 W \u00d7 H)",
      "value": "768 \u00d7 510 \u00d7 1100 mm"
    }
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://delta-solutions.in/product/industrial-machines-ib-7-40-c",
    "itemCondition": "https://schema.org/NewCondition",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "Delta Solutions",
      "url": "https://delta-solutions.in/"
    }
  }
}
</script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; border:4px solid #f2f2f2; border-radius: 15px;height: 350px;text-align: center; padding: 40px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 28px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;} 
   
    </style>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="/index.php">Home</a></li>
<li><a href="/cleaning-machines.php">Cleaning Machines</a></li>
<li><a href="/industrial-machines.php">Karcher Industrial Machines</a></li>
<li>IB 7/40 Classic</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three">
<div class="auto-container">
<div class="row clearfix">
<div class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="/images/product-images/Cleaning Machines/Industrial/IB-7_40-Classic.png"><img alt="Ib 7 40 Classic - Industrial | Delta Solutions" src="/images/product-images/Cleaning Machines/Industrial/IB-7_40-Classic.png"/></a>
</div>
<div align="center"><a class="theme-btn btn-style-one" href="/images/pdf/Cleaning Machines/Industrial/IB-7-40-Classic.pdf" target="blank">Download Data Sheet</a></div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h1 class="product-title"><span>Karcher Dry Ice Blaster</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["50"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["50"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="/images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["50"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="/images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["50"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["50"]["code"]; ?>" name="remark" value="" />
                            </p></h1>
<h5>(IB 7/40 Classic)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one">Details</a></li>
<li class=""><a data-toggle="tab" href="#two">Technical data</a></li>
<li class=""><a data-toggle="tab" href="#three">Equipment</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one">
<p>The KÄRCHER ice blaster IB 7/40 Classic features impressive cleaning power. It's air flow has been optimised so that even low air pressures bring about excellent cleaning results. Like all KÄRCHER ice blasters, the IB 7/40 Classic is impressively reliable. Dry ice blasting with the KÄRCHER IB 7/40 Classic means working without unwanted interruptions. A new feature is integrated tank emptying that is activated by the touch of a button. It's compact build makes it possible to manoeuvre it easily even in narrow spaces.</p>
</div>
<div class="tab-pane" id="two">
<ul>
<li>Connection load kW : <span>0.6</span></li>
<li>Compressed air connection : <span>Claw coupling (DIN 3238)</span></li>
<li>Housing / frame : <span>Stainless steel (1.4301)</span></li>
<li>Cord length (m) : <span>7</span></li>
<li>Air pressure bar / MPa : <span>2–10 / 0.2–1</span></li>
<li>Air quality : <span>dry &amp; oil free</span></li>
<li>Air flow (m3/min) : <span>0.5–3.5</span></li>
<li>Sound level dB(A) : <span>99</span></li>
<li>Dry ice capacity (kg) : <span>15</span></li>
<li>Dry ice pellets (diameter) (mm) : <span>3</span></li>
<li>Dry ice consumption (kg/h) : <span>15–50</span></li><li>Weight without accessories (kg) <span>69</span></li>
<li>Dimensions (L × W × H) (mm) <span>768 × 510 × 1100</span></li>
</ul>
</div>
<div class="tab-pane" id="three">
<ul>
<li>Brush (pervaded with cleaning agent)</li>
<li>Tap</li>
<li>Water level control</li>
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
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/script.js"></script>
<!--Google Map APi Key-->
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>