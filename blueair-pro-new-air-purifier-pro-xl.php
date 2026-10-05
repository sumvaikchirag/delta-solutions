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
<title>Products</title>
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
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 100%; width:100%;}
    .vertical-item .item-media{background: #ffffff; border:4px solid #f2f2f2; border-radius: 15px;height: 350px;text-align: center; padding: 40px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 28px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 15px;}
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}
    .item-content .quote-btn {display: inline; float: right; }    

    table, td {
      border: 1px solid #777;
      border-collapse: collapse;
      text-align: center;      
      padding: 5px;
    }   
     th {
      border: 1px solid #777;
      border-collapse: collapse;
      text-align: center;      
      padding: 5px;
      background-color: #e1e1e1;
      color: #666;
      
    }    
    </style>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="clean-air-solutions.php">Clean Air Solutions</a></li>
<li><a href="air-purifiers.php">Air Purifiers</a></li>
<li><a href="blueair-pro-new-air-purifier.php">Blueair Pro-new Air Purifier</a></li>
<li>Pro XL</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three">
<div class="auto-container">
<div class="row clearfix">
<div class="col-md-4">
<div class="vertical-item">
<div class="item-media"> <img alt="Blueair Pro Xl - Pro | Delta Solutions" src="images/product-images/Air Purifiers/Pro/Blueair pro XL.jpg"/> </div>
<div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Air Purifiers/Camfil Purifiers/City-M.pdf" target="blank">Download Data Sheet</a></div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Pro XL</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["122"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["122"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["122"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["122"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["122"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one">Details</a></li>
<li class=""><a data-toggle="tab" href="#two">Technical data</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one">
<p>Designed to work as hard as you do, the Blueair Pro™ series makes everyone at work feel better and be more productive. With its award-winning design, innovative technology and exceptional performance, the Blueair Pro series provides professional air purification. Despite its small footprint, it cleans the air faster than comparable room air purifiers.</p>
</div>
<div class="tab-pane" id="two">
<ul>
<p><b>Room Size :</b> <span>110 m² (1180 sq. ft.)</span></p>
<p><b>Clean Air Delivery Rate (CADR)B</b></p>
<li>Smoke  : <span>800 cfm  (1359 m³/h)</span></li>
<li>Pollen  : <span>950 cfm (1614 m³/h)</span></li>
<li>Dust  : <span>900 cfm (1529 m³/)h</span></li>
<li>Air changes per hourC : <span>5</span></li>
<p><b>Product</b></p>
<table style="max-width: 800px;margin: 10px;">
<tr>
<th><b></b></th>
<th><b>High</b></th>
<th><b>Medium</b></th>
<th><b>Low</b></th>
</tr>
<tr>
<td style="text-align: left;"><b>Air Flow</b></td>
<td>990 cfm (1683 m³/h)</td>
<td>330 cfm (561 m3/h) </td>
<td>210 cfm (357 m³/h)</td>
</tr>
<tr>
<td style="text-align: left;"><b>Sound Level</b></td>
<td>58 dB(A)</td>
<td>35 dB(A)</td>
<td>32 dB(A)</td>
</tr>
<tr>
<td style="text-align: left;"><b>Energy Consumption</b></td>
<td>256 W</td>
<td>57 W</td>
<td>33 W</td>
</tr>
<tr>
<td style="text-align: left;"><b>Casters</b></td>
<td>NO</td>
<td>NO</td>
<td>NO</td>
</tr>
<tr>
<td style="text-align: left;"><b>Wall Mount</b></td>
<td>Optional</td>
<td>Optional</td>
<td>Optional</td>
</tr>
</table>
<p><b>HEPASilent™ filterD</b></p>
<li>Particle Filter : <span>YES</span></li>
<li>SmokeStop filter : <span>YES</span></li>
<li>Carbon + Fiter : <span>Optional</span></li>
<li>Number of filter sets : <span>3</span></li>
<li>Filter replacement indicator : <span>YES</span></li>
<p><b>Sensors</b></p>
<li>Air Intelligence Module : <span>YES</span></li>
<p><b>Certification programsE</b></p>
<li>AHAM verified : <span>YES</span></li>
<li>Energy Star : <span>YES</span></li>
<li>ARB (do not emit ozone) : <span>YES</span></li>
<p><b>Dimension / weight</b></p>
<li>Product dimensions (HxWxD) : <span>1120 x 504 x 240 mm (44 x 20 x 10 in.)</span></li>
<li>Product weight (including filter) : <span>31.6 KG (70 lbs.)</span></li>
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
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="js/map-script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>