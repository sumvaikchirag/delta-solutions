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
<title>Housekeeping | Delta Solutions</title>
<meta content="Buy professional housekeeping cleaning chemicals from Delta Solutions. Effective solutions for washrooms, floors, glass, furniture and facility maintenance." name="description"/>
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
<link href="https://delta-solutions.in/housekeeping" rel="canonical"/></head>
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
<li class="active"><a href="#RossWR">Ross WR</a></li>
<li><a href="#RossFC-H">Ross FC-H (B2)</a></li>
<li><a href="#BlitzCitro">Blitz Citro</a></li>
<li><a href="#Profiglass">Profiglass</a></li>
<li><a href="#RossGC">Ross GC (B3)</a></li>
<li><a href="#BuzFinnese">Buz Finnese (B4)</a></li>
<li><a href="#BuzROFreshM">Buz RO Fresh Mahagony (B5)</a></li>
<li><a href="#BuzROFreshL">Buz RO Fresh Lavender (B5)</a></li>
<li><a href="#RossTC">Ross TC (B6)</a></li>
<li style="margin-top: 2px;"><a href="#BuzRO">Buz RO Fresh Citral (B7)</a></li>
<li><a href="#RossDSC">Ross DSC</a></li>
<li><a href="#RossHDC">Ross HDC</a></li>
<li><a href="#IndumasterStrong">Indumaster Strong</a></li>
<li><a href="#Optifloor">Optifloor</a></li>
<li><a href="#OTens">O Tens</a></li>
<li><a href="#Metapol">Metapol</a></li>
<li><a href="#BuzLeather">Buz Leather</a></li>
<li><a href="#RossClarino">Ross Clarino</a></li>
<li><a href="#Steel-Cleaner">3M Stainless Steel Cleaner</a></li>
<li><a href="#Triggers">3M Sharpshooter with Triggers</a></li>
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
<li>Housekeeping</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('RossWR');">Ross WR</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossFC-H');">Ross FC-H (B2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BlitzCitro');">Blitz Citro</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Profiglass');">Profiglass</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossGC');">Ross GC (B3)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BuzFinnese');">Buz Finnese (B4)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BuzROFreshM');">Buz RO Fresh Mahagony (B5)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BuzROFreshL');">Buz RO Fresh Lavender (B5)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossTC');">Ross TC (B6)</a></li>
<li style="margin-top: 2px;"><a href="javascript:void(0)" onclick="slideTo('BuzRO');">Buz RO Fresh Citral (B7)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossDSC');">Ross DSC</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossHDC');">Ross HDC</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('IndumasterStrong');">Indumaster Strong</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Optifloor');">Optifloor</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('OTens');">O Tens</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Metapol');">Metapol</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('BuzLeather');">Buz Leather</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('RossClarino');">Ross Clarino</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Steel-Cleaner');">3M Stainless Steel Cleaner</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Triggers');">3M Sharpshooter with Triggers</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="RossWR">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Housekeeping</h1>
</div>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/ross-WR.jpg">
<img alt="Ross Wr - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/ross-WR.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Washroom Cleaner and Sanitiser Concentrate</h2>
<h5>(Ross WR)</h5>
<h4><span>HIGHLIGHTS</span></h4>
<ul>
<li>Economical in use – product being concentrated makes 100 ltrs user solution per litre of ROSS WR LIQ</li>
<li>Product is abrasive -free and corrosive-free, does not cause scratch marks on surfaces that are cleaned.</li>
<li>Efficiently removes oil stains, dirt, and water marks.</li>
<li>Ideal for cleaning bathroom fittings.</li>
<li>One step cleaning and sanitsation.</li>
<li>Safe for use on marble and granite.</li>
<li>Quickly removes oils, stains, dirt and water-marks.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-ross-wr">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["52"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["52"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["52"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["52"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["52"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossFC-H"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/Ross-FC-H.jpg">
<img alt="Ross Fc H - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/Ross-FC-H.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Floor Cleaner - Hard Surface (B2)</h2>
<h5>(Ross FC-H)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Easily soluble in water.</li>
<li>Economical in use.</li>
<li>Non-corrosive, non-hazardous</li>
<li>Requires less manual efforts</li>
<li>Easily rinsed off, hence saves water and time</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-ross-fc-h">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["54"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["54"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["54"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["54"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["54"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BlitzCitro"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/blitz-citro.jpg">
<img alt="Blitz Citro - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/blitz-citro.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Neutral all-purpose cleaner</h2>
<h5>(Blitz Citro)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Excellent cleaning action.</li>
<li>Dries fast and streak-free.</li>
<li>Leaves brilliant shine.</li>
<li>Material-compatible.</li>
<li>With fresh citrus scent.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-blitz-citro">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["55"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["55"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["55"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["55"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["55"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="Profiglass"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/profiglass.jpg">
<img alt="Profiglass - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/profiglass.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Ready-to-use glass cleaner with anti-soiling effect</h2>
<h5>(Profiglass)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Dries fast and streak-free with anti-soiling effect.</li>
<li>Good cleaning performance, especially on greasy deposits.</li>
<li>Practical spray nozzle allowing spot cleaning.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-profiglass">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["56"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["56"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["56"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["56"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["56"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossGC"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/ross-GC.png">
<img alt="Ross Gc - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/ross-GC.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Glass Cleaner Concentrate (B3)</h2>
<h5>(Ross GC)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Unique product for hotel and domestic use</li>
<li>Excellent cleaning of oily smudges and finger marks.</li>
<li>Quick action – easy spray and wipe.</li>
<li>Clean streak free look after use</li>
<li>Pleasant, fresh room care fragrance</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-ross-gc">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["158"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["158"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["158"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["158"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["158"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BuzFinnese"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/finesse.jpg">
<img alt="Finesse - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/finesse.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Ready-to-use special care and furniture care product (B4)</h2>
<h5>(Buz Finnese)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Cleans, cares for and preserves.</li>
<li>Antistatic effect</li>
<li>Reduces re-soiling</li>
<li>Anticorrosive</li>
<li>Refreshes colour</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-finnese">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["57"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["57"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["57"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["57"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["57"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BuzROFreshM"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/buz-ro-fresh-mahagony.jpg">
<img alt="Buz Ro Fresh Mahagony - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/buz-ro-fresh-mahagony.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Air deodorizer (B5)</h2>
<h5>(Buz RO Fresh Mahagony)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Leaves pleasant, fresh fragrance</li>
<li>Long lasting</li>
<li>Suitable for air conditioning devices</li>
<li>Does not stain</li>
<li>Ready-to-use</li>
<li>Pump spray without propellant</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-fresh-lavender">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["58"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["58"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["58"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["58"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["58"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BuzROFreshL"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/lavender.jpg">
<img alt="Lavender - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/lavender.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Air deodorizer (B5)</h2>
<h5>(Buz RO Fresh Lavender)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Leaves pleasant, fresh fragrance</li>
<li>Long lasting</li>
<li>Suitable for air conditioning devices</li>
<li>Does not stain</li>
<li>Ready-to-use</li>
<li>Pump spray without propellant</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-fresh-lavender">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["59"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["59"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["59"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["59"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["59"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossTC"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/ross-TC.jpg">
<img alt="Ross Tc - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/ross-TC.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Toilet bowl cleaner (B6)</h2>
<h5>(Ross TC)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Proper viscosity for required contact time.</li>
<li>Prevents scaling on regular use.</li>
<li>Squeegee-bottle with directional spout, enables fast and easy Application.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-ross-tc">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["60"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["60"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["60"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["60"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["60"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BuzRO"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/citral.png">
<img alt="Citral - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/citral.png"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Multi-purpose Cleaner (B7)</h2>
<h5>(Buz RO Fresh Citral)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Material-compatible multi-purpose cleaner</li>
<li>Excellent cleaning action.</li>
<li>Dries fast and streak-free.</li>
<li>Leaves brilliant shine.</li>
<li>Removes soil from pencils and ballpoint pens.</li>
<li>For daily maintenance cleaning of water- resistant materials, surfaces and floors</li>
<li>Suitable for use on sealed wooden floors, plastics, safety tiles, porcelain stoneware tiles and ceramic tiles, brass and copper</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-fresh-citral">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["61"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["61"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["61"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["61"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["61"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossDSC"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/Ross-DCS.jpg">
<img alt="Ross Dcs - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/Ross-DCS.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Descaling Concentrate</h2>
<h5>(Ross DSC)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Immediate cleaning action.</li>
<li>Versatile cleaning product with powerful lime-removing properties.</li>
<li>Suitable for use in a foam gun: prevents undesirable aerosol effect in areas handling foodstuffs.</li>
<li>Suitable for use in a high-pressure cleaning machine and with a single-disk machine.</li>
<li>Suitable for use in the food processing industry.</li>
<li>RK listed.</li>
<li>Unscented</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-ross-dsc">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["62"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["62"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["62"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["62"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["62"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossHDC"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/ross-HDC.jpg">
<img alt="Ross Hdc - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/ross-HDC.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Alkaline, solvent-free degreaser for food preparation environment</h2>
<h5>(Ross HDC)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>High-performance, cleaner/degreaser for food contact surfaces</li>
<li>Cleans fast and easy without hard scrubbing</li>
<li>Even cleans hard-to-clean grouting</li>
<li>For use in supermarket meat-cutting, seafood, bakery, deli and produce areas, institutional kitchen and food plants</li>
<li>For use in multiple cleaning methods (foaming, spraying, mopping, brushing or wiping)</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-ross-hdc">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["63"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["63"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["63"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["63"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["63"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="IndumasterStrong"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/indusmaster.jpg">
<img alt="Indusmaster - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/indusmaster.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>High alkaline dirt-breaker</h2>
<h5>(Indumaster Strong)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Excellent and powerful soil-removing action.</li>
<li>High dispersive capacity for greasy and oily soil.</li>
<li>Suitable for Application with scrubbing dryers and high-pressure cleaning machines.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-indumaster-strong">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["64"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["64"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["64"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["64"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["64"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="Optifloor"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/optifloor.jpg">
<img alt="Optifloor - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/optifloor.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Carpet and Upholstery Shampoo</h2>
<h5>Optifloor</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Dissolves dirt, fibre-deep and fabricprotective action</li>
<li>Forms a dry, solid foam</li>
<li>Crystallises dry</li>
<li>Suitable for wet and dry shampooing</li>
<li>Can be easily removed with a vacuum cleaner</li>
<li>Does not contain optical brightening agents</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/#">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["65"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["65"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["65"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["65"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["65"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="OTens"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/o-tens.jpg">
<img alt="O Tens - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/o-tens.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Spot Remover</h2>
<h5>(O Tens)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Immediate cleaning action.</li>
<li>Leaves no residues.</li>
<li>Suitable for use in a scrubbing dryer.</li>
<li>Environmentally friendly.</li>
<li>Neutral scent.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-o-tens">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["66"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["66"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["66"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["66"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["66"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="Metapol"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/Metapol.jpg">
<img alt="Metapol - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/Metapol.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Metal Cleaner cum Polish</h2>
<h5>(Metapol)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Intensive cleaning action.</li>
<li>Material-compatible.</li>
<li>Protects treated surfaces.</li>
<li>Skin-compatible.</li>
<li>Suitable for use in areas handling foodstuffs.</li>
<li>Pleasant fragrance.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-metapol">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["67"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["67"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["67"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["67"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["67"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="BuzLeather"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box"><a data-fancybox="gallery" href="images/product-images/Cleaning Chemicals/Housekeeping/buz-leather.jpg">
<img alt="Buz Leather - Housekeeping | Delta Solutions" src="images/product-images/Cleaning Chemicals/Housekeeping/buz-leather.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Leather Cleaner cum Polish</h2>
<h5>(Buz Leather)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>Deep, intensive cleaning with excellent conditioning properties.</li>
<li>Enhances the natural colour and structure of the leather.</li>
<li>Restores the natural suppleness of the leather.</li>
<li>Increases wear resistance.</li>
<li>Water-repellent, long-term and UV protection.</li>
<li>Prevents quick re-soiling.</li>
<li>Economical.</li>
<li>Pleasant scent.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-leather">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["68"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["68"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["68"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["68"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["68"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="RossClarino"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<!--  <div class="image-box"><a href="images/product-images/Cleaning Chemicals/Housekeeping/clarino.jpg" data-fancybox="gallery">
                        <img src="images/product-images/Cleaning Chemicals/Housekeeping/clarino.jpg" alt=""></a>
                    </div> -->
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>Ready to use crystallizer</h2>
<h5>(Ross Clarino)</h5>
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>For crystallization of smooth calciferous stone floors, such as marble, travertine, Solnhofen slabs, Jurassic limestone, terrazzo.</li>
<li>Enhances the optical Appearance and provides long-lasting lustre.</li>
<li>Enhances the crystal structure and the brilliancy of the stone.</li>
<li>Enhances the durability of the floor and thus protects against chemical and mechanical damage.</li>
<li>Does not require a long drying period following basic cleaning.</li>
<li>Slip-retardant.</li>
<li>Easy handling.</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<a class="theme-btn btn-style-one" href="/product/housekeeping-ross-clarino">Know More</a>
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["69"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["69"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["69"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["69"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["69"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="Steel-Cleaner"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/3M Stainless Steel Cleaner.jpg"><img alt="3 M Stainless Steel Cleaner - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/3M Stainless Steel Cleaner.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>3M Stainless Steel Cleaner</h2>
<!-- <h5>(Ross Clarino)</h5>   -->
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>3M™ Stainless Steel Cleaner and Polish is a ready-to-use cleaner and polish packaged in an aerosol container. The product is dispensed as a white, non-evaporating foam.</li>
<li>Packing : 621ml (21 fl.oz.) aerosol can</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<!-- <a href="/product/housekeeping-ross-clarino" class="theme-btn btn-style-one">Know More</a>  -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["199"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["199"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["199"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["199"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["199"]["code"]; ?>" name="remark" value="" />
                            </div>
</div>
</div>
</div>
</div>
<hr id="Triggers"/>
<div class="row clearfix">
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="image-box">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/Sharpshooter.jpg"><img alt="Sharpshooter - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/Sharpshooter.jpg"/></a>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<h2>3M Sharpshooter with Triggers</h2>
<!-- <h5>(Ross Clarino)</h5>   -->
<h4><span>HIGHLIGHTS:</span></h4>
<ul>
<li>No-rinse formula cleaner for quick, easy removal of soil and grease. This powerful cleaner penetrates and loosens buildup quickly. Convenient and effective.</li>
<li>Removes stubborn marks, spots, and stains from almost any washable surface</li>
<li>Ready-to-use formulation.</li>
<li>Packing : 1 ltr</li>
</ul>
<!-- Service Block Two -->
<div class="service-block-two">
<div class="inner-box">
<span class="icon"></span>
<!-- <a href="/product/housekeeping-ross-clarino" class="theme-btn btn-style-one">Know More</a>  -->
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["200"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["200"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["200"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["200"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["200"]["code"]; ?>" name="remark" value="" />
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