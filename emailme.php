<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// print_r($_GET);
$form_companyname = $_GET['companyname'];
$form_name = $_GET['name'];
$form_city = $_GET['city'];
$form_email = $_GET['email'];
$form_phone = $_GET['phone'];
$form_body = $_GET['body'];

$subject='Deltasolutions new contact from website';
$message="";
    $message.="<p>Hi,<br>Following is the contact form info</p>";
    $message.="<p>Company name : $form_companyname</p>";
    $message.="<p>Name : $form_name</p>";
    $message.="<p>City : $form_city</p>";
    $message.="<p>E-mail : $form_email</p>";
    $message.="<p>Phone Number : $form_phone</p>";
    $message.="<p>Message : $form_body</p>";

//$to = 'Contact@delta-solutions.in';
$to = "contact@delta-solutions.in,amar@delta-solutions.in,info@magia.co.in";
// $to = "sunil.mith@gmail.com";

//echo $message; die;
$headers = 'From: Delta Solutions contact@delta-solutions.in' . "\r\n" ;
$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=UTF-8" . "\r\n"; 

    // require_once APPPATH .'libraries/phpmailer/PHPMailerAutoload.php';
//     require_once ('class.phpmailer.php');
//     $mail                   = new PHPMailer;
// try {
//     $mail->isSMTP();

//     $mail->SMTPDebug        = 0;
//     $mail->Debugoutput      = 'html';

//     $mail->Host             = 'smtp.qlc.co.in';
//     $mail->SMTPAuth         = true;
//     $mail->Username         = 'contact@delta-solutions.in';
//     $mail->Password         = 'cuuyjur3@';
//     $mail->SMTPSecure       = 'tls';
//     $mail->Port             = 587;
//         $mail->SMTPDebug = 3;
//     $mail->isHTML($html);
//     $mail->charSet          = 'UTF-8';


//     $from = 'contact@delta-solutions.in';

//     $mail->setFrom($from, 'no-reply');
//     $mail->addAddress($to, 'Information');

//     $mail->Subject          = '=?UTF-8?B?'.base64_encode($subject).'?=';
//     $mail->Body             = '$message';
//     $mail->AltBody          = '';
//     $mail->Timeout = 3600;  
//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
$mail = mail($to, $subject, $message,$headers);
if($mail){
    //echo "success";
    echo json_encode(array("Status"=>"1","Message"=>"success"));
}else{
  echo json_encode(array("Status"=>"0","Message"=>"fail"));
}


exit();

//$html = $message;

// sendEmail('sunil.mith@gmail.com', 'Delta Solutions Contact Form','Contact Form','$message','');

sendEmail('amar@delta-solutions.in,contact@delta-solutions.in', '','=?utf-8?B?'.base64_encode($subject).'?=',$html,'cuztomise');

function sendEmail($emailTo, $realName, $subject, $message, $sReciverEmail,$sReciverName)
{
   
        error_reporting(E_ALL);
        //date_default_timezone_set('America/Toronto');
        require_once ('class.phpmailer.php');
       // require_once ('class.smtp.php');
        include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

       $mail = new PHPMailer();

        $mail->IsSMTP();
        // telling the class to use SMTP
       // $mail -> Host = "smtp.qlc.co.in";
        // SMTP server
        $mail->SMTPDebug = 2;
        // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail->SMTPAuth = true;
        // enable SMTP authentication
        //$mail -> SMTPSecure = "ssl";
        // sets the prefix to the servier
        $mail->Host = "smtp.qlc.co.in";
      
        // sets GMAIL as the SMTP server
        $mail->Port = 587;
        $mail->SMTPSecure = 'ssl'; 
        // set the SMTP port for the GMAIL server
        $mail->Username = 'contact@delta-solutions.in';
        // GMAIL username
        $mail->Password = 'cuuyjur3@';
        // GMAIL password

       // $mail->AddReplyTo($emailTo, stripslashes($realName));
        $mail->AddAddress($sReciverEmail, $sReciverName);
       

        $mail->SetFrom('contact@delta-solutions.in', 'Cuztomise');

        //$mail -> AddReplyTo($emailTo, $realName);
        $mail->IsHTML(true);

        $mail->Subject = $subject;

        //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

       // $mail->MsgHTML = $message;
        
        $mail->msgHTML($message); 
        
        $mail->Timeout = 3600;  
        
        //$address = $emailTo;
        $mail -> AddAddress('contact@delta-solutions.in', $realName);

        if (!$mail->Send()) {
                echo "Mailer Error: " . $mail -> ErrorInfo;
        } else {
                // echo "Message sent!";
                echo 'success';
        }

}
