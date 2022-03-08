<?php
session_start();
if (isset($_SESSION['AdminID'])) {
    $dbServer = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'studymalaysia';

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('Connection Failed: ' . mysqli_connect_error() . ' ' . mysqli_connect_errno());
    }

    if (isset($_POST['submit'])) {
        $sender = $_POST['sender-name'];
        $date = $_POST['date'];
        $target = $_POST['student'];
        if(isset($_POST['receiver-name'])){
            $receiver = $_POST['receiver-name'];
        }
        $details = $_POST['about'];
        if(isset($_FILES['docs'])){
            $docs = $_FILES['docs'];
        }
        $content = $_POST['content'];

        if ($target === 'one') {

            $sql = "INSERT INTO `student_mailbox` (Student_ID, `Date`, Details, Content, Sender, Admin_ID) VALUES ($receiver, '$date', '$details', '$content', '$sender', ".$_SESSION["AdminID"].")";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo "Error writing to database!";
            }
        } else if ($target === 'all') {

            $sql = 'SELECT `Student_ID` FROM student';
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $studentid = $row['Student_ID'];
                $sql2 = "INSERT INTO `student_mailbox` (Student_ID, `Date`, Details, Content, Sender, Admin_ID) VALUES ($studentid, '$date', '$details', '$content', '$sender', ".$_SESSION["AdminID"].")";
                $result2 = mysqli_query($conn, $sql2);

                if (!$result2) {
                    echo "Error writing to database for Student ID $studentid!";
                }
            }
        }
        if(isset($_FILES['docs'])){
        if ($docs['size'] !== 0 && $docs['error'] == 0) {
            $sql = "SELECT * from student_mailbox ORDER BY Mail_ID DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result)['Mail_ID'];

            $docsName = $docs['name'];
            $docsType = $docs['type'];
            $docsTmpName = $docs['tmp_name'];
            $docsSize = $docs['size'];
            $docsError = $docs['error'];

            $docsExt = explode(".", $docsName);
            $docsActualExt = strtolower(end($docsExt));

            $allowed = array('docx');

            if (in_array($docsActualExt, $allowed)) {
                if ($docsError === 0) {
                    if ($docsSize < 1000000) {

                        $docsNewName = "MailID" . $row . "." . $docsActualExt;
                        $docsDestination = "../Mailbox/Documents/$docsNewName";

                        move_uploaded_file($docsTmpName, $docsDestination);
                        //echo "Records updated";
                    } else {
                        echo "File size is too big!";
                    }
                } else {
                    echo "There is an error in uploading your file!";
                }
            } else {
                echo "Only .docx file types are allowed!";
            }
        }
    }
    }
}
