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
<title>Hand Sanitizer | Delta Solutions</title>
<meta content="Buy professional hand sanitizers from Delta Solutions. Ethanol-based sanitizers for hospitals, industries, offices, hotels and institutional hygiene applications." name="description"/>
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
<link href="https://delta-solutions.in/hand-sanitizer" rel="canonical"/></head>
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
<li class="active"><a href="#RossSanpro">Ross Sanpro</a></li>
<li><a href="#RossAseptic">Ross Aseptic</a></li>
<li><a href="#Coroclean">Coroclean</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="cleaning-consumables.php">Cleaning Consumables</a></li>
<li><a href="cleaning-chemicals.php">Cleaning Chemicals</a></li>
<li>Hand Sanitizer</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('RossSanpro');">Ross Sanpro</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossAseptic');">Ross Aseptic</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Coroclean');">Coroclean</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="RossSanpro">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Hand Sanitizer</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Hand Sanitizer/ross-sanpro.png">
<img alt="Ross Sanpro - Hand Sanitizer | Delta Solutions" src="images/product-images/Cleaning Chemicals/Hand Sanitizer/ross-sanpro.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Instant hand sanitizer liquid - Ethanol Based</h2>
<h5>(Ross Sanpro)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Ready-to-use</li>
<li>Quick-acting</li>
<li>No dripping from hands, thus safe and hygienic Application</li>
<li>Non- irritant</li>
<li>Effective against Staphylococcus aureus ATCC 6538, Escherichia coli ATCC 10536, Pseudomonas aeruginosa ATCC 15442, Enterococcus hirae ATCC 10541</li>
<li>Ross Sanpro conforms to standard EN 1276:2009</li>
<li>Ross Sanpro is a 70% ethanol base</li>
<li>FDA Approved</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/hand-sanitizer-sanpro">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["76"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["76"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["76"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["76"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["76"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossAseptic"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Hand Sanitizer/ross-aseptic.png">
<img alt="Ross Aseptic - Hand Sanitizer | Delta Solutions" src="images/product-images/Cleaning Chemicals/Hand Sanitizer/ross-aseptic.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Hand disinfection liquid - Ethanol Based</h2>
<h5>(Ross Aseptic)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Ready-to-use</li>
<li>Quick-acting</li>
<li>No dripping from hands, thus safe and hygienic Application</li>
<li>Non- irritant</li>
<li>Effective against Staphylococcus aureus ATCC 6538, Escherichia coli ATCC 10536, Pseudomonas aeruginosa ATCC 15442, Enterococcus hirae ATCC 10541</li>
<li>Ross Aseptic conforms to standard EN 1276:2009</li>
<li>Ross Aseptic is a 70% ethanol base</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/hand-sanitizer-aseptic">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["77"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["77"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["77"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["77"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["77"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="Coroclean"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Hand Sanitizer/coroclean.jpg">
<img alt="Coroclean - Hand Sanitizer | Delta Solutions" src="images/product-images/Cleaning Chemicals/Hand Sanitizer/coroclean.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Instant Hand Disinfection Gel - Ethanol Based</h2>
<h5>(Coroclean)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Ready-to-use</li>
<li>Quick-acting</li>
<li>No dripping from hands, thus safe and hygienic Application</li>
<li>Non- irritant</li>
<li>Effective against Staphylococcus aureus ATCC 6535,Pseudomonas aeruginosa ATCC 9027, Escherichia coli ATCC 10536, Salmonella typhimurium ATCC 10749, Candida albicans ATCC 10231, Aspergillus niger ATCC 6275</li>
<li>Coroclean conforms to standard EN 1040: 2005</li>
<li>Coroclean is a 70% ethanol base</li>
</ul>
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/hand-sanitizer-coroclean">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["78"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["78"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["78"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["78"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["78"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<!--  <hr>
            <div class="row clearfix">  
                <div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Coroclean Ayur</h2>                        
                        <h4><span>HIGHLIGHTS:</span></h4>
                        <uL>
                            
                        </uL>                       
                        <div class="service-block-two">
                            <div class="inner-box">
                                <span class="icon"></span>                                
                                <a href="hand-sanitizer-coroclean-ayur.php" class="theme-btn btn-style-one">Know More</a> 
                                <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="image-box"><a href="images/product-images/Cleaning Machines/Dry Vacuum/BV-5_1.png" data-fancybox="gallery">
                        <img src="images/product-images/Cleaning Machines/Dry Vacuum/BV-5_1.png" alt=""></a>
                    </div>
                </div>
            </div>        -->
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