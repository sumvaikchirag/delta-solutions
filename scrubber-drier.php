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
<title>Karcher Scrubber Drier | Ride-on &amp; Walk Behind Scrubber Drier</title>
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
<meta content="Delta Solutions offers Karcher scrubber driers - ride on &amp; walk-behind scrubber driers, with advanced technology for efficient &amp; durable industrial cleaning" name="description"/>
<meta content="karcher scrubber drier, walk behind scrubber drier, ride on scrubber drier" name="keywords"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/scrubber-drier" rel="canonical">
<link href="https://delta-solutions.in/scrubber-drier" hreflang="en-in" rel="alternate">
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<meta content="Karcher Scrubber Drier | Ride-on &amp; Walk Behind Scrubber Drier" property="og:title"/>
<meta content="Delta Solutions" property="og:site_name"/>
<meta content="https://delta-solutions.in/scrubber-drier" property="og:url"/>
<meta content="Delta Solutions offers Karcher scrubber driers - ride on &amp; walk-behind scrubber driers, with advanced technology for efficient &amp; durable industrial cleaning" property="og:description"/>
<meta content="website" property="og:type"/>
<meta content="https://delta-solutions.in/images/300x75.png" property="og:image"/>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": ["WebPage", "CollectionPage"],
      "@id": "https://delta-solutions.in/scrubber-drier/#webpage",
      "url": "https://delta-solutions.in/scrubber-drier/",
      "name": "Scrubber Drier",
      "description": "Category page featuring professional scrubber drier machines designed to scrub and dry hard floors in a single pass across commercial and industrial environments.",
      "isPartOf": {
        "@id": "https://delta-solutions.in/#website"
      },
      "about": {
  "@type": "Thing",
  "name": "Scrubber Drier",
  "description": "Scrubber drier machines designed for professional floor cleaning, using rotating brushes, cleaning solution, and suction to scrub and dry hard floor surfaces efficiently."
      },
      "breadcrumb": {
        "@id": "https://delta-solutions.in/scrubber-drier/#breadcrumbs"
      },
      "mainEntity": {
        "@id": "https://delta-solutions.in/scrubber-drier/#itemlist"
      },
      "hasPart": {
        "@id": "https://delta-solutions.in/scrubber-drier/#faq"
      }
    },

    {
      "@type": "ItemList",
      "@id": "https://delta-solutions.in/scrubber-drier/#itemlist",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 7,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Karcher Scrubber Drier - Compact (BR 30/4 C)",
          "url": "https://delta-solutions.in/scrubber-drier-br-30-4-c.php"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Karcher Scrubber Drier - Walk Behind (Electric) (BD 43/40 C Ep IN)",
          "url": "https://delta-solutions.in/scrubber-drier-bd-43-40-c-ep.php"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Karcher Scrubber Drier - Walk Behind (Battery) (BD 50/50 Bp Classic)",
          "url": "https://delta-solutions.in/scrubber-drier-bd-50-50-bp.php"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Karcher Scrubber Drier - Walk Behind (Electric) (BD 50/60 Ep Classic)",
          "url": "https://delta-solutions.in/scrubber-drier-bd-50-60-ep.php"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Karcher Scrubber Drier - Ride on (BD 50/70 R Classic Bp)",
          "url": "https://delta-solutions.in/scrubber-drier-bd-50-70-r-bp.php"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Karcher Scrubber Drier - Ride on (B 90 R Classic Bp)",
          "url": "https://delta-solutions.in/scrubber-drier-b-90-r-bp.php"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "Karcher Scrubber Drier - Ride on (BD 90/160 R Classic Bp)",
          "url": "https://delta-solutions.in/scrubber-drier-bd-90-160-r-bp.php"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://delta-solutions.in/scrubber-drier/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the purpose of a scrubber machine?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The scrubber machine cleans floors by using rotating brushes, detergents, and a suction to remove the dirt and dust collected while cleaning."
             }
          },
        {
          "@type": "Question",
          "name": "What is a scrubber used for cleaning?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scrubbers are used to clean large floor areas, be it warehouses, lobbies, factories, etc."
             }
          },
        {
          "@type": "Question",
          "name": "What is a scrubber dryer used for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A scrubber dryer cleans and dries the floors side by side, leaving the floor clean and dry."
             }
          },
        {
          "@type": "Question",
          "name": "What is a scrubber motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The scrubber motor provides power to the pads and brushes. It also ensures effective scrubbing and suction."
             }
          },
        {
          "@type": "Question",
          "name": "What are the three types of scrubbers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The three major types of scrubbers are- Walk behind, ride on, and robotic scrubbers."
             }
          },
        {
          "@type": "Question",
          "name": "Why scrubber is used in industry?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scrubbers make the whole process easy and versatile. The scrubbers are made in a streamlined way to make your work convenient."
             }
          },
        {
          "@type": "Question",
          "name": "What is the scrubber's benefit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scrubber promotes uncompromising cleanliness, reduces labour, and ensures faster and safer form for the flooring."
             }
          },
        {
          "@type": "Question",
          "name": "What is the function of a scrubber?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A scrubber cleans and dries the floor by scrubbing the dirt and suctioning  water."
             }
          }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://delta-solutions.in/scrubber-drier/#breadcrumbs",
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
          "name": "Scrubber Drier",
          "item": "https://delta-solutions.in/scrubber-drier/"
        }
      ]
    }

  ]
}
</script>
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
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#br304c">BR 30/4 C</a></li>
<li><a href="#bd4340c">BD 43/40 C Ep IN</a></li>
<li><a href="#bd5050bp">BD 50/50 Bp Classic</a></li>
<li><a href="#bd5060ep">BD 50/60 Ep Classic</a></li>
<li><a href="#bd5070r">BD 50/70 R Classic Bp</a></li>
<li><a href="#b90r">B 90 R Classic Bp</a></li>
<li><a href="#bd90160r">BD 90/160 R Classic Bp</a></li>
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
<li>Karcher Scrubber Drier</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('br304c');">BR 30/4 C</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('bd4340c');">BD 43/40 C Ep IN</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('bd5050bp');">BD 50/50 Bp Classic</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('bd5060ep');">BD 50/60 Ep Classic</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('bd5070r');">BD 50/70 R Classic Bp</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('b90r');">B 90 R Classic Bp</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('bd90160r');">BD 90/160 R Classic Bp</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="br304c">
<div class="auto-container">
<div class="sec-title text-center">
<h1 style="color:black">Karcher Ride-on &amp; Walk Behind Scrubber Driers</h1>
</div>
<!-- <div class="detail"></div> -->
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="scrubber-drier-br-30-4-c.php">
<img alt="Br 30 4 - Scrubber Drier | Delta Solutions" class="drift-demo-trigger" src="images/product-images/Cleaning Machines/Scrubber Drier/BR-30_4.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Scrubber Drier - Compact</h2>
<h5> (BR 30/4 C)</h5>
<h4>Technical data:</h4>
<ul>
<li>Brush working width (mm) : <span>300</span></li>
<li>Vacuum working width (mm) : <span>300</span></li>
<li>Power rating (W) :<span>820</span></li>
<li>Battery capacity</li>
<li>Battery voltage</li>
<li>Fresh/dirty water tank (l) : <span>4/4</span></li>
<li>Brush contact pressure g/cm2 : <span>100</span></li>
<li>Brush speed  rpm : <span>1450</span></li>
<li>Max. area performance (m2/h) : <span>200</span></li>
<li>Frequency (Hz) : <span>50-60</span></li>
<li>Voltage (V) : <span>230</span></li>
<li>Weight (kg) <span>12.4</span></li>
<li>Dimensions (L × W × H) (mm) <span>390x335x1180</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="scrubber-drier-br-30-4-c.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["31"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["31"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["31"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["31"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["31"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="bd4340c"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="scrubber-drier-bd-43-40-c-ep.php">
<img alt="Bd 43 40 C Ep - Scrubber Drier | Delta Solutions" class="drift-demo-trigger" src="images/product-images/Cleaning Machines/Scrubber Drier/BD-43_40-C-Ep.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Scrubber Drier - Walk Behind (Electric)</h2>
<h5> (BD 43/40 C Ep IN)</h5>
<h4>Technical data:</h4>
<ul>
<li>Working width (mm) : <span>430</span></li>
<li>Suction width (mm) : <span>850</span></li>
<li>Input power (W) :<span>1100</span></li>
<li>Fresh &amp; recovery tank (l) : <span>40L / 40L</span></li>
<li>Brush contact pressure g/cm2 : <span>30–40</span></li>
<li>Brush speed  rpm : <span>180</span></li>
<li>Max. area performance (m2/h) : <span>200</span></li>
<li>Frequency (Hz) : <span>50-60</span></li>
<li>Noise level dB(A) : <span>66</span></li>
<li>Weight (kg) <span>48</span></li>
<li>Dimensions (L × W × H) (mm) <span>1136 x 516 x 1030</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="scrubber-drier-bd-43-40-c-ep.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["32"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["32"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["32"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["32"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["32"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="bd5050bp"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="scrubber-drier-bd-50-50-bp.php">
<img alt="Bd 50 50 Bp Classic - Scrubber Drier | Delta Solutions" class="drift-demo-trigger" src="images/product-images/Cleaning Machines/Scrubber Drier/BD-50_50-Bp-Classic.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Scrubber Drier - Walk Behind (Battery)</h2>
<h5>(BD 50/50 Bp Classic)</h5>
<h4>Technical data:</h4>
<ul>
<li>Working width brushes (mm) : <span>510</span></li> <li>Power rating: (W) :<span>1100</span></li>
<li>Fresh &amp; recovery tank (l) : <span>52/51</span></li>
<li>Brush contact pressure g/cm2 : <span>27-28</span></li>
<li>Brush speed  rpm : <span>180</span></li>
<li>Pract. area performance (m2/h) : <span>2000</span></li>
<li>Turn radius (cm) : <span>150</span></li>
<li>Battery (BD 50/50 C Bp (V) : <span>24</span></li>
<li>Noise level dB(A) : <span>66</span></li>
<li>Weight without battery (kg) <span>57</span></li>
<li>Dimensions (L × W × H) (mm) <span>1185x540x1000</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="scrubber-drier-bd-50-50-bp.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["33"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["33"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["33"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["33"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["33"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="bd5060ep"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="scrubber-drier-bd-50-60-ep.php">
<img alt="Bd 50 60 Ep - Scrubber Drier | Delta Solutions" class="drift-demo-trigger" src="images/product-images/Cleaning Machines/Scrubber Drier/BD-50_60-Ep.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Scrubber Drier - Walk Behind (Electric)</h2>
<h5> (BD 50/60 Ep Classic)</h5>
<h4>Technical data:</h4>
<ul>
<li>Brush working width (mm) : <span>510</span></li>
<li>Vacuum working width (mm) : <span>850</span></li>
<li>Rated input power (W) :<span>1100</span></li>
<li>Fresh/dirty water tank (l) : <span>60 / 60</span></li>
<li>Brush contact pressure g/cm2 : <span>27.3–28.5</span></li>
<li>Brush speed  rpm : <span>155</span></li>
<li>Max. area performance (m2/h) : <span>2040</span></li>
<li>Frequency (Hz) : <span>50</span></li>
<li>Voltage (V) : <span>230</span></li>
<li>Weight (kg) <span>57</span></li>
<li>Dimensions (L × W × H) (mm) <span>1185 × 540 × 1000</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="scrubber-drier-bd-50-60-ep.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["34"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["34"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["34"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["34"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["34"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="bd5070r"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="scrubber-drier-bd-50-70-r-bp.php">
<img alt="50 70 R Classic - Scrubber Drier | Delta Solutions" class="drift-demo-trigger" src="images/product-images/Cleaning Machines/Scrubber Drier/50_70-R-Classic.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Scrubber Drier - Ride on</h2>
<h5>(BD 50/70 R Classic Bp)</h5>
<h4>Technical data:</h4>
<ul>
<li>Rated input power (W) :<span>1400</span></li>
<li>Fresh/dirty water tank (l) : <span>70 / 75</span></li>
<li>Brush speed  rpm : <span>155</span></li>
<li>Battery Voltage (V) : <span>24</span></li>
<li>Weight (kg) <span>114</span></li>
<li>Dimensions (L × W × H) (mm) <span>1310 × 590 × 1060</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="scrubber-drier-bd-50-70-r-bp.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["35"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["35"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["35"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["35"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["35"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="b90r"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Machines/Scrubber Drier/B-90-R-Classic-Bp.png">
<img alt="B 90 R Classic Bp - Scrubber Drier | Delta Solutions" class="drift-demo-trigger" src="images/product-images/Cleaning Machines/Scrubber Drier/B-90-R-Classic-Bp.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Scrubber Drier - Ride on</h2>
<h5> (B 90 R Classic Bp)</h5>
<h4>Technical data:</h4>
<ul>
<li>Brush working width (mm) : <span>550</span></li>
<li>Vacuum working width (mm) : <span>850</span></li>
<li>Rated input power (W) :<span>2200</span></li>
<li>Fresh/dirty water tank (l) : <span>90 / 90</span></li>
<li>Theoretical area performance (m2/h) : <span>4500</span></li> <li>Battery Voltage (V) : <span>24</span></li>
<li>Weight (kg) <span>149</span></li>
<li>Dimensions (L × W × H) (mm) <span>1450 × 800 × 1200</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="scrubber-drier-b-90-r-bp.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["36"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["36"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["36"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["36"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["36"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="bd90160r"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a href="scrubber-drier-bd-90-160-r-bp.php">
<img alt="Bd 90 160 R Classic Bp - Scrubber Drier | Delta Solutions" class="drift-demo-trigger" src="images/product-images/Cleaning Machines/Scrubber Drier/BD-90_160-R-Classic-Bp.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Scrubber Drier - Ride on</h2>
<h5>(BD 90/160 R Classic Bp)</h5>
<h4>Technical data:</h4>
<ul>
<li>Brush working width mm : <span>900</span></li>
<li>Working width, vacuuming mm : <span>1200</span></li>
<li>Fresh/dirty water tank l : <span>160 / 160</span></li>
<li>Theoretical area performance m²/h : <span>5400</span></li>
<li>Brush speed rpm : <span>100–190</span></li>
<li>Brush contact pressure g/cm² : <span>–30 /</span></li>
<li>Battery voltage V : <span>36</span></li>
<li>Battery capacity Ah : <span>300</span></li>
<li>Weight (with accessories) kg : <span>370</span></li>
<li>Dimensions (L × W × H) mm : <span>1740 × 970 × 1445</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="scrubber-drier-bd-90-160-r-bp.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["37"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["37"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["37"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["37"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["37"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End Project Section Two -->
<div style="padding-left: 10rem; padding-right: 10rem; margin-top: 20px;">
<h2>Karcher Scrubber Drier: Smart Solution for The Regular Mess</h2>
<p>Karcher Scrubber Drier at Delta Solutions consists of a wide range of Scrubbers and Scrubber Driers, including compact scrubbers, walk behind (electric) scrubbers, walk behind (battery) Scrubber Driers, and a wide range of ride-on scrubbers. These machines are comprehensive for industrial, commercial, and domestic cleaning requirements. Our Scrubbers are constructed incredibly to fulfil tough duties, providing strong suction to remove everything that includes dust, debris, and spills.</p>
<h2>Why Choose A Karcher Scrubber Drier from Delta Solutions?</h2>
<p>At Delta Solutions, we offer not only machines but also a complete cleaning solution. This solution is easy to install and use, saves time, has powerful performance and longer durability, and is eco-friendly, so you have a win-win situation.<br/>Our floor scrubber machines come in different sizes and are suitable for small shops, malls, hospitals, hotels, and other spaces.<br/>Karcher is not just the best scrubber-drier supplier, but it’s a global leader in cleaning technology. The smart cleaning solution that we provide is not just innovative but has revolutionary results, giving powerful performance.</p>
<h2>Delta Solutions - A Trusted Companion For Smart Cleaning</h2>
<p>At Delta Solutions, we believe in serving quality machines and great cleaning tools. Our mission is to provide enduring cleaning solutions, be it a wet and dry vacuum cleaner for sofa or some other machines. Our machines combine innovation, ease of use, and efficiency.</p>
<h2>Ready to Clean Smarter?- Here’s the Guide</h2>
<p>Keeping the floor clean is not an easy task, whether it’s in a hospital, hotel, factory, or mall. The mess keeps coming. We have you covered, as we made the process easy and are bringing you a smart innovation.</p>
<p>The machine already has disc brushes or floor pads installed for mechanical action combined with detergent or cleaning solution. Scrubber dryer floor cleaning machines work this way: They scrub/scrape and remove dust. The machine or scrubber's built-in suction helps dry the floor immediately. The complete cleaning process uses less water than that used in the traditional mop and also gives much better cleaning results. Whereas, the walk-behind and ride-on scrubber driers are used according to the space and area.</p>
<h2>Karcher Scrubber Drier- Perfect for All Types of Businesses</h2>
<p>Karcher scrubber drier is perfect for all types of businesses as they do not come in one size but have a variety made for different spaces, be it offices, homes, malls, hotels, hospitals, factories, and others. This scrubber drier from Karcher not just offers a smart cleaning solution but also gives you innovation, reliability, durability, and a powerful cleaning companion which is easy not just to install but for use. Delta Solutions has a wide range of enduring Karcher ride-on and walk-behind scrubber dryers, which provide efficient and reliable floor cleaning.<br/>These machines are available in both electrical models as well as in battery-operated models. The voltage range falls between 220-240 V, with a frequency lying between 50-60 Hz. The brush speed reaches 180 RPM, giving powerful scrubbing and cleaning. Due to the low sound pressure, i.e., 63-75 dB(A), ensures a quieter operation. Choose Delta Solutions’ Karcher Scrubber Drier as they are perfect for every space and give you amazing features.</p>
<h2>Choose Us and Transform Your Space in An Innovative Way</h2>
<p>We are proud to provide what is probably one of the smartest cleaning machines available — be it a walk-behind scrubber-dryer or a ride-on scrubber-dryer. It is, after all, not just a machine; it’s your new companion in cleaning to help overcome those day-to-day messes. If you run some kind of business, you’ve known this already that first impressions do count, and maintaining that first impression not just for your business but for every other space we've got you a smart solution. Scrubber driers will keep your floors not just clean, but dry and safe throughout the day.</p>
</div>
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px 2rem; /* 2rem left and right padding */
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin: 0; /* NO margin */
  display: block;
  padding-left: 10rem
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 10rem; /* SMALL space between text and + icon */
}

.active:after {
  content: "\2212"; /* minus sign */
}

.panel {
  padding: 0 2rem; /* Left and right padding inside the panel */
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  margin: 0; /* NO margin between panels */
}
</style>
<h2 style="padding-left: 10rem; padding-right: 10rem; margin-top: 4px;">FAQs</h2>
<button class="accordion"><b>What is the purpose of a scrubber machine?</b></button>
<div class="panel">
<p style="margin-left: 8rem">The scrubber machine cleans floors by using rotating brushes, detergents, and a suction to remove the dirt and dust collected while cleaning.</p>
</div>
<button class="accordion"><b>What is a scrubber used for cleaning?</b></button>
<div class="panel">
<p style="margin-left: 8rem">Scrubbers are used to clean large floor areas, be it warehouses, lobbies, factories, etc.</p>
</div>
<button class="accordion"><b>What is a scrubber dryer used for?</b></button>
<div class="panel">
<p style="margin-left: 8rem">A scrubber dryer cleans and dries the floors side by side, leaving the floor clean and dry.</p>
</div>
<button class="accordion"><b>What is a scrubber motor?</b></button>
<div class="panel">
<p style="margin-left: 8rem">The scrubber motor provides power to the pads and brushes. It also ensures effective scrubbing and suction.</p>
</div>
<button class="accordion"><b>What are the three types of scrubbers?</b></button>
<div class="panel">
<p style="margin-left: 8rem;">The three major types of scrubbers are- Walk behind, ride on, and robotic scrubbers.</p>
</div>
<button class="accordion"><b>Why scrubber is used in industry?</b></button>
<div class="panel">
<p style="margin-left: 8rem;">Scrubbers make the whole process easy and versatile. The scrubbers are made in a streamlined way to make your work convenient.</p>
</div>
<button class="accordion"><b>What is the scrubber's benefit?</b></button>
<div class="panel">
<p style="margin-left: 8rem;">Scrubber promotes uncompromising cleanliness, reduces labour, and ensures faster and safer form for the flooring.</p>
</div>
<button class="accordion"><b>What is the function of a scrubber?</b></button>
<div class="panel">
<p style="margin-left: 8rem; margin-bottom: 6rem">A scrubber cleans and dries the floor by scrubbing the dirt and suctioning water.</p>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<br/>
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
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>