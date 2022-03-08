<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  type="image/x-icon" href="icon.png">
    <title>Login</title>
    <center><img src="icon.png"
            class="logo"></center>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2 class="title"><b>Log in to Study Malaysia</b></h2>
    <br>

    <?php
       $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         if (strpos($fullUrl, "error=emptyField&username=username") == TRUE){
           echo "<div class = 'error' style='border: 3px solid black;width:250px;height:30px;text-align:center;margin-left:590px;margin-bottom:-30px;margin-top:30px;padding-top:10px;font-weight:bold;color:#FFFC00;' >You haven't fill all the fields!</div>";
         }
         elseif (strpos($fullUrl, "error=wrongpassword") == TRUE){
           echo "<div class = 'error' style='border: 3px solid black;width:250px;height:30px;text-align:center;margin-left:590px;margin-bottom:-30px;margin-top:30px;padding-top:10px;font-weight:bold;color:#FFFC00;'>Wrong Password</div>";
        
         }
         elseif (strpos($fullUrl, "error=login_wrongDetails") == TRUE){
           echo "<div class = 'error' style='border: 3px solid black;width:250px;height:30px;text-align:center;margin-left:590px;margin-bottom:-30px;margin-top:30px;padding-top:10px;font-weight:bold;color:#FFFC00;'>Wrong Details!</div>";
        
         }
         elseif (strpos($fullUrl, "error=sqlError") == TRUE){
           echo "<div class = 'error' style='border: 3px solid black;width:250px;height:30px;text-align:center;margin-left:590px;margin-bottom:-30px;margin-top:30px;padding-top:10px;font-weight:bold;color:#FFFC00;'>Error Occured. Please Try again!</div>";
          
         }
        
         
        ?>
</head>
<br><br>

<body>
    <div class="center">
        <center>
            <form method='POST' action='login.php'>
        
                <div class="input-field">
                    <input type="text" id="username" name="username" required autocomplete="off"><label>Username</label>
                </div>
                <br>
                <div class="input-field">
                    <input type="password" id="password" name="password" autocomplete="new-password"
                        required><label>Password</label>
                    <span><i class="fa fa-eye" id="eye" onclick="showHide();"></i> </span>
                </div>
                <input type="submit" value="Log In" id="btnsubmit" name="login-submit">

                <br><br>
                <p><a href="sendlink.html" class="link">Forgotten Password?</a> | <a
                        href="student_register.php"
                        class="link">Sign up for Study Malaysia</a></p>
            </form>
        </center>
    </div>
</body>
<br>
<footer class="footer">
    <div class="descriptions">
        <a>HOME</a>
        <a>ABOUT</a>
        <a>HELP</a>
        <a>PRIVACY</a>
        <a>TERMS</a>
        <p class="copyright">&copy;Study Malaysia 2020</p>
    </div>
</footer>

<script type="text/javascript">
    const password = document.getElementById("password");
    const eye = document.getElementById("eye");

    function showHide() {
        if (password.type === 'password') {
            password.setAttribute('type', 'text');
            eye.style.color = '#5887ef';
            toggle.classlist.add('hide')

        } else {
            password.setAttribute('type', 'password');
            eye.style.color = 'white';
            toggle.classlist.remove('hide')
        }
    }

</script>
</html>