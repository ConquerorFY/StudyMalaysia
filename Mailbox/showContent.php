<?php
if(isset($_GET['mailid'])){
    $dbServer = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'studymalaysia';

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error().' '.mysqli_connect_errno());
    }
    $mailid = $_GET['mailid'];
    $sql = "SELECT * FROM `student_mailbox` WHERE Mail_ID = $mailid";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $sender = $row['Sender'];
    $date = $row['Date'];
    $about = $row['Details'];
    $content = $row['Content'];
    $studentid = $row['Student_ID'];
    $docs = "Documents/MailID$mailid.docx";

    $sql  = "SELECT `Name` FROM `student` WHERE Student_ID = $studentid";
    $name = mysqli_fetch_assoc(mysqli_query($conn, $sql))["Name"];

}else{
    $mailid = "(Mail_Title)";
    $sender = "(Sender_Name)";
    $date = "(Date)";
    $about = "(Mail_Synopsis)";
    $content = "(Mail_Content)";
    $studentid = "(Receiver_ID)";
    $docs = "(Document)";
    $name = "(Receiver_Name)";
}


?>