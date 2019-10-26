<?php

    //session_start();
    //$email1=$_SESSION['email1'];
    //$email2=$_SESSION['email2'];
    //$email3=$_SESSION['email3'];
    //$email4=$_SESSION['email4'];



require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='samyadeep98b@gmail.com';
$mail->Password='hello';

$mail->setFrom('samyadeep98b@gmail.com', 'Samyadeep Bhowmick');
$mail->addAddress('samyadeep98b@gmail.com', 'My Friend');

$mail->isHTML(true);
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}

?>