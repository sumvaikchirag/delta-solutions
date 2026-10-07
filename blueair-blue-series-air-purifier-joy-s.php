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
<title>Joy S - Blueair Blue Series Air Purifier | Delta Solutions</title>
<link rel="canonical" href="https://delta-solutions.in/product/blueair-blue-series-air-purifier-joy-s"/>
<meta name="description" content="Joy S - Blueair Blue Series Air Purifier: JOY S cleans your indoor air completely five times per hour, catching virtually every airborne particle: dust…"/>
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet"/>
<link href="/css/style.css" rel="stylesheet"/>
<link href="/css/responsive.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--Favicon-->
<link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="/images/favicon.png" rel="icon" type="image/x-icon"/>
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Joy S - Blueair Blue Series Air Purifier",
  "image": [
    "https://delta-solutions.in/images/product-images/Air%20Purifiers/Blue%20Series/joy%20S.jpg"
  ],
  "description": "JOY S cleans your indoor air completely five times per hour, catching virtually every airborne particle: dust, pollen, sand, pet dander, smoke, allergens, viruses and bacteria. Active carbon even removes odors.",
  "brand": {
    "@type": "Brand",
    "name": "Blueair"
  },
  "manufacturer": {
    "@type": "Organization",
    "name": "Blueair"
  },
  "additionalProperty": [
    {
      "@type": "PropertyValue",
      "name": "Height",
      "value": "433 mm"
    },
    {
      "@type": "PropertyValue",
      "name": "Width",
      "value": "200 mm"
    },
    {
      "@type": "PropertyValue",
      "name": "Depth",
      "value": "200 mm"
    },
    {
      "@type": "PropertyValue",
      "name": "Smoke",
      "value": "195 m\u00b3/h"
    },
    {
      "@type": "PropertyValue",
      "name": "Pollen",
      "value": "200 m\u00b3/h"
    },
    {
      "@type": "PropertyValue",
      "name": "Dust",
      "value": "200 m\u00b3/h"
    }
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://delta-solutions.in/product/blueair-blue-series-air-purifier-joy-s",
    "itemCondition": "https://schema.org/NewCondition",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "Delta Solutions",
      "url": "https://delta-solutions.in/"
    }
  }
}
</script>
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
<li><a href="/index.php">Home</a></li>
<li><a href="/clean-air-solutions.php">Clean Air Solutions</a></li>
<li><a href="/air-purifiers.php">Air Purifiers</a></li>
<li><a href="/blueair-blue-series-air-purifier.php">Blueair Blue Series Air Purifier</a></li>
<li>Joy S</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three">
<div class="auto-container">
<div class="row clearfix">
<div class="col-md-4">
<div class="vertical-item">
<div class="item-media"> <img alt="Joy S - Blue Series | Delta Solutions" src="/images/product-images/Air Purifiers/Blue Series/joy S.jpg"/> </div>
<div align="center"><a class="theme-btn btn-style-one" href="/images/pdf/Air Purifiers/Blue Series/Joy-S.pdf" target="blank">Download Data Sheet</a></div>
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h1 class="product-title"><span>Joy S</span>
<p class="quote-btn">
<!--<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["113"]["code"]; ?>"  onClick="cartAction('add','<?php echo $productArray["113"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket&nbsp;  -->
<!--        <img src="/images/add-to-cart.png" />-->
<!--    </button>-->
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["113"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="/images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["113"]["code"]; ?>" name="quantity" value="1" size="2" />
                                    <input type="hidden" id="remark_<?php echo $productArray["113"]["code"]; ?>" name="remark" value="" /> 
                            </p></h1>
<br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one">Details</a></li>
<li class=""><a data-toggle="tab" href="#two">Technical data</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one">
<p>JOY S cleans your indoor air completely five times per hour, catching virtually every airborne particle: dust, pollen, sand, pet dander, smoke, allergens, viruses and bacteria. Active carbon even removes odors.</p>
</div>
<div class="tab-pane" id="two">
<ul>
<p><b>Dimensions</b></p>
<li>Height : <span>433 mm</span></li>
<li>Width : <span>200 mm</span></li>
<li>Depth : <span>200 mm</span></li>
<p><b>Room Size :</b> <span>16 m²</span></p>
<p><b>Clean Air¹ Delivery Rate (Cadr)</b></p>
<li>Smoke  : <span>195 m³/h</span></li>
<li>Pollen  : <span>200 m³/h</span></li>
<li>Dust  : <span>200 m³/h</span></li>
<p><b>Airflow Rate : </b><span>60-200 m³/h</span></p>
<p><b>Air Exchange : </b><span>5 PER Hour (16 m² Room)</span></p>
<p><b>Power Usage : </b><span>1.5-10 watts</span></p>
<p><b>Noise Level : </b><span>17-46 db(A)</span></p>
<p><b>Average Filter Service Life : </b><span>Six Months¹</span></p>
<p><b>Warranty : </b> Local Warranty Regulations</p>
<li>So Effective It Even Reduces Ozone</li>
<li>1values Based On Perticle + Carbon Filter.</li>
<li>¹Depending On Air Quality In The Area Of Use, The Filter Lifetime Will Vary.</li>
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
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/script.js"></script>
<!--Google Map APi Key-->
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>