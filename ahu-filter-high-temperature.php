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
<title>Ahu Filter High Temperature | Delta Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
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
<meta content="Discover High Temperature AHU Filters from Delta Solutions. Designed for food, pharmaceutical and industrial applications requiring reliable heat-resistant filtration." name="description"/><link href="https://delta-solutions.in/ahu-filter-high-temperature" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="clean-air-solutions.php">Clean Air Solutions</a></li>
<li><a href="ahu-filter.php">AHU Filter</a></li>
<li>High Temperature Filters</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four">
<div class="auto-container">
<div class="sec-title text-center">
<h1>High Temperature Filters</h1>
<p>Most typically used in automotive, food and pharma industries, these filetrs are designed to protect processes at high temperatures. these filters are made to meet the strictest temperatures and maintain process integrity at high temperatures like 350 degrees. The filters comply by EN 779, ISO 16890 or EN 1822:2009 and ISO 29463; and are divided into categories for upto 120, 250 and 350 degrees. </p>
<!--<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["130"]["code"]; ?>"  onClick="cartAction('add','<?php echo $productArray["130"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket&nbsp;<img src="images/add-to-cart.png" />-->
<!--</button>-->
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["130"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["130"]["code"]; ?>" name="quantity" value="1" size="2" />
                <input type="hidden" id="remark_<?php echo $productArray["130"]["code"]; ?>" name="remark" value="" />
            </div>
<div class="row clearfix">
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><img alt="Compact Filters (120 Degrees C) - High Temp | Delta Solutions" src="images/product-images/AHU Filter/High temp/Compact Filters (120 degrees C).jpg"/></figure>
</div>
<div align="center" class="content-box">
<h4>Compact Filters (120 degrees C)</h4>
<!-- <a class="theme-btn btn-style-one" href="dry-vacuum-cleaner.php">Read More</a> -->
</div>
</div>
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><img alt="Compact Filters (250 Degrees C) - High Temp | Delta Solutions" src="images/product-images/AHU Filter/High temp/Compact Filters (250 degrees C).jpg"/></figure>
</div>
<div align="center" class="content-box">
<h4>Compact Filters (250 degrees C)</h4>
<!-- <a class="theme-btn btn-style-one" href="wet-dry-vacuum-cleaner.php">Read More</a> -->
</div>
</div>
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><img alt="Compact Filters (350 Degrees C) - High Temp | Delta Solutions" src="images/product-images/AHU Filter/High temp/Compact Filters (350 degrees C).jpg"/></figure>
</div>
<div align="center" class="content-box">
<h4>Compact Filters (350 degrees C)</h4>
<!-- <a class="theme-btn btn-style-one" href="carpet-cleaner.php">Read More</a> -->
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