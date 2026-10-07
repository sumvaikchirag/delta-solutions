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
<title>Liquid Soap | Delta Solutions</title>
<meta content=" Explore premium liquid soap solutions from Delta Solutions for offices, hospitals, hotels and industries. Hygienic, skin-friendly and ideal for professional handwashing." name="description"/>
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
<link href="https://delta-solutions.in/liquid-soap" rel="canonical"/></head>
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
<li class="active"><a href="#RossProtectHands">Ross Protect Hands</a></li>
<li><a href="#RossAquaAB">Ross Aqua AB</a></li>
<li><a href="#RossAquaOR">Ross Aqua OR</a></li>
<!--<li><a href="#" onclick="slideTo('RossAquaE-AM');">Ross Aqua E-AM</a></li>-->
<li><a href="#RossAquaORRose">Ross Aqua OR Rose</a></li>
<li><a href="#PlantaLotion">Planta Lotion</a></li>
<li><a href="#BR803">Rosa Aqua BR 803 (B1)</a></li>
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
<li>Liquid Soap</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('RossProtectHands');">Ross Protect Hands</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossAquaAB');">Ross Aqua AB</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossAquaOR');">Ross Aqua OR</a></li>
<!--<li><a href="javascript:void(0)" onclick="slideTo('RossAquaE-AM');">Ross Aqua E-AM</a></li>-->
<li><a href="javascript:void(0)" onclick="slideTo('RossAquaORRose');">Ross Aqua OR Rose</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PlantaLotion');">Planta Lotion</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BR803');">Rosa Aqua BR 803 (B1)</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="RossProtectHands">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Liquid Soap</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<!-- <div class="image-box"><a href="images/product-images/Cleaning Machines/Dry Vacuum/T12_1-HEPA.png" data-fancybox="gallery">
                        <img src="images/product-images/Cleaning Machines/Dry Vacuum/T12_1-HEPA.png" alt=""></a>
                    </div> -->
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Antibacterial handwash liquid</h2>
<h5>(Ross Protect Hands)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Perfume free (suitable for food processing area)</li>
<li>An effective anti-bacterial agent</li>
<li>For hygienic disinfectant for hands</li>
<li>Non-irritant, Suitable for frequent hand washing</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/liquid-soap-protect-hands">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["70"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["70"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["70"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["70"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["70"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossAquaAB"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Liquid Soap/Ross-Aqua-AB.jpg">
<img alt="Ross Aqua Ab - Liquid Soap | Delta Solutions" src="images/product-images/Cleaning Chemicals/Liquid Soap/Ross-Aqua-AB.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Antimicrobial hand wash liquid</h2>
<h5>(Ross Aqua AB)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Soap-free</li>
<li>pH-neutral</li>
<li>Cleans with mild foam</li>
<li>Economical</li>
<li>With skin moisturisers</li>
<li>Pleasant fragrance</li>
<li>Skin-friendly and pore-deep cleaning</li>
<li>Gentle to the skin even if used frequently</li>
<li>With skin care substances, especially for sensitive skin</li>
<li>Anti-Microbial</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/liquid-soap-aqua-ab">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["73"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["73"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["73"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["73"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["73"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossAquaOR"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Liquid Soap/Aqua-OR.jpg">
<img alt="Aqua Or - Liquid Soap | Delta Solutions" src="images/product-images/Cleaning Chemicals/Liquid Soap/Aqua-OR.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column"><br/><br/>
<h2>Mild general handwashing product</h2>
<h5>(Ross Aqua OR)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Unique product for hotel and domestic use</li>
<li>Excellent cleaning performance</li>
<li>Suitable for frequent hand washing</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/liquid-soap-aqua-or">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["71"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["71"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["71"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["71"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["71"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossAquaORRose"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Liquid Soap/ross-aqua-OR-Rose.jpg">
<img alt="Ross Aqua Or Rose - Liquid Soap | Delta Solutions" src="images/product-images/Cleaning Chemicals/Liquid Soap/ross-aqua-OR-Rose.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Hand wash liquid</h2>
<h5>(Ross Aqua OR Rose)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Soap-free</li>
<li>pH-neutral</li>
<li>Cleans with mild foam</li>
<li>Economical</li>
<li>With skin moisturisers</li>
<li>Skin-friendly and pore-deep cleaning</li>
<li>Gentle to the skin even if used frequently</li>
<li>With skin care substances, especially for sensitive skin</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/liquid-soap-aqua-or-rose">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["75"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["75"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["75"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["75"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["75"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="PlantaLotion"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Liquid Soap/planta.jpg">
<img alt="Planta - Liquid Soap | Delta Solutions" src="images/product-images/Cleaning Chemicals/Liquid Soap/planta.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Handwash lotion</h2>
<h5>(Planta Lotion)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Economicalally friendly</li>
<li>Skin-friendly and pore-deep cleaning</li>
<li>Gentle to the skin even if used frequently</li>
<li>With skin care substances, especially for sensitive skin</li>
<li>Special skin protection components prevent skin from drying out.</li>
<li>Forms light foam.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/liquid-soap-planta-lotion">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["74"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["74"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["74"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["74"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["74"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BR803"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/ross-aqua.png">
<img alt="Ross Aqua - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/ross-aqua.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Washroom Cleaner and Sanitiser Concentrate (B1)</h2>
<h5>(Rosa Aqua BR 803)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>One step cleaning and sanitsation</li>
<li>Product is abrasive -free and corrosive-free, does not cause scratch marks on surfaces that are cleaned</li>
<li>Efficiently removes oil stains, dirt, and water marks.</li>
<li>Ideal for cleaning bathroom fittings.</li>
<li>Leaves bathroom fittngs clean and shiny</li>
<li>Regular applica on prevents build-up of lime</li>
<li>Removes skin grease, soap residues and calcium soap quickly and effectively</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/liquid-soap-rosa-aqua-br-803">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["53"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["53"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["53"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["53"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["53"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<!--  <hr>
            <div class="row clearfix">  
                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="image-box"><a href="images/product-images/Cleaning Machines/Dry Vacuum/T12_1-HEPA.png" data-fancybox="gallery">
                        <img src="images/product-images/Cleaning Machines/Dry Vacuum/T12_1-HEPA.png" alt=""></a>
                    </div>
                </div>
                <div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">                        
                        <h2>Ross Aqua OR Lemon</h2>              
                        <h4><span>HIGHLIGHTS:</span></h4>
                        <uL>
                            
                        </uL>
                       

                        <div class="service-block-two">
                            <div class="inner-box">
                                <span class="icon"></span>                                
                                <a href="liquid-soap-aqua-OR-lemon.php" class="theme-btn btn-style-one">Know More</a> 
                                <a href="contact.php" class="theme-btn btn-style-one">Request A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      -->
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