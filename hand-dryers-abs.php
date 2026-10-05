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
<title>Delta ABS Hand Dryers</title>
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
<meta content="High quality ABS Plastic Hand Dryers for commercial use from Delta Solutions for cleaner washrooms" name="description"/>
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
<link href="https://delta-solutions.in/hand-dryers-abs" rel="canonical"/></head>
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
<li class="active"><a href="#HDA-001">HDA-001</a></li>
<li><a href="#HDA-002">HDA-002</a></li>
<li><a href="#HDA-003">HDA-003</a></li>
<li><a href="#HDA-004">HDA-004</a></li>
<li><a href="#HDA-006">HDA-006</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="hand-dryers.php">Hand Dryers</a></li>
<li>ABS Plastic Hand Dryers</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('HDA-001');">HDA-001</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('HDA-002');">HDA-002</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('HDA-003');">HDA-003</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('HDA-004');">HDA-004</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('HDA-006');">HDA-006</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="HDA-001">
<div class="auto-container">
<div class="sec-title text-center">
<h1>ABS Plastic Hand Dryers</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Hand dryer/ABS Hand Dryer/HDA 001.jpg"><img alt="Hda 001 - Abs Hand Dryer | Delta Solutions" src="images/product-images/Hand dryer/ABS Hand Dryer/HDA 001.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta ABS Hand dryer (1000W)</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["145"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["145"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["145"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["145"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["145"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(HDA-001)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one1" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two1">Technical data</a></li>
<!-- <li class=""><a href="#three1" data-toggle="tab">Recommended Places</a></li> -->
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one1">
                                    <ul> 
                                        <p>Delta ABS Hand dryer (1000W)</p>                
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two1">
<ul>
<li>Material : ABS</li>
<li>Power : 1000W</li>
<li>Air Speed : 30m/s</li>
<li>RPM : 22000</li>
<li>Drying Time : &lt;15 Sec</li>
<li>Dimensions  : W248 x D175 x H250 mm</li>
</ul>
</div>
<!-- <div class="tab-pane" id="three1">
                                    <ul>  -->
<!-- <li>Small Reastaurant</li>
                                        <li>Small offices</li>
                                        <li>Mid size hospitals</li>
                                        <li>Mid size Hotels</li>   -->
<!-- </ul>    
                                </div> -->
</div>
</div>
</div>
</div>
</div> <hr id="HDA-002"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Hand dryer/ABS Hand Dryer/HDA 002-J.jpg"><img alt="Hda 002 J - Abs Hand Dryer | Delta Solutions" src="images/product-images/Hand dryer/ABS Hand Dryer/HDA 002-J.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta ABS Jet Hand Dryer Brushless Motor</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["146"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["146"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["146"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["146"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["146"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(HDA-002)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one2" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two2">Technical data</a></li>
<!-- <li class=""><a href="#three2" data-toggle="tab">Recommended Places</a></li> -->
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one2">
                                    <ul> 
                                        <p>Delta ABS Jet Hand Dryer Brushless Motor</p>                            
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two2">
<ul>
<li>Voltage : 220-240 V</li>
<li>Motor Power : 700 W</li>
<li>Heater Power : 1150 W</li>
<li>Rated Frequency : 50-60 Hz</li>
<li>Rated Current : 9 A</li>
<li>Waterproof Grade : IPX1</li>
<li>Drying Time : 6-10s</li>
<li>Air Speed : 95 m/s</li>
<li>Noise Level : 70 db</li>
<li>Material : ABS</li>
<li>RPM : 24000</li>
<li>Filter : HEPA</li>
<li>Dimensions : 305 x 200 x 655 mm</li>
<li>Persistent operations of Brushless AC Motor</li>
<li>Intelligent</li>
<li>Convenient</li>
<li>A Slinky Display LCD</li>
</ul>
</div>
<!-- <div class="tab-pane" id="three2">
                                    <ul>   
                                                                                                 
                                    </ul>    
                                </div>    -->
</div>
</div>
</div>
</div>
</div> <hr id="HDA-003"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Hand dryer/ABS Hand Dryer/HDA 003.jpg"><img alt="Hda 003 - Abs Hand Dryer | Delta Solutions" src="images/product-images/Hand dryer/ABS Hand Dryer/HDA 003.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta ABS Hand dryer (1500W) </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["147"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["147"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["147"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["147"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["147"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(HDA-003)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one3" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two3">Technical data</a></li>
<!--  <li class=""><a href="#three3" data-toggle="tab">Recommended Places</a></li>   -->
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one3">
                                    <ul> 
                                        <p>Delta ABS Hand dryer (1500W)</p>                
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two3">
<ul>
<li>Material : ABS</li>
<li>Power : 1500w</li>
<li>Air Speed : 16 m/s</li>
<li>Voltage : 220V/50 Hz</li>
<li>RPM : 2800</li>
<li>Noise Level : 25 db</li>
<li>Drying Time : &lt;20 Sec</li>
<li>Dimensions : 240 x 205 x 255mm</li>
</ul>
</div>
<!-- <div class="tab-pane" id="three3">
                                    <ul>    -->
<!-- <li>Small Reastaurant</li>
                                        <li>Small offices</li>
                                        <li>Mid size hospitals</li>
                                        <li>Mid size Hotels</li>   -->
<!--   </ul>    
                                </div>     -->
</div>
</div>
</div>
</div>
</div><hr id="HDA-004"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Hand dryer/ABS Hand Dryer/HDA-004.jpg"><img alt="Hda 004 - Abs Hand Dryer | Delta Solutions" src="images/product-images/Hand dryer/ABS Hand Dryer/HDA-004.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta ABS Jet Hand dryer (2000W) </span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["148"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["148"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["148"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["148"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["148"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(HDA-004)</h5><br/>
<ul class="nav nav-tabs">
<!-- <li class="active"><a href="#one4" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two4">Technical data</a></li>
<!-- <li class=""><a href="#three4" data-toggle="tab">Recommended Places</a></li>   -->
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one4">
                                    <ul> 
                                        <p>Delta ABS Jet Hand dryer (2000W)</p>                
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two4">
<ul>
<li>Voltage : 220-240 V</li>
<li>Motor Power : 850 W</li>
<li>Heater Power : 1150 W</li>
<li>Rated Frequency : 50-60 Hz</li>
<li>Rated Current : 9 A</li>
<li>Drying Time : 6-12s</li>
<li>Air Speed : 95 m/s</li>
<li>Noise Level : 72 db</li>
<li>Material : ABS</li>
<li>RPM : 24000</li>
<li>LCD Display screen</li>
<li>Dimensions WxDxH: 400x350x730 mm</li>
</ul>
</div>
<!-- <div class="tab-pane" id="three4">
                                    <ul>        -->
<!-- <li>Banquet hall</li>
                                        <li>hotels, malls</li>
                                        <li>hospitals</li>
                                        <li>Manufacturing Industries</li> -->
<!-- </ul>    
                                </div>   -->
</div>
</div>
</div>
</div>
</div><hr id="HDA-006"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Hand dryer/ABS Hand Dryer/HDA 006.jpg"><img alt="Hda 006 - Abs Hand Dryer | Delta Solutions" src="images/product-images/Hand dryer/ABS Hand Dryer/HDA 006.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Delta ABS Hand dryer (1000W)</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["149"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["149"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["149"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["149"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["149"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<h5>(HDA-006)</h5><br/>
<ul class="nav nav-tabs">
<!--  <li class="active"><a href="#one5" data-toggle="tab">Details</a></li> -->
<li class="active"><a data-toggle="tab" href="#two5">Technical data</a></li>
<!--  <li class=""><a href="#three5" data-toggle="tab">Recommended Places</a></li>   -->
</ul>
<div class="tab-content">
<!-- <div class="tab-pane active" id="one5">
                                    <ul> 
                                        <p>Delta ABS Hand dryer (1000W)</p>               
                                    </ul>
                                </div> -->
<div class="tab-pane active" id="two5">
<ul>
<li>Material : ABS</li>
<li>Power : 1000W</li>
<li>Power Supply: AC220V-50Hz</li>
<li>Air Speed : 75m/s</li>
<li>RPM : 25000</li>
<li>Drying Time : &lt;10 seconds</li>
<li>Noise Level : 95 db</li>
<li>Dimensions WxDxH : 240x135x410 mm</li>
</ul>
</div>
<!-- <div class="tab-pane" id="three5">
                                    <ul>  -->
<!-- <li>Banquet hall</li>
                                        <li>hotels, malls</li>
                                        <li>hospitals</li>
                                        <li>Manufacturing Industries</li>  -->
<!--   </ul>    
                                </div> -->
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