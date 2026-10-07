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
<title>Camfil Industrial Dust Collector by Delta Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content="Camfil industrial dust collectors are apt for industrial applications that produce or process fine, fibrous or combustible dust and fumes." name="description"/>
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
<link href="https://delta-solutions.in/dust-collector" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<style type="text/css">
    
    .info-column .inner-column h2{margin-bottom: 15px; font-size: 28px!important;}    
     p{margin-bottom: 10px;}
    
   
    </style>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#X-Flo">Gold Series X-Flo</a></li>
<li><a href="#Zephyr-III">Zephyr III</a></li>
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
<li>Industrial Dust Collectors</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('X-Flo');">Gold Series X-Flo</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Zephyr-III');">Zephyr III</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="X-Flo">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Dust, Fume &amp; Mist Collectors</h1>
<p>Every manufacturing industry is bound to create some kind of dust, mist or fumes. It is imperative to control, reduce and remove dust, fumes or gases that might be harmful for the process, employees and the air surrounding the plant. Moreover, types of pollutants may differ from industry to industry. To tackle this, Camfil's range of Dust, Mist &amp; Fume Collectors is the solution. Built with 2 decades of experience, research and performance, these dust collectors are one of the industry's best.</p>
</div>
<div class="row clearfix">
<div class="image-column col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Dust Collector/dust collector.jpg">
<img alt="Dust Collector | Delta Solutions" src="images/product-images/Dust Collector/dust collector.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-8 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column"><br/>
<h2>Industrial Camfil Dust Collectors - Gold Series X-Flo</h2>
<p>Built with the award winning Gold Series system, this machine can handle all kinds of toxic &amp; combustible dust and fumes. It uses a crossflow technlogy and a unique configuration that ensures maximum airflow and dust processing power at eny given point. The uniform airflow extends the life of filters which leads to lesser changeouts; hence reducing the cost. The modular design makes easy to customise as per specific needs. </p><br/>
<h4>Applications :</h4>
<ul>
<li>Metal Industry : Abrasive Blasting, Laser Cutting,Plasma Cutting,Thermal Spray, Welding</li>
<li>Food &amp; Beverage Industry</li>
<li>Chemical Processing</li>
<li>Mining</li>
<li>Graind, feeds &amp; Seeds</li>
<li>Paperboard &amp; Packaging</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="#">Download Data Sheet</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["125"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["125"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["125"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["125"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["125"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="Zephyr-III"/>
<div class="row clearfix">
<div class="image-column col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Dust Collector/dust collector2.jpg">
<img alt="Dust Collector2 - Dust Collector | Delta Solutions" src="images/product-images/Dust Collector/dust collector2.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-8 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Industrial Camfil Dust Collectors - Zephyr III</h2>
<p>A portable air cleaner, Zephyr III is ideal for industrial process contamination, or plants requiring periodic dust collection. Suitable for capturing welding fumes, grinding dusts, dry dusts, soldering fumes, and other airborne particles. A simple plug-and-play mechanis, this machine is built with large wheels and brakes, it is easy to move and position.</p><br/>
<h4>Applications :</h4>
<ul>
<li>Welding</li>
<li>Grinding</li>
<li>Source Capture</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="#">Download Data Sheet</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["126"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["126"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["126"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["126"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["126"]["code"]; ?>" name="remark" value="" />
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