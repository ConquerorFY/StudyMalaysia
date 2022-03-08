<?php

date_default_timezone_set('Asia/Singapore');
session_start();
include 'reviewFunctions.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunway University</title>
    <link rel="icon" href="/Users/premsharaan/Documents/project/helloworld/WDT_Prject/Screenshot 2020-08-22 at 11.32.58 PM.png">
    <link rel='stylesheet' href='uni_style.css'>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>
    <div id='left-nav-menu' class='nav' style="background-color:#CD5C5C;">
        <a href='#' class="close" onclick=closeSlideMenu()>
            <i class="fas fa-times"></i>
        </a>

        <a href='../Main Page/MainPage.php'>Main Page</a>
        <a id='University' href='../Static/PrivateUni.html'>Private Universities in Malaysia</a>

        <div class='sub-nav' style="background-color: lightcoral;">
            <a href="#">Sunway University</a>
            <a href="Taylor University.php">Taylor University</a>
            <a href="Asia Pacific University.php">Asia Pacific University</a>
        </div>

        <a href='../Static/Student Life.html'>Student Life in Malaysia</a>
        <a href='../Static/Why Study.html'>Why Study in Malaysia</a>
        <a id='CultureEnvironment' href='../Static/Culture&Environment.html'>Culture & Environment in Malaysia</a>

        <div class='sub-nav' style="background-color: lightcoral;">
            <a href="../Static/Chinese Culture.html">Chinese</a>
            <a href="../Static/Malay Culture.html">Malay</a>
            <a href="../Static/Indian Culture.html">Indian</a>
        </div>

        <a href='../Feedback/Feedback & Enquiry.php'>Feedback or Enquiry</a>
    </div>

    <div id='main-content'>
        <div id='nav-div'>
            <nav>
                <a href="#" class="main-menu" onclick=myFunction()>
                    <i class="fas fa-bars" style="color: white;"></i>
                </a>

            </nav>
        </div>

        <h1>Sunway University</h1>

        <div style="display:flex; ">
        <img src='Sunway_Campus.jpg' alt="sunway" height="400" width="800" style="margin-top:90px;padding-bottom: 10px;">
        <img src='Sunway_0.jpg' alt="sunway" height="200" width="300" style="margin-top:90px;padding-bottom: 10px;">
        </div>

        <nav id="content-selector">
            <div id='button-1' class="content-type">Profile</div>
            <div id='button-2' class="content-type">Courses</div>
            <div id='button-3' class="content-type">Resources & Facilities</div>
            <div id='button-4' class="content-type">International University Partnerships</div>
            <div id='button-5' class="content-type">Scholarships & Bursaries</div>
            <div id='button-6' class="content-type">Location & Contact</div>
            <div id='button-7' class="content-type">Reviews</div>
        </nav>

        <div id='content-show'>
            <div id='content-1' style="text-align:center;">
                <h2>University Profile</h2>

                <h4>About the University</h4><br>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Sunway University, originally Sunway College formed more than 30 years ago, is today part of the Sunway Education Group which is owned and governed by 
                    the Jeffrey Cheah Foundation (JCF). The University is one of 15 institutions which includes Sunway College and Sunway International School.
                    
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="Sunway_1.jpg" alt=sunway-1 style="float:right;" width='320px' height='213px'>
                    Sunway University is a hub of multicultural interaction, a platform for sharing, learning and networking. In its aim to deliver quality higher education 
                    Sunway University works closely in partnership, collaborating with world-class partners Lancaster University and Le Cordon Bleu International. 
                    With the partnerships, Sunway University’s home-grown degrees in areas of business, accounting, banking and finance, financial mathematics and statistics, 
                    economics and management, psychology, communication, computing and information systems, biological and medical sciences are validated by Lancaster University 
                    while its international hospitality management and culinary management degrees are accredited by the Le Cordon Bleu. The University also offers degrees in various 
                    other areas which include nursing, biomedicine, actuarial studies, contemporary music (audio technology), music performance, design communication, interior 
                    architecture, global supply chain management and international business.

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Since 1997, the institution has been governed by the Sunway Education Trust Fund where operating surpluses are channelled back into the institution and 
                    disbursed as scholarships and research grants. This trust fund transformed into the Jeffrey Cheah Foundation in 2010.

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Mission and Vision Sunway University aspires to be a World Class University. The missions of Sunway University are to provide quality education of choice 
                    and valuable experience for individuals who will contribute to local and global needs; to be devoted to the advancement, transmission and application 
                    of knowledge; and to support Malaysia's aspiration in becoming a regional centre of educational excellence.
                    
                </p><br>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cBzCumrnfzg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div><br><br>

                <h4>History</h4><br>
                <p>
                    <img src="Sunway_2.jpg" style= 'float:right' alt=sunway-2 width='320px' height='213px'>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Sunway University was established in 2004 as Sunway University College. It was upgraded by the Malaysian Ministry of Higher Education to full university 
                    status in January 2011 and became Sunway University.

                </p><br>
                <div class="video" style='width:40%; margin:auto; clear:right;'>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gD7D1BLGkKA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div><br><br>

                <h4>Why Study Here</h4><br>

                <!-- 
                    <p> tag can only contain inline items such as <strong> or <br> but cannot contain block items like <ol> & <ul>
                    <p> 
                        <ul><li>(Something)</li></ul> 
                    </p> -> li will run outside of <p>,
                    </p> will be inserted automatically
                    -->
                <img src="Sunway_3.jpg" alt=sunway-3>
                <ul>
                    <li>Sunway University was one of the eight universities to be awarded the Premier Digital Tech University status by MDEC (Malaysia Digital Economy Corporation)</li><br>
                    <li>SETARA (Rating System for Malaysian Higher Education) 2017, Sunway received a 5-Star (Excellent) rating in the Emerging University category. It is also an ISO 9001: 2015 certified institution, 
                        further amplifying the University’s commitment to quality on all levels in the higher education provision.</li><br>
                    <li>No.1 in Asia for Physical Library and Financial Services - Student Barometer Survey</li><br>
                    <li>A high score was also achieved for Learning and Living experience, highest out of 12 institutions surveyed in Malaysia.</li><br>
                    <li>High scores were achieved in the area of living experience in accommodation, financial support, safety, facilities and transport links. For support services, 
                        high scores were given by the students for financial services, accommodation office, Muslim prayer room and campus cafeteria. For arrival, accommodation topped the list.</li><br>
                    <li>“Outstanding Educational Institutions for Private Universities or Colleges” award - Sin Chew Education Awards 2019</li><br>
                </ul>
            </div>

            <div id='content-2'>
                <h2>Courses Offered</h2>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Diploma Level</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diploma in Culinary Arts</td>
                            <td>Fees (Local): From RM 37,750</td>
                            <td>Duration: 2 years, 6-7 semesters</td>
                        </tr>
                        <tr>
                            <td>Diploma in Events Management</td>
                            <td>Fees (Local): From RM 36,000</td>
                            <td>Duration: 2 years, 6-7 semesters</td>
                        </tr>
                        <tr>
                            <td>Diploma in Graphic & Multimedia Design</td>
                            <td>Fees (Local): From RM 45,580</td>
                            <td>Duration: 2 years and 6 months</td>
                        </tr>
                        <tr>
                            <td>Diploma in Hotel Management</td>
                            <td>Fees (Local): From RM 35,000</td>
                            <td>Duration: 2 years, 6-7 semesters</td>
                        </tr>
                        <tr>
                            <td>Diploma in Interior Design</td>
                            <td>Fees (Local): From RM 45,580</td>
                            <td>Duration: 2 years and 6 months</td>
                        </tr>
                        <tr>
                            <td>Diploma in Nursing</td>
                            <td>Fees (Local): From RM 36,400</td>
                            <td>Duration: 3 years, 9 semesters</td>
                        </tr>
                        <tr>
                            <td>Diploma in Performing Arts</td>
                            <td>Fees (Local): From RM 45,700</td>
                            <td>Duration: 2 years</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Bachelor's Degree Level</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>American Degree Transfer Program (Arts)</td>
                            <td>Fees (Local): From RM 39,000</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>American Degree Transfer Programme (Science / Engineering)</td>
                            <td>Fees (Local): From RM 39,000</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>B.Sc.(Hons) Information Systems (Business Analytics)</td>
                            <td>Fees (Local): From RM 77,440</td>
                            <td>Duration: 3 Yrs (9 Sems)</td>
                        </tr>
                        <tr>
                            <td>B.Sc.(Hons) Information Technology (Computer Networking and Security)</td>
                            <td>Fees (Local): From RM 77,550</td>
                            <td>Duration: 3 Yrs (9 Sems)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) Communication</td>
                            <td>Fees (Local): From RM 71,660</td>
                            <td>Duration: 3 Yrs (9 Sem)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) Contemporary Music (Audio Technology)</td>
                            <td>Fees (Local): From RM 77,520</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) Design Communication</td>
                            <td>Fees (Local): From RM 77,640</td>
                            <td>Duration: 42 months</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) Digital Film Production</td>
                            <td>Fees (Local): From RM 77,520</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) in Interior Architecture</td>
                            <td>Fees (Local): From RM 78,680</td>
                            <td>Duration: 42 months</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) Music Performance</td>
                            <td>Fees (Local): From RM 77,460</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Business Analytics (Hons)</td>
                            <td>Fees (Local): From RM 82,630</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Information Systems (Hons) in Mobile Computing with Entrepreneurship</td>
                            <td>Fees (Local): From RM 77,550</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Actuarial Studies</td>
                            <td>Fees (Local): From RM 78,500</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Biology with Psychology</td>
                            <td>Fees (Local): From RM 78,620</td>
                            <td>Duration: 3 Yrs (9 Sem)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Biomedicine</td>
                            <td>Fees (Local): From RM 84,500</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Business Management</td>
                            <td>Fees (Local): From RM 77,400</td>
                            <td>Duration: 3 Yrs (9 Sems)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Business Studies</td>
                            <td>Fees (Local): From RM 77,400</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Computer Science</td>
                            <td>Fees (Local): From RM 77,550</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Convention and Event Management</td>
                            <td>Fees (Local): From RM 69,950</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Culinary Management</td>
                            <td>Fees (Local): From RM 72,180</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Entrepreneurship</td>
                            <td>Fees (Local): From RM 82,650</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Financial Analysis</td>
                            <td>Fees (Local): From RM 73,800</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Financial Economics</td>
                            <td>Fees (Local): From RM 73,800</td>
                            <td>Duration: 3 Years (9 Semester)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Global Supply Chain Management</td>
                            <td>Fees (Local): From RM 78,550</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) in Industrial Statistics</td>
                            <td>Fees (Local): From RM 77,800</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Information Technology</td>
                            <td>Fees (Local): From RM 72,450</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) International Business</td>
                            <td>Fees (Local): From RM 82,630</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) International Hospitality Management</td>
                            <td>Fees (Local): From RM 72,700</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Marketing</td>
                            <td>Fees (Local): From RM 82,600</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Medical Biotechnology</td>
                            <td>Fees (Local): From RM 82,360</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Psychology</td>
                            <td>Fees (Local): From RM 78,360</td>
                            <td>Duration: 3 Years (9 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Software Engineering (Hons)</td>
                            <td>Fees (Local): From RM 74,500</td>
                            <td>Duration: 3 Yrs, 9 Sems</td>
                        </tr>
                        <tr>
                            <td>M.Sc. in Computer Science (By Research)</td>
                            <td>Fees (Local): From RM 30,800</td>
                            <td>Duration: 2/3 Yrs</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Masters Degree Level</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>M.Sc in Psychology</td>
                            <td>Fees (Local): From RM 30,800</td>
                            <td>Duration: 2/3 Years</td>
                        </tr>
                        <tr>
                            <td>M.Sc.in Information Systems</td>
                            <td>Fees (Local): From RM 35,000</td>
                            <td>Duration: 2/3 Yrs</td>
                        </tr>
                        <tr>
                            <td>M.Sc.in Life Sciences</td>
                            <td>Fees (Local): From RM 30,800</td>
                            <td>Duration: 2/3 Years</td>
                        </tr>
                        <tr>
                            <td>MA in Creative Arts and Media</td>
                            <td>Fees (Local): From RM 30,720</td>
                            <td>Duration: FT (Min 2 Yrs, Max 4 Yrs) PT (Min 3 Yrs, Max 6 Yrs)</td>
                        </tr>
                        <tr>
                            <td>Master in Business Administration</td>
                            <td>Fees (Local): From RM 67,900</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Master in Public Policy</td>
                            <td>Fees (Local): From RM 44,000</td>
                            <td>Duration: 1/2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Master in Sustainable Development Management</td>
                            <td>Fees (Local): From RM 47,320</td>
                            <td>Duration: 1.5 Yrs</td>
                        </tr>
                        <tr>
                            <td>Master of Arts in Visual Communication and Media Studies</td>
                            <td>Fees (Local): From RM 37,530</td>
                            <td>Duration: 1/2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Master of Human Resources Management</td>
                            <td>Fees (Local): From RM 38,400</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Master of Marketing</td>
                            <td>Fees (Local): From RM 55,000</td>
                            <td>Duration: 1/2 Yrs</td>
                        </tr>
                        <tr>
                            <td>MSc in Actuarial Science</td>
                            <td>Fees (Local): From RM 35,700</td>
                            <td>Duration: 2/3 Yrs</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Postgraduate Diploma</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Post Graduate Diploma in Primary Care for Elderly</td>
                            <td>Fees (Local): From RM 20,000</td>
                            <td>Duration: 1/2 Yrs</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Doctoral Degree (Ph.D) Level</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Doctor of Philosophy (Business)</td>
                            <td>Fees (Local): From RM 35,700/td>
                            <td>Duration: 3/4 years</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (Computing)</td>
                            <td>Fees (Local): From RM 39,720</td>
                            <td>Duration: 3/4 Years</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy in Biology</td>
                            <td>Fees (Local): From RM 39,720</td>
                            <td>Duration: 3/4 Years</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy in Medical Science</td>
                            <td>Fees (Local): From RM 39,720</td>
                            <td>Duration: 3/4 Yrs</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy in Psychology</td>
                            <td>Fees (Local): From RM 39,720</td>
                            <td>Duration: 3/5 Yrs</td>
                        </tr>
                        <tr>
                            <td>Ph.D in Creative Arts and Media</td>
                            <td>Fees (Local): From RM 30,800</td>
                            <td>Duration: FT (Min 3 Yrs, Max 6 Yrs) PT (Min 4 Yrs, Max 8 Yrs)</td>
                        </tr>
                        <tr>
                            <td>Ph.D in Mathematical Sciences</td>
                            <td>Fees (Local): From RM 30,800</td>
                            <td>Duration: 3/4 Yrs</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id='content-3'>
                <h2>Resources & Facilities</h2>
                <p>
                    &nbsp;&nbsp;Sunway University is well equipped with first-class academic facilities. There are more than 120 
                    classrooms and 15 lecture theatres which are fully air-conditioned and equipped with state-of-the-art teaching devices. 
                    The Main campus is fitted with 24-hour wireless internet (WiFi) access, making it easy to go online almost anywhere on campus. 
                    During school hours, computer labs allow students to work on their assignments and provide services such as printing, scanning and photocopying.

                    <br><br>&nbsp;&nbsp;
                    Specialised academic facilities are used for designated courses. Psychology, computing, nursing and ADTP programmes utilise 
                    their own respective laboratories which include simulated wards and skills laboratory for training (nursing), observation 
                    rooms (psychology), computing research labs (computing), biological science lab and science labs for practical work (ADTP). 
                    SHTLM students have an entire floor dedicated to their programmes which include the training restaurant and delicatessen, 
                    mock-up hotel suite and travel bureau, and the pastry demo kitchen.

                    <br><br>&nbsp;&nbsp;
                    Art and Design students work in specialised studios and are given designated areas on campus to exhibit their 
                    pieces. The Roof Top Theatre is used by students of the Performance & Media programme and it is a vast studio 
                    complete with cutting edge audio-visual production equipment.

                </p>
                <p class="images-para" style='height:auto;'>
                    <img src="Sunway_4.jpg" alt='sunway-4'>
                    <img src="Sunway_5.jpg" alt='sunway-5'>
                </p>
            </div>

            <div id='content-4'>
                <h2>Student Surport Services</h2>
                <p>
                    &nbsp;&nbsp;The Student Life Department of Sunway University is housed in the Student Centre and offers a wide range 
                    of professional and advisory services. It provides a supportive and friendly environment which includes the counselling 
                    unit, coordination of extra-curricular clubs and societies, alumni office and various conveniences like a sick bay and travel bureau.<br><br>

                    &nbsp;&nbsp;PRePARE, the campus career centre, and the LEAP employability training programme are among the most active 
                    student development activities on campus. PRePARE, with its motto 'eQUIP, eNHANCE and eMPOWER', regularly holds workshops 
                    on CV-writing and prepare students for the working world through its extensive network. The LEAP programme helps students 
                    upgrade themselves through different activities like career talks, company visits, Job Shadow Day and soft-skills workshops.<br><br>

                    &nbsp;&nbsp;The International Office (IO) looks after the welfare of foreign students, medical insurance claims 
                    assistance, and the application and renewal of student visas.<br><br>

                </p>
            </div>

            <div id='content-5'>
                <h2>Scholarships & Bursaries</h2>
                <p>
                    &nbsp;&nbsp;Sunway University offers various scholarships including:<br><br>

                    &nbsp;&nbsp;Jeffrey Cheah Entrance Scholarship, Jeffrey Cheah Ace (The Advance and Continuing Excellence) Scholarship, 
                    Jeffrey Cheah Continuing Scholarship, Jeffrey Cheah Scholastic Award, Jeffrey Cheah Foundation – Sunway Group Scholarship, 
                    Jeffrey Cheah Foundation Community Scholarship, Jeffrey Cheah Foundation Scholarship, Sunway-TFM Scholarship, SEG-Elene Cooke 
                    Education Fund, The Star Education Fund, Sin Chew Education Fund, Nanyang Tertiary Education Fund, Tun Dr Siti Hasmah Mohd Ali 
                    Scholarship For Creative Arts and Music, Sunway University Young Chef Scholarship, Sunway University Art and Design Scholarship, 
                    The Chancellors Scholarship of Sunway University & Lancaster University, Sunway University Postgraduate By Research Scholarship, 
                    Sunway University Taught Masters Scholarship, Sunway ECA Achievers and Sports Awards, Sunway Excellence Scholarship, Sunway Sports 
                    Scholarship, and Sunway Music Scholarship.<br><br>

                    &nbsp;&nbsp;Also available are financial aid like the Sunway University Community Bursary and Sibling & Parent Alumni Discount. 
                    Most students also qualify for the PTPTN study loan and EPF withdrawal.<br><br>

                </p>
            </div>

            <div id='content-6'>
                <h2>Location & Contact</h2>
                <h4>Sunway University</h4>
                <div class="map" style="text-align:center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.103222392427!2d101.60135171475709!3d3.0670775977665063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c8f5912644b%3A0x77612fa0225cad69!2sSunway%20University!5e0!3m2!1sen!2smy!4v1601991576562!5m2!1sen!2smy" 
                    width="700" height="400" frameborder="0" style="border:0;margin-left: 220px;margin-top: 20px;" allowfullscreen aria-hidden="false" tabindex="0">
                </iframe>
                </div><br>
                <center>
                    <p style="font-weight: bold;">
                        Address: International Office
                        No.5, Jalan Universiti,Bandar Sunway
                        47500 Petaling Jaya
                        Selangor<br>
                        Tel: 60-3-74918622<br><br>
                        Website: <a href="https://university.sunway.edu.my/">https://university.sunway.edu.my/</a>
                    </p>
                </center>
            </div>

            <div id='content-7'>
                <h2>Reviews</h2>
                <?php
                if(isset($_SESSION['ID'])){
                    echo "
                    <div style='margin-bottom:100px; padding:20px; border: 2px solid black;'>
                    <form method='post' action='".writeReview('sunway_review',$conn)."'>
                    <input type='hidden' name='review-id' value='".$_SESSION['ID']."'>
                    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                    <label>Ratings: </label>
                    <input style='width:50%' type='number' name='rating' min='1' max='5' placeholder='Rate this university on the scale of 1 to 5' required>
                    <br><br>
                    <label>Reviews: </label>
                    <textarea style='width:100%; resize:vertical;' type='text' name='review' required></textarea>
                    <br><br>
                    <input type='submit' name='reviewSubmit' value='POST'>
                    </form>";
                }else{
                    echo "<div>
                    <i><b>Please login into your student account to provide reviews</b></i>
                    <br><br>";

                }
                echo "</div>";
                getReviews('sunway_review',$conn);
                ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="main-footer">
            <div class="left-side">
                <h2>Content</h2>
                <p><a href="../Static/PrivateUni.html" style="text-decoration:none; color:white;">Private Universities</a></p>
                <p><a href="../Static/Student Life.html" style="text-decoration:none; color:white;">Student Life In Malaysia</a></p>
                <p><a href="../Static/Why Study.html" style="text-decoration:none; color:white;">Why Study In Malaysia</a></p>

            </div>
            <div class="center">
                <p><a href="../Static/Culture&Environment.html" style="text-decoration:none; color:white;">Culture & Environment</a></p>
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
    </footer>




    </div>

</body>

<script>
    function closeSlideMenu() {
        document.querySelector("#left-nav-menu").style.width = '0';
        document.querySelector('#main-content').style.marginLeft = '0';
    }

    function myFunction() {
        document.querySelector("#left-nav-menu").style.width = '300px';
        document.querySelector('#main-content').style.marginLeft = '300px';
    }

    function slideOpen(i) {
        if (i === 1) {
            document.querySelectorAll('div.sub-nav')[i].style.height = '270px';
        } else {
            document.querySelectorAll('div.sub-nav')[i].style.height = '270px';
        }
        document.querySelectorAll('div.sub-nav')[i].querySelectorAll('a').forEach(i => {
            i.style.visibility = "visible";
            i.style.transform = 'scaleY(1)';
            i.style.cursor = 'pointer';
        })
    }

    function slideClose(i) {
        document.querySelectorAll('div.sub-nav')[i].style.height = '0px';
        document.querySelectorAll('div.sub-nav')[i].querySelectorAll('a').forEach(i => {
            i.style.visibility = "hidden";
            i.style.transform = 'scaleY(0)';
            i.style.cursor = 'none';
        })
    }

    document.querySelector('#CultureEnvironment').onmouseover = function () {
        slideOpen(1);
    }

    document.querySelector('#CultureEnvironment').onmouseleave = function () {
        slideClose(1);

    }

    document.querySelector('#University').onmouseover = function () {
        slideOpen(0);

    }

    document.querySelector('#University').onmouseleave = function () {
        slideClose(0);

    }

    document.querySelectorAll('div.sub-nav').forEach((element, i) => {
        element.onmouseenter = function () {
            slideOpen(i);
        };
        element.onmouseleave = function () {
            slideClose(i);
        };
    }
    )

    document.addEventListener('DOMContentLoaded', function () {

        document.getElementById('content-1').style.display = 'block';
        document.getElementById('content-2').style.display = 'none';
        document.getElementById('content-3').style.display = 'none';
        document.getElementById('content-4').style.display = 'none';
        document.getElementById('content-5').style.display = 'none';
        document.getElementById('content-6').style.display = 'none';
        document.getElementById('content-7').style.display = 'none';

        for (let i = 1; i < 8; i++) {
            document.getElementById(`button-${i}`).onclick = function () {
                for (let j = 1; j < 8; j++) {
                    if (j === i) {
                        document.getElementById(`content-${j}`).style.display = 'block';
                    }

                    else {
                        document.getElementById(`content-${j}`).style.display = 'none';
                    }
                }
            }
        }

    })
</script>

</html>