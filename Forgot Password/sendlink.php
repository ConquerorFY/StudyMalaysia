<?php

if (isset($_POST['send_link'])){

$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);

if(isset($_POST['type']) && $_POST['type'] == 'admin'){
    $url = "localhost/StudyMalaysia/Websites Final/Forgot Password/pwdReset.php?selector=".$selector. "&validator=". bin2hex($token)."&type=admin";

}else{
    $url = "localhost/StudyMalaysia/Websites Final/Forgot Password/pwdReset.php?selector=".$selector. "&validator=". bin2hex($token);
}

$expires = date("U") + 1800;  //30 mins before expired

$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "studymalaysia";


$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];
$sql = "DELETE FROM pwdReset WHERE password_reset_email=?";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was an error occurrred";
    exit();

}else{
mysqli_stmt_bind_param($stmt,"s", $email);
mysqli_stmt_execute($stmt);
}

$sql = "INSERT INTO pwdReset(password_reset_email, password_reset_selector, password_reset_token, password_reset_expires) VALUES (?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was an error";
    exit();

}else
{
$hashedToken = password_hash($token, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt,"ssss", $email, $selector, $hashedToken, $expires);
mysqli_stmt_execute($stmt);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

$to = $email;
require('gmail/PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();        //Create new PHPMailer instance
$mail->isSMTP();          //send using SMTP
$mail->SMTPAuth = True;       //enable SMTP authentication
$mail->SMTPSecure='ssl';          //enable SSL encryption
$mail->Host = 'smtp.gmail.com';            //set SMTP server to send through
$mail->Port = '465';          //set SMTP port for email to send thorugh
$mail->isHTML();             //enable to write the email in HTML format
$mail->Username = 'mstudy583@gmail.com';                //set SMTP Email Account Username
$mail->Password = 'studymalaysia11';                    //set SMTP Email Account Username
$mail->setFrom('no-reply@gmail.com');                   //Specify Sender
$mail ->Subject = 'Reset Your Password';                    //Subject
$mail->Body = '<h3>Hello, there!</h3><h4>Note: Change it before it expired</h4><br>Here is your link to reset your password: <a href="'. $url.'">'.$url.'</a>';               //Body
$mail->addAddress($to);            //Set Recepient
$mail->send();                 //Send Mail

header("Location: sendemaillink.php?reset=Success");

}else{
    header("Location:../Login/mainlogin.php");
}

?>
