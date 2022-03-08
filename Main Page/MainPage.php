<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='../Main Page/mainpagestyle.css'>
</head>

<body>
    <script>
        /*https://stackoverflow.com/questions/6320113/how-to-prevent-form-resubmission-when-page-is-refreshed-f5-ctrlr*/
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

    <header>
        <img class="logo" src="Screenshot 2020-08-22 at 10.02.00 PM.png">
        <nav class='nav' style='width:900px;'>
            <ul class="nav_links">
                <li><a class="nav-items" href="#" style="color:wheat; border: 2px solid darkred;padding: 1px 1px 1px 1px;">Main Page</a></li>
                <li><a class="nav-items" href="../Static/PrivateUni.html">Private Universities</a></li>
                <li><a class="nav-items" href="../Static/Student Life.html">Student Life in Malaysia</a></li>
                <li><a class="nav-items" href="../Static/Why Study.html">Why Study in Malaysia</a></li>
                <li><a class="nav-items" href="../Static/Culture&Environment.html">Culture and Environment</a></li>
                <li><a class="nav-items" href="../Feedback/Feedback & Enquiry.php">Feedback or Enquiry</a></li>
            </ul>

        </nav>

        <?php

        echo "<script>
               function directLocation(page){
                    location.href = page;
                }
            </script>";

        if (isset($_SESSION['ID'])) {


            $chkString = "StudentID" . $_SESSION["ID"] . ".jpeg";

            if (file_exists("../Profile/" . $chkString)) {
                $profileName = "../Profile/" . $chkString;
            } else {
                $profileName = "../Profile/avatar.png";
            }

            echo "<div class='login-nav' style='position: absolute; right: 42px'>
            <nav class='nav1' style='margin-top:53px;margin-left:-25px;'>
            <ul class='nav-link2' style='list-style-type: none;'>
                <li class = 'nav-link2' >
                <a class='nav-items' href='#'>Profile</a>
                <div class = 'dropdown'>
                    <ul style='list-style-type: none;'>
                    <li class='dropdown-link'><button onclick=directLocation('../Mailbox/Mailbox.php');>Mailbox</button></li>
                    <li class='dropdown-link'><button onclick=directLocation('../Update/updateprofile.php');>Update</button></li>
                    <li class='dropdown-link'><button onclick=directLocation('../Online%20Application/onlineapplication.php')>Apply Online</button></li>
                    </ul>
                    </div>
                </li>
            </ul>
            </nav>
             <table style = 'margin-top:-50px;'>
            <tr>
                <td><img class='profile-pic' style='margin-top:-150px;' src='$profileName'></td>
            </tr>
             <tr>
                <td style='font-family: Montserrat;font-weight:bold;color:  #fcf3e7;'> Welcome $_SESSION[Username]</td>
            </tr> 
            <div class = 'btnlogout'>
                <button class = 'btnSolid' style='margin-bottom:-40px;' onclick=directLocation('../Login/logout.php')>Logout</button>
            </div>
            </table>
            </div>";
        } else if (isset($_SESSION['AdminID'])) {

            $chkString = "AdminID" . $_SESSION["AdminID"] . ".jpeg";

            if (file_exists("../AdminProfile/" . $chkString)) {
                $profileName = "../AdminProfile/" . $chkString;
            } else {
                $profileName = "../AdminProfile/avatar.png";
            }

            echo "<div class='login-nav' style='position: absolute; right: 42px'>
            <nav class='nav1' style='margin-top:53px;margin-left:-25px;'>
            <ul class='nav-link2' style='list-style-type: none;'>
                <li class = 'nav-link2' >
                <a class='nav-items' href='#'>Profile</a>
                <div class = 'dropdown'>
                    <ul style='list-style-type: none;'>
                    <li class='dropdown-link'><button onclick=directLocation('../Login/adminRegister.php');>Register Admin</button></li>
                    <li class='dropdown-link'><button onclick=directLocation('../Update/adminupdateprofile.php');>Update</button></li>
                    <li class='dropdown-link'><button onclick=directLocation('../Mailbox/Mailbox%20Admin.php')>Mailbox</button></li>
                    </ul>
                    </div>
                </li>
            </ul>
            </nav>
             <table style = 'margin-top:-50px;'>
            <tr>
                <td><img class='profile-pic' style='margin-top:-150px;' src='$profileName'></td>
            </tr>
             <tr>
                <td style='font-family: Montserrat;font-weight:bold;color:  #fcf3e7;'> Welcome $_SESSION[Username]</td>
            </tr> 
            <div class = 'btnlogout'>
                <button class = 'btnSolid' style='margin-bottom:-40px;' onclick=directLocation('../Login/logout.php')>Logout</button>
            </div>
            </table>
            </div>";
        } else {

            echo "<div class='login-nav' style='margin-top:-20px; position: absolute; right: 0px'>
                    <button style = 'top:7px; position:relative; cursor:pointer;border:1px solid black;width:90px;height:30px;border-radius:3px;background-color:darkred;color:white;' onclick=directLocation('../Login/student_register.php');>Sign Up</button>
                    <button style = 'cursor:pointer;border:1px solid black;width:95px;height:30px;border-radius:3px;background-color:darkred;color:white;' onclick=directLocation('../Login/mainlogin.php');>Login as Student</button>
                    <button style = 'position: relative; top: 35px; right: 140px; cursor:pointer;border:1px solid black;width:90px;height:30px;border-radius:3px;background-color:darkred;color:white;' onclick=directLocation('../Login/mainloginAdmin.php');>Login as Admin</button>
                </div>";
        }

        ?>
        <?php
            if(isset($_GET['newpwd'])){
                if($_GET['newpwd'] == 'doneReset'){
                echo '<center><p class="Success" style="border: 3px solid black;width:200px;height:28px;text-align:center; margin-top: -55px; font-weight:bold;color:#FFFC00;">Password Reset Success</p></center>';
            }
        }
        ?>

    </header>

    <nav>
        <form class='form'>
            <p style="color:white;font-weight:bold;margin-left:600px;margin-right:-700px;margin-top:15px;font-family:'Montserrat', sans-serif;font-size:15px;">Start Searching!</p>
            <input type="text" class="box" placeholder="Search...">
            <button id='search-button' type="submit"><i class="fa fa-search"></i></button>
        </form>
    </nav>

    <div class="slideshow-container">

        <div class="mySlides fade" style='justify-content: space-around'>
            <a style='width:24%' href='https://www.malaymail.com/news/malaysia/2020/10/03/higher-education-minister-hopes-public-universities-will-be-fair-to-student/1909083' target='_blank'>
                <img src="title_1.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.malaymail.com/news/malaysia/2020/10/03/fury-erupts-online-over-ministrys-move-to-delay-physical-student-intakes-at/1909047' target='_blank'>
                <img src="title_2.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.freemalaysiatoday.com/category/nation/2020/10/03/higher-education-minister-says-sorry-over-inconvenience-to-students/' target='_blank'>
                <img src="title_3.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.malaymail.com/news/malaysia/2020/10/02/higher-education-ministry-recommends-postponement-of-physical-intakes-at-ma/1908845' target='_blank'>
                <img src="title_4.jpg" style="height: 180px; width:100%;">
            </a>
        </div>

        <div class="mySlides fade" style='justify-content: space-around'>
            <a style='width:24%' href='https://www.malaymail.com/news/malaysia/2020/10/05/cmco-education-ministry-to-close-122-schools-in-sabah-tomorrow/1909849' target='_blank'>
                <img src="title_5.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.malaymail.com/news/malaysia/2020/10/05/sarawak-minister-says-willing-to-meet-academic-who-criticised-state-educati/1909715' target='_blank'>
                <img src="title_6.png" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.thestar.com.my/news/education/2020/09/06/education-without-borders' target='_blank'>
                <img src="title_7.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.malaymail.com/news/malaysia/2020/10/04/higher-education-ministry-sets-up-24-hour-hotline-for-university-students-r/1909392' target='_blank'>
                <img src="title_8.jpg" style="height: 180px; width:100%;">
            </a>
        </div>

        <div class="mySlides fade" style='justify-content: space-around'>
            <a style='width:24%' href='https://www.thestar.com.my/lifestyle/living/2020/09/13/human-writes-malaysia039s-education-system-is-failing-young-dropouts' target='_blank'>
                <img src="title_9.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.thestar.com.my/news/education/2020/09/13/degrees-in-demand' target='_blank'>
                <img src="title_10.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.freemalaysiatoday.com/category/nation/2020/10/04/netizens-rush-to-offer-help-to-stranded-students/' target='_blank'>
                <img src="title_11.jpg" style="height: 180px; width:100%;">
            </a>
            <a style='width:24%' href='https://www.malaymail.com/news/malaysia/2020/09/26/higher-education-ministry-to-empower-enhance-social-entrepreneurship-progra/1907014' target='_blank'>
                <img src="title_12.jpg" style="height: 180px; width:100%;">
            </a>
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
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "flex";
        }
    </script>

    <script>
        var myIndex = 0;
        //slideChange();
        setInterval(function() {
            slideChange()
        }, 4000);

        function slideChange() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            if (myIndex >= x.length) {
                myIndex = 0;
            }
            x[myIndex].style.display = "flex";
            myIndex++;

            //setTimeout(slideChange, 2000); 
        }
    </script>

    <div>
        <a href='https://www.easyuni.my/en/advice/sureworks-higher-education-fair-2519/' target='_blank'><img src='EduFair1.jpg' width='500' height='300' alt='edu-fair-1' style='float:right; margin-right:100px; margin-bottom:100px;'></a>
        <a href='https://www.thestar.com.my/education/edufair/' target='_blank'><img src='EduFair2.jpg' width='500' height='300' alt='edu-fair-2' style='clear:right; float:right; margin-right:100px; margin-bottom:100px;'> </a>
        <a href='https://www.mabecs.com/event/uk-education-fair-2019/' target='_blank'><img src='EduFair3.jpg' width='500' height='300' alt='edu-fair-3' style='clear:right; float:right; margin-right:100px; margin-bottom:100px;'> </a>
        <a href='https://www.eamo.my/e2180-20190406-star-education-fair-2019' target='_blank'><img src='EduFair4.jpg' width='500' height='300' alt='edu-fair-4' style='clear:right; float:right; margin-right:100px; margin-bottom:100px;'> </a>
        <a href='https://eduadvisor.my/articles/your-101-to-visiting-eduadvisors-virtual-education-fair/' target='_blank'><img src='EduFair5.png' width='500' height='300' alt='edu-fair-5' style='clear:right; float:right; margin-right:100px; margin-bottom:100px;'> </a>
        <div class='content'>
            <h1>About StudyMalaysia.com</h1>
            <div>
                <h4>Malaysia's Best Education Resource Guide Online</h4>
                <p>This website is useful for students looking for further studies in any of the following education
                    levels:
                    <b>Pre-University, Certificate, Diploma, Bachelors Degree, Masters Degree and Phd Degree in Malaysia
                        Private
                        Universities</b>
                </p>
            </div>
        </div>

        <div class='content'>
            <h1>Latest Scholarship</h1>
            <table border='5' style='border-collapse: separate;'>
                <tr>
                    <th>Scholarships</th>
                    <th style="width:20%;">Deadline</th>
                </tr>
                <tr>
                    <td>
                        <a href='https://www.studymalaysia.com/scholarships/curtin-koon-yew-yin-scholarship-2020' target="_blank">Curtin - Koon Yew Yin Scholarship 2020</a>
                        <p>Curtin University is offering the Koon Yew Yin Scholarship 2020 to Malaysian,
                            full-time student who is enrolled in any Engineering Degree Programme in Curtin University,
                            Malaysia.
                        </p>
                    </td>
                    <td style="width:20%;">
                        30 September 2020
                    </td>
                </tr>
            </table>

        </div>

        <div class='content'>
            <h1>Latest News</h1>
            <div class='news-div'>
                <img src="News_1.jpg" style='float:left;height:200px;margin-top:45px;'>
                <h2><a href='https://www.studymalaysia.com/education/top-stories/cambridge-linguaskill-an-english-competency-test-for-university-admission-in-malaysia' target='_blank'>Cambridge Linguaskill – An English competency test for university admission in
                        Malaysia</a></h2>
                <h4>September 22, 2020</h4>
                <p class='news-para'>With effect from 5 August 2020, Malaysian and international students who require an
                    English competency
                    score for
                    university admission in Malaysia can choose to sit for Linguaskill. This applies to students who
                    plan to
                    enrol for
                    diploma, bachelor degr...
                </p>

            </div>
            <div class='news-div'>
                <img src="News_2.jpg" style='float:left;height:200px;margin-top:25px;'>
                <h2><a href='https://www.studymalaysia.com/education/top-stories/covid-19-alert-malaysia-bars-entry-to-long-terms-pass-holders-from-high-risk-countries' target='_blank'>Covid-19 Alert: Malaysia bars entry to long-terms pass holders from high-risk
                        countries</a></h2>
                <h4>September 11, 2020</h4>
                <p class='news-para'>Beginning Monday, 7 September 2020, Malaysia will impose an entry ban on citizens
                    of
                    countries that have recorded more than 150,000 cases of Covid-19.
                </p>

            </div>
            <div class='news-div'>
                <img src="News_3.jpg" style='float:left;height:200px;margin-top:45px;'>
                <h2><a href='https://www.studymalaysia.com/education/top-stories/tvet-diploma-holders-can-now-be-admitted-to-bachelor-degree-programmes-at-private-higher-education-institutions#:~:text=higher%20education%20institutions-,TVET%20diploma%20holders%20can%20now%20be%20admitted%20to%20bachelor,at%20private%20higher%20education%20institutions&text=With%20effect%20from%2021%20April,higher%20education%20institutions%20(HEIs).' target='_blank'>TVET diploma holders can now be admitted to bachelor degree programmes at private higher
                        education institutions</a></h2>
                <h4>September 10, 2020</h4>
                <p class='news-para'>With effect from 21 April, 2020, students who have completed the DKM,
                    DLKM or DVM diploma can apply to gain admission to bachelor degree programmes at private higher
                    education institutions (HEIs).
                </p>

            </div>
            <div class='news-div'>
                <img src="News_4.jpg" style='float:left;height:200px;margin-top:45px;'>
                <h2><a href='https://studymalaysia.com/education/top-stories/whats-next-after-a-levels-results-day' target='_blank'>What’s next after A levels results day</a></h2>
                <h4>August 12, 2020</h4>
                <p class='news-para'>So after all the built up anxiety of results day, you finally get your results and
                    now you might be wondering—what’s next?
                    Most students enrol for A levels with the aim of going to university but now that you’ve earned your
                    A levels, you might ...
                </p>

            </div>


        </div>
    </div>
    <?php
    if (isset($_SESSION['ID']) || isset($_SESSION["AdminID"])) {
        include "chat.php";
    }
    ?>

    <br><br><br><br><br><br><br><br>
    <footer>
        <div class="main-footer">
            <div class="left-side">
                <h3 class="link">Content</h3>
                <p><a href="../Static/PrivateUni.html" style="text-decoration: none; color:white;">Private Universities</a></p>
                <p><a href="../Static/Student Life.html" style="text-decoration: none; color:white;">Student Life In Malaysia</a></p>
                <p><a href="../Static/Why Study.html" style="text-decoration: none; color:white;">Why Study In Malaysia</a></p>

            </div>
            <div class="center">
                <p><a href="../Static/Culture&Environment.html" style="text-decoration: none; color:white;">Culture & Environment</a></p>
                <p><a href="../Feedback/Feedback & Enquiry.php" style="text-decoration: none; color:white;">Feedback or Enquiry</a></p>
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
                    <a href='#'>HOME</a>
                    <a href='#'>ABOUT</a>
                    <a href='../Misc/others.html#help'>HELP</a>
                    <a href='../Misc/others.html#privacy'>PRIVACY</a>
                    <a href='../Misc/others.html#terms'>TERMS</a>
                    <p class="copyright">&copy;Study Malaysia 2020</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>