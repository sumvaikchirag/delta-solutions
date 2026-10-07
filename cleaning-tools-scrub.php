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
<title>Cleaning Tools Scrub | Delta Solutions</title>
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
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet" type="text/css"/>
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
<meta content="Buy floor scrubbing pads and cleaning scrubs from Delta Solutions. Premium 3M and Vileda products for commercial and industrial floor maintenance." name="description"/><link href="https://delta-solutions.in/cleaning-tools-scrub" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 1000px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 20px;}
    .item-content{font-size: 14px;}
    .item-content h4{font-size: 28px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}

     table{
        width: 680px;
        margin: 10px 5px;      
    }   


   td {
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

/*.slick-arrow {
  display: none !important; 
}

.slider-products{
    margin-top: 60px;
}


.slick-slide {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 3px;
  color: #fff;
  font-size: 36px;
  font-weight: bold;
  outline: none; 
  text-align: center;
}
.slider:nth-of-type(n+3) .slick-slide { background: #9c6; }
.slider:nth-of-type(n+5) .slick-slide { background: #69c; }
.slider-nav {
  margin-bottom: 12px;
}

.slider-nav .slick-slide {
  cursor: pointer;
  opacity: .6;
}

.slider-nav .slick-current,
.slider-nav .slick-slide:hover {
  cursor: pointer;
  border: 1px solid #777;
  border-radius: 3px;
  opacity: 1;
}

@media only screen and (max-width: 992px){

.vertical-item .item-media{padding: 0px; }

.slider-products{
    margin-top: 0px;
}

.slider img {
  vertical-align: middle; 
  padding: 10px;
}


}*/
   
    </style>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#Pad-17">3M Floor Pad 17"</a></li>
<li><a href="#Pad-20">3M Floor Pads 20"</a></li>
<li><a href="#Clean-Shine">3M Floor Pad - 17" - Clean &amp; Shine</a></li>
<li><a href="#Pad-White">3M Light Duty Pad White</a></li>
<li><a href="#Scrub-Sponge">3M Scotch Brite 2 In1 Scrub Sponge</a></li>
<li><a href="#Heavy-Duty">3M Scotch Brite Heavy Duty</a></li>
<li><a href="#Power-Pad">3M Scotch Brite Power Pad</a></li>
<li><a href="#Scrub-Pad">3M Scotch Brite Scrub Pad</a></li>
<li><a href="#PurActive">Vileda PurActive</a></li>
<li><a href="#Miraclean">Vileda Miraclean</a></li>
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
<li>Scrubs</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Pad-17');">3M Floor Pad 17"</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Pad-20');">3M Floor Pads 20"</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Clean-Shine');">3M Floor Pad - 17" - Clean &amp; Shine</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Pad-White');">3M Light Duty Pad White</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Scrub-Sponge');">3M Scotch Brite 2 In1 Scrub Sponge</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Heavy-Duty');">3M Scotch Brite Heavy Duty</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Power-Pad');">3M Scotch Brite Power Pad</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Scrub-Pad');">3M Scotch Brite Scrub Pad</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('PurActive');">Vileda PurActive</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Miraclean');">Vileda Miraclean</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Pad-17">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Scrubs</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<!-- <div class="slider slider-products">
                              <div><a href="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads black.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads black.jpg" alt=""></a></div>
                              <div><a href="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads blue.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads blue.jpg" alt=""></a></div>
                              <div><a href="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads red.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads red.jpg" alt=""></a></div>
                              <div><a href="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg" alt=""></a></div>                              
                            </div>

                            <div class="slider slider-nav">
                              <div><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads black.jpg" alt=""></div>
                              <div><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads blue.jpg" alt=""></div>
                              <div><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads red.jpg" alt=""></div>
                              <div><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg" alt=""></div>                             
                            </div> -->
<div class="carouselmain" id="mainCarousel">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads black.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads blue.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads red.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg"/>
</div>
</div>
<div class="carouselnav" id="navCarousel">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads black.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads blue.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads red.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg"/>
</div>
</div>
<!-- <a href="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg" alt=""></a> -->
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pad 17"</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["191"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["191"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["191"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["191"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["191"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(8850)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1" style="overflow-x:auto;">
<table>
<tr>
<th width="100px"><b>SKU</b></th>
<th width="80px"><b>Colors</b></th>
<th width="420px"><b>Details</b></th>
<th width="100px"><b>Packing</b></th>
</tr>
<tr>
<td>3M TM<br/> Stripper Pad 7200</td>
<td><b>Black</b></td>
<td>To remove finish, sealer and contaminants from the floor surface. Done at the start of a maintenance program and at times when scrubbing will not achieve the desired results.</td>
<td>5 pcs per box</td>
</tr>
<tr>
<td>3M TM<br/> Cleaner Pad 5300</td>
<td><b>Green/Blue</b></td>
<td>Used to do heavy duty scrubbing for 1–2 coat removal prior to recoating.</td>
<td>5 pcs per box</td>
</tr>
<tr>
<td>3M TM<br/> Buffer Pad 5100</td>
<td><b>Red</b></td>
<td>Specially designed for spray buffing. Cleans when damp; buffs when dry. Quickly cleans and removes scuff marks and enhances floor appearance. Works great on automatic floor scrubbers for light-duty cleaning.</td>
<td>5 pcs per box</td>
</tr>
<tr>
<td>3M TM<br/> Super Polish Pad 4100</td>
<td><b>White</b></td>
<td>For buffing very soft finishes or for polishing soft waxes on wood floors. Removes scuffs and black heel marks and enhances floor appearance.</td>
<td>5 pcs per box</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Pad-20"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<div class="carouselmain" id="mainCarousel1">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads black.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads green.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads red.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads white.jpg"/>
</div>
</div>
<div class="carouselnav" id="navCarousel1">
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads black.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads green.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads red.jpg"/>
</div>
<div class="carousel__slide">
<img data-lazy-src="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads white.jpg"/>
</div>
</div>
<!-- <a href="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads green.jpg" data-fancybox="gallery"><img src="images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads green.jpg" alt=""></a> -->
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pads 20"</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["192"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["192"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["192"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["192"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["192"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2" style="overflow-x:auto;">
<table>
<tr>
<th width="100px"><b>SKU</b></th>
<th width="80px"><b>Colors</b></th>
<th width="420px"><b>Details</b></th>
<th width="100px"><b>Packing</b></th>
</tr>
<tr>
<td>3M TM<br/> Stripper Pad 7200</td>
<td><b>Black</b></td>
<td>To remove finish, sealer and contaminants from the floor surface. Done at the start of a maintenance program and at times when scrubbing will not achieve the desired results.</td>
<td>5 pcs per box</td>
</tr>
<tr>
<td>3M TM<br/> Cleaner Pad 5300</td>
<td><b>Green/Blue</b></td>
<td>Used to do heavy duty scrubbing for 1–2 coat removal prior to recoating.</td>
<td>5 pcs per box</td>
</tr>
<tr>
<td>3M TM<br/> Buffer Pad 5100</td>
<td><b>Red</b></td>
<td>Specially designed for spray buffing. Cleans when damp; buffs when dry. Quickly cleans and removes scuff marks and enhances floor appearance. Works great on automatic floor scrubbers for light-duty cleaning.</td>
<td>5 pcs per box</td>
</tr>
<tr>
<td>3M TM<br/> Super Polish Pad 4100</td>
<td><b>White</b></td>
<td>For buffing very soft finishes or for polishing soft waxes on wood floors. Removes scuffs and black heel marks and enhances floor appearance.</td>
<td>5 pcs per box</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Clean-Shine"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/CLEAN &amp; SHINE PAD.jpg"><img alt="Clean &amp; Shine Pad - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/CLEAN &amp; SHINE PAD.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Floor Pads 17" Clean &amp; Shine</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["193"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["193"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["193"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["193"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["193"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3">
<p>2-in-1 daily cleaning pad for low-speed scrubbers that gradually increases shine with repeated use</p>
<ul>
<li>Cleans and shines in the same step, using only a low-speed scrubber</li>
<li>Save costs and labor by reducing or eliminating the need to burnish</li>
<li>Removes black marks 3 times faster than traditional cleaning pads</li>
<li>Two-sided pad lasts longer than traditional cleaning pads</li>
<li>Effective on most coated and uncoated hard floors including VCT, LVT, vinyl, rubber, marble, stone, terrazzo, granite, and concrete with only water or neutral cleaner</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Pad-White"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/Light Duty Pad.jpg"><img alt="Light Duty Pad - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/Light Duty Pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Light Duty Pad White</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["194"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["194"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["194"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["194"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["194"]["code"]; ?>" name="remark" value="" />
                                </p></h4>
<!-- <h5>(6850)</h5>   --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<ul>
<li>Use for scratchless cleaning on stainless steel, chrome, copper, porcelain and ceramic.</li>
<li>Size: 6" x 9”</li>
<li>Packing : 20 pcs per box</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Scrub-Sponge"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/scrub sponge 2-in-1.jpg"><img alt="Scrub Sponge 2 In 1 - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/scrub sponge 2-in-1.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotch Brite 2 In1 Scrub Sponge</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["195"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["195"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["195"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["195"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["195"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-012)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5">
<ul>
<li>Dual-action cleaning tool. On one side it is a 96 pad for scrubbing, on the other a cellulose sponge to wipe spills and messes.</li>
<li>Size 6.1" × 3.6"</li>
<li>Packing : 2 pcs per packet; 54 packets per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Heavy-Duty"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/Heavy Duty Pad.jpg"><img alt="Heavy Duty Pad - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/Heavy Duty Pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotchbrite Heavy Duty</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["196"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["196"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["196"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["196"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["196"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-014)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one6">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one6">
<ul>
<li>Size : 9cm x 7.5 cm</li>
<li>Packing : 2 pcs per packet; 54 packets per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Power-Pad"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/Power Pad.jpg"><img alt="Power Pad - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/Power Pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotch Brite Power Pad</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["197"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["197"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["197"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["197"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["197"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-015)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one7">
<ul>
<li>Scours up to four times faster and is up to eight times less abrasive than other medium/heavy duty commercial scouring products.</li>
<li>Size : 5.5" × 3.9"</li>
<li>Packing : 20 pcs / box</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Scrub-Pad"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/Scrub pad.jpg"><img alt="Scrub Pad - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/Scrub pad.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>3M Scotch Brite - Scrub Pad</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["198"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["198"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["198"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["198"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["198"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-016)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one8">
<ul>
<li>The original synthetic scouring pad. Replaces steel wool and metal sponges. Non-rusting and resilient.</li>
<li>Size : 4” x 6”</li>
<li>Packing : 4 pcs per packet; 48 packet per case</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="PurActive"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/Vileda PurActive.jpg"><img alt="Vileda Pur Active - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/Vileda PurActive.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda PurActive</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["292"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["292"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["292"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["292"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["292"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-016)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one9">Specifications</a></li>
<li><a data-toggle="tab" href="#two9">Details</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one9">
<table style="max-width: 700px;margin: 10px 5px;">
<tr>
<th width="100px"><b>Colors</b></th>
<th width="200px"><b>Size</b></th>
<th width="400px"><b>Packing</b></th>
</tr>
<tr>
<td><b>Blue</b></td>
<td>14cm x 6.3 cm</td>
<td>10 pcs per packet; 10 packets per case</td>
</tr>
<tr>
<td><b>Green</b></td>
<td>14cm x 6.3 cm</td>
<td>10 pcs per packet; 10 packets per case</td>
</tr>
<tr>
<td><b>Red</b></td>
<td>14cm x 6.3 cm</td>
<td>10 pcs per packet; 10 packets per case</td>
</tr>
<tr>
<td><b>Yellow</b></td>
<td>14cm x 6.3 cm</td>
<td>10 pcs per packet; 10 packets per case</td>
</tr>
</table>
</div>
<div class="tab-pane" id="two9">
<p>PurActive’s special coating easily lifts stubborn grime whilst being gentle on all hard surfaces. It cleans three times more efficiently than traditional non-scratch scourers.</p>
<ul>
<li>Easily lifts grime and grease.</li>
<li>Fits comfortable in your hand</li>
<li>Colour coded to prevent cross contamination</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Miraclean"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Cleaning Tools/Scrubs/15 Vileda Miraclean.jpg"><img alt="15 Vileda Miraclean - Scrubs | Delta Solutions" src="images/product-images/Cleaning Tools/Scrubs/15 Vileda Miraclean.jpg"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Vileda Miraclean</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["293"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["293"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["293"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["293"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["293"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(PT-016)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one8">
<p>Removes tough marks, stains and ground-in dirt with a minimum effort where other cleaning methods normally fail.</p>
<ul>
<li>Works with water only, no chemicals needed.</li>
<li>Strong cleaning performance with minimum effort</li>
<li>Certified by Oko-tex Standard 100</li>
<li>Size: 10cm x 6cm x 2.8cm</li>
<li>Packing: 12 pcs per packet; 12 packets per case</li>
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
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script type="text/javascript">
$(document).ready(function () {
        $('.products').addClass('current');
    });
</script>
<script type="text/javascript">
    
var numSlick = 0;
$('.slider-products').each( function() {
  numSlick++;
  $(this).addClass( 'slider-' + numSlick ).slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav.slider-' + numSlick
  });
});

var numSlick = 0;
$('.slider-nav').each( function() {
  numSlick++;
  $(this).addClass( 'slider-' + numSlick ).slick({
    vertical: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-products.slider-' + numSlick,
    arrow: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
         }
      }
    ]
  });
});
</script>
<script type="text/javascript">
  
  const mainCarousel = new Carousel(document.querySelector("#mainCarousel"), { Dots: false, });
  const navCarousel = new Carousel(document.querySelector("#navCarousel"), {
  Sync: {
    target: mainCarousel,
  },
  Dots: false,
  Navigation: false,

  infinite: false,
  center: true,
  slidesPerPage: 1,
  });

  const mainCarousel1 = new Carousel(document.querySelector("#mainCarousel1"), { Dots: false,});
  const navCarousel1 = new Carousel(document.querySelector("#navCarousel1"), {
  Sync: {
    target: mainCarousel1,
  },
  Dots: false,
  Navigation: false,

  infinite: false,
  center: true,
  slidesPerPage: 1,
  });

  const mainCarousel2 = new Carousel(document.querySelector("#mainCarousel2"), { Dots: false,});
  const navCarousel2 = new Carousel(document.querySelector("#navCarousel2"), {
  Sync: {
    target: mainCarousel2,
  },
  Dots: false,
  Navigation: false,

  infinite: false,
  center: true,
  slidesPerPage: 1,
  });

</script>
</body>
<!-- Mirrored from st.ourhtmldemo.com/new/Machinery/projects-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 14:27:05 GMT -->
</html>