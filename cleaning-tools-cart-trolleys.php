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
<title>Cleaning Tools Cart Trolleys | Delta Solutions</title>
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
<meta content="Discover housekeeping carts and cleaning trolleys from Delta Solutions. Professional solutions for hotels, hospitals, offices and facility management teams." name="description"/><link href="https://delta-solutions.in/cleaning-tools-cart-trolleys" rel="canonical"/></head>
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
    .item-content h4{font-size: 28px;}
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
<li><a href="#TC-001">Delta Multi Purpose Trolley</a></li>
<li class="active"><a href="#TC-002">Janitor Cart</a></li>
<li><a href="#TC-003">X-Trolley/Laundry Trolley</a></li>
<li><a href="#TC-004">Pre Wet Mop Box with Lid</a></li>
<li><a href="#TC-005">Vileda Voleo Pro Trolley</a></li>
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
<li>Carts &amp; Trolleys</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('TC-001');">Delta Multi Purpose Trolley</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TC-002');">Janitor Cart</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TC-003');">X-Trolley/Laundry Trolley</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TC-004');">Pre Wet Mop Box with Lid</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TC-005');">Vileda Voleo Pro Trolley</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="TC-001">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Carts &amp; Trolleys</h1>
</div>
<!-- ✅ New Product TC-001 -->
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Cart/cart-add.png"><img alt="Cart Add - Cart | Delta Solutions" src="images/product-images/Cleaning Tools/Cart/cart-add.png"/></a>
</div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Multi Purpose Trolley</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["253"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["253"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["253"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["253"]["code"]; ?>" name="quantity" value="1" size="2" />
                            <input type="hidden" id="remark_<?php echo $productArray["253"]["code"]; ?>" name="remark" value="" />

                            </p></h4>
<h5>Item Code : TC-001</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<!-- New product specs -->
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TC-002"/>
<!-- ✅ Old TC-001 becomes TC-002 -->
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Cart/TC-001.jpg"><img alt="Tc 001 - Cart | Delta Solutions" src="images/product-images/Cleaning Tools/Cart/TC-001.jpg"/></a>
</div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Janitor Cart</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["254"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["254"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["254"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["254"]["code"]; ?>" name="quantity" value="1" size="2" />
                            <input type="hidden" id="remark_<?php echo $productArray["254"]["code"]; ?>" name="remark" value="" />

                            </p></h4>
<h5>Item Code : TC-002</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2">
<!-- Old product specs -->
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TC-003"/>
<!-- ✅ Old TC-002 becomes TC-003 -->
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Cart/TC-002.jpg"><img alt="Tc 002 - Cart | Delta Solutions" src="images/product-images/Cleaning Tools/Cart/TC-002.jpg"/></a>
</div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta X-Trolley/Laundry Trolley</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["255"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["255"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["255"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["255"]["code"]; ?>" name="quantity" value="1" size="2" />
                            <input type="hidden" id="remark_<?php echo $productArray["255"]["code"]; ?>" name="remark" value="" />

                            </p></h4>
<h5>Item Code : TC-003</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3"></div>
</div>
</div>
</div>
</div>
</div>
<hr id="TC-004"/>
<!-- ✅ Old TC-003 becomes TC-004 -->
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Cart/TC-003.jpg"><img alt="Tc 003 - Cart | Delta Solutions" src="images/product-images/Cleaning Tools/Cart/TC-003.jpg"/></a>
</div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Pre Wet Mop Box with Lid</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["256"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["256"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["256"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["256"]["code"]; ?>" name="quantity" value="1" size="2" />
                            <input type="hidden" id="remark_<?php echo $productArray["256"]["code"]; ?>" name="remark" value="" />

                            </p></h4>
<h5>Item Code : TC-004</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4"></div>
</div>
</div>
</div>
</div>
</div>
<hr id="TC-005"/>
<!-- ✅ Old TC-004 becomes TC-005 -->
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Cart/2 VoleoPro Trolley.jpg"><img alt="2 Voleo Pro Trolley - Cart | Delta Solutions" src="images/product-images/Cleaning Tools/Cart/2 VoleoPro Trolley.jpg"/></a>
</div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda Voleo Pro Trolley</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["257"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["257"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["257"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["257"]["code"]; ?>" name="quantity" value="1" size="2" />
                            <input type="hidden" id="remark_<?php echo $productArray["257"]["code"]; ?>" name="remark" value="" />

                            </p></h4>
<h5>Item Code : TC-005</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5"></div>
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