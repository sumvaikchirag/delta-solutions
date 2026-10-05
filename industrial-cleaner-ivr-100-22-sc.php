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
<title>Karcher Industrial Vacuum - Heavy Duty Application</title>
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
    .vertical-item{ max-height: 600px; width:100%;}
    .vertical-item .item-media{background: #ffffff; border:4px solid #f2f2f2; border-radius: 15px;height: 350px;text-align: center; padding: 40px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 28px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }  
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}  
   
    </style>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="cleaning-machines.php">Cleaning Machines</a></li>
<li><a href="industrial-cleaner.php">Karcher Industrial Vacuum Cleaner</a></li>
<li>IVR 100/22 Sc</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three">
<div class="auto-container">
<div class="row clearfix">
<div class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Machines/Industrial/IVR-100_22-Sc.png"><img alt="Ivr 100 22 Sc - Industrial | Delta Solutions" src="images/product-images/Cleaning Machines/Industrial/IVR-100_22-Sc.png"/></a>
</div>
<div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Industrial/IVR-100-22-Sc.pdf" target="blank">Download Data Sheet</a></div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Karcher Industrial Vacuum - Heavy Duty Application</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["45"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["45"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["45"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["45"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["45"]["code"]; ?>" name="remark" value="" />
                            </p></h4>
<h5>(IVR 100/22 Sc)</h5><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one">Details</a></li>
<li class=""><a data-toggle="tab" href="#two">Technical data</a></li>
<li class=""><a data-toggle="tab" href="#three">Equipment</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one">
<p><b>These vacuum cleaners are used in Automobile, manufacturing, engineering, food, chemical, steel, cement, foundry, ceramic etc.</b></p>
<p>IVC series industrial vacuum cleaners are reliable vacuums built for continuous and heavy-duty Applications.</p>
<p>Silent and continuous duty three phase side channel blower provides the necessary vacuum and airflow for various heavy-duty Applications.</p>
<p>Filter with large surface area provides longer running time without filter cleaning, the manual filter shaker allows the operator to clean the filter easily without dismantling the filter and the dust from the filter is collected in the collection container and can be disposed of easily.</p>
<p>Detachable drop-down collection container of 85 litres (Optional 100 litres) fitted with caster wheels is capable of collecting large volumes of dust and debris. Inlet diameter of 80 mm gives the option of using various size hoses and accessories depending on the Application.</p>
<p>The vacuum unit is mounted on a strong heavy-duty chassis to withstand tough usage conditions and is fitted with four large wheels for easy manoeuvrability.</p>
<p>All the steel parts are powder coated and zinc plated for longer life and durability.</p>
</div>
<div class="tab-pane" id="two">
<ul>
<li>Voltage (V) : <span>415</span></li>
<li>Frequency (Hz) : <span>50</span></li>
<li>Electrical Protection (IP) : <span>55</span></li>
<li>Insulation Class (F) </li>
<li>Rated Power (KW) : <span>2.2</span></li>
<li>Air flow (m3/min) : <span>300</span></li>
<li>Vacuum Max (mm H2O) : <span>3000</span></li>
<li>Noise Level dB(A) : <span>76</span></li>
<li>Container Capacity (l) : <span>85</span></li>
<li>Filter Type : <span>star</span></li>
<li>Filter Surface (cm2) : <span>20000</span></li>
<li>Filter Material : <span>polyster</span></li>
<li>Filter class (L)</li>
<li>inlet (mm) : <span>80</span></li>
<li>Weight (kg) <span>98</span></li>
<li>Dimensions (L × W × H) (mm) <span>82x67x170</span></li>
</ul>
</div>
<div class="tab-pane" id="three">
<ul>
<li>Hose (3 mtrs)</li>
<li>Double bend</li>
<li>Dry floor tool</li>
<li>Crevice nozzle</li>
<li>Round brush</li>
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