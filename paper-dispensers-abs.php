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
<title>Paper Dispensers Abs | Delta Solutions</title>
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
<meta content="Buy ABS paper dispensers from Delta Solutions. Reliable paper towel and napkin dispensers for commercial washrooms, offices, hospitals and hospitality spaces." name="description"/><link href="https://delta-solutions.in/paper-dispensers-abs" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 40px; width: 350px; height: 350px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 23px;}
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
<li class="active"><a href="#DPA-001">DPA-001</a></li>
<li><a href="#DPA-002">DPA-002</a></li>
<li><a href="#DPA-004">DPA-004</a></li>
<li><a href="#DPA-006">DPA-006</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="dispensers.php">Dispensers</a></li>
<li><a href="paper-dispensers.php">Paper Dispensers</a></li>
<li>ABS Plastic Dispensers</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('DPA-001');">DPA-001</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('DPA-002');">DPA-002</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('DPA-004');">DPA-004</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('DPA-006');">DPA-006</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="DPA-001">
<div class="auto-container">
<div class="sec-title text-center">
<h1>ABS Plastic Dispensers</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-001.jpg"><img alt="Dpa 001 - Paper Tissue Dispenser | Delta Solutions" src="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Paper Tissue Dispenser/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta M-Fold Paper Towel Dispenser - White</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["139"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["139"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["139"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["139"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["139"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(DPA-001)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one1" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two1">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one1">
                                    <ul> 
                                        <p>Delta M-Fold Paper Towel Dispenser - White</p>       
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two1">
<ul>
<li>Material : ABS Plastic</li>
<li>Dimensions WxDxH: 260x107x205mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div> <hr id="DPA-002"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-002.jpg"><img alt="Dpa 002 - Paper Tissue Dispenser | Delta Solutions" src="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-002.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Paper Tissue Dispenser/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta M-Fold Towel Dispenser -Premium </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["140"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["140"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["140"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["140"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["140"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(DPA-002)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one2" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two2">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one2">
                                    <ul> 
                                        <p>Delta M-Fold Towel Dispenser -Premium</p>                
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two2">
<ul>
<li>Color: White</li>
<li>Material : ABS Plastic</li>
<li>Dimensions WxDxH: 272x90x220mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="DPA-004"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-004.jpg"><img alt="Dpa 004 - Paper Tissue Dispenser | Delta Solutions" src="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-004.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Paper Tissue Dispenser/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta HRT Roll Dispenser - Slim</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["141"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["141"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["141"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["141"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["141"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(DPA-004)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta HRT Roll Dispenser - Slim</p>  

                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS Plastic</li>
<li>Dimensions WxDxH: 321x182x331mm</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><hr id="DPA-006"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-006.jpg"><img alt="Dpa 006 - Paper Tissue Dispenser | Delta Solutions" src="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-006.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Dispensers/Paper Tissue Dispenser/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Cube Napkin Dispenser - White</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["142"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["142"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["142"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["142"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["142"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(DPA-006)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two4">Technical data</a></li>
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                        <p>Delta Cube Napkin Dispenser - White</p>               
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two4">
<ul>
<li>Color: White</li>
<li>Dimensions WxDxH: 260x107x205mm</li>
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