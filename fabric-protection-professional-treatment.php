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
<title>Professional Scotchgard Fabric Treatment | Delta Solutions</title>
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
<meta content="Protect and extend the life of your fabrics with professional Scotchgard treatment by Delta Solutions. Stain resistance, durability, and expert care guaranteed." name="description"/>
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
<link href="https://delta-solutions.in/fabric-protection-professional-treatment" rel="canonical"/></head>
<style type="text/css">

    .inner-column {margin-left: 20px;}
    .inner-column-first {margin-left: 20px;padding: 55px;text-align: justify;}
    .inner-column-second {margin-left: 20px;padding:20px 85px 0px 32px; text-align: justify;}

    .inner-column li{ font-size: 18px; }
    .inner-column-first h4, .inner-column-second h4{ font-size:40px;color: #ed3237; }
    
    .inner-column-first, .inner-column-second p {font-size: 18px;}

    .btn-style-onecart{
        font-size: 18px;
    }

    .sec-title span{color: #ed3237}

    .sec-title h2{ font-size: 30px; }    
    hr{
        margin: 20px 15px 35px 15px;
    }    
    .heading{
        margin: 0px 20px;font-size: 18px;
    }

    .image-box img {
        padding: 15px 15px;
        border-radius: 30px;
    }

   

    @media only screen and (max-width: 992px){
    .inner-column {margin-left: 0px;}
    .projects-section-four .info-column .inner-column h5 {font-size: 16px;}

    .inner-column-first {margin-left: 0px;padding: 15px;}
    .inner-column-second {margin-left: 0px;padding:15px;}

    .inner-column li{ font-size: 14px; }
    .inner-column-first h4, .inner-column-second h4{ font-size:25px;color: #ed3237; }
    
    .inner-column-first, .inner-column-second p {font-size: 14px;}

    .btn-style-onecart{
        font-size: 18px;
    }
    

    .sec-title h2{ font-size: 20px; }    
    hr{
        margin: 20px 15px 35px 15px;
    }    
    .heading{
        margin: 0px 10px;font-size: 15px;
    }
    .sec-title img {
        width: 80px;
        height: 80px;
    }
}
   
</style>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="fabric-protection.php">Fabric Protection</a></li>
<li>Professional Treatment</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="t121">
<div class="auto-container">
<div class="sec-title text-center">
<img alt="Favpng Scotchgard - Professional Treatment | Delta Solutions" height="100px;" src="images/product-images/Fabric Protection/Professional Treatment/favpng_scotchgard.png" width="100px"/>
<!--  <h2> <span>3M</span> Scotchgard <sup>TM</sup></h2> -->
<h1 style="color: black;"> <span>3M</span> Scotchgard Fabric Protection</h1>
</div>
<!-- <div class="detail"></div> -->
<div class="row">
<div class="info-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<!-- <h4 align="center"><img src="images/product-images/Fabric Protection/Professional Treatment/40x40.png"> 3M Scotchgard</h4><hr> -->
<h5 align="center">A unique fabric protection treatment that keeps your upholstery, carpets, drapes and rugs look fresh and new for long!</h5><hr/>
<p class="heading"><b>3M Scotchgard<sup>TM</sup>  Fabric Protection treatment creates an invisible shield on the fabric and protects it from dust, spills, and stains. The chemical repels the liquid and prevents it from getting absorbed into the fabric; which further prevents stains.</b> </p><br/>
<ul class="heading">
<li>Helps block future stains for easier cleanup</li>
<li>Ideal for use on sofas, upholstery, curtains, rugs, throw pillows, bedding, table linens, crafts, luggage, auto upholstery, etc.</li>
<li>The chemical does not change the look, feel, and breathability of the fabric</li>
</ul>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column-first">
<h4>What is the process?</h4>
<p>Our trained applicator visits the place on the time and day suitable for the customer. On an average it takes about 30 minutes to finish treating a 7 seater sofa. Once the work is done, it takes about 2 hours to dry. The smell of the chemical too goes off by then.</p>
</div>
</div>
<div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="image-box">
<img alt="Img 5265 - Professional Treatment | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Dry Vacuum/T-15_1-large.jpg" src="images/product-images/Fabric Protection/Professional Treatment/IMG_5265.JPG" width="450px"/>
</div>
</div>
</div>
<hr id="cv482"/>
<div class="row">
<div class="image-column col-lg-6 col-md-12 col-sm-12 hidden-xs">
<div align="center" class="image-box">
<img alt="Img 5231 - Professional Treatment | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Dry Vacuum/T-15_1-large.jpg" src="images/product-images/Fabric Protection/Professional Treatment/IMG_5231.JPG" width="450px"/>
</div>
</div>
<div class="info-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column-second">
<h4>What is the result?</h4>
<p>Once the treatment is successfully done and the fabric completely dries up, any liquid that falls on the fabric will not get soaked into the fabric. Instead, it will form up as beads on top of the fabric which can easily be cleaned by simply dabbing with a paper tissue. Easy cleanup; no stains!</p>
</div>
</div>
<div class="image-column col-md-12 col-sm-12 col-xs-12 hidden-lg">
<div align="center" class="image-box">
<img alt="Img 5231 - Professional Treatment | Delta Solutions" class="drift-demo-trigger" data-zoom="images/product-images/Cleaning Machines/Dry Vacuum/T-15_1-large.jpg" src="images/product-images/Fabric Protection/Professional Treatment/IMG_5231.JPG" width="450px"/>
</div>
</div>
</div>
<hr id="cv482"/>
<div class="row">
<div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<p align="center" class="quote-btn">
<a class="theme-btn btn-style-onecart btnAddAction" href="images/product-images/Fabric Protection/Professional Treatment/FAQs - Scotchgard.pdf" target="_blank" type="button"><img alt="30X30 | Delta Solutions" src="images/30x30.png"/>  FAQ's</a>
</p>
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