<?php
require_once 'libs/PHPMailer/PHPMailerAutoloader.php';

$mail = new PHPMailer();

$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->addAddress('jislocum78@gmail.com', 'Jason Slocum');
$mail->Subject = 'Contact Form Submission';
$mail->Body = $_POST['message'];

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


?>

