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
      height: 35px;
      padding: 5px;
    }   
     th {
      border: 1px solid #777;
      border-collapse: collapse;
      text-align: center;
      height: 35px;
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
<li><a href="blueair-classic-air-purifier.php">Blueair Classic Air Purifier</a></li>
<li>Classic 680i</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three">
<div class="auto-container">
<div class="row clearfix">
<div class="col-md-4">
<div class="vertical-item">
<div class="item-media"> <img alt="Classic 680I - Classic | Delta Solutions" src="images/product-images/Air Purifiers/Classic/classic_680i.jpg"/> </div>
<div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Air Purifiers/Camfil Purifiers/City-M.pdf" target="blank">Download Data Sheet</a></div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Classic 680i</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["119"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["119"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["119"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["119"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["119"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one">Details</a></li>
<li class=""><a data-toggle="tab" href="#two">Technical data</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one">
<p>Best-in-class filtration for every need Blueair air purifiers use a revolutionary combination of the best in electrostatic and mechanical filtration. The HEPASilent™ technology removes 99.97% of harmful particles from the air, down to 0.1 micron in size.</p>
</div>
<div class="tab-pane" id="two">
<ul>
<p><b>Room Size :</b> <span>72 m² (775 sq. ft.)</span></p>
<p><b>Clean Air Delivery Rate (CADR)B</b></p>
<li>Smoke  : <span>500 cfm  (850 m³/h)</span></li>
<li>Pollen  : <span>500 cfm (850 m³/h)</span></li>
<li>Dust  : <span>640 cfm (1087 m³/)h</span></li>
<li>Air changes per hourC : <span>5</span></li>
<p><b>Product</b></p>
<li>Air Flow : <b>High</b> = <span>650 cfm (1104 m³/h)  </span> <b>Low</b> = <span>150 cfm (225 m³/h)</span></li>
<li>Sound Level : <b>High</b> = <span>62 dB(A)</span> <b>Low</b> = <span>32 dB(A)</span></li>
<li>Energy Consumption : <b>High</b> = <span>100W</span> <b>Low</b> = <span>15W</span></li>
<li>Casters :  YES</li>
<p><b>HEPASilent™ filterD</b></p>
<li>Particle Filter : <span>NO</span></li>
<li>SmokeStop filter : <span>YES</span></li>
<li>Particle Filter with Carbon Sheet : <span>YES</span></li>
<li>Number of filter sets : <span>3</span></li>
<li>Filter replacement indicator : <span>YES</span></li>
<p><b>Connectivity / sensors</b></p>
<li>Wi-Fi : <span>YES</span></li>
<li>Blueair FriendTM compatible : <span>YES</span></li>
<li>Blueair AwareTM compatible : <span>-</span></li>
<li>Integrated sensors : <span>YES</span></li>
<p><b>Certification programsE</b></p>
<li>AHAM verified : <span>YES</span></li>
<li>Energy Star : <span>YES</span></li>
<li>ARB (do not emit ozone) : <span>YES</span></li>
<p><b>Dimension / weight</b></p>
<li>Product dimensions (HxWxD) : <span>600 x 500 x 340 mm (26 x 20 x 13 in.)</span></li>
<li>Product weight (including filter) : <span>14KG (31 lbs.)</span></li>
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