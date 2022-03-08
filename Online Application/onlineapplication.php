<?php

session_start();
include 'sendApplication.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Application</title>
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="style3.css">
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
    <div class="left-side" style='margin-left:-60px;'>
      <h2 style='width:1200px;'>Application Form</h2>
      <p>Apply for your favourite private</p>
      <p>universities and courses.</p>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="box">
      <form method='POST' enctype="multipart/form-data">
        <div>
          <p>Full Name</p>
          <?php
            echo "<input type='text' onclick='disableInput(this)' name='name' value=$name required>";
          ?>
        </div>
        <div>
          <p>Phone Number</p>
          <?php
            echo "<input type='text' onclick='disableInput(this)' name='phone' value=$phone required>";
          ?>
        </div>
        <div> 
          <p>Email</p>
          <?php
            echo "<input type='email' onclick='disableInput(this)' name='email' value=$email required>";
          ?>
        </div>
        <div>
          <p>IC/Passport Number</p>
          <input type="text" name="identification_number" required>
        </div>
        <div>
          <p>Country</p>
          <?php
            echo "<input type='text' onclick='disableInput(this)' name='country' value=$country required>";
          ?>
        </div>
        <div>
          <table>
            <tr>
              <td>
                <p>Interested University</p>
                <select id="university" name="university" required>
                  <option value="">----</option>
                  <option value="APU">Asia Pacific University</option>
                  <option value="Taylor">Taylor University</option>
                  <option value="SWY">Sunway</option>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>

              <td>
                <p>Intereseted Course</p>
                <select id="courses" name="courses" required>
                  <option value="">----</option>
                  <option value="ACC">Diploma in Accounting</option>
                  <option value="IT">Diploma in Information Technology</option>
                  <option value="MKT">Diploma in Marketing</option>
                  <option value="BIS">Diploma in Business</option>
                  <option value="MCM">Diploma in Mass Communication & Media</option>
                  <option value="EEE">Diploma in Electrical & Electronic Engineering</option>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <div>
          <p>Upload your highest qualification result</p>
          <input type="file" name="file" class="upload" required>
        </div>
        <div>
          <p>Descriptions about yourself / Comments</p>
          <textarea name="comments" class="descriptions" 
            style="width:370px;height: 150px;font-family: -apple-system;font-size: 13px;color: maroon;resize: horizontal;"></textarea>
        </div>
        <br>
        <div>
          <input type="submit" name="submit" class="btnSubmit">
        </div>
      </form>
    </div>
    <div class="slideshow-container" style="width:500px;height:300px;margin-left:600px;margin-top:-800px;">

      <div class="mySlides fade">
        <img src="APU.jpeg" style="width:100%">

      </div>

      <div class="mySlides fade">
        <img src="Sunway.jpeg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="Taylor.jpeg" style="width:100%">
      </div>

      <a class="previous" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        console.log(slideIndex);
        console.log(n);
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
      }
    </script>

    <script>
      var myIndex = 0;
      //slideChange();
      setInterval(function () { slideChange() }, 2000);

      function slideChange() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";

        //setTimeout(slideChange, 2000); 
      }
    </script>

    <script>
        function disableInput(x){
            x.disabled = true;
        }
    </script>
  </div>

  <br><br><br><br><br><br><br><br>
  <footer>
    <div class="main-footer">
      <div class="left-side">
        <h3 class="link">Content</h3>
        <p><a href="../Static/PrivateUni.html" style="text-decoration:none; color:white;">Private Universities</a></p>
        <p><a href="../Static/Student Life.html" style="text-decoration:none; color:white;">Student Life In Malaysia</a></p>
        <p><a href="../Static/Why Study.html" style="text-decoration:none; color:white;">Why Study In Malaysia</a></p>

      </div>
      <div class="center">
        <p><a href='../Static/Culture&Environment.html' style="text-decoration:none; color:white;">Culture & Environment</a></p>
        <p><a href="../Feedback/Feedback & Enquiry.php" style="text-decoration:none; color:white;">Feedback or Enquiry</a></p>
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

</body>

</HTML>