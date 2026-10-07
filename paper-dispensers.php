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
<title>Paper Dispensers by Delta Solutions | SS &amp; ABS Paper Dispensers</title>
<link rel="canonical" href="https://delta-solutions.in/paper-dispensers"/>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content="Get high quality paper dispensers from Delta Solutions. Available in both Stainless Steel (SS) and ABS Plastic material. High quality, sleek designs; suitable for use anywhere. Order now!" name="description"/>
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
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 40px; width: 350px; height: 350px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 25px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}
   
    </style>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="dispensers.php">Dispensers</a></li>
<li>Paper Dispensers</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Paper Dispensers</h1>
</div>
<div class="row clearfix">
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12 center-fix">
<div class="image-box">
<figure><a href="paper-dispensers-abs.php"><img alt="Dpa 001 - Paper Tissue Dispenser | Delta Solutions" src="images/product-images/Dispensers/Paper Tissue Dispenser/DPA-001.jpg"/></a></figure>
</div>
<div align="center" class="content-box">
<h4><a href="paper-dispensers-abs.php">ABS Plastic Dispenser</a></h4>
<a class="theme-btn btn-style-one" href="paper-dispensers-abs.php">Read More</a>
</div>
</div>
<!-- Project Block -->
<div class="project-block-four col-md-4 col-sm-6 col-xs-12">
<div class="image-box">
<figure><a href="paper-dispensers-ss.php"><img alt="Dps 001 - Paper Tissue Dispenser | Delta Solutions" src="images/product-images/Dispensers/Paper Tissue Dispenser/DPS-001.jpg"/></a></figure>
</div>
<div align="center" class="content-box">
<h4><a href="paper-dispensers-ss.php">Stainless Steel Dispenser (SS)</a></h4>
<a class="theme-btn btn-style-one" href="paper-dispensers-ss.php">Read More</a>
</div>
</div>
</div>
</div>
</section>
<?php include 'footer.php';?>
</div>
<!--End pagewrapper-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
</html>