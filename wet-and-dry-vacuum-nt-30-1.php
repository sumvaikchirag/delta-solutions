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
<title>Karcher Wet and Dry Vacuum - Classic metal body</title>
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
<meta content="Robust, powerful, easy to use machine with a metal body; Karcher Wet and Dry Vacuum Cleaner for commercial purpose" name="description"/>
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
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Karcher Wet and Dry Vacuum - Classic metal body (NT 30/1 Me Classic)",
  "image": "http://delta-solutions.in/images/product-images/Cleaning%20Machines/Wet%20&%20Dry/nt-30_1-me-classic.png",
  "description": "With a turbine power of 1,500 Watts and a 30-litre container capacity, NT 30/1 Me Classic wet and dry vacuum cleaner is compact & robust. the Easy Service Concept allows remocal of turbine in just 44 seconds, saving enormous amount of time and costs.",
  "brand": "Karcher"
}
</script>
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; border:4px solid #f2f2f2; border-radius: 15px;height: 100%;width: 100%;text-align: center; }
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
<li><a href="index.php">Home</a></li>
<li><a href="cleaning-machines.php">Cleaning Machines</a></li>
<li><a href="wet-dry-vacuum-cleaner.php">Karcher Wet &amp; Dry Vacuum Cleaner</a></li>
<li>NT 30/1 Me Classic</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three">
<div class="auto-container">
<div class="row clearfix">
<div class="col-md-4">
<div class="vertical-item">
<div class="item-media detail">
<a data-fancybox="gallery" href="images/product-images/Cleaning Machines/Wet &amp; Dry/nt-30_1-me-classic.png">
<img alt="Nt 30 1 Me Classic - Wet &amp; Dry | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Wet &amp; Dry/nt-30_1-me-classic-large.jpg" src="images/product-images/Cleaning Machines/Wet &amp; Dry/nt-30_1-me-classic.png"/>
</a>
</div><br/>
<div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Wet &amp; Dry/NT-30-1-Me-Classic.pdf" target="blank">Download Data Sheet</a></div><br/>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Karcher Wet and Dry Vacuum - Classic metal body</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["07"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["07"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["07"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["07"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["07"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>(NT 30/1 Me Classic)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one">Details</a></li>
<li class=""><a data-toggle="tab" href="#two">Technical data</a></li>
<li class=""><a data-toggle="tab" href="#three">Equipment</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one">
<p>With a turbine power of 1,500 Watts and a 30-litre container capacity, NT 30/1 Me Classic wet and dry vacuum cleaner is compact &amp; robust. the Easy Service Concept allows remocal of turbine in just 44 seconds, saving enormous amount of time and costs.</p>
</div>
<div class="tab-pane" id="two">
<ul>
<li>Air flow rate (l/s)   : <span>2 x 53</span></li>
<li>Vacuum (mbar/ kPa) : <span>225 / 22.5</span></li>
<li>Container capacity (I) <span>70</span></li>
<li>Max. rated input power  (W) : <span>2300</span></li>
<li>Standard nominal width : <span> 40</span></li>
<li>Cable length (m) <span>7.5</span></li>
<li>Sound pressure level dB(A)  : <span>76</span></li>
<li>Container material <span>Stainless steel</span></li>
<li>Number of motors <span>2</span></li>
<li>Frequency (Hz) <span>50–60</span></li>
<li>Voltage (V) <span>220–240</span></li>
<li>Weight (kg) <span>18</span></li>
<li>Dimensions (L × W × H) (mm) <span>560 × 502 × 832</span></li>
</ul>
</div>
<div class="tab-pane" id="three">
<ul>
<li>Suction hose 2.5 m</li>
<li>Crevice nozzle</li>
<li>Suction pipes, metal, 2 x 0.5 m</li>
<li>Wet and dry floor nozzle 360 mm</li>
<li>Cartridge filter</li>
<li>Drain hose</li>
<li>Stainless steel container</li>
<li>Push handle</li>
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
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="js/map-script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
<script src="dist/Drift.js"></script>
<script>
var driftAll = document.querySelectorAll('.drift-demo-trigger');
var pane = document.querySelector('.detail');
$(driftAll).each(function(i, el) {
    let drift = new Drift(
      el, {
        zoomFactor: 3,
        paneContainer: pane,
        inlinePane: 900,
        inlineOffsetY: -85,
        containInline: true,
        handleTouch: true,
        hoverBoundingBox: true
      }
    );
  });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>