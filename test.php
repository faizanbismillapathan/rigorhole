<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$sender = 'enquiry@rigorhole.com';
$receiver = 'fp7456209@gmail.com';
$subject = 'Test email';
$body = 'This is a test email.';

// Create a new PHPMailer object.
$mail = new PHPMailer();

// Set the PHPMailer object to use the G Suite SMTP server.
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'TLS';
$mail->SMTPAuth = true;
$mail->Username = $sender;
$mail->Password = 'xkpo uvdq zvyu ibmt';

// Set the sender and receiver email addresses.
$mail->setFrom($sender);
$mail->addAddress($receiver);

// Set the email subject and body.
$mail->Subject = $subject;
$mail->Body = $body;

// Send the email.
// echo $sender;exit;
if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>