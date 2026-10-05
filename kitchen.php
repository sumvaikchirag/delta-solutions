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
<title>Kitchen | Delta Solutions</title>
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
<meta content="Shop professional kitchen cleaning chemicals from Delta Solutions. Grease removers, dishwashing liquids and sanitizers for commercial kitchens and food processing." name="description"/><link href="https://delta-solutions.in/kitchen" rel="canonical"/></head>
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
<li class="active"><a href="#BR301">Buz Sparkle BR 301</a></li>
<li><a href="#KS19">Dish Smart KS 19</a></li>
<li><a href="#G435">Bistro G 435</a></li>
<li><a href="#BuzGrillMaster">Buz Grill Master</a></li>
<li><a href="#RossTab">Ross Tab</a></li>
<li><a href="#RossDishclean">Ross Dishclean</a></li>
<li><a href="#RossDishfast">Ross Dishfast</a></li>
<li><a href="#BuzFlow">Buz Flow</a></li>
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
<li>Kitchen Hygiene</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('BR301');">Buz Sparkle BR 301</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('KS19');">Dish Smart KS 19</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('G435');">Bistro G 435</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BuzGrillMaster');">Buz Grill Master</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossTab');">Ross Tab</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossDishclean');">Ross Dishclean</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossDishfast');">Ross Dishfast</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BuzFlow');">Buz Flow</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="BR301">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Kitchen Hygiene</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/buz-sparkle.jpg">
<img alt="Buz Sparkle - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/buz-sparkle.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Concentrated manual dishwashing liquid</h2>
<h5>(Buz Sparkle BR 301)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Unique product for hotel and domestic use</li>
<li>Excellent performance on fatty and oily soil</li>
<li>Effective cleaning of crockery, utensils, pots &amp; pans</li>
<li>Long lasting foam</li>
<li>Environment friendly</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-sparkle-br-301.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["85"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["85"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["85"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["85"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["85"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="KS19"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/Dish-Smart.jpg">
<img alt="Dish Smart - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/Dish-Smart.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Hand dishwashing agent and neutral cleaner</h2>
<h5>(Dish Smart KS 19)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Good grease-dissolving performance.</li>
<li>Active foam.</li>
<li>Fast-drying.</li>
<li>Material-compatible.</li>
<li>Skin-friendly.</li>
<li>Pleasant fragrance.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-dish-smart-ks-19.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["86"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["86"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["86"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["86"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["86"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="G435"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/Bistro-G-435.jpg">
<img alt="Bistro G 435 - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/Bistro-G-435.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Grease and protein releaser</h2>
<h5>(Bistro G 435)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>High grease and protein emulsifying action.</li>
<li>Excellent cleaning performance.</li>
<li>Stabile foam structure allows good adhesion.</li>
<li>Suitable for use in low pressure and high pressure cleaning machines and a foam gun.</li>
<li>Fast separating in accordance with ÖNORM B 5105.</li>
<li>Toxicity properties comply with requirements for areas handling foodstuffs.</li>
<li>RK listed.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-bistro-g-435.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["87"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["87"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["87"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["87"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["87"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BuzGrillMaster"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/Buz-Grill-Master.jpg">
<img alt="Buz Grill Master - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/Buz-Grill-Master.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>High alkaline cleaner for oven and grill</h2>
<h5>(Buz Grill Master)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Self-acting grill cleaner.</li>
<li>High grease emulsifying action.</li>
<li>Fast removal of burnt-on grease and soil.</li>
<li>Suitable for use in a foam gun</li>
<li>Certified generally recognized as safe in areas handling food.</li>
<li>Fragrance-free.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-grill-master.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["88"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["88"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["88"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["88"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["88"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossTab"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/ross-tab.jpg">
<img alt="Ross Tab - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/ross-tab.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Fruits and Vegetable sanitizer</h2>
<h5>(Ross Tab)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Wide spectrum kill.</li>
<li>Non-corrosive.</li>
<li>Fast acting</li>
<li>Stabilised chlorine tablet</li>
<li>Longer shelf life</li>
<li>Safe on all types of surfaces including aluminium.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-ross-tab.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["89"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["89"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["89"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["89"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["89"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossDishclean"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/dishclean.jpg">
<img alt="Dishclean - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/dishclean.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Automatic dishwash detergent</h2>
<h5>(Ross Dishclean)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Powerful machine dishwashing liquid with high degreasing power</li>
<li>Low foaming</li>
<li>Safe to use on all machine safe Crockery, Cutlery, Glassware &amp; Utensils</li>
<li>High efficacy</li>
<li>No oily or stickiness observed on plates after washing</li>
<li>Ease of Application</li>
<li>Ready to use product</li>
<li>Should be always used in combination with Dishquick neutralizer</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-ross-dishclean.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["90"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["90"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["90"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["90"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["90"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossDishfast"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/dishfast.jpg">
<img alt="Dishfast - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/dishfast.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Automatic Dishwash Liquid Neuteralizer / Rinse Aid</h2>
<h5>(Ross Dishfast)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Low foaming Non - Yellowing</li>
<li>Safe to use on all machine safe Crockery, Cutlery, Glassware &amp; Utensils Permanent Finish</li>
<li>High efficacy wrt neutralizing and removing traces of detergent</li>
<li>Faster drying of articles It is effective at low dosages</li>
<li>Ease of Application</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-ross-dishfast.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["91"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["91"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["91"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["91"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["91"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BuzFlow"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Kitchen Hygiene/buz-flow.jpg">
<img alt="Buz Flow - Kitchen Hygiene | Delta Solutions" src="images/product-images/Cleaning Chemicals/Kitchen Hygiene/buz-flow.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Ready-to-use liquid drain and pipe cleaner</h2>
<h5>(Buz Flow)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Highly effective, self-acting drain and pipe cleaner.</li>
<li>Powerful cleaning performance to deal with clogs of soap deposits, grease, hair and food deposits.</li>
<li>Gets unter soil for effective removal.</li>
<li>Slightly viscous for enhanced performance.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="kitchen-flow.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["92"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["92"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["92"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["92"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["92"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<!-- <hr>
            <div class="row clearfix"> 
                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="image-box"><a href="images/product-images/Cleaning Machines/Dry Vacuum/BV-5_1.png" data-fancybox="gallery">
                        <img src="images/product-images/Cleaning Machines/Dry Vacuum/BV-5_1.png" alt=""></a>
                    </div>
                </div> 
                <div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Ross Clean WRH</h2>                        
                        <h4><span>HIGHLIGHTS</span></h4>
                        <uL>
                            
                        </uL>

                       
                        <div class="service-block-two">
                            <div class="inner-box">
                                <span class="icon"></span>                                
                                <a href="kitchen-ross-clean-WRH.php" class="theme-btn btn-style-one">Know More</a> 
                                <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>  -->
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