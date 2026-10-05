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
<title>Plastic Dustbins</title>
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
<meta content="High quality ABS Plastic dustbins for commercial purpose from Delta Solutions" name="description"/>
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
<link href="https://delta-solutions.in/waste-management-plastic-dustbin" rel="canonical"/></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>
<!--End Page Title-->
<style type="text/css">
    .vertical-item{ max-height: 1000px; width:100%;}
    .vertical-item .item-media{background: #ffffff; text-align: center; padding: 40px; width: 400px; height: 400px;  }
    .item-content{font-size: 15px;}
    .item-content h4{font-size: 28px;}
    .item-content span{color: #ed3237; font-weight: bold;}
    .item-content p{margin-bottom: 10px;}
    .item-content .quote-btn {display: inline; float: right; }    
    .tab-content li{list-style-type:disc; margin-left: 20px;padding-bottom: 7px;line-height: 1.3em;}

    table{

        width: 680px;
        max-width: 800px;
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
   
    </style>
<section class="main-header style-two">
<div class="sticky-header" style="margin-top: 70px;">
<div class="auto-container clearfix">
<div class="page-scroller">
<ul id="mainNav">
<li class="active"><a href="#Plastic">Dustbin (2)</a></li>
<li><a href="#Pedal-Wheel">Fabricated Pedal &amp; Wheel (2)</a></li>
<li><a href="#Dome-Bin">Litter Dome Bin</a></li>
<li><a href="#Round">Round</a></li>
<li><a href="#Swing">Swing (2)</a></li>
<li><a href="#Without-Pedal">Without Pedal (2)</a></li>
<li><a href="#With-Pedal">Pedal (7)</a></li>
<li><a href="#With-Pedal-Wheel">Pedal &amp; Wheel (3)</a></li>
<!-- <li><a href="#Pedal-ECO">Dust Bin Plastic With Pedal-ECO</a></li> -->
<li><a href="#Lid">Round with Lid</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="page-title" style="">
<div class="auto-container">
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="waste-management.php">Waste Management</a></li>
<li>ABS Plastic Dustbins</li>
</ul>
<div class="page-scroller">
<ul>
<li class="active-web"><a href="javascript:void(0)" onclick="slideTo('Plastic');">Dustbin (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Pedal-Wheel');">Fabricated Pedal &amp; Wheel (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Dome-Bin');">Litter Dome Bin</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Round');">Round</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Swing');">Swing (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('Without-Pedal');">Without Pedal (2)</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('With-Pedal');">Dust Bin Plastic With Pedal</a></li>
<li><a href="javascript:void(0)" onclick="slideTo('With-Pedal-Wheel');">Pedal (7)</a></li>
<!-- <li><a href="javascript:void(0)" onclick="slideTo('Pedal-ECO');">Dust Bin Plastic With Pedal-ECO</a></li>  -->
<li><a href="javascript:void(0)" onclick="slideTo('Lid');">Round with Lid</a></li>
</ul>
</div>
</div>
</section>
<!-- Project Section Two -->
<section class="projects-section-three" id="Plastic">
<div class="auto-container">
<div class="sec-title text-center">
<h1>Plastic Dustbins</h1>
</div>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-002-DGN.png"><img alt="Bp 002 Dgn - Plastic Dustbin | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-002-DGN.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin - 660 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["258"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["258"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["258"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["258"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["258"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(2350)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two2">
<ul>
<li><b>Item Code</b> : BP-002-DGN</li>
<li><b>Dimension (WxDxH)</b> : 76x126x123 cm</li>
<li><b>Color</b> : Military Green</li>
<li><b>Capacity</b> : 660 ltr</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-001-DGN.png"><img alt="Bp 001 Dgn - Plastic Dustbin | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-001-DGN.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin - 1100 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["259"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["259"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["259"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["259"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["259"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(2350)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one1">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one1">
<ul>
<li><b>Item Code</b> : BP-001-DGN</li>
<li><b>Dimension (WxDxH)</b> : 106x136x137 cm</li>
<li><b>Color</b> : Military Green</li>
<li><b>Capacity</b> : 1100 ltr</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Pedal-Wheel"/>
<div class="row clearfix">
<div align="center" class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div align="center" class="vertical-item">
<div align="center" class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-003/BP-003-BL.png"><img alt="Bp 003 Bl - Bp 003 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-003/BP-003-BL.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>   -->
</div>
</div>
<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
<div class="vertical-item">
<div class="item-content">
<h4><span>Fabricated Pedal &amp; Wheel Dustbin - 120 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["260"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["260"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["260"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["260"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["260"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6500)</h5> --><br/><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one2" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="20%"><b>Item Code</b></th>
<th width="20%"><b>Dimension (WxDxH)</b></th>
<th width="10%"><b>Color</b></th>
<th width="15%"><b>Capacity</b></th>
<th width="20%"><b>Pedal</b></th>
</tr>
<tr>
<td><b>BP-003-BK</b></td>
<td>47x55x95 cm</td>
<td>Black</td>
<td>120 ltr</td>
<td>Fabricated pedal</td>
</tr>
<tr>
<td><b>BP-003-BL</b></td>
<td>47x55x95 cm</td>
<td>Blue</td>
<td>120 ltr</td>
<td>Fabricated pedal</td>
</tr>
<tr>
<td><b>BP-003-GN</b></td>
<td>47x55x95 cm</td>
<td>Green</td>
<td>120 ltr</td>
<td>Fabricated pedal</td>
</tr>
<tr>
<td><b>BP-003-RD</b></td>
<td>47x55x95 cm</td>
<td>Red</td>
<td>120 ltr</td>
<td>Fabricated pedal</td>
</tr>
<tr>
<td><b>BP-003-YW</b></td>
<td>47x55x95 cm</td>
<td>Yellow</td>
<td>120 ltr</td>
<td>Fabricated pedal</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/"><img alt=" - Waste Management | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Fabricated Pedal &amp; Wheel Dustbin - 240 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["261"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["261"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["261"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["261"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["261"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(8850)</h5> --><br/><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two2">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two2" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="20%"><b>Item Code</b></th>
<th width="20%"><b>Dimension (WxDxH)</b></th>
<th width="10%"><b>Color</b></th>
<th width="15%"><b>Capacity</b></th>
<th width="20%"><b>Pedal</b></th>
</tr>
<tr>
<td><b>BP-004-RD</b></td>
<td>59x75x100 cm</td>
<td>Red</td>
<td>240 ltr</td>
<td>Fabricated pedal</td>
</tr>
<tr>
<td><b>BP-004-YW</b></td>
<td>59x75x100 cm</td>
<td>Yellow</td>
<td>240 ltr</td>
<td>Fabricated pedal</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Dome-Bin"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-005/BP-005-GN.png"><img alt="Bp 005 Gn - Bp 005 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-005/BP-005-GN.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Litter Dome Bin - 110 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["262"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["262"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["262"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["262"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["262"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(6850)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one3">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one3" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="16%"><b>Item Code</b></th>
<th width="10%"><b>Top Length</b></th>
<th width="10%"><b>Top Width</b></th>
<th width="12%"><b>Bottom Length</b></th>
<th width="12%"><b>Bottom Width</b></th>
<th width="10%"><b>Container Height</b></th>
<th width="10%"><b>Lid Height</b></th>
<th width="10%"><b>Capacity</b></th>
<th width="10%"><b>Color</b></th>
</tr>
<tr>
<td><b>BP-005-BL</b></td>
<td>48 cms</td>
<td>48 cms</td>
<td>37.5 cms</td>
<td>37.5 cms</td>
<td>68 cms</td>
<td>27 cms</td>
<td>110 ltr</td>
<td>Blue</td>
</tr>
<tr>
<td><b>BP-005-GN</b></td>
<td>48 cms</td>
<td>48 cms</td>
<td>37.5 cms</td>
<td>37.5 cms</td>
<td>68 cms</td>
<td>27 cms</td>
<td>110 ltr</td>
<td>Green</td>
</tr>
<tr>
<td><b>BP-005-YW</b></td>
<td>48 cms</td>
<td>48 cms</td>
<td>37.5 cms</td>
<td>37.5 cms</td>
<td>68 cms</td>
<td>27 cms</td>
<td>110 ltr</td>
<td>Yellow</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Round"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/"><img alt=" - Waste Management | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Round Dustbin - 10 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["263"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["263"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["263"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["263"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["263"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(7150)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one4">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one4">
<ul>
<li><b>Item Code</b> : BP-006</li>
<li><b>Capacity</b> : 10 ltr</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Swing"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-007/BP-007-GN.png"><img alt="Bp 007 Gn - Bp 007 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-007/BP-007-GN.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Swing Dustbin - 25 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["264"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["264"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["264"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["264"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["264"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-006-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one5" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="20%"><b>Item Code</b></th>
<th width="15%"><b>Top Diameter</b></th>
<th width="13%"><b>Bottom Diameter</b></th>
<th width="13%"><b>Container Height</b></th>
<th width="13%"><b>Lid Height</b></th>
<th width="13%"><b>Capacity</b></th>
<th width="13%"><b>Color</b></th>
</tr>
<tr>
<td><b>BP-007-BL</b></td>
<td>36.5 cms</td>
<td>28 cms</td>
<td>33 cms</td>
<td>16 cms</td>
<td>25 ltr</td>
<td>Blue</td>
</tr>
<tr>
<td><b>BP-007-GN</b></td>
<td>36.5 cms</td>
<td>28 cms</td>
<td>33 cms</td>
<td>16 cms</td>
<td>25 ltr</td>
<td>Green</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-008-BL.png"><img alt="Bp 008 Bl - Plastic Dustbin | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-008-BL.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Swing Dustbin - 60 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["265"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["265"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["265"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["265"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["265"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two5">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two5" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table style="max-width: 500px;">
<tr>
<th width="40%"><b>Item Code</b></th>
<th width="30%"><b>Capacity</b></th>
<th width="30%"><b>Color</b></th>
</tr>
<tr>
<td><b>BP-008-BL</b></td>
<td>60 ltr</td>
<td>Blue</td>
</tr>
<tr>
<td><b>BP-008-GN</b></td>
<td>60 ltr</td>
<td>Green</td>
</tr>
<tr>
<td><b>BP-008-RD</b></td>
<td>60 ltr</td>
<td>Red</td>
</tr>
<tr>
<td><b>BP-008-YW</b></td>
<td>60 ltr</td>
<td>Yellow</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Without-Pedal"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-009/BP-009-BL.png"><img alt="Bp 009 Bl - Bp 009 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-009/BP-009-BL.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin without Pedal - 120 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["266"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["266"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["266"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["266"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["266"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-006-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one6">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one6" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="25%"><b>Item Code</b></th>
<th width="30%"><b>Dimension (WxDxH)</b></th>
<th width="15%"><b>Color</b></th>
<th width="15%"><b>Capacity</b></th>
<th width="15%"><b>Wheel</b></th>
</tr>
<tr>
<td><b>BP-009-BL</b></td>
<td>47x55x95 cm</td>
<td>Blue</td>
<td>120 ltr</td>
<td>2 Wheels</td>
</tr>
<tr>
<td><b>BP-009-GN</b></td>
<td>47x55x95 cm</td>
<td>Green</td>
<td>120 ltr</td>
<td>2 Wheels</td>
</tr>
<tr>
<td><b>BP-009-DGN</b></td>
<td>47x55x95 cm</td>
<td>Blue</td>
<td>120 ltr</td>
<td>2 Wheels</td>
</tr>
<tr>
<td><b>BP-009-RD</b></td>
<td>47x55x95 cm</td>
<td>Green</td>
<td>120 ltr</td>
<td>2 Wheels</td>
</tr>
<tr>
<td><b>BP-009-YW</b></td>
<td>47x55x95 cm</td>
<td>Green</td>
<td>120 ltr</td>
<td>2 Wheels</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-010/BP-010-RD.png"><img alt="Bp 010 Rd - Bp 010 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-010/BP-010-RD.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin without Pedal - 240 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["267"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["267"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["267"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["267"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["267"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two6">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two6" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="25%"><b>Item Code</b></th>
<th width="30%"><b>Dimension (WxDxH)</b></th>
<th width="15%"><b>Color</b></th>
<th width="15%"><b>Capacity</b></th>
<th width="15%"><b>Wheel</b></th>
</tr>
<tr>
<td><b>BP-010-GN</b></td>
<td>59x75x100 cm</td>
<td>Green</td>
<td>240 ltr</td>
<td>2 Wheels</td>
</tr>
<tr>
<td><b>BP-010-RD</b></td>
<td>59x75x100 cm</td>
<td>Red</td>
<td>240 ltr</td>
<td>2 Wheels</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="With-Pedal"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-011-GREEN.png"><img alt="Bp 011 Green - Plastic Dustbin | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-011-GREEN.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal - 10 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["268"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["268"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["268"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["268"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["268"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one7">
<ul>
<li><b>Item Code</b> : BP-011-GN</li>
<li><b>Dimension (WxDxH)</b> : 24.2x26.8x28.5 cm</li>
<li><b>Color</b> : Green</li>
<li><b>Capacity</b> : 10 ltr</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-012/BP-012-YELLOW.png"><img alt="Bp 012 Yellow - Bp 012 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-012/BP-012-YELLOW.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal - 15 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["269"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["269"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["269"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["269"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["269"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two7" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="30%"><b>Item Code</b></th>
<th width="30%"><b>Dimension (WxDxH)</b></th>
<th width="20%"><b>Color</b></th>
<th width="20%"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BP-012-BK</b></td>
<td>27.8x29x33.8 cm</td>
<td>Black</td>
<td>15 ltr</td>
</tr>
<tr>
<td><b>BP-012-BL</b></td>
<td>27.8x29x33.8 cm</td>
<td>Blue</td>
<td>15 ltr</td>
</tr>
<tr>
<td><b>BP-012-RD</b></td>
<td>27.8x29x33.8 cm</td>
<td>Red</td>
<td>15 ltr</td>
</tr>
<tr>
<td><b>BP-012-YW</b></td>
<td>27.8x29x33.8 cm</td>
<td>Yellow</td>
<td>15 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-013/BP-013-BLUE.png"><img alt="Bp 013 Blue - Bp 013 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-013/BP-013-BLUE.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal - 20 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["270"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["270"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["270"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["270"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["270"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#three7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="three7" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="30%"><b>Item Code</b></th>
<th width="30%"><b>Dimension (WxDxH)</b></th>
<th width="20%"><b>Color</b></th>
<th width="20%"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BP-013-BL</b></td>
<td>32.3x30x37.8 cm</td>
<td>Blue</td>
<td>20 ltr</td>
</tr>
<tr>
<td><b>BP-013-GN</b></td>
<td>32.3x30x37.8 cm</td>
<td>Green</td>
<td>20 ltr</td>
</tr>
<tr>
<td><b>BP-013-RD</b></td>
<td>32.3x30x37.8 cm</td>
<td>Red</td>
<td>20 ltr</td>
</tr>
<tr>
<td><b>BP-013-YW</b></td>
<td>32.3x30x37.8 cm</td>
<td>Yellow</td>
<td>20 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-014/BP-014-GREEN.JPG.png"><img alt="Bp 014 Green.Jpg - Bp 014 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-014/BP-014-GREEN.JPG.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal - 30 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["271"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["271"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["271"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["271"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["271"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#four7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="four7" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="30%"><b>Item Code</b></th>
<th width="30%"><b>Dimension (WxDxH)</b></th>
<th width="20%"><b>Color</b></th>
<th width="20%"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BP-014-BL</b></td>
<td>39.6x39.3x41.2 cm</td>
<td>Blue</td>
<td>30 ltr</td>
</tr>
<tr>
<td><b>BP-014-GN</b></td>
<td>39.6x39.3x41.2 cm</td>
<td>Green</td>
<td>30 ltr</td>
</tr>
<tr>
<td><b>BP-014-GY</b></td>
<td>39.6x39.3x41.2 cm</td>
<td>Grey</td>
<td>30 ltr</td>
</tr>
<tr>
<td><b>BP-014-BK</b></td>
<td>39.6x39.3x41.2 cm</td>
<td>Black</td>
<td>30 ltr</td>
</tr>
<tr>
<td><b>BP-014-RD</b></td>
<td>39.6x39.3x41.2 cm</td>
<td>Red</td>
<td>30 ltr</td>
</tr>
<tr>
<td><b>BP-014-YW</b></td>
<td>39.6x39.3x41.2 cm</td>
<td>Yellow</td>
<td>30 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/"><img alt=" - Waste Management | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal - 50 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["272"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["272"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["272"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["272"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["272"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#five7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="five7" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="30%"><b>Item Code</b></th>
<th width="30%"><b>Dimension (WxDxH)</b></th>
<th width="20%"><b>Color</b></th>
<th width="20%"><b>Capacity</b></th>
</tr>
<tr>
<td><b>BP-015-BL</b></td>
<td>41.2x40.2x61.9 cm</td>
<td>Blue</td>
<td>50 ltr</td>
</tr>
<tr>
<td><b>BP-015-GN</b></td>
<td>41.2x40.2x61.9 cm</td>
<td>Green</td>
<td>50 ltr</td>
</tr>
<tr>
<td><b>BP-015-RD</b></td>
<td>41.2x40.2x61.9 cm</td>
<td>Red</td>
<td>50 ltr</td>
</tr>
<tr>
<td><b>BP-015-YW</b></td>
<td>41.2x40.2x61.9 cm</td>
<td>Yellow</td>
<td>50 ltr</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-016-BL.png"><img alt="Bp 016 Bl - Plastic Dustbin | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-016-BL.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal - 65 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["273"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["273"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["273"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["273"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["273"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#six7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="six7">
<ul>
<li><b>Item Code</b> : BP-016-BL</li>
<li><b>Dimension (WxDxH)</b> : 34.5x38x64 cm</li>
<li><b>Color</b> : Blue</li>
<li><b>Capacity</b> : 65 ltr</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/"><img alt=" - Waste Management | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal - 90 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["274"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["274"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["274"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["274"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["274"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#six7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="six7" style="overflow-x: auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="20%"><b>Item Code</b></th>
<th width="30%"><b>Dimension (WxDxH)</b></th>
<th width="15%"><b>Color</b></th>
<th width="15%"><b>Capacity</b></th>
<th width="20%"><b>Pedal</b></th>
</tr>
<tr>
<td><b>BP-020-BL</b></td>
<td>47x35x73.5 cm</td>
<td>Blue</td>
<td>90 ltr</td>
<td>Centre Pedal</td>
</tr>
<tr>
<td><b>BP-020-GN</b></td>
<td>47x35x73.5 cm</td>
<td>Green</td>
<td>90 ltr</td>
<td>Centre Pedal</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="With-Pedal-Wheel"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-018/BP-018-Black.png"><img alt="Bp 018 Black - Bp 018 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-018/BP-018-Black.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal &amp; Wheel- 60 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["275"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["275"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["275"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["275"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["275"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#two8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="two8" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="20%"><b>Item Code</b></th>
<th width="25%"><b>Dimension (WxDxH)</b></th>
<th width="11%"><b>Color</b></th>
<th width="12%"><b>Capacity</b></th>
<th width="16%"><b>Pedal</b></th>
<th width="16%"><b>Wheel</b></th>
</tr>
<tr>
<td><b>BP-018-BK</b></td>
<td>40.6x39.5x72.4 cm</td>
<td>Black</td>
<td>60 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-018-BL</b></td>
<td>40.6x39.5x72.4 cm</td>
<td>Blue</td>
<td>60 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-018-GN</b></td>
<td>40.6x39.5x72.4 cm</td>
<td>Green</td>
<td>60 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-018-RD</b></td>
<td>40.6x39.5x72.4 cm</td>
<td>Red</td>
<td>60 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-018-YW</b></td>
<td>40.6x39.5x72.4 cm</td>
<td>Yellow</td>
<td>60 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-019/BP-019-YW.png"><img alt="Bp 019 Yw - Bp 019 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-019/BP-019-YW.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal &amp; Wheel- 80 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["276"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["276"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["276"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["276"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["276"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#three8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="three8" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="18%"><b>Item Code</b></th>
<th width="20%"><b>Dimension (WxDxH)</b></th>
<th width="18%"><b>Color</b></th>
<th width="12%"><b>Capacity</b></th>
<th width="16%"><b>Pedal</b></th>
<th width="16%"><b>Wheel</b></th>
</tr>
<tr>
<td><b>BP-019-BL</b></td>
<td>47x54x80 cm</td>
<td>Blue</td>
<td>80 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-019-GN</b></td>
<td>47x54x80 cm</td>
<td>Green</td>
<td>80 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-019-DGN</b></td>
<td>47x54x80 cm</td>
<td>Military Green</td>
<td>80 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-019-RD</b></td>
<td>47x54x80 cm</td>
<td>Red</td>
<td>80 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-019-YW</b></td>
<td>47x54x80 cm</td>
<td>Yellow</td>
<td>80 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/BP-017/BP-017-GY.png"><img alt="Bp 017 Gy - Bp 017 | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/BP-017/BP-017-GY.png"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Dustbin with Pedal &amp; Wheel- 120 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["277"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["277"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["277"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["277"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["277"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#one8">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="one8" style="overflow-x:auto;">
<p><b>Other Sizes Available</b></p>
<table>
<tr>
<th width="20%"><b>Item Code</b></th>
<th width="20%"><b>Dimension (WxDxH)</b></th>
<th width="12%"><b>Color</b></th>
<th width="12%"><b>Capacity</b></th>
<th width="18%"><b>Pedal</b></th>
<th width="18%"><b>Wheel</b></th>
</tr>
<tr>
<td><b>BP-017-BL</b></td>
<td>47x55x95 cm</td>
<td>Blue</td>
<td>120 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-017-GN</b></td>
<td>47x55x95 cm</td>
<td>Green</td>
<td>120 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-017-GY</b></td>
<td>47x55x95 cm</td>
<td>Grey</td>
<td>120 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
<tr>
<td><b>BP-017-RD</b></td>
<td>47x55x95 cm</td>
<td>Red</td>
<td>120 ltr</td>
<td>Centre Pedal</td>
<td>With Wheels</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<hr id="Lid"/>
<div class="row clearfix">
<div align="center" class="col-md-4">
<div class="vertical-item">
<div class="item-media">
<a data-fancybox="gallery" href="images/product-images/Waste Management/Plastic Dustbin/"><img alt=" - Waste Management | Delta Solutions" src="images/product-images/Waste Management/Plastic Dustbin/"/></a>
</div>
<!-- <div align="center"><a class="theme-btn btn-style-one" href="images/pdf/Cleaning Machines/Dry Vacuum/BV-5-1.pdf" target="blank">Download Data Sheet</a></div>    -->
</div>
</div>
<div class="col-md-8">
<div class="vertical-item">
<div class="item-content">
<h4><span>Round Dustbin with Lid - 80 ltr</span>
<p class="quote-btn">
<button type="button" class="theme-btn btn-style-onecart btnAddAction" id="add_<?php echo $productArray["278"]["code"]; ?>" onClick="cartAction('add','<?php echo $productArray["278"]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?>>Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"></button>
<button type="button" class="theme-btn btn-style-onecart btnAdded" id="added_<?php echo $productArray["278"]["code"]; ?>" <?php if($in_session != "1") { ?>style="display:none" <?php } ?>>Added <img src="images/icon-check.png" alt="Added checkmark"/></button>
<input type="hidden" id="qty_<?php echo $productArray["278"]["code"]; ?>" name="quantity" value="1" size="2" />
                                <input type="hidden" id="remark_<?php echo $productArray["278"]["code"]; ?>" name="remark" value="" />

                                </p></h4>
<!-- <h5>(BS-007-60)</h5> --><br/>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#six7">Specifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="six7">
<ul>
<li><b>Item Code</b> : BP-023-BK</li>
<li><b>Dimension (Diameter x Height)</b> : 42x62.5 cm</li>
<li><b>Color</b> : Black</li>
<li><b>Capacity</b> : 80 ltr</li>
<li><b>Lid Hole Dia</b> : 21.5 cm</li>
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