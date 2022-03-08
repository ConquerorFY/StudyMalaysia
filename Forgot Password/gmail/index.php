<?php 
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = True;
$mail->SMTPSecure='ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'mstudy583@gmail.com';
$mail->Password = 'studymalaysia11';
$mail->setFrom('no-reply@gmail.com');
$mail ->Subject = 'Hello World';
$mail->Body = 'A test email';
$mail->addAddress('premsharaan380446@Yes.My');

$mail->send();
?>