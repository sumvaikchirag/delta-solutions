<?php
$form_name = $_POST['name'];
$form_email = $_POST['email'];
$form_subject = $_POST['subject'];
$form_body = $_POST['body'];
$form_cart = base64_decode($_POST['cart']);

$subject='Deltasolutions new contact from website';
$message="<p>Hi,<br>Following is the contact form info</p>
                        <p>Name : $form_name</p>
                        <p>E-mail : $form_email</p>
                        <p>Telephone : $form_subject</p>
                        <p>Message : $form_body</p>
                        <p>$form_cart</p>
                        ";
$html = $message;
sendEmail('marketing@delta-solutions.in', '','=?utf-8?B?'.base64_encode($subject).'?=',$html,'cuztomise');
//sendEmail('pyadav@cuztomise.com', '','=?utf-8?B?'.base64_encode($subject).'?=',$html,'cuztomise');


function sendEmail($emailTo, $realName, $subject, $htmlbody, $type='')
{

        error_reporting(E_ALL);
        //date_default_timezone_set('America/Toronto');
        require_once ('class.phpmailer.php');
        require_once ('class.smtp.php');
        //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

        $mail = new PHPMailer();

        $mail -> IsSMTP();
        // telling the class to use SMTP
        $mail -> Host = "mail.yourdomain.com";
        // SMTP server
        $mail -> SMTPDebug = 1;
        // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail -> SMTPAuth = true;
        // enable SMTP authentication
        //$mail -> SMTPSecure = "ssl";
        // sets the prefix to the servier
        $mail -> Host = "smtp.sendgrid.net"; 
// sets GMAIL as the SMTP server
        $mail -> Port = 587;
        // set the SMTP port for the GMAIL server
        $mail -> Username = 'apikey';
        // GMAIL username
        $mail -> Password = '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';
        // GMAIL password

        $mail -> SetFrom('info@cuztomise.com', 'Cuztomise');

        //$mail -> AddReplyTo($emailTo, $realName);
        $mail -> IsHTML(true);

        $mail -> Subject = $subject;

        //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

        $mail -> Body = $htmlbody;
        $address = $emailTo;
        $mail -> AddAddress($address, $realName);

        if (!$mail -> Send()) {
                echo "Mailer Error: " . $mail -> ErrorInfo;
        } else {
                // echo "Message sent!";
                echo 'success';
        }

}
