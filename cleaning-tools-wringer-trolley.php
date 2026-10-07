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
<title>Cleaning Tools Wringer Trolley | Delta Solutions</title>
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
<meta content="Shop commercial wringer trolleys from Delta Solutions. Durable mop bucket systems designed for efficient floor cleaning in hospitals, hotels and industries." name="description"/><link href="https://delta-solutions.in/cleaning-tools-wringer-trolley" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 40px; width: 400px; height: 400px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 26px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}

    table, td {
      border: 1px solid #777;
      border-collapse: collapse;
      text-align: center;
      height: 30px;
      padding: 3px;
    }   
     th {
      border: 1px solid #777;
      border-collapse: collapse;
      text-align: center;
      height: 30px;
      padding: 3px;
      background-color: #e1e1e1;
      color: #666;
      
    }  
   
    </style>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#TWT-001">Wringer Trolley - Single bucket SidePress (2)</a></li>
<li><a href="#TWT-004">Wringer Trolley - Double Bucket - DownPress (3)</a></li>
<li><a href="#TWT-008">Vileda Wringer Trolley (2)</a></li>
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
<li><a href="cleaning-tools.php">Cleaning Tools</a></li>
<li>Wringer Trolley</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('TWT-001');">Wringer Trolley - Single bucket - SidePress (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWT-004');">Wringer Trolley - Double Bucket - DownPress (3)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TWT-008');">Vileda Wringer Trolley (2)</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="TWT-001">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Wringer Trolley</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wringer Trolley/TWT-001.jpg"><img alt="Twt 001 - Wringer Trolley | Delta Solutions" src="images/product-images/Cleaning Tools/Wringer Trolley/TWT-001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Wringer Trolley – 20 Ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["247"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["247"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["247"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["247"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["247"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWT-001</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<ul>
<li>Single bucket - SidePress</li>
<li><b>Capacity</b> : 10 ltr + 10 ltr with divider</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWT-002"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wringer Trolley/TWT-002.jpg"><img alt="Twt 002 - Wringer Trolley | Delta Solutions" src="images/product-images/Cleaning Tools/Wringer Trolley/TWT-002.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Wringer Trolley – 33 Ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["248"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["248"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["248"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["248"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["248"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWT-002</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2">
<ul>
<li>Single bucket - SidePress</li>
<li><b>Capacity</b> : 16 ltr + 17 ltr with divider</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWT-004"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wringer Trolley/TWT-004.jpg"><img alt="Twt 004 - Wringer Trolley | Delta Solutions" src="images/product-images/Cleaning Tools/Wringer Trolley/TWT-004.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Wringer Trolley – 34 Ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["249"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["249"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["249"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["249"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["249"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWT-004</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3">
<ul>
<li>Double Bucket - DownPress</li>
<li><b>Capacity</b> : 17 ltr x 2 Buckets</li>
<li>Down Press Wringer</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWT-005"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wringer Trolley/TWT-005.jpg"><img alt="Twt 005 - Wringer Trolley | Delta Solutions" src="images/product-images/Cleaning Tools/Wringer Trolley/TWT-005.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Wringer Trolley – 50 Ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["250"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["250"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["250"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["250"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["250"]["code"]; ?>" name="remark" value="" />
                                </p></h4>
<h5>Item Code : TWT-005</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<ul>
<li>Double Bucket - DownPress</li>
<li><b>Capacity</b> :25 ltr x 2 Buckets</li>
<li>Down Press Wringer</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWT-006"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wringer Trolley/TWT-006.jpg"><img alt="Twt 006 - Wringer Trolley | Delta Solutions" src="images/product-images/Cleaning Tools/Wringer Trolley/TWT-006.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Wringer Trolley (3P) – 50 Ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["251"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["251"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["251"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["251"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["251"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWT-006</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5">
<ul>
<li>Double Bucket - DownPress</li>
<li><b>Capacity</b> : 25 ltr x 2 Buckets</li>
<li>Down Press Wringer</li>
<li>Caddy</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWT-008"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wringer Trolley/TWT-008.jpg"><img alt="Twt 008 - Wringer Trolley | Delta Solutions" src="images/product-images/Cleaning Tools/Wringer Trolley/TWT-008.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda Ultraspeed Pro Wringer Trolley – 33 Ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["252"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["252"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["252"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["252"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["252"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWT-008</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one6">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one6">
<ul>
<li>Double Bucket</li>
<li><b>Capacity</b> : 25 ltr + 8 ltr</li>
<li>Ultraspeed  Pro Wringer</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TWT-009"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Wringer Trolley/TWT-009.jpg"><img alt="Twt 009 - Wringer Trolley | Delta Solutions" src="images/product-images/Cleaning Tools/Wringer Trolley/TWT-009.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda Vertical Press Wringer trolley – 33 Ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["253"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["253"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["253"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["253"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["253"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TWT-009</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one7">
<ul>
<li>Double Bucket - DownPress</li>
<li><b>Capacity</b> : 25 ltr + 8 ltr</li>
<li>Downpress Wringer</li>
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