<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Include PHPMailer classes
require_once('class.phpmailer.php');
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
function sendEmail($emailTo, $realName, $subject, $message, $sReciverEmail, $sReciverName)
{
    
    error_reporting(E_ALL);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    //$headers .= 'From: contact@delta-solutions.in' . "\r\n";
    $headers .= 'From: '.$emailTo . "\r\n";
    $To='contact@delta-solutions.in';
    mail($To,$subject,$message,$headers);
    echo 'success';
    exit;

    /*$mail = new PHPMailer();
    $mail->IsSMTP();
    //$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true;
//    $mail->Host = "smtp.qlc.co.in"; // SMTP server
$mail->Host = "smtp.gmail.com"; // SMTP server
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls'; // Use TLS encryption
    $mail->Username = 'contact@delta-solutions.in'; // SMTP username
    $mail->Password = 'cuuyjur3@'; // SMTP password

    // Set email recipient
    $mail->AddAddress($sReciverEmail, $sReciverName);
    $mail->SetFrom('contact@delta-solutions.in', 'Cuztomise');
    $mail->IsHTML(true);
    $mail->Subject = $subject;

    // Set email message content
    $mail->msgHTML($message);
    $mail->Timeout = 3600; // Set timeout
    
    // Send the email
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo 'success'; // If email sent successfully
    }*/
}
// Getting data from AJAX POST request
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $companyname = $_REQUEST['companyname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];  // Phone is the field, not subject
    $city = $_REQUEST['city'];
    $body = $_REQUEST['body'];

    // Prepare email message
    $message = "
    <html>
    <head>
        <title>Contact Form Submission</title>
    </head>
    <body>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Company Name:</strong> $companyname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>City:</strong> $city</p>
        <p><strong>Message:</strong> $body</p>
    </body>
    </html>";
    // Define the recipient email address and name
    $receiverEmail = "harshilxceptive@gmail.com"; // Replace with the recipient's email
    $receiverName = "Delta Solution"; // Replace with the recipient's name

    // Call the function to send the email
    sendEmail($email, $name, "New Contact Form Submission", $message, $receiverEmail, $receiverName);
//}
?>
