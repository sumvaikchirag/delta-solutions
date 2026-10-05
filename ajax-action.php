<?php
session_start();
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();
//echo "<pre>"; print_r($productByCode);return;

?>
<html>


<head>
<meta charset="utf-8">
<title>Delta Solution </title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">



<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0WPY5YR5W4"></script>
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
    table, td {
      border: 1px solid #c2c2c2;      
      border-collapse: collapse;
      text-align: center;   
      font-size: 20px;   
    }   
     th {
      border: 1px solid #c2c2c2;
      border-collapse: collapse;
      text-align: center;
      height: 55px;
      padding: 2px;
      font-size: 18px;
      background-color: #e1e1e1;
      color: #666;
      
    }  

    button {
      margin: 2px;
      cursor: pointer;  
      padding-left: 7px;
      padding-right: 7px;
      border: 1px solid #c2c2c2;
    }
    

    

    
    
    
    .phone-call img{
        margin-top: 10px;        
    } 

    
</style>


<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<div class="page-wrapper">

    <?php include 'header.php';?>

    <section class="page-title" style="">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>                
                <li>Enquiry Basket</li>                                
            </ul>
        </div>
    </section>



	<?php 


if(!empty($_POST["action"])) {
switch($_POST["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
		    $productByCode = $productArray[$_POST["code"]];
            //echo "<pre>"; print_r($productByCode);return;
		    $itemArray = array($productByCode["code"]=>array('name'=>$productByCode["name"], 'code'=>$productByCode["code"], 'quantity'=>$_POST["quantity"], 'image'=>$productByCode["image"], 'remark'=>$_POST["remark"]));
			
			if(!empty($_SESSION["cart_item"])) {
			    $cartCodeArray = array_keys($_SESSION["cart_item"]);

			    if(in_array($productByCode["code"],$cartCodeArray)) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["code"] == $k) {
							    $_SESSION["cart_item"][$k]["quantity"] = $_SESSION["cart_item"][$k]["quantity"]+$_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		/*if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_POST["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}*/

    $productByCode = $productArray[$_POST["code"]];
    if(!empty($_SESSION["cart_item"])) {
    foreach( $_SESSION['cart_item'] as $key => $value ) {
      if( $value['code']  == $productByCode['code']) {
         unset($_SESSION['cart_item'][$key]);
          
        }
    }
   }

	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
    case "update":

  /*  if(!empty($_POST["quantity"])) {
            $productByCode = $productArray[$_POST["code"]];
        if(!empty($_SESSION["cart_item"])) 
    { 
                $cartCodeArray = array_keys($_SESSION["cart_item"]);
                if(in_array($productByCode["code"],$cartCodeArray)) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                        if($productByCode["code"] == $k) {              
                        $_SESSION["cart_item"][$k]["quantity"] = $_POST['quantity'];
                    }
                    }

             }
    }
}*/
    $productByCode = $productArray[$_POST["code"]];
    if(!empty($_SESSION["cart_item"])) {
    foreach( $_SESSION['cart_item'] as $key => $value ) {
      if( $value['code']  == $productByCode['code']) {
         $_SESSION['cart_item'][$key]['quantity'] = $_POST['quantity'];
          
        }
    }
  }
    



    break;  	
     case "remark":

    $productByCode = $productArray[$_POST["code"]];
    if(!empty($_SESSION["cart_item"])) {
    foreach( $_SESSION['cart_item'] as $key => $value ) {
      if( $value['code']  == $productByCode['code']) {
         $_SESSION['cart_item'][$key]['remark'] = $_POST['remark'];
          
        }
    }
  }
    



    break;    
}
}
?>
<?php
if(!empty($_SESSION["cart_item"])) {
    $item_total = 0;


    /*if (! empty($_SESSION["cart_item"])) {
    $item_quantity = 0;
    
    if (! empty($_SESSION["cart_item"])) {
        foreach ($_SESSION["cart_item"] as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            
        }
    }
}*/
?>	

<style type="text/css">
.sno{width: 7%}  
.delete{width: 7%}  
.pro-image{width:16%}
.pro-name{width:45%; padding: 10px 20px;}
.pro-qty{width:10%}
.pro-remark{width:15%}
.pro-remark textarea {max-width: 130px;}

.pro-qty input {
      text-align: center;
      width: 50px;
      margin: 2px;
      
      color: salmon;
      border: 1px solid #c2c2c2;
    } 

.pro-remark input {
      text-align: center;
      width: 130px;
      margin: 2px;      
      color: salmon;
      border: 0;
    }

@media (max-width: 667px) {
.sno{width: 5%;font-size: 12px;}  
.delete{width: 10%;}  
.pro-image{width:18%}
.pro-name{width:45%; font-size: 13px;padding: 10px;}
.pro-qty{width:7%; font-size: 12px;}
.pro-remark{width:15%; font-size: 12px;}
.pro-remark textarea {max-width: 50px;}
.pro-image img{width:60px; height:60px;}
.pro-head{ height: 20px; font-size: 12px;}
.btn-style-one{ font-size: 12px;padding: 7px 15px;}

.pro-remark input {
      text-align: center;
      width: 50px;
      margin: 2px;
      
      color: salmon;
      border: 0;
      
    }
    .pro-qty input {
      text-align: center;
      width: 40px;
      margin: 2px;
      
      color: salmon;
      border: 1px solid #c2c2c2;
    } 
}
</style>

<section class="projects-section-four">
   <div class="auto-container">
      <div class="sec-title text-center">
         <h2>Your Enquiry Basket</h2>              
         <div align="right"><a  id="btnEmpty" class="theme-btn btn-style-one" onClick="cartAction('empty','');">Empty Basket&nbsp; <img src="images/icon-empty.png" /></a></div>
         <div align="right"><a  id="btnEmpty" class="theme-btn btn-style-one"><?php echo "Number of Items in the cart = ".sizeof($_SESSION['cart_item']).""?></a></div>          
      </div>
      
      <div class="row clearfix">  
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table style="border-radius: 15px;" class="col-xs-12">
               <tr>
                  <th class="pro-head"> S.No. </th>
                  <th class="pro-head" colspan="3"><strong>Product</strong></th>
                  <th class="pro-head align-right"><strong>Quantity</strong></th>
                  <th class="pro-head align-right"><strong>Remark</strong></th>
              </tr>	
              <?php $i=1; foreach ($_SESSION["cart_item"] as $item) {	?>
              	<tr>
                  <td class="sno"><?php echo $i; ?></td>
                  <td class="delete">
                     <a onClick="cartAction('remove','<?php echo $item["code"]; ?>')" id="btndelete" class="btnRemoveAction cart-action"><img src="images/icon-delete.png" /></a>
                  </td>
                  <td class="pro-image"><img height="130px;" src="<?php echo $item["image"]; ?>"></td>
                  <td class="pro-name"><?php echo $item["name"]; ?></td>				
                  <td class="pro-qty">

                  
                     
                     <input type="number" onChange="cartAction('update','<?php echo $item["code"]; ?>')"  id="qty_<?php echo $item["code"]; ?>" min="0" max="10" name="quantity" value="<?php echo $item["quantity"]; ?>" size="2" />

                     

                    
                  </td>     
                  <td class="pro-remark">                  
                     
                     <textarea onChange="cartAction('remark','<?php echo $item["code"]; ?>')"  id="remark_<?php echo $item["code"]; ?>"  name="remark" rows="3" ><?php echo $item["remark"]; ?></textarea>                  

                  
                  </td>     				
              	</tr>
              <?php	$i++; }	?>
            </table>
         </div>
      </div>
   </div>		
</section>


<?php } ?>

    <section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">
               <div class="form-column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title text-center">
                            <h3>Send Us A Query. Our Team Will Contact You Soon!</h3>                            
                        </div>
                        <!--Contact Form-->
                        <div class="contact-form style-three">
                            <div id="exampleModal">
                                <form method="post" action="" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="left-column col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Name<span class="required">*</span></label>
                                                <input style="width:95%;" type="text" name="username" id="name_text" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="left-column col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Company Name/Individual Need<span class="required">*</span></label>
                                                <input type="text" name="companyname" id="company_text" placeholder="Company Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>City<span class="required">*</span></label>
                                                <input type="text" name="city" id="city_text" placeholder="City Name" required>
                                            </div>
                                        </div>
                                        <div class="left-column col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Phone<span class="required">*</span></label>
                                                <input type="text" name="phone" id="phone_text" placeholder="Your Phone" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email<span class="required">*</span></label>
                                                <input type="email" name="email" id="email_text" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Message<span class="required">*</span></label>
                                                <textarea name="message" id="txt_msg_body" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div style="display: none" class="sent-message" role="alert" id="success_message">
                                                <i class="fa fa-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.
                                            </div>
                                        </div>
                                        <div class="column col-md-6 col-sm-6 col-xs-12" style="float:right;">
                                            <div class="form-group">
                                                <a id="trialbutton" type="submit" onclick="emailus();" class="theme-btn">Send Your Request</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </section>

<?php if(isset($_SESSION["cart_item"])){
$html ="";
$html .='<table border="1"  cellspacing="0" cellpadding="2"  width="400"> 
              <tr>
                  <th width ="10%"><strong>S.No.</strong></th>
                  <th width ="60%"><strong>Product Name</strong></th>                  
                  <th width ="10%"><strong>Quantity</strong></th>
                  <th width ="20%"><strong>Remark</strong></th>
              </tr>';
                $i=1; foreach ($_SESSION["cart_item"] as $item) { 
                $html .= '<tr>              
                      <td align="center">'.$i.'</td> 
                      <td align="center">'.$item["name"].'</td> 
                      <td align="center">'.$item["quantity"].'</td>
                      <td align="center">'.$item["remark"].'</td>                              
                  </tr>';
               $i++; } 
              $html .= '</table>';
              $html = base64_encode($html);
            }
?>

<input type="hidden" value="<?php if(isset($_SESSION["cart_item"])){ echo $html;  } else { echo ""; } ?>" id="card_body_html">


<?php include 'footer.php';?>

</div> 

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
        $('.home').addClass('current');
    });
 $('#btnEmpty').click(function() {
    location.reload();
    });
 $('#btndelete').click(function() {
    location.reload();
    });
</script>
<script type="text/javascript">
  var unit = 0;
var total;
// if user changes value in field
$('.field').change(function() {
  unit = this.value;
});
$('.add').click(function() {
  unit++;
  var $input = $(this).prevUntil('.sub');
  $input.val(unit);
  unit = unit;
});
$('.sub').click(function() {
  if (unit > 0) {
    unit--;
    var $input = $(this).nextUntil('.add');
    $input.val(unit);
  }
});
</script>
<script type="text/javascript">
    function emailus() {
        var name = $('#name_text').val().trim();
        var companyname = $('#company_text').val().trim();
        var email = $('#email_text').val().trim();
        var phone = $('#phone_text').val().trim();
        var city = $('#city_text').val().trim();
        var body = $('#txt_msg_body').val().trim();
        var html = $('#card_body_html').val();

        if (name == '') {
            alert('Name is required');
            return;
        }
        if (companyname == '') {
            alert('Company Name is required');
            return;
        }
        if (city == '') {
            alert('City is required');
            return;
        }
        if (email == '') {
            alert('Email is required');
            return;
        }
        if (phone == '') {
            alert('Contact number is required');
            return;
        }
        if (body == '') {
            alert('Message is required');
            return;
        }

        // Show the success message
        $('#success_message').show();
        $('#trialbutton').hide();

        // Redirect to thank you page
        // window.location.href = "https://www.delta-solutions.in/thanks.php";

        // Send the data via AJAX
        var request = $.ajax({
            url: "email.php", // The PHP file that sends the email
            type: "GET",
            data: {
                name: name,
                companyname: companyname,
                email: email,
                phone: phone,
                city: city,
                body: body,
                cart: html
            },
            //dataType: "html"
        });

        request.done(function (msg) {
            console.log(msg);
            if (msg == 'success') {
                setTimeout($('#exampleModal').modal("hide"), 300);
                window.location.href = "https://www.delta-solutions.in/thanks.php";
            } else {
                $('#success_message').hide();
                $('#trialbutton').show();
                alert('There was some error while saving your data, please try again.');
            }
        });
    }
</script>
</body>

</html>