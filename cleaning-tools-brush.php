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
<title>Cleaning Tools Brush | Delta Solutions</title>
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
<meta content="Explore professional cleaning brushes from Delta Solutions. Floor brushes, carpet brushes, cobweb brushes and housekeeping tools for commercial cleaning." name="description"/><link href="https://delta-solutions.in/cleaning-tools-brush" rel="canonical"/></head>
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
<li class="active"><a href="#TB-001">Hard Floor Brush</a></li>
<li><a href="#TB-002">Wooden Sweeping Broom</a></li>
<li><a href="#TB-003">Carpet Brush (2)</a></li>
<li><a href="#TB-005">Cobweb Brush (2)</a></li>
<li><a href="#TB-007">Dustpan With Brush Set</a></li>
<li><a href="#IPC">IPC Plastic Sweeper</a></li>
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
<li>Brushes</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('TB-001');">Hard Floor Brush</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TB-002');">Wooden Sweeping Broom</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TB-003');">Carpet Brush (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TB-005');">Cobweb Brush (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('TB-007');">Dustpan With Brush Set</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('IPC');">IPC Plastic Sweeper</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="TB-001">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Brushes</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/TB-001.jpg"><img alt="Tb 001 - Brush | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/TB-001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Hard Floor Brush</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["222"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["222"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["222"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["222"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["222"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TB-001</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2">
<ul>
<li>To be used for floor scrubbing for removal of tough dirt stains.</li>
<li>Brush width - 18" (45cm)</li>
<li>MS handle (included)</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TB-002"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Wooden Sweeping Broom</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["223"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["223"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["223"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["223"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["223"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TB-002</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3">
<ul>
<li>To be used for sweeping in outdoor areas for removal of fine dust, powder, and dirt.</li>
<li>To be used with wooden handle (included)</li>
<li>Brush width – 20 “</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TB-003"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/TB-003.jpg"><img alt="Tb 003 - Brush | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/TB-003.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Carpet Brush - Hard</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["224"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["224"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["224"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["224"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["224"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TB-003</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<ul>
<li>To be used for carpet cleaning</li>
<li>Hard bristles for heavy-duty cleaning</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TB-004"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/TB-004.jpg"><img alt="Tb 004 - Brush | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/TB-004.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Carpet Brush - Soft</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["225"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["225"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["225"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["225"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["225"]["code"]; ?>" name="remark" value="" />
                                </p></h4>
<h5>Item Code : TB-004</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5">
<ul>
<li>To be used for carpet cleaning</li>
<li>Soft bristles for routine and light duty cleaning</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TB-005"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/TB-005.jpg"><img alt="Tb 005 - Brush | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/TB-005.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Cobweb Brush - Pipe</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["226"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["226"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["226"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["226"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["226"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TB-005</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one6">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one6">
<ul>
<li>To be used for the removal of cobwebs.</li>
<li>Can be used in high access areas along with telescopic pole (not included)</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TB-006"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/TB-006.jpg"><img alt="Tb 006 - Brush | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/TB-006.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Cobweb Brush - Fan</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["227"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["227"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["227"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["227"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["227"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TB-006</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one7">
<ul>
<li>To be used for removal of cobwebs and dust from fan blades.</li>
<li>Can be used in high access areas along with telescopic pole (not included)</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="TB-007"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/"><img alt=" - Cleaning Tools | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta Closed Dustpan with Brush Set</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["228"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["228"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["228"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["228"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["228"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>Item Code : TB-007</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one8">
<ul>
<li>Used to pick dirt in public areas without bending.</li>
<li>A closed dustpan ensures that the dirt is not visible to guests.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="IPC"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Brush/IPC-Plastic-Sweeper.jpg"><img alt="Ipc Plastic Sweeper - Brush | Delta Solutions" src="images/product-images/Cleaning Tools/Brush/IPC-Plastic-Sweeper.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>IPC Plastic Sweeper</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["221"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["221"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["221"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["221"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["221"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<ul>
<li>Used for sweeping in outdoor areas with heavy dirt and dust</li>
<li>PVC Bristles</li>
<li>To be used with a wooden handle (not included)</li>
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