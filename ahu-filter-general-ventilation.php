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
<title>Ahu Filter General Ventilation | Delta Solutions</title>
<meta content="Buy high-performance AHU General Ventilation Filters from Delta Solutions. Improve indoor air quality with reliable HVAC filtration solutions for commercial and industrial facilities." name="description"/>
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
<link href="https://delta-solutions.in/ahu-filter-general-ventilation" rel="canonical"/></head>
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
<li>General Ventilation</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four">
<div class="auto-container">
<div class="sec-title text-center">
<h1>General Ventilation (Pre &amp; Fine Filters)</h1>
<p>Used for first and second stage air filteration, or as complete filtration; Pre &amp; Fine filters play an important role in protecting people and processes from Particulate Matter (PM). Ranging from ePM10 to ePM1, the filters come in a variety of designs so as to meet unique requirements. Be it bag filters, box filters, V-shaped or pleated filters, these filters are energy-saving, high-quality and offer excellent filtration efficiency. These filetrs comply with EN779, ISO 16980 and ASHRAE 52.2 standards.Suitable for all kinds of application, following are the types of general Ventilation Filters offered:</p>
<!--<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["127"]["code"]; ?>"  onClick="cartAction('add','<?php echo $productArray["127"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket&nbsp;<img src="images/add-to-cart.png" />-->
<!--</button>-->
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["127"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["127"]["code"]; ?>" name="quantity" value="1" size="2" />
                <input type="hidden" id="remark_<?php echo $productArray["127"]["code"]; ?>" name="remark" value="" />
            </div>
<div class="row clearfix">
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><img alt="Bag Filter - Pre &amp; Fine | Delta Solutions" src="images/product-images/AHU Filter/Pre &amp; Fine/Bag Filter.jpg"/></figure>
</div>
<div align="center" class="content-box">
<h4>Bag Filter</h4>
<!-- <a class="theme-btn btn-style-one" href="dry-vacuum-cleaner.php">Read More</a> -->
</div>
</div>
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><img alt="Compact Filter (Box Type) - Pre &amp; Fine | Delta Solutions" src="images/product-images/AHU Filter/Pre &amp; Fine/Compact Filter (Box Type).jpg"/></figure>
</div>
<div align="center" class="content-box">
<h4>Compact Filter (Box Type)</h4>
<!-- <a class="theme-btn btn-style-one" href="wet-dry-vacuum-cleaner.php">Read More</a> -->
</div>
</div>
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><img alt="Compact Filter (Header Frame) - Pre &amp; Fine | Delta Solutions" src="images/product-images/AHU Filter/Pre &amp; Fine/Compact Filter (Header Frame).jpg"/></figure>
</div>
<div align="center" class="content-box">
<h4>Compact Filter (Header Frame)</h4>
<!-- <a class="theme-btn btn-style-one" href="carpet-cleaner.php">Read More</a> -->
</div>
</div>
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><img alt="Panel Filter - Pre &amp; Fine | Delta Solutions" src="images/product-images/AHU Filter/Pre &amp; Fine/Panel Filter.jpg"/></figure>
</div>
<div align="center" class="content-box">
<h4>Panel Filter</h4>
<!-- <a class="theme-btn btn-style-one" href="cold-water-high-pressure.php">Read More</a> -->
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