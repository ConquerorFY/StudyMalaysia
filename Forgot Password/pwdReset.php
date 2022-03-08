<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <div class="header">
        <div class="align">
            <div class="image-ctrl">
                <img src="Screenshot 2020-08-22 at 10.02.00 PM.png">
            </div>

            <div class="btn">
                <a href="../Login/mainlogin.php"><input type="button" class="btnlogin" value="Login"></a>
            </div>

            <div class="container">
                <?php
                if(isset($_GET['newpwd']) && $_GET['newpwd'] == "empty"){
                    echo '<center><p style="border: 3px solid black;width:250px;height:30px;text-align:center;margin-bottom:25px; font-weight:bold;color:#FFFC00;">Please fill up all details</p></center>';
                }else if(isset($_GET['pwd']) && $_GET['pwd'] == 'notmatch'){
                    echo '<center><p style="border: 3px solid black;width:250px;height:30px;text-align:center;margin:auto; font-weight:bold;color:maroon;">Password Does Not Match</p></center>';

                }
                ?>
                <h2>Password Reset</h2>
                <br>
                <p>Enter your current username, new password and retype
                    the new password.
                </p>
                <br>
                <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (empty($selector) || empty($validator)) {
                    echo "Validation Failed";
                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>
                        <form action="resetpassword.php" method="POST">

                            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                            <?php
                                if(isset($_GET['type']) && $_GET['type'] == 'admin'){
                                    echo '<input type="hidden" name="type" value="admin">';
                                }
                            ?>
                            <div class="input-field">
                                <input type="password" id="Password" name="password" required autocomplete="new-password"><label>Password</label>
                            </div>
                            <div class="input-field">
                                <input type="password" id="RePassword" name="retype_password" required><label>Retype Password</label>
                            </div>
                            <br>
                            <input type="submit" value="Change Password" id="btnsubmit" name="resetpassword">
                        </form>
                <?php

                    }
                };
                ?>
            </div>
</body>

<br><br><br>
<footer class="footer">
    <div class="descriptions">
        <a href='../Main Page/MainPage.php'>HOME</a>
        <a href='../Main Page/MainPage.php'>ABOUT</a>
        <a href='../Misc/others.html#help'>HELP</a>
        <a href='../Misc/others.html#privacy'>PRIVACY</a>
        <a href='../Misc/others.html#terms'>TERMS</a>
        <p class="copyright">&copy;Study Malaysia 2020</p>
    </div>
</footer>
</div>
</div>

</html>