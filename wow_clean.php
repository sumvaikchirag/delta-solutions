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
<title>WOW Clean</title>
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
</head>
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
        
        height: 40px;
    }

    .image-box iframe{        
        height:300px;

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
<li>WOW Clean</li>
</ul>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-four" id="t121">
<div class="auto-container">
<div class="sec-title text-center">
<img alt="Wow | Delta Solutions" height="50px;" src="images/wow.jpg"/>
<!-- <h2> <span>WOW</span> Clean</h2> -->
</div>
<!-- <div class="detail"></div> -->
<div class="row">
<div class="info-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="inner-column">
<!-- <h4 align="center"><img src="images/product-images/Fabric Protection/Professional Treatment/40x40.png"> 3M Scotchgard</h4><hr> -->
<h5 align="center">Carpet and Upholstery Cleaning like no other!</h5>
<hr/>
<p class="heading"><b>With WOW Clean, we make your carpets and upholstery look brand new!</b> </p>
<br/>
<ul class="heading">
<li>Mechanized cleaning with state of the art machines</li>
<li>Use of specialized chemicals.</li>
<li>Trained professionals</li>
<li>On-time commitment</li>
<li>Annual Maintenance Contracts</li>
</ul><br/>
<p class="heading"><b>All you need to do is, give us a call and book your slot!</b> </p>
</div>
</div>
</div>
<br/>
<hr id="cv482"/>
<div class="row">
<div class="image-column col-lg-12 col-md-12 col-sm-12">
<div align="center" class="image-box">
<iframe height="400" src="https://www.youtube.com/embed/4vZBLC6TJIA" width="90%"></iframe>
</div>
</div>
</div>
<hr id="cv482"/>
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