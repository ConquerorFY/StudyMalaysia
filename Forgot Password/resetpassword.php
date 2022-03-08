<!--https://www.youtube.com/watch?v=wUkKCMEYj9M&t=3495s*/-->
<?php
if(isset($_POST["resetpassword"])){
$selector = $_POST["selector"];
$validator = $_POST["validator"];
$password = $_POST["password"];
$r_password = $_POST["retype_password"];

if(empty($password)|| empty($r_password)){
  echo "<script>alert('Password is empty!')</script>";
  if(isset($_POST['type']) && $_POST['type'] == 'admin'){
    header("Location: pwdReset.php?selector=$selector&validator=$validator&newpwd=empty&type=admin");
    exit();  
  }else{
    header("Location: pwdReset.php?selector=$selector&validator=$validator&newpwd=empty");
    exit();
  }
}else if ($password != $r_password){
    echo "<script>alert('Password Doesn't match!')</script>";
    if(isset($_POST['type']) && $_POST['type'] == 'admin'){
      header("Location: pwdReset.php?selector=$selector&validator=$validator&pwd=notmatch&type=admin");
      exit();  
    }else{
      header("Location: pwdReset.php?selector=$selector&validator=$validator&pwd=notmatch");
      exit();
    }
}

$currentDate = date("U");
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "studymalaysia";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM pwdReset WHERE password_reset_selector=? AND password_reset_expires >= ?";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was an error occurred";
    exit();

}else{
mysqli_stmt_bind_param($stmt,"ss", $selector, $currentDate);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
if(!$row  = mysqli_fetch_assoc($result)){
     echo "You need to resubmit your password reset request.";
     exit();
} else{
     $tokkenBin = hex2bin($validator);
     $tokenCheck = password_verify($tokkenBin, $row["password_reset_token"]);
     
     if ($tokenCheck === false){
         echo "You need to resubmit your password reset request";
         exit();

          }elseif($tokenCheck === True){
            $tokenEmail = $row["password_reset_email"];
            if(isset($_POST['type']) && $_POST['type'] == 'admin'){
                $sql = "SELECT * FROM `admin` WHERE Email=?;";
            }else{
                $sql = "SELECT * FROM student WHERE Email=?;";
            }
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "There was an error occurred";
                exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    if(!$row= mysqli_fetch_assoc($result)){
    echo "The email provided is not registered in the database!";
    exit();
    }else{
          if(isset($_POST['type']) && $_POST['type'] == 'admin'){
            $sql = "UPDATE `admin` SET `Password`=? WHERE Email=?";
          }else{
            $sql = "UPDATE student SET `Password`=? WHERE Email=?";
          }
          $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "There was an error occurred";
                exit();
    }else{
        $newpassHash = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ss", $newpassHash, $tokenEmail);
        mysqli_stmt_execute($stmt);

        $sql = "DELETE FROM pwdReset WHERE password_reset_email=?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "There was an error occurred";
            exit();
        
        }else{
        mysqli_stmt_bind_param($stmt,"s", $tokenEmail);
        mysqli_stmt_execute($stmt);
        header("Location: ../Main Page/MainPage.php?newpwd=doneReset");
        }

        }
    
       }
       }     
     }
   }
}
}else{
   header("Location: ../Main Page/mainlogin.php");
}

?>