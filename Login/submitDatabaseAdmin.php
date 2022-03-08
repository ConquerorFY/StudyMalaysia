<?php

if(isset($_POST["signup-submit"])){
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

    $name = $_POST['name'];
    $phone = $_POST['phone-number'];
    $email = $_POST['student-email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_r = $_POST['retypepassword'];

    if(empty($name) || empty($phone) || empty($email) || empty($dob) || empty($gender) || empty($address) || empty($country) || empty($username) || empty($password) || empty($password_r)){
        header("Location: adminRegister.php?error=empty");
        exit();
    }

    elseif(!preg_match("/^[a-zA-Z ]+$/", $name)){
        header("Location: adminRegister.php?error=invalidName");
        exit();
    }
    elseif(!preg_match("/^[0-9]+-[0-9]+$/", $phone)){
        header("Location: adminRegister.php?error=InvalidContactNumber");
        exit();
    }

    else if(!preg_match("/^[A-Za-z][A-Za-z0-9]*[?:_A-Za-z0-9]*$/",$username)){
        header("Location: adminRegister.php?error=invalidUsername&username=".$username);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: adminRegister.php?error=email");
        exit();
    }

    else if($password !== $password_r){
        header("Location: adminRegister.php?error=passwordCheck&username=usernam&email=email");
        exit();
    }
    
    else{
        $sql = "SELECT Username FROM `admin` where Username=?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: adminRegister.php?error=sqlError");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCount = mysqli_stmt_num_rows($stmt);
            mysqli_stmt_close($stmt);

            if($resultCount > 0){
                header("Location: adminRegister.php?error=userTaken&mail=email");
                exit();
            }else{
                $sql = "INSERT INTO `admin` (`Name`,`Gender`,`Email`,`Contact_Number`,`Address`,`Country`,`Date_of_Birth`,`Username`,`Password`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: adminRegister.php?error=sqlError");
                    exit();
                }
                else{
                    $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sssssssss",$name,$gender,$email,$phone,$address,$country,$dob,$username,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: adminRegister.php?submit=success&username=username");
                    exit();
                }

            }

        }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);


}else{
    header("Location: submitDatabaseError.php");
    exit();
}
?>