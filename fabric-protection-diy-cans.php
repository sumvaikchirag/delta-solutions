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
<title>Fabric Protection Spray</title>
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
<meta content="Get fabric protection spray for commercial use at best price. Click to learn more." name="description"/>
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
<link href="https://delta-solutions.in/fabric-protection-diy-cans" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 1000px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 40px; width: 350px; height: 350px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 25px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}
   
    </style>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#Water-Shield">Fabric Water Shield</a></li>
<li><a href="#Carpet-Cleaner">Fabric &amp; Carpet Cleaner</a></li>
<li><a href="#Stain-Remover">OXY Spot &amp; Stain Remover for Carpet &amp; Fabric</a></li>
<li><a href="#Carpet-Protector">Rug &amp; Carpet Protector</a></li>
<li><a href="#Nubuck-Protector">Leather and Suede and Nubuck Protector</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="fabric-protection.php">Fabric Protection</a></li>
<li>DIY Cans</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Water-Shield');">Fabric Water Shield</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Carpet-Cleaner');">Fabric &amp; Carpet Cleaner</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Stain-Remover');">OXY Spot &amp; Stain Remover for Carpet &amp; Fabric</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Carpet-Protector');">Rug &amp; Carpet Protector</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Nubuck-Protector');">Leather and Suede and Nubuck Protector</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Water-Shield">
<div class="auto-container">
<div class="sec-title text-center">
<h1>DIY Fabric Protection Spray</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Fabric Protection/DIY Cans/fabric water shield.jpg"><img alt="Fabric Water Shield - Diy Cans | Delta Solutions" src="images/product-images/Fabric Protection/DIY Cans/fabric water shield.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" tarleather and suede protector.jpgget="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Scotchgard™ Fabric Water Shield</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["280"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["280"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["280"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["280"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["280"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(HDA-002)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Technical data</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2">
<p>Scotchgard™ Fabric Water Shield helps protecting the fabric from water-based spills. The chemical creates an invisible layer that repels the liquid spills and avoids it to sink in the fabric; one can easily wipe it off and before it sinks in. </p><br/>
<ul>
<li>Ideal for household items like upholstery, curtains, pillows, table linens, backpacks, luggage and more</li>
<li>Perfect for use on clothing like shirts, dresses, silk ties, suits, outerwear, canvas shoes and more</li>
<li>Simple application</li>
<li>Dries clear and odorless</li>
<li>Safe for use on delicate or dry-clean-only fabrics like silk and wool</li>
<li>Doesn't impede fabric's breathability</li>
<li>Reapply Scotchgard™ Fabric Water Shield after washing</li>
<li>One can covers an average-sized couch, two chairs or five jackets</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Carpet-Cleaner"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Fabric Protection/DIY Cans/fabric and carpet.jpg"><img alt="Fabric And Carpet - Diy Cans | Delta Solutions" src="images/product-images/Fabric Protection/DIY Cans/fabric and carpet.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Scotchgard™ Fabric &amp; Carpet Cleaner 16.5 oz (467 g)</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["279"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["279"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["279"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["279"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["279"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(HDA-001)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Benefits</a></li>
<li><a data-toggle="tab" href="#two1">How to use</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<p>A 2-in-1 cleaner that not only removes the toughest stains with its deep penetrating foaming action, but also helps prevent future spoiling.</p><br/>
<ul>
<li>Cleans and protects in one easy application</li>
<li>Powerful cleaning action penetrates oil, dirt, mud and more</li>
<li>Helps block future stains for easier cleanup</li>
<li>Ideal for use on sofas, upholstery, curtains, rugs, throw pillows, bedding, table linens, crafts, luggage, auto upholstery etc.</li>
<li>The chemical does not change the look, feel and breathability of the fabric</li>
<li>Not ideal for use on silk, velvet, leather, faux suede, wool</li>
</ul>
</div>
<div class="tab-pane" id="two1">
<p><b>Step 1 : </b> Protect the surrounding non-fabric materials from overspraying.</p>
<p><b>Step 2 : </b>Shake well. Hold 10 cm (4") to 15 cm (6") from fabric or carpet. Spray an even coating of foam on fabric. Wait 3 to 5 minutes.</p>
<p><b>Step 3 : </b>lightly rub area with a clean damp cloth; wash it and repeat it again till the stain is removed. Stubborn stains may need multiple application. Do not saturate the fabric.</p>
<p><b>Step 4 : </b>When dry, wipe clean with a dry colourfast cloth or vacuum thoroughly.</p>
<p>The product starts working immediately to protect against future spoiling.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Stain-Remover"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Fabric Protection/DIY Cans/scotchgard-oxy.jpg"><img alt="Scotchgard Oxy - Diy Cans | Delta Solutions" src="images/product-images/Fabric Protection/DIY Cans/scotchgard-oxy.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Scotchgard™ OXY Spot &amp; Stain Remover for Carpet &amp; Fabric</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["281"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["281"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["281"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["281"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["281"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(Stain-Remover)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Technical data</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3">
<p>This 2-in-1 upholstery and carpet cleaner removes toughest stains like red wine, grease and dirt, and also helps prevent future stains with Scotchgard™ Protector.</p><br/>
<ul>
<li>Cleans and protects in one easy application</li>
<li>Powerful OXY action cleans stains down to the pad to reduce resurfacing</li>
<li>Helps block future stains for easier cleanup</li>
<li>Ideal on tough stains like red wine, oil, dirt, mud, cosmetics, pet mishaps, ketchup, ink and more</li>
<li>Cleans and protects in one easy application</li>
<li>Ideal for use on most carpets and fabrics including wool, polyester, polypropylene, nylon, cotton, cotton blends, acrylic and more</li>
<li>Does not leave a sticky residue and also eliminates odors</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="Carpet-Protector"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Fabric Protection/DIY Cans/rug and carpet protector.jpg"><img alt="Rug And Carpet Protector - Diy Cans | Delta Solutions" src="images/product-images/Fabric Protection/DIY Cans/rug and carpet protector.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Scotchgard™ Rug &amp; Carpet Protector</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["282"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["282"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["282"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["282"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["282"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(HDA-004)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Technical data</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<p>The double action chemical resists soiling and blocks stains for easier cleanup to make the carpets and rugs look new. </p><br/>
<ul>
<li>Strong carpet protection blocks stains for easier cleanup</li>
<li>Penetrates into carpet fibers to lift out stains</li>
<li>Blocks stains so they don't set in</li>
<li>Makes cleanup easier</li>
<li>Apply to new or clean carpets, wet or dry or after spot treatment</li>
<li>Simple application</li>
<li>One can covers approximately a 5 ft. x 6 ft. area</li>
<li>Reapply Scotchgard™ Rug &amp; Carpet Protector every time your carpet is steam cleaned or every six months</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="Nubuck-Protector"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Fabric Protection/DIY Cans/leather and suede protector.jpg"><img alt="Leather And Suede Protector - Diy Cans | Delta Solutions" src="images/product-images/Fabric Protection/DIY Cans/leather and suede protector.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Scotchgard™ Leather and Suede and Nubuck Protector</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["283"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["283"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["283"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["283"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["283"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(HDA-006)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Technical data</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5">
<p>Protecting suede and nubuck leather items is now easy with the excellent weather resistance of Scotchgard™ Suede &amp; Nubuck Protector. It blocks out rain, sleet and snow, Scotchgard™ Suede &amp; Nubuck Protector helps keep you dry while extending the life of your favorite shoes, boots, handbags and clothing. Plus, it helps minimize outfit ruining salt stains. </p><br/>
<ul>
<li>Helps repel water on suede and nubuck leather items</li>
<li>Safe for use on all types/colors of suede and nubuck leather</li>
<li>Not intended for use on smooth, finished leathers</li>
<li>Ideal for use on footwear, coats, gloves, hats, accessories and more</li>
<li>Simple application</li>
<li>Dries odorless</li>
<li>Resists salt stains</li>
<li>Reapply Scotchgard™ Suede &amp; Nubuck Protector when your item is no longer repelling water or every six months</li>
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
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>