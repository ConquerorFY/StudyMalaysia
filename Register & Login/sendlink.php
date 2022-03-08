<?php

if (isset($_POST['send_link'])){

//creating token
$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);
$url = "http://localhost/WDT/pwdreset.php?selector=".$selector. "&validator=". bin2hex($token);

$expires = date("U") + 1800;

$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "Study_Malaysia";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$email = $_POST["email"];
$sql = "DELETE from pwdReset where password_reset_email=?";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was an error occurrred";
    exit();

}else{
mysqli_stmt_bind_param($stmt,"s", $email);
mysqli_stmt_execute($stmt);
}

$sql = "INSERT into pwdReset(password_reset_email, password_reset_selector, password_reset_token, password_reset_expires) VALUES (?,?,?,?);";
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
$subject = 'Reset your student account password';
$message = '<p>Here is link to reset your password below.</p>';
$message .='<p>Link:</p>';
$message .='<a href="'. $url .'">'. $url .'</a></p>';
$headers = "From: studymalaysia <mstudy583@gmail.com>\r\n";
$headers .="Reply-To: mstudy583@gmail.com\r\n";
$headers  .="Content-type: text/html\r\n";

mail($to, $subject, $message, $headers);
header("Location:../WDT/sendemaillink.php?reset=Success");

}else{
    header("Location:../WDT/mainlogin.html");
}

?>
