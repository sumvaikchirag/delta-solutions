<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log incoming POST data for debugging
file_put_contents('log.txt', print_r($_POST, true), FILE_APPEND);

// Check if POST data exists before using it
$form_name = isset($_POST['username']) ? $_POST['username'] : '';
$form_companyname = isset($_POST['companyname']) ? $_POST['companyname'] : '';
$form_city = isset($_POST['city']) ? $_POST['city'] : '';
$form_phone = isset($_POST['phone']) ? $_POST['phone'] : ''; 
$form_email = isset($_POST['email']) ? $_POST['email'] : '';
$form_message = isset($_POST['message']) ? $_POST['message'] : '';


$subject = 'Deltasolutions new contact from website';
$message = "<p>Hi,<br>Following is the contact form info</p>
            <p>Name: $form_name</p>
            <p>Company Name: $form_companyname</p>
            <p>City: $form_city</p>
            <p>Phone: $form_phone</p>
            <p>Email: $form_email</p>
            <p>Message: $form_message</p>";

// Send email
sendEmail('harshilxceptive@gmail.com', '', '=?utf-8?B?' . base64_encode($subject) . '?=', $message, 'cuztomise');

function sendEmail($emailTo, $realName, $subject, $htmlbody, $type='') {
    require_once('class.phpmailer.php');
    require_once('class.smtp.php');

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "smtp.sendgrid.net"; 
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'apikey';
    $mail->Password = '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';
    $mail->SetFrom('harshilxceptive@gmail.com', 'Cuztomise');
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $htmlbody;
    $mail->AddAddress($emailTo, $realName);

   if (!$mail->Send()) {
        file_put_contents('log.txt', "Mailer Error: " . $mail->ErrorInfo . "\n", FILE_APPEND);
    } else {
        file_put_contents('log.txt', "Email sent successfully\n", FILE_APPEND);
    }

}
?>
