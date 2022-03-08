<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Forgot Password</title>
          <link rel="icon" href="/Users/premsharaan/Documents/project/helloworld/WDT_Prject/Screenshot 2020-08-22 at 11.32.58 PM.png">
          <link rel="stylesheet" href= "style5.css">
     </head>
     <body>
        <div class="header">
          <div class="align">
              <div class="image-ctrl">
                   <img src="/Users/premsharaan/Documents/project/helloworld/WDT_Prject/Screenshot 2020-08-22 at 10.02.00 PM.png">
              </div>

         <div class = "btn">
                <a href = "mainlogin.html"><input type="button" class="btnlogin" value= "Login"></a>
        </div>  


        <?php
        $selector = $_GET["selector"];
        $validator =$_GET["validator"];
      
        if(empty($selector)|| empty($validator)){
          echo "Validation Failed";
        }else{
           if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
        ?>

        <div class = "container">
            <h2>Password Reset</h2>
            <br>
            <p>Enter your current username, new password and retype
                the new password.
            </p>
            <br>
            <form action = "resetpassword.php" method = "post">
            <input type = "hidden" name ="selector" value="<?php echo $selector; ?>">
            <input type = "hidden" name ="validator" value="<?php echo $validator; ?>">
            <div class="input-field">
             <input type= "text" id="Username" name="username"  required = ""><label>Username</label>
           </div>
           <div class="input-field">
            <input type= "password" id="Password" name="password"  required = "" autocomplete="new-password"><label>Password</label>
           </div>
           <div class="input-field">
            <input type= "password" id="RePassword" name="retype_password"  required = ""><label>Retype Password</label>
           </div>
           <br>
           <input type="submit" value="Change Password" id="btnsubmit" name = "resetpassword"> 
          </form>
           </div>

           <?php
         
           }
        }
          ?>
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