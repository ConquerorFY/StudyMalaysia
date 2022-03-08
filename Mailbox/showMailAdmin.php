<?php
    $sql = "SELECT `Name` FROM `admin` WHERE Admin_ID = ".$_SESSION['AdminID'];
    $result = mysqli_query($conn, $sql);
    $adminName = mysqli_fetch_assoc($result)['Name'];

    $sql = "SELECT * FROM `student_mailbox` WHERE Admin_ID = ".$_SESSION['AdminID'];

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $mailid = $row['Mail_ID'];
        $date = $row['Date'];
        $studentid = $row['Student_ID'];

        $sql2 = "SELECT `Name` FROM `student` WHERE Student_ID = $studentid";
        $result2 = mysqli_query($conn, $sql2);
        $studentName = mysqli_fetch_assoc($result2)['Name'];

        $about = $row['Details'];
        $adminid = $_SESSION['AdminID'];

        echo "
        <div id='div$mailid' style='width: 100%; height: 140px; font-size: 20px; border: 2px solid black; margin-bottom: 20px;'>
        Mail ID: #$mailid<br>
        To: $studentName<br>
        Date: $date<br>
        About: $about<br>
        From: $adminName<br>
        </div>";
    }



?>
