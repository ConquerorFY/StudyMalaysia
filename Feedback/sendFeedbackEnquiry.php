<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'studymalaysia';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $date = $_POST['dob'];
    $phone = $_POST['contact'];
    $school = $_POST['school'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];
    $course = $_POST['course'];

    if(isset($_POST['feedback'])){
        $comments = $_POST['feedback'];
        $type = 'Feedback';
    }else{
        $comments = $_POST['enquiry'];
        $type = 'Enquiry';
    }

    if(empty($name) || empty($phone) || empty($mail) || empty($date) || empty($address) || empty($country) || empty($school) || empty($nationality) || empty($course)||empty($comments)){
        header("Location: Feedback & Enquiry.php?error=empty");
        exit();
    }
    
    elseif(!preg_match("/^[a-zA-Z ]+$/", $name)){
        header("Location: Feedback & Enquiry.php?error=invalidName");
        exit();
    }
    elseif(!preg_match("/^[0-9]+-[0-9]+$/D", $phone)){
        header("Location: Feedback & Enquiry.php?error=InvalidContactNumber");
        exit();
    }
    else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        header("Location: Feedback & Enquiry.php?error=email");
        exit();
    }

    $sql = "INSERT INTO student_feedback_enquiry (`Name`,`Email`,`Date_of_Birth`,`Contact_Number`,`Interested_Course`,`School`,
    `Country`,`Address`,`Nationality`,`Comment`,`Comment_Type`) VALUES ('$name','$mail','$date','$phone','$course','$school','$country',
    '$address','$nationality','$comments','$type')";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        header("Location: Feedback & Enquiry.php?error=sqlError");
        exit();
    }

    echo "<script>
    alert('Your response have been recorded!');
    location.href='Feedback & Enquiry.php';
    </script>";
    
    exit();

}
?>