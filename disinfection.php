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
<title>Disinfectant Chemicals | Buzil Rossari</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content=" Buy professional disinfection chemicals from Delta Solutions. Surface disinfectants, floor sanitizers and medical-grade hygiene solutions for healthcare and industries." name="description"/>
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
<link href="https://delta-solutions.in/disinfection" rel="canonical"/></head>
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
<li class="active"><a href="#RossFCS">Ross FCS</a></li>
<li><a href="#RosaDC">Rosa DC</a></li>
<li><a href="#BR501">Budenat IM BR 501</a></li>
<li><a href="#BR502">Infektocide BR 502</a></li>
<li><a href="#BR503">Infektocide Spray BR 503</a></li>
<!--<li><a href="JavaScript:Void(0)" onclick="slideTo('SodiumHypochlorite');">Sodium Hypochlorite 5%</a></li>  -->
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
<li>Disinfection</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('RossFCS');">Ross FCS</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RosaDC');">Rosa DC</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BR501');">Budenat IM BR 501</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BR502');">Infektocide BR 502</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BR503');">Infektocide Spray BR 503</a></li>
<!--<li><a href="JavaScript:Void(0)" onclick="slideTo('SodiumHypochlorite');">Sodium Hypochlorite 5%</a></li>                            -->
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="RossFCS">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Disinfection</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Disinfection/Ross-FCS.jpg">
<img alt="Ross Fcs - Disinfection | Delta Solutions" src="images/product-images/Cleaning Chemicals/Disinfection/Ross-FCS.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Floor Cleaner and Sanitiser Concentrate</h2>
<h5>(Ross FCS)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>One step cleaning and sanitsation.</li>
<li>Leaves no care substances behind</li>
<li>Preserves shine</li>
<li>Dries quickly without streaks</li>
<li>Fresh trendy fragrance</li>
<li>Suitable for use in cleaning machines</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="disinfection-ross-fcs.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["79"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["79"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["79"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["79"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["79"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RosaDC"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Disinfection/Rosa-DC.png">
<img alt="Rosa Dc - Disinfection | Delta Solutions" src="images/product-images/Cleaning Chemicals/Disinfection/Rosa-DC.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Surface Disinfectant</h2>
<h5>(Rosa DC)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Cleaning and disinfection in one step.</li>
<li>Aldehyde-free</li>
<li>Material-compatible.</li>
<li>Odourless</li>
<li>For sensitive surfaces</li>
<li>pH-neutral, gentle on material</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="disinfection-rosa-dc.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["80"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["80"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["80"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["80"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["80"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BR501"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Disinfection/br-501.jpg">
<img alt="Br 501 - Disinfection | Delta Solutions" src="images/product-images/Cleaning Chemicals/Disinfection/br-501.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Neutral Disinfectant</h2>
<h5>(Budenat IM BR 501)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Cleaning and disinfection in one step.</li>
<li>Aldehyde-free</li>
<li>Particularly suitable for use on acrylic glass.</li>
<li>VAH- and IHO-listed</li>
<li>For sensitive surfaces</li>
<li>pH-neutral, gentle on material</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="disinfection-br-501.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["81"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["81"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["81"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["81"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["81"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BR502"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Disinfection/br-502.jpg">
<img alt="Br 502 - Disinfection | Delta Solutions" src="images/product-images/Cleaning Chemicals/Disinfection/br-502.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Surface and Environment Disinfectant</h2>
<h5>(Infektocide BR 502)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Cleaning and disinfection in one step</li>
<li>Low dosage</li>
<li>Acts quickly</li>
<li>Even with high bacterial load</li>
<li>Broad spectrum of activity</li>
<li>FDA Approved</li>
<li>For disinfection of critical areas</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="disinfection-br-502.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["82"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["82"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["82"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["82"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["82"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BR503"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Disinfection/br- 503.jpg">
<img alt="Br 503 - Disinfection | Delta Solutions" src="images/product-images/Cleaning Chemicals/Disinfection/br- 503.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Rapid Spray Disinfectant for medical devices</h2>
<h5>(Infektocide Spray BR 503)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Residue-free, thus no coating formed after Application</li>
<li>No wiping down or rinsing off necessary</li>
<li>Acts quickly</li>
<li>Ready to use</li>
<li>Non-scented</li>
<li>FDA Approved</li>
<li>For disinfection of critical areas</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="disinfection-br-503.php">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["83"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["83"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["83"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["83"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["83"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<!--<hr id="SodiumHypochlorite">
            <div class="row clearfix">
                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="image-box">
                        <a href="images/product-images/Cleaning Chemicals/Disinfection/Sodium-Hypochlorite.jpg" data-fancybox="gallery">
                        <img src="images/product-images/Cleaning Chemicals/Disinfection/Sodium-Hypochlorite.jpg" alt=""></a>
                    </div>
                </div>
                <div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Multi Surface Disinfectant Liquid</h2>  
                        <h5>(Sodium Hypochlorite 5%)</h5>                     
                        <h4><span>HIGHLIGHTS:</span></h4>
                        <uL>
                            <li>Effectively against a broad spectrum of microorganisms contributing optimum hygiene</li>
                            <li>Versatile product, can be used in many industries</li>
                            <li>Easy and fast Application in places with a high hygiene risk</li>
                            <li>Can be used for interim disinfection</li>
                            <li>High activity</li>
                            <li>Wide spectrum of activity</li>                            
                        </uL>

                        

                        <div class="service-block-two">
                            <div class="inner-box">
                                <span class="icon"></span>                                
                                <a href="disinfection-hypochlorite.php" class="theme-btn btn-style-one">Know More</a> 
                                <button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["84"]["code"]; ?>"  onClick="cartAction('add','<?php echo $productArray["84"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket&nbsp;  <img src="images/add-to-cart.png" />
                                </button>

                                <button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["84"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added&nbsp; <img src="images/icon-check.png" />
                                </button>

                                <input type="hidden" id="qty_<?php echo $productArray["84"]["code"]; ?>"
                                        name="quantity" value="1" size="2" />
                            </div>
                        </div>
                    </div>
                </div>                
            </div>-->
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