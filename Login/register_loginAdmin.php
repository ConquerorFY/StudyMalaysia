<?php

if (isset($_POST['btnlogin'])){
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
    
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if(empty($username) || empty($password)){
        header("Location: adminRegister.php?loginerror=emptyField&username=username");
        exit();
    }

    else{
        $sql = "SELECT * FROM `admin` WHERE Username=?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: adminRegister.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password,$row['Password']);

                if(!$pwdCheck){
                    header("Location: adminRegister.php?error=wrongpassword");
                    exit();
                }
                
                else{
                    session_start();
                    $_SESSION['AdminID'] = $row['Admin_ID'];
                    $_SESSION['Username'] = $row['Username'];
                    $_SESSION['Password'] = $row['Password'];

                    header("Location: ../Main Page/MainPage.php?login=success");
                    exit();
                }
            }

            else{
                header("Location: adminRegister.php?error=login_wrongDetails");
                exit();
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

?>