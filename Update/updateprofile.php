<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "studymalaysia";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id = $_SESSION['ID'];

$sql = "SELECT * from student where Student_ID = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$dob = $row['Date_of_Birth'];
$phone = $row['Contact_Number'];
$email = $row['Email'];
$gender = $row['Gender'];
$address = $row['Address'];
$country = $row['Country'];
$username = $row['Username'];
$password = $row['Password'];

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student Profile </title>
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="style6.css">
</head>

<body>

  <div class="header">
    <div class="align">
      <div class="image-ctrl">
        <img src="Screenshot 2020-08-22 at 10.02.00 PM.png">
      </div>
    </div>
  </div>
  <div class="control-content">
    <div class="right-side">
      <img src="studentpic.jpeg" alt="Students" width="550" height="400">
      <br><br><br>
      <p class="Content1">Connecting </p>
      <p class="Content2">All The Students</p>
      <p class="Content3">Around The World!</p>
      <br><br><br><br><br><br><br><br><br>
      <img src="international_students_1.jpg" alt="ConnectingStudents" width="550" height="400">
    </div>
    <div class="left-side">
      <h2>Update Your Student Account</h2>
      <p>We are here to help you.</p><br>
      <div class="header2">
        <b>Personal Data</b>
      </div>

      <?php

      $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if (strpos($fullUrl, "error=empty") == TRUE) {
        echo "<div class = 'error' style='border: 4px solid black;width:280px;height:40px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;' >You haven't fill all the fields!</div>";
      } elseif (strpos($fullUrl, "error=invalidName") == TRUE) {
        echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Name shouldn't contain numbers!</div>";
      } elseif (strpos($fullUrl, "error=InvalidContactNumber") == TRUE) {
        echo "<div class = 'error' style='border: 4px solid black;width:300px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Contact Numbers doesn't contain letters!</div>";
      } elseif (strpos($fullUrl, "error=invalidUsername&username=") == TRUE) {
        echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Invalid Username!</div>";
      } elseif (strpos($fullUrl, "error=email") == TRUE) {
        echo "<div class = 'error'style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;' >Invalid Email Format!</div>";
      } elseif (strpos($fullUrl, "error=userTaken&mail=emai") == TRUE) {
        echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Username Already Taken!</div>";
      } elseif (strpos($fullUrl, "error=passwordCheck") == TRUE) {
        echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Password does not match!</div>";
      } elseif (strpos($fullUrl, "error=sqlError") == TRUE) {
        echo "<div class = 'error' style='border: 4px solid black;width:280px;height:30px;text-align:center;margin-left:30px;padding-top:10px;font-weight:bold;color:red;'>Error Occured. Please Try again!</div>";
      } elseif (strpos($fullUrl, "submit=success") == TRUE) {
        echo "<div class = 'success' style='border: 4px solid black;width:280px;height:30px;text-align:center; margin-top:10px; margin-left:30px;padding-top:10px;font-weight:bold;color:green;'>Successfully updated!</div>";
      }

      ?>

      <div class="box">
        <form method="POST" action="updatedetails.php" enctype="multipart/form-data">
          <!--https://stackoverflow.com/questions/41406509/add-a-profile-picture-in-form-in-html-and-css-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
          </script>

          <?php

          $chkString = "StudentID" . $_SESSION["ID"] . ".jpeg";

          if (file_exists("../Profile/" . $chkString)) {
              $profileName = "../Profile/" . $chkString;
          } else {
              $profileName = "../Profile/avatar.png";
          }

          echo '<img id="profileImage" src="'.$profileName.'">';
          echo '<input id="imageUpload" type="file" name="profile" capture="user" accept="image/*">';
          ?>
          <script>
            function Preview(uploader) {
              if (uploader.files && uploader.files[0]) {
                $('#profileImage').attr('src', window.URL.createObjectURL(uploader.files[0]));
              }
            }

            $("#profileImage").click(function(e) {
              $("#imageUpload").click();
            });

            $("#imageUpload").change(function() {
              Preview(this);

            })
          </script>
          <p style="margin-left: 100px;margin-top: 10px;font-weight: bold;">Upload Profile Picture</p><br>

          <div>
            <input type="text" name="name" required value="<?php echo $name; ?>">
            <label>Full Name</label>
            </table>
          </div>
          <div>
            <input type="text" name="phone" required value="<?php echo $phone; ?>">
            <label>Phone Number</label>
          </div>
          <div>
            <p>Email:</p><input type="email" name="email" id="email" required value="<?php echo $email; ?>">
          </div>
          <div>
            <p>Date of Birth:</p><input type="date" name="dob" value="<?php echo $dob; ?>">
          </div>
          <div>
            <p>Gender:</p>
            <table class="gender">
              <tr>
                <th><input id='male' type="radio" name="gender" value="male" required>Male</th>
                <th><input id='female' type="radio" name="gender" value="female" required>Female</th>
              </tr>
            </table>

            <?php
            if ($gender === "male") {
              echo "<script>
              document.getElementById('male').checked = true;
              </script>";
            } else {
              echo "<script>
              document.getElementById('female').checked = true;
              </script>";
            }
            ?>

          </div>
          <div>
            <table class="address">
              <tr>
                <td>
                  <p>House Address: &nbsp;</p>
                </td>
                <td><textarea name='address' class="textaddress"> <?php echo $address ?></textarea></td>
              </tr>
            </table>
          </div>
          <div>
            <table class="country">
              <tr>
                <td>
                  <p>Country:&nbsp;</p>
                </td>
                <td><select id="country" name="country">
                    <option value=<?php echo $country ?>><?php echo $country ?></option>
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
            <input type="text" name="username" required value="<?php echo $username ?>">
            <label>Username</label>
          </div>
          <div>
            <input type="password" name="password" required autocomplete="new-password">
            <label>Password</label>
          </div>
          <div>
            <input type="password" name="password_r" required>
            <label>Retype Password</label>
          </div>
          <br>
          <div>
            <p><input type="submit" name="update-details" value="Update" class="btn">&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" value="Delete" name="delete-details" class="btn"></p>
          </div>

        </form>

      </div>
    </div>
  </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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