<?php

    $sql = "SELECT * FROM `student_mailbox` WHERE Student_ID = ".$_SESSION['ID'];
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $mailid = $row['Mail_ID'];
        $date = $row['Date'];
        $studentid = $row['Student_ID'];
        $about = $row['Details'];

        $sql  = "SELECT `Name` FROM `student` WHERE Student_ID = $studentid";
        $name = mysqli_fetch_assoc(mysqli_query($conn, $sql))["Name"];

        echo "
        <div id='div$mailid' style='cursor: pointer; width: 100%; height: 120px; font-size: 20px; border: 2px solid black; margin-bottom: 20px;'>
        Mail ID: #$mailid<br>
        To: $name<br>
        Date: $date<br>
        About: $about<br>
        <form method='GET' style='position:static;'>
        <input type='hidden' name='mailid' value='$mailid'> 
        <input type='submit' name='get-contents' value='Show'>
        </form>
        </div>";
    }

    mysqli_close($conn);



?>
