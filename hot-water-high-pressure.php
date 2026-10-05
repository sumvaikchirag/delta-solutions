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
<title>Karcher High Pressure Washer | Hot Water Pressure Washer</title>
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
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<meta content="Delta Solutions brings Karcher high-pressure washers including hot water pressure models, designed for industrial cleaning with superior efficiency &amp; power" name="description"/>
<meta content="karcher high pressure washer, karcher hot pressure washer, hot water high pressure washer" name="keywords"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/hot-water-high-pressure" rel="canonical">
<link href="https://delta-solutions.in/hot-water-high-pressure" hreflang="en-in" rel="alternate">
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<meta content="Karcher High Pressure Washer | Hot Water Pressure Washers" property="og:title"/>
<meta content="Delta Solutions" property="og:site_name"/>
<meta content="https://delta-solutions.in/hot-water-high-pressure" property="og:url"/>
<meta content="Delta Solutions brings Karcher high-pressure washers including hot water pressure models, designed for industrial cleaning with superior efficiency &amp; power" property="og:description"/>
<meta content="website" property="og:type"/>
<meta content="https://delta-solutions.in/images/300x75.png" property="og:image"/>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": ["WebPage", "CollectionPage"],
      "@id": "https://delta-solutions.in/hot-water-high-pressure/#webpage",
      "url": "https://delta-solutions.in/hot-water-high-pressure/",
      "name": "Hot Water High Pressure Washer",
      "description": "Category page listing professional hot water high-pressure cleaners used for removing oil, grease, and heavy soiling in industrial, automotive, and commercial cleaning applications.",
      "isPartOf": {
        "@id": "https://delta-solutions.in/#website"
      },
      "about": {
  "@type": "Thing",
  "name": "Hot Water High Pressure Washer",
  "description": "Hot water high-pressure cleaning machines designed for professional use, combining heated water and high pressure to break down grease, oil, and stubborn industrial contaminants."
      },
      "breadcrumb": {
        "@id": "https://delta-solutions.in/hot-water-high-pressure/#breadcrumbs"
      },
      "mainEntity": {
        "@id": "https://delta-solutions.in/hot-water-high-pressure/#itemlist"
      },
      "hasPart": {
        "@id": "https://delta-solutions.in/hot-water-high-pressure/#faq"
      }
    },

    {
      "@type": "ItemList",
      "@id": "https://delta-solutions.in/hot-water-high-pressure/#itemlist",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 3,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Karcher Hot Water High Pressure - Middle Class (HDS 8/18-4 M))",
          "url": "https://delta-solutions.in/hot-water-high-pressure-hds-8-18-4-m.php"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Karcher Hot Water High Pressure - Middle Class (HDS 10/20-4 M Classic)",
          "url": "https://delta-solutions.in/hot-water-high-pressure-hds-10-20-4-m.php"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Karcher Hot Water High Pressure - Electric Operated (HDS-E 8/16-4 M 24 kW)",
          "url": "https://delta-solutions.in/hot-water-high-pressure-hds-e-8-16-4-m.php"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://delta-solutions.in/hot-water-high-pressure/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to fix high hot water pressure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To fix high hot water pressure, check and adjust your water pressure regulator, ensuring it's set between 40 and 60 PSI."
             }
          },
        {
          "@type": "Question",
          "name": "What is high-pressure hot water?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The water system that operates at 1.0 bar pressure (10 m of drop) or greater is termed as high pressure. Whereas the pressure below 1.0 bar is considered low pressure."
             }
          },
        {
          "@type": "Question",
          "name": "Does hot water increase pressure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If water is been heated in a 40-gallon water heater, then its thermostat setting will end up expanding by approximately ½ gallon. The extra volume will create expansion and has to go somewhere, or the pressure will eventually increase when water is heated in a closed system."
             }
          },
        {
          "@type": "Question",
          "name": "How to reduce pressure in a hot water system?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To reduce the pressure in a hot water system, place a bucket or tub underneath or next to the valve, and open the valve gently, or bleeding can also be carried out to lower the pressure."
             }
          },
        {
          "@type": "Question",
          "name": "Why is the pressure too high in my hot water tank?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The pressure is too high in my hot water tank due to steam formation from various issues."
          }
        },
        {
          "@type": "Question",
          "name": "How do I turn down high water pressure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To turn down high water pressure, you need to adjust the pressure-reducing valve or replace it if necessary."
             }
          }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://delta-solutions.in/hot-water-high-pressure/#breadcrumbs",
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
          "name": "Hot Water High Pressure Washer",
          "item": "https://delta-solutions.in/hot-water-high-pressure/"
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
<li class="active"><a href="#hds8184">HDS 8/18-4 M</a></li>
<li><a href="#hds10204">HDS 10/20-4 M Classic</a></li>
<li><a href="#hds8164">HDS-E 8/16-4 M 24 kW</a></li>
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
<li>Karcher Hot Water High Pressure</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('hds8184');">HDS 8/18-4 M</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hds10204');">HDS 10/20-4 M Classic</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('hds8164');">HDS-E 8/16-4 M 24 kW</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="hds8184">
<div class="auto-container">
<div class="sec-title text-center">
<h1 style="color:black">Karcher Hot Water High Pressure Washer</h1>
</div>
<!-- <div class="detail"></div> -->
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="hot-water-high-pressure-hds-8-18-4-m.php">
<img alt="Hds 8 18 4 M - Hot Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Hot water high pressure/HDS-8_18-4-M-large.jpg" src="images/product-images/Cleaning Machines/Hot water high pressure/HDS-8_18-4-M.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Hot Water High Pressure - Middle Class</h2>
<h5> (HDS 8/18-4 M)</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>400–800</span></li>
<li>Current type Ph / V / Hz : <span>3 / 400 / 50</span></li>
<li>Working pressure bar / MPa : <span>30–180 / 3–18</span></li>
<li>Heating oil or gas consumption, full load (kg/h) : <span>5.3</span></li>
<li>Max. inlet temperature °C : <span>80 / 155</span></li>
<li>Fuel tank l : <span>25</span></li>
<li>Connection load kW : <span>5.5</span></li>
<li>Weight (kg) <span>159.3</span></li>
<li>Dimensions (L × W × H) (mm) <span>1330 × 750 × 1060</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="hot-water-high-pressure-hds-8-18-4-m.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["27"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["27"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["27"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["27"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["27"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hds10204"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="hot-water-high-pressure-hds-10-20-4-m.php">
<img alt="10 20 4 M - Hot Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Hot water high pressure/10_20-4-M-large.jpg" src="images/product-images/Cleaning Machines/Hot water high pressure/10_20-4-M.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Hot Water High Pressure - Middle Class</h2>
<h5> (HDS 10/20-4 M Classic)</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>500–1000</span></li>
<li>Current type Ph / V / Hz : <span>3 / 400 / 50</span></li>
<li>Working pressure bar / MPa : <span>30–200 / 3–20</span></li>
<li>Heating oil or gas consumption, full load (kg/h) : <span>6.4</span></li>
<li>Max. inlet temperature °C : <span>80 / 155</span></li>
<li>Fuel tank l : <span>25</span></li>
<li>Connection load kW : <span>7.8</span></li>
<li>Weight (kg) <span>167.3</span></li>
<li>Dimensions (L × W × H) (mm) <span>1330 × 750 × 1060</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="hot-water-high-pressure-hds-10-20-4-m.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["28"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["28"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["28"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["28"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["28"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="hds8164"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<a href="hot-water-high-pressure-hds-e-8-16-4-m.php">
<img alt="Hds E 8 16 4 M 24 K W - Hot Water High Pressure | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Hot water high pressure/HDS-E-8_16-4-M-24-kW-large.jpg" src="images/product-images/Cleaning Machines/Hot water high pressure/HDS-E-8_16-4-M-24-kW.png"/>
</a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Karcher Hot Water High Pressure - Electric Operated</h2>
<h5>(HDS-E 8/16-4 M 24 kW)</h5>
<h4>Technical data:</h4>
<ul>
<li>flow rate (l/h)   : <span>300–760</span></li>
<li>Number of current phases Ph  : <span>3</span></li>
<li>Working pressure bar / MPa : <span>30–160 / 3–16</span></li>
<li>Frequency (Hz) : <span>50</span></li>
<li>Max. inlet temperature °C : <span>45 / 85</span></li>
<li>Voltage (V) : <span>400</span></li>
<li>Connection load kW : <span>29.5</span></li>
<li>Weight (kg) <span>122.1</span></li>
<li>Dimensions (L × W × H) (mm) <span>1330 × 750 × 1060</span></li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="hot-water-high-pressure-hds-e-8-16-4-m.php">Know More</a>
<!-- <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a> -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["29"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["29"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["29"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["29"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["29"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End Project Section Two -->
<div style="padding-left: 10rem; padding-right: 10rem; margin-top: 20px;">
<h2>Discover Efficiency with Hot Water High-Pressure Washers</h2>
<p>Get the hot water high-pressure washers and discover effortless cleaning. Hot water high-pressure from Delta Solution is the ultimate machine for an effortless cleaning solution. Delta Solution proudly offers Karcher’s hot water high-pressure washers, which are designed for ease of use and outstanding overall performance.</p>
<h3>Benefits of Hot Water High-Pressure Washers</h3>
<p>There are a lot of benefits of a hot water high-pressure machine from Delta solution. When it comes to removing stubborn stamps of oil and grease or other challenging contaminants that are very difficult to remove with traditional methods. Due to hot water and high pressure, the cleaning power increases, allowing operators to complete the tasks more efficiently and effectively.
    <br/>
    Here are some other major benefits:
    <ul>
<li><b>Rapid Cleaning:</b>High-pressure Hot Water Jet Cleaning Machine emulsifies grease and oils, removes them quickly, and allows the surface to be cleaned rapidly.</li>
<li><b>Favorable Results:</b>Hot water ensures complete cleaning, even in environments that require high hygiene standards.</li>
<li><b>Eco-Friendly:</b>By using warm water instead of rigid chemicals, these machines reduce the requirement of detergents, making them a more durable cleaning option with a fast process.</li>
<li><b>Versatility:</b>Whether you are cleaning machinery, the floor, or a vehicle, hot water is versatile enough for a wide range of high-pressure washer applications.</li>
</ul>
</p>
<h2>Key Features of Karcher’s Hot Water High-Pressure Washers</h2>
<p>Karcher’s hot water excessive-pressure washers are engineered for optimum efficiency, sturdiness, and professional performance in traumatic environments. Models just like the HDS 5/eleven need a supply voltage(ph/v/hZ) is 1/230/50 and need heating electricity, heating water to 80°C—ideal for far-off or outside cleaning. The extra powerful HDS 7/16 C needs 24 kW of heating electricity, achieving temperatures of 90°C to address tough commercial cleaning duties. These hot water high-pressure machines function as a green heating device that breaks down grease and filth quickly.
    <ul>
<li><b>Automotive:</b> Ideal for cleaning vehicle engines, machinery, and workshops, in which grease and oil buildup are commonplace.</li>
<li><b>Agriculture:</b> It is perfect for cleaning farm devices, cars, and animal enclosures, where dust and manure are common contaminants.</li>
<li><b>Construction:</b>Great for putting off concrete residue, mud, and different construction debris from tools and machinery.</li>
<li><b>Food Processing:</b>Ensures excessive hygiene standards by using correct cleaning methods on processing devices, flooring, and surfaces.</li>
</ul></p>
<h2>Why Choose a Karcher Hot Water High-Pressure Cleaner from Delta Solution?</h2>
<p>At Delta Solution, we are committed to providing you with fine cleaning solutions. Karcher’s hot water high-pressure cleaning machines are designed to fulfil the demand for effortless cleaning. With the effective performance, ease of use, and sturdiness of Karcher high-pressure washers, these machines are a great investment for any facility that calls for effortless cleaning and faster results.</p>
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
<button class="accordion"><b>How to fix high hot water pressure?</b></button>
<div class="panel">
<p style="margin-left: 8rem">To fix high hot water pressure, check and adjust your water pressure regulator, ensuring it's set between 40 and 60 PSI.</p>
</div>
<button class="accordion"><b>What is high-pressure hot water?</b></button>
<div class="panel">
<p style="margin-left: 8rem">The water system that operates at 1.0 bar pressure (10 m of drop) or greater is termed as high pressure. Whereas the pressure below 1.0 bar is considered low pressure.</p>
</div>
<button class="accordion"><b>Does hot water increase pressure?</b></button>
<div class="panel">
<p style="margin-left: 8rem">If water is been heated in a 40-gallon water heater, then its thermostat setting will end up expanding by approximately ½ gallon. The extra volume will create expansion and has to go somewhere, or the pressure will eventually increase when water is heated in a closed system.</p>
</div>
<button class="accordion"><b>How to reduce pressure in a hot water system?</b></button>
<div class="panel">
<p style="margin-left: 8rem">To reduce the pressure in a hot water system, place a bucket or tub underneath or next to the valve, and open the valve gently, or bleeding can also be carried out to lower the pressure.</p>
</div>
<button class="accordion"><b>Why is the pressure too high in my hot water tank?</b></button>
<div class="panel">
<p style="margin-left: 8rem">The pressure is too high in my hot water tank due to steam formation from various issues.</p>
</div>
<button class="accordion"><b>How do I turn down high water pressure?</b></button>
<div class="panel">
<p style="margin-left: 8rem; margin-bottom: 6rem">To turn down high water pressure, you need to adjust the pressure-reducing valve or replace it if necessary.</p>
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