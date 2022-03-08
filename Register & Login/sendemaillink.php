
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Forgot Password</title>
          <link rel="icon" href="/Users/premsharaan/Documents/project/helloworld/WDT_Prject/Screenshot 2020-08-22 at 11.32.58 PM.png">
          <link rel="stylesheet" href= "style4.css">
     </head>
     <body>
        <div class="header">
          <div class="align">
              <div class="image-ctrl">
                   <img src="/Users/premsharaan/Documents/project/helloworld/WDT_Prject/Screenshot 2020-08-22 at 10.02.00 PM.png">
              </div>

        <div class = "btn">
            <a href = "mainlogin.html"><input type="button" class="btnlogin" value= "Back to Login"></a>
        </div>
    

        <center><img src="/Users/premsharaan/Documents/project/helloworld/WDT_Prject/Screenshot 2020-09-08 at 5.29.44 AM.png" class="logo"></center>
  
        <div class = "container">
           <h2>Password Reset</h2>
           <br>
           <p>Please enter your email address and we'll send you a link
               to get back into your account.
           </p>
           <br>
           <form action = "sendlink.php" method="POST">
           <div class="input-field">
            <input type= "email" id="Email" name="email"  required><label>Email</label>
          </div><br>
          <input type="submit" value="Send Login Link" name = "send_link" id="btnsubmit">
          </form>
          <?php 
              if (isset($_GET["reset"])){
                if ($_GET["reset"] == "success"){
                    echo '<p class = "signupsuccess">Check your Account Email Address!</p>';
                }
              }
          ?>
          </div>
       
     </body>
<br><br><br>
     <footer class="footer"> 
        <div class ="descriptions">
        <a >HOME</a>
        <a >ABOUT</a>
        <a >HELP</a>
        <a >PRIVACY</a>
        <a >TERMS</a>
        <p class="copyright">&copy;Study Malaysia 2020</p>
        </div>
    </footer>
</div>
</div>
</html>