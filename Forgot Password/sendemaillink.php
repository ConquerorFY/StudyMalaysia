
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Forgot Password</title>
          <link rel="icon" href="icon.png">
          <link rel="stylesheet" href= "style4.css">
     </head>
     <body>
        <div class="header">
          <div class="align">
              <div class="image-ctrl">
                   <img src="Screenshot 2020-08-22 at 10.02.00 PM.png">
              </div>

        <div class="btn">
            <a href="../Login/mainlogin.php"><input type="button" class="btnlogin" value="Back to Student Login"></a> 
        </div>
    

        <center><img src="password.png" class="logo"></center>
  
        <div class="container">
           <h2>Password Reset</h2>
           <br>
           <p>Please enter your email address and we'll send you a link
               to get back into your account.
           </p>
           <br>
           <?php 
              if (isset($_GET["reset"])){
                if ($_GET["reset"] == "Success"){
                    echo '<center><p class = "Success" style="color:Green;font-size: 16px;">Check your Account Email Address!</p></center>';
                }
              };
          ?>
           <form action="sendlink.php" method="POST">
           <div class="input-field">
               <?php
               if(isset($_GET['type']) && $_GET['type'] == 'admin'){
                   echo '<input type="hidden" name="type" value="admin">';
               }
               ?>
            <input type="email" id="Email" name="email"  required><label>Email</label>
          </div><br>
          <input type="submit" value="Send Login Link" name = "send_link" id="btnsubmit">
          </form>
    
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