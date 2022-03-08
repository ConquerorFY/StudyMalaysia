<?php
// https://www.youtube.com/watch?v=JaRq73y5MJk
if(isset($_SESSION["ID"])){
    $dBServername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "studymalaysia";

    // Create connection
    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM student WHERE Student_ID = '.$_SESSION["ID"];
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["Student_ID"];
        $name = $row["Name"];
        $phone = $row["Contact_Number"];
        $email = $row["Email"];
        $country = $row["Country"];

    }


    if(isset($_POST['submit'])){
        $ic = $_POST['identification_number'];
        $uni = $_POST['university'];
        $courses = $_POST['courses'];
        $file = $_FILES['file'];
        $comments = $_POST['comments'];

        $sql = "INSERT INTO `student_uni_application` (Student_ID, Identification_Number, Interested_Course, `Description`, Interested_University) VALUES ($id, '$ic', '$courses', '$comments', '$uni')";
        $result = mysqli_query($conn, $sql);

        $sql = "SELECT MAX(Application_ID) AS Aid FROM student_uni_application";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $Aid = $row['Aid'];

        //print_r($file);

        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];

        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        $sql = "DELETE FROM `student_uni_application` WHERE Application_ID = $Aid";

        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){

                    $fileNewName = "ApplicationID".$Aid.".".$fileActualExt;
                    $fileDestination = 'Qualifications/'.$fileNewName;

                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "<script>
                    alert('Your details have been recorded!');
                    location.href = 'onlineapplication.php?submit=success';
                    </script>";
                    exit();

                }else{
                    echo "<script>alert('Your file size is too big!')</script>";
                    mysqli_query($conn, $sql);
                }
            
            }else{
                echo "<script>alert('There was an error in uploading your file!')</script>";
                mysqli_query($conn, $sql);
            }

        }else{
            echo "<script>alert('Only .jpg, .jpeg, .png and .pdf file types are allowed!')</script>";
            mysqli_query($conn, $sql);
        }
    }
}
?>