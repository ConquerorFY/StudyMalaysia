<?php
    session_start();
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

 if(isset($_POST["update-details"])){

    $file = $_FILES['profile'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_r = $_POST['password_r'];

    if(empty($name) || empty($phone) || empty($email) || empty($dob) || empty($gender) || empty($address) || empty($country) || empty($username) || empty($password) || empty($password_r)){
        header("Location: updateprofile.php?error=empty");
        exit();
    }

    elseif(!preg_match("/^[a-zA-Z ]*$/", $name)){
        header("Location: updateprofile.php?error=invalidName");
        exit();
    }
    elseif(!preg_match("/^[0-9]+-[0-9]+$/", $phone)){
        header("Location: updateprofile.php?error=InvalidContactNumber");
        exit();
    }

    else if(!preg_match("/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/",$username)){
        header("Location: updateprofile.php?error=invalidUsername&username=".$username);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: updateprofile.php?error=email");
        exit();
    }

    else if($password !== $password_r){
        header("Location: updateprofile.php?error=passwordCheck");
        exit();
    }
    
    else{
        $sql = "SELECT Username FROM student where Username=?;";
        $sql2 = "SELECT Username FROM student WHERE Student_ID=".$_SESSION['ID'];

        $stmt = mysqli_stmt_init($conn);
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql2))['Username'];


        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: updateprofile.php?error=sqlError");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCount = mysqli_stmt_num_rows($stmt);
            mysqli_stmt_close($stmt);

            if($username == $result){
                $resultCount = $resultCount - 1;

            }
            
            if($resultCount > 0){
                echo "<script>alert('Username has been taken')</script>";
                echo "<script>location.href='adminupdateprofile.php?error=userTaken&mail=$email'</script>";
                //header("Location: updateprofile.php?error=userTaken&mail=$email");
                exit();
                
            }else{
                $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                $sql = "UPDATE student SET `Name` = '$name', Gender = '$gender', Email = '$email', Contact_Number = '$phone', `Address` = '$address', 
                Country = '$country', Date_of_Birth = '$dob', Username = '$username', `Password` = '$hashedPwd' WHERE Student_ID = ".$_SESSION['ID'];

                $result = mysqli_query($conn, $sql);

                if ($result == false) {
                    echo "Error: ".$sql."<br>".mysqli_connect_error();
                }else {
                    if ($_FILES['profile']['size'] > 0){
                    $profileName = $_FILES['profile']['name'];
                    $profileType = $_FILES['profile']['type'];
                    $profileTmpName = $_FILES['profile']['tmp_name'];
                    $profileSize = $_FILES['profile']['size'];
                    $profileError = $_FILES['profile']['error'];

                    $profileExt = explode(".", $profileName);
                    $profileActualExt = strtolower(end($profileExt));

                    $allowed = array('jpeg');

                    if(in_array($profileActualExt, $allowed)){
                        if($profileError === 0){
                            if($profileSize < 1000000){

                                $profileNewName = "StudentID".$_SESSION['ID'].".".$profileActualExt;
                                $profileDestination = "../Profile/$profileNewName";

                                move_uploaded_file($profileTmpName, $profileDestination);
                                mysqli_stmt_close($stmt);
                                mysqli_close($conn);
                                echo "Records updated";
                                header("Location: updateprofile.php?submit=success");

                            }else{
                                echo "File size is too big!";
                            }

                        }else{
                            echo "There is an error in uploading your file!";
                        }
                    }else{
                        echo "Only .jpeg file type are allowed!";

                    }
                }else{
                    echo "Records updated";
                    header("Location: updateprofile.php?submit=success");
                    
                }




	               
                }
            }
        

        }

    }




}else if(isset($_POST['delete-details'])){
    $sql = "DELETE FROM student WHERE Student_ID = ".$_SESSION['ID'];
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Location: ../Login/logout.php");
    exit();

}
