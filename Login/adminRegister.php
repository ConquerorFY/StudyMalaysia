<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up </title>
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="header">
    <div class="align">
      <div class="image-ctrl">
        <img src="Screenshot 2020-08-22 at 10.02.00 PM.png">
      </div>
      <div class="login">
        <table style='visibility:hidden;'>
          <tr>
            <td>
              <p>Username</p>
            </td>
            <td>
              <p>Password</p>
            </td>
            <td>
            <?php
            $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         if (strpos($fullUrl, "loginerror=emptyField&username=username") == TRUE){
           echo "<div class = 'error'style='border: 2px solid white;width:120px;height:25px;text-align:center;margin-left:-470px;margin-bottom:-80px;padding-top:8px;font-weight:bold;color:#FFFC00;' >You haven't fill all the fields!</div>";
         }
         elseif (strpos($fullUrl, "error=wrongpassword") == TRUE){
           echo "<div class = 'error' style='border: 2px solid white;width:120px;height:25px;text-align:center;margin-left:-470px;margin-bottom:-80px;padding-top:8px;font-weight:bold;color:#FFFC00;'>Wrong Password!</div>";
         } 
         elseif (strpos($fullUrl, "error=login_wrongDetails") == TRUE){
          echo "<div class = 'error' style='border: 2px solid white;width:120px;height:25px;text-align:center;margin-left:-470px;margin-bottom:-80px;padding-top:8px;font-weight:bold;color:#FFFC00;'>Wrong Details!</div>";
       
        }
        elseif (strpos($fullUrl, "error=sqlError") == TRUE){
          echo "<div class = 'error' style='border: 2px solid white;width:120px;height:25px;text-align:center;margin-left:-470px;margin-bottom:-80px;padding-top:8px;font-weight:bold;color:#FFFC00;'>Error Occured. Please Try again!</div>";
         
        }
       

         ?>
            
          </td>
          </tr>
     <form id= "form "method= "POST" action="register_loginAdmin.php" enctype="multipart/form=data">
          <tr> 
            <td><input type="text" class="input-field" name= "Username" placeholder=" Enter Username" required autocomplete="off"></td>
            <td><input type="password" class="input-field" name= "Password" placeholder=" Enter Password" required autocomplete="new-password"></td>
            <td><input type="submit" class="btnlogin" name= "btnlogin" value="Log In"></td>
          </tr>
        </form>
          <tr>
            <td>&nbsp;</td>
            <td><a href="../Forgot Password/sendemaillink.php">
                <p>Forgotten Password?</p>
              </a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="control-content">
    <div class="right-side">
      <img src="studentpic.jpeg" alt="Students" width="550"
        height="400">
      <br><br><br>
      <p class="Content1">Connecting </p>
      <p class="Content2">All The Students</p>
      <p class="Content3">Around The World!</p>
      <br><br><br><br><br><br><br><br><br>
      <img src="international_students_1.jpg"
        alt="ConnectingStudents" width="550" height="400">
    </div>
     <div class="left-side">
      <h2>Create Your Student Account</h2>
      <p>We are here to help you.</p><br>
      <div class="header2">
        <b>Personal Data</b>
      </div>
<br><br>

<?php
       
       $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         if (strpos($fullUrl, "error=empty") == TRUE){
           echo "<div class = 'error' style='border: 4px solid black;width:280px;height:40px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;' >You haven't fill all the fields!</div>";
         }
         elseif (strpos($fullUrl, "error=invalidName") == TRUE){
           echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Invalid Numbers!</div>";
        
         }
         elseif (strpos($fullUrl, "error=InvalidContactNumber") == TRUE){
          echo "<div class = 'error' style='border: 4px solid black;width:300px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Invalid Contact Number!</div>";
       
        }

         elseif (strpos($fullUrl, "error=invalidUsername&username=") == TRUE){
           echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Invalid Username!</div>";
        
         }
         elseif (strpos($fullUrl, "error=email") == TRUE){
           echo "<div class = 'error'style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;' >Invalid Email Format!</div>";
        
         }
         elseif (strpos($fullUrl, "error=userTaken&mail=emai") == TRUE){
          echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Username Already Taken!</div>";
         
        }
         elseif (strpos($fullUrl, "error=passwordCheck&username=usernam&email=email") == TRUE){
           echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Password does not match!</div>";
           
         }
         elseif (strpos($fullUrl, "error=sqlError") == TRUE){
           echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Error Occured. Please Try again!</div>";
          
         }
         
         elseif (strpos($fullUrl, "submit=success&username=username") == TRUE){
           echo "<div class = 'success' style='border: 4px solid black;width:280px;height:50px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:green;'>Sign Up Succssful! Use your Username and Password to login.</div>";
        
         }
         
        ?>

      <div class="box">
        <br><br>
        <form name="form1" method="post" action="submitDatabaseAdmin.php">
    
          <div>
          <input type="text" name="name" required autocomplete="off">
            <label>Full Name</label>
         
          </div>
          <div>
            <input type="text" name="phone-number"  autocomplete="off" required>
            <label>Phone Number</label>
          </div>
          <div>
            <p>Email:</p><input type="email" name="student-email" id="email" required autocomplete="off">
          </div>
          <div>
            <p>Date of Birth:</p><input type="date" name="dob" required>
          </div>
          <div>
            <p>Gender:</p>
            <table class="gender">
              <tr>
                <th><input type="radio" name="gender" value="male" required> Male</th>
                <th><input type="radio" name="gender" value="female" required> Female</th>
              </tr>
            </table>
          </div>
          <div>
            <table class="address">
              <tr>
                <td>
                  <p>House Address: &nbsp;</p>
                </td>
                <td><textarea class="textaddress" name='address' style="width: 190px;height:110px;border:2px solid darkred;" autocomplete="off">&nbsp;&nbsp;</textarea></td>
              </tr>
            </table>
          </div>
          <div>
            <table class="country">
              <tr>
                <td>
                  <p>Country:&nbsp;</p>
                </td>
                <td><select id="country" name="country" required style="border: 2px solid darkred;">
                    <option value="">----</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="India">India</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select></td>
              </tr>
            </table>
          </div>
          <br><br>
          <div class="header2">
            <b>Account Information</b>
          </div>
          <div>
            <input type="text" name="username" required autocomplete="off">
            <label>Username</label>
          </div>
          <div>
            <input type="password" name="password" required autocomplete="new-password">
            <label>Password</label>
          </div>
          <div>
            <input type="password" name="retypepassword" required>
            <label>Retype Password</label>
          </div>
          <div style="display:flex;">
            <input type="checkbox"
              name="Terms" class="chkbox" required><p class="terms" style="width:1000%;font-weight:bold;">&nbsp;&nbsp;I agree to the Terms & Conditions</p>
          </div>
          <br>
          <div>
      
            <p><input type="submit" value="Sign Up" name="signup-submit" class="btn">&nbsp;&nbsp;&nbsp;<input type="reset"
                value="Reset" class="btn"></p>
          </div>

        </form>
        
      </div>
    </div>
  </div>
  
</body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
  <div class="main-footer">
    <div class="left-side">
      <h2>Content</h2>
      <p><a href='../Static/PrivateUni.html'>Private Universities</a></p>
      <p><a href='../Static/Student Life.html'>Study Life In Malaysia</a></p>
      <p><a href='../Static/Why Study.html'>Why Study In Malaysia</a></p>

    </div>
    <div class="center">
      <p><a href='../Static/Culture&Environment.html'>Culture & Environment</a></p>
      <p><a href='../Feedback/Feedback & Enquiry.php'>Feedback or Enquiry</a></p>
    </div>
    <div class="right-side">
      <h2>About this website</h2>
      <p>Copyright &copy; Study Malaysia 2020
        No.142, Jalan Ampang Jaya,
        Pavilion E-Commerce Centre,
        68000 Ampang, Selangor.
        Tel:+03-43231132 / +6014-669 3837
      </p>
      <div class="descriptions">
        <a href='../Main Page/MainPage.php'>HOME</a>
        <a href='../Main Page/MainPage.php'>ABOUT</a>
        <a href='../Misc/others.html#help'>HELP</a>
        <a href='../Misc/others.html#privacy'>PRIVACY</a>
        <a href='../Misc/others.html#terms'>TERMS</a>
        <p class="copyright">&copy;Study Malaysia 2020</p>
      </div>
    </div>
  </div>
  </div>
</footer>


</html>