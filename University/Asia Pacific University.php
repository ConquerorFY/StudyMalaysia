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
    <title>Asia Pacific University</title>
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
            <a href="Sunway University.php">Sunway University</a>
            <a href="Taylor University.php">Taylor University</a>
            <a href="#">Asia Pacific University</a>
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

        <h1>Asia Pacific University</h1>

        <div style="display:flex; ">
        <img src='APU_Campus.jpg' alt="apu" height="400" width="800" style="margin-top:90px;padding-bottom: 10px;">
        <img src='APU.jpeg' alt="apu" height="200" width="300" style="margin-top:90px;padding-bottom: 10px;">
        </div>

        <nav id="content-selector">
            <div id='button-1' class="content-type">Profile</div>
            <div id='button-2' class="content-type">Courses</div>
            <div id='button-3' class="content-type">Resources & Facilities</div>
            <div id='button-4' class="content-type">Student Experiences & Activities</div>
            <div id='button-5' class="content-type">Awards</div>
            <div id='button-6' class="content-type">Location & Contact</div>
            <div id='button-7' class="content-type">Reviews</div>
        </nav>

        <div id='content-show'>
            <div id='content-1' style="text-align:center;">
                <h2>University Profile</h2>

                <h4>About the University</h4><br>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    The Asia Pacific University of Technology & Innovation (APU) is amongst Malaysia’s Premier Private
                    Universities, and is where a unique fusion of technology,
                    innovation and creativity works effectively towards preparing graduates for significant roles in
                    business and society globally. APU has earned an enviable reputation
                    as an award-winning University through its achievements in winning a host of prestigious awards at
                    national and international levels. <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="APU_13.jpg" alt=apu-13 style="float:right;">
                    APU was announced as among the Highest Rated Emerging Universities in Malaysia, being rated at TIER
                    5 (EXCELLENT) under the SETARA 2011 Ratings by the Ministry of
                    Higher Education (MOHE) and Malaysian Qualifications Agency (MQA), and has maintained this Excellent
                    rating in the SETARA 2013 Ratings and the latest SETARA 2017 Rating.
                    Under the Quacquarelli Symonds (QS) 2017 Ratings, APU was awarded 5-Stars in 4 categories of the QS
                    Stars Ratings – Teaching, Employability, Facilities and Inclusiveness.
                    The QS Stars rating is an international rating system that measures achievements and qualities of
                    universities worldwide. In addition, in 2017, APU was also announced as one of
                    Malaysia’s Premier Digital Institution of Higher Learning (IHL) by the Malaysia Digital Economy
                    Corporation (MDEC), for its commitment in offering top-notch digital technology
                    courses and ensuring highly-skilled graduates continue to flourish and fill future digital job
                    demands locally and globally.<br><br>
                    &nbsp;&nbsp;
                    APU’s achievements bear testimony to our commitment to excellence in higher education and training,
                    as well as innovative research and development and commercialization.
                    APU (via APIIT) is Malaysia’s first Institution to achieve Multimedia Super Corridor (MSC) Company
                    Status. Through our network of APIIT Education Group branch campuses established
                    in Sri Lanka and India, APU also reaches out to young aspiring professionals in these countries,
                    providing them with a unique opportunity of experiencing international best practices
                    in higher education using curricula, processes, resources and systems which have been developed in
                    Malaysia. APU’s academic programmes are all approved by the Ministry of Higher Education
                    of Malaysia and the qualifications are accredited or provisionally accredited by the Malaysian
                    Qualifications Agency (MQA).
                </p><br>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3lHwUOXMqBY" frameborder="1"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div><br><br>

                <h4>History</h4><br>
                <p>
                    <img src="APU_14.jpg" alt=apu-14 style="float:right;">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Originally established as the Asia Pacific Institute of Information Technology (APIIT) in 1993 and
                    Asia Pacific University College of Technology & Innovation (UCTI)
                    in 2004, APU’s sound approach to nurturing school leavers into qualified professionals has resulted
                    in our graduates being highly sought after by employers. With an international
                    student community of more than 11,000 students from more than 120 countries studying in its
                    Malaysian campus, APU offers a truly cosmopolitan learning environment which prepares
                    students well for the global challenges which lie ahead. APU offers a wide range of degrees with
                    Technology as a common core. It is APU’s aim to nurture and encourage innovation
                    through our programmes, with the intention of producing individuals who will learn, adapt and think
                    differently in new and better ways.
                </p><br>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/gIsMC4vT9JM"
                        frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
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
                <img src="APU_15.jpg" alt=apu-15>
                <ul>
                    <li>Proven Track Record of Employable Graduates – 95%+ Employed by Graduation.</li><br>
                    <li>Amongst Highest Rated Emerging Universities in Malaysia – Rated 5-Stars under SETARA 2011, 2013
                        and 2017</li><br>
                    <li>Premier Digital Technology Institute of Higher Learning in Malaysia – awarded by the Malaysian
                        Digital Economy Corporation (MDEC)</li><br>
                    <li>Internationally Recognized by QS – Achieved 5-Stars ranking in 4 categories: Facilities,
                        Teaching, Inclusiveness and Employability</li><br>
                    <li>Internationally Recognized Programmes.</li><br>
                    <li>More than 40,000 Graduates & Alumni.</li><br>
                    <li>Over 12,000 students from more than 130 Countries.</li><br>
                    <li>Award-Winning Students who regularly win both local and international competitions.</li><br>
                    <li>Engineering Degrees Accredited by Board of Engineers (BEM).</li><br>
                    <li>Engineering Degrees Internationally Recognized under Washington Accord.</li><br>
                    <li>One of the only 7 universities in Asia to receive full accreditation by the Institute and
                        Faculty of Actuaries (IFoA), UK</li><br>
                    <li>Programmes that are Industry 4.0-ready – Cyber Security, Financial Technology (FinTech), Cloud
                        Computing, E-Business, Digital Marketing, Internet of Things (IoT), Data Science & Intelligent
                        Systems</li><br>
                </ul>
            </div>

            <div id='content-2'>
                <h2>Courses Offered</h2>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Pre-University/Foundation Studies</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Foundation (Business & Finance)</td>
                            <td>Fees (Local): RM 24,800</td>
                            <td>Duration: 1 year (3 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Foundation (Computing & Technology)</td>
                            <td>Fees (Local): RM 24,800</td>
                            <td>Duration: 1 year (3 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Foundation (Design & Media)</td>
                            <td>Fees (Local): RM 24,800</td>
                            <td>Duration: 1 year (3 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Foundation (Engineering)</td>
                            <td>Fees (Local): RM 25,200</td>
                            <td>Duration: 1 year (3 Semesters)</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Certificate Level</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>APIIT Certificate in Administrative Skills</td>
                            <td>Fees (Local): RM 15,850</td>
                            <td>Duration: 16 months (3 Semesters)</td>
                        </tr>
                        <tr>
                            <td>APIIT Certificate in Information & Communications Technology</td>
                            <td>Fees (Local): RM 15,850</td>
                            <td>Duration: 16 months (3 Semesters)</td>
                        </tr>
                    </tbody>
                </table>

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
                            <td>
                                Diploma in Accounting</td>
                            <td>Fees (Local): RM 42,800</td>
                            <td>Duration: 2 years (5 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Diploma in Business Administration</td>
                            <td>Fees (Local): RM 42,800</td>
                            <td>Duration: 2 years (5 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Diploma in Business with InformationTechnology</td>
                            <td>Fees (Local): RM 42,800</td>
                            <td>Duration: 2 years (5 Semesters)</td>
                        </tr>
                        <tr>
                            <td>Diploma in Design & Media</td>
                            <td>Fees (Local): RM 39,600</td>
                            <td>Duration: 2 years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Diploma in Electrical & Electronic Engineering</td>
                            <td>Fees (Local): RM 39,600</td>
                            <td>Duration: 2.5 years (7 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Diploma in Information & Communications Technology</td>
                            <td>Fees (Local): RM 44,900</td>
                            <td>Duration: 2 years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Diploma in Information & Communications Technology with a specialism in Data Informatics
                            </td>
                            <td>Fees (Local): RM 44,900</td>
                            <td>Duration: 2 years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Diploma in Information & Communications Technology with a specialism in Interactive
                                Technology</td>
                            <td>Fees (Local): RM 44,900</td>
                            <td>Duration: 2 years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Diploma in Information & Communications Technology with a specialism in Software
                                Engineering
                            </td>
                            <td>Fees (Local): RM 44,900</td>
                            <td>Duration: 2 years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Diploma in International Studies</td>
                            <td>Fees (Local): RM 39,600</td>
                            <td>Duration: 2 years (5 Semesters)</td>
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
                            <td>BA (Hons) Animation</td>
                            <td>Fees (Local): RM 81,800</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>BA (Hons) in Accounting & Finance (with specialism in Internal Audit)</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>BA (Hons) in Accounting and Finance</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Accounting and Finance with a specialism in Forensic Accounting</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Accounting and Finance with a specialism in Forex & Investments</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Accounting and Finance with a specialism in Taxation</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Business Management</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Business Management with a specialism in E-Business</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Digital Advertising</td>
                            <td>Fees (Local): RM 81,800</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Human Resource Management</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Industrial Design</td>
                            <td>Fees (Local): RM 81,800</td>
                            <td>Duration: 3 Years</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in International Business Management</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in International Relations</td>
                            <td>Fees (Local): RM 78,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Marketing Management</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Marketing Management with a specialism in Digital Marketing</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Media and Communication Studies</td>
                            <td>Fees (Local): RM 78,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) in Tourism Management</td>
                            <td>Fees (Local): RM 81,800</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BA (Hons) Visual Effects</td>
                            <td>Fees (Local): RM 81,800</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor in Banking and Finance (Hons)</td>
                            <td>Fees (Local): RM 78,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor in Banking and Finance (Hons) with a specialism in Financial Technology</td>
                            <td>Fees (Local): RM 78,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor in Banking and Finance (Hons) with a specialism in Investment and Risk
                                Management
                            </td>
                            <td>Fees (Local): RM 78,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor of Computer Engineering with Honours</td>
                            <td>Fees (Local): RM 102,000</td>
                            <td>Duration: 4 years (8 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor of Computer Science (Hons) (Intelligent Systems)</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor of Engineering in Electrical & Electronic Engineering with Honours</td>
                            <td>Fees (Local): RM 102,000</td>
                            <td>Duration: 4 years (8 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor of Engineering in Mechatronic Engineering with Honours</td>
                            <td>Fees (Local): RM 102,000</td>
                            <td>Duration: 4 years (8 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor of Engineering in Petroleum Engineering with Honours</td>
                            <td>Fees (Local): RM 102,000</td>
                            <td>Duration: 4 years (8 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor of Engineering in Telecommunication Engineering with Honours</td>
                            <td>Fees (Local): RM 102,000</td>
                            <td>Duration: 4 years (8 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                Bachelor of Science (Honours) in Actuarial Studies</td>
                            <td>Fees (Local): RM 78,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Computer Games Development</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Computer Science</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Computer Science (Cyber Security)</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Computer Science with a specialism in Digital Forensics</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology with a specialism in Business Information Systems
                            </td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology with a specialism in Cloud Computing</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology with a specialism in Information Systems Security
                            </td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology with a specialism in Internet of Things (IOT)</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology with a specialism in Network Computing</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology with specialism in Financial Technology (FinTech)
                            </td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Information Technology with specialism in Mobile Technology</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Multimedia Technology</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Multimedia Technology with a specialism in VR/AR</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
                        </tr>
                        <tr>
                            <td>
                                BSc (Hons) in Software Engineering</td>
                            <td>Fees (Local): RM 87,000</td>
                            <td>Duration: 3 Years (6 Semesters)</td>
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
                            <td>
                                Master of Accounting</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: 1+ years</td>
                        </tr>
                        <tr>
                            <td>Master of Accounting in Forensic Analysis</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: 1+ years</td>
                        </tr>
                        <tr>
                            <td>Master of Business Administration (MBA)</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: Full time (1+ years) / Part time (2-3 years)</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Business Administration (MBA) (Euro Asia Business)</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: 1+ years</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Finance</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: Full time (1+ years) / Part time (2-3 years)</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Philosophy in Engineering</td>
                            <td>Fees (Local): RM 25,200</td>
                            <td>Duration: Full time (2 years) / Part time (3-4 years)</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Philosophy in Management</td>
                            <td>Fees (Local): RM 25,200</td>
                            <td>Duration: 2 years</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Project Management</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: 1+ years</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Science in Artificial Intelligence</td>
                            <td>Fees (Local): RM 32,600</td>
                            <td>Duration: Full time (1+ years) / Part time (2-3 years)</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Science in Computing (By Research)</td>
                            <td>Fees (Local): RM 25,200</td>
                            <td>Duration: Full time (2 years) / Part time (3-4 years)</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Science in Cyber Security</td>
                            <td>Fees (Local): RM 32,600</td>
                            <td>Duration: 1+ years</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Science in Global Marketing Management</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: 1+ years</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Science in International Business Communications</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: 1+ years</td>
                        </tr>
                        <tr>
                            <td>
                                Master of Technology Management</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: Full time (1+ years) / Part time (2-3 years)</td>
                        </tr>
                        <tr>
                            <td>
                                MSc in Data Science and Business Analytics</td>
                            <td>Fees (Local): RM 36,800</td>
                            <td>Duration: Full time (1+ years) / Part time (2.5 -3 years)</td>
                        </tr>
                        <tr>
                            <td>
                                MSc in Information Technology Management</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: Full time (1+ years) / Part time (2-3 years)</td>
                        </tr>
                        <tr>
                            <td>
                                MSc in Software Engineering</td>
                            <td>Fees (Local): RM 29,500</td>
                            <td>Duration: Full time (1+ years) / Part time (2-3 years)</td>
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
                            <td>
                                PhD in Computing</td>
                            <td>Fees (Local): RM 45,000</td>
                            <td>Duration: Full time (3 years) / Part time (4 years)</td>
                        </tr>
                        <tr>
                            <td>PhD in Engineering</td>
                            <td>Fees (Local): RM 45,000</td>
                            <td>Duration: Full time (3 years) / Part time (4 years)</td>
                        </tr>
                        <tr>
                            <td>PhD in Finance</td>
                            <td>Fees (Local): RM 45,000</td>
                            <td>Duration: Full time (3 years) / Part time (4 years)</td>
                        </tr>
                        <tr>
                            <td>PhD in Management</td>
                            <td>Fees (Local): RM 45,000</td>
                            <td>Duration: Full time (3 years) / Part time (4 years)</td>
                        </tr>
                        <tr>
                            <td>PhD in Technology</td>
                            <td>Fees (Local): RM 45,000</td>
                            <td>Duration: Full time (3 years) / Part time (4 years)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id='content-3'>
                <h2>Resources & Facilities</h2>
                <p>
                    &nbsp;&nbsp;With an international student community of more than 12,000 students from more than 130
                    countries studying in its Malaysian campus,
                    APU offers a truly cosmopolitan learning environment which prepares students well for the global
                    challenges which lie ahead.
                    APU offers a wide range of degrees with Technology as a common core. It is APU’s aim to nurture and
                    encourage innovation through our programmes,
                    with the intention of producing individuals who will learn, adapt and think differently in new and
                    better ways.
                </p>
                <p class="images-para">
                    <img src="APU1.jpg" alt='apu-1'>
                    <img src="APU2.jpg" alt='apu-2'>
                    <img src="APU_3.jpg" alt='apu-3'>
                    <img src="APU_4.jpg" alt='apu-4'>
                    <img src="APU_5.jpg" alt='apu-5'>
                    <img src="APU_6.jpg" alt='apu-6'>
                    <img src="APU_7.jpg" alt='apu-7'>
                    <img src="APU_8.jpg" alt='apu-8'>
                    <img src="APU-9.jpg" alt='apu-9'>
                    <img src="APU_10.jpg" alt='apu-10'>
                    <img src="APU_11.jpg" alt='apu-11'>
                    <img src="APU_12.jpg" alt='apu-12'>
                </p>
            </div>

            <div id='content-4'>
                <h2>Students Experience & Activities</h2>
                <p>
                    &nbsp;&nbsp;Student Services at APU aims to provide support, assistance, advice, consultation, and
                    essential services to all APU students and to cater to the well-being
                    of students beyond their academic needs. It is a one-stop centre where questions about APU courses,
                    policies, procedures, services and events can be obtained.
                    We provide on-campus and off-campus accommodation within guarded environments, while students are
                    exposed to clubs, societies, and special interest groups on-campus.<br><br>

                    &nbsp;&nbsp;To ensure that our students get the best out of their life at APU, we offer personal
                    counselling services geared towards helping them with academic concerns
                    as well as emotional matters. All counselling is done in a safe and confidential environment by
                    qualified counsellors.<br><br>

                    &nbsp;&nbsp;APU Career Centre connects our students with over 10,000 potential employers to provide
                    internship and job opportunities.
                    Annually, they organize Mega Career Fairs on campus as well as career talks to help students equip
                    themselves with necessary employability skills.
                    Professionalism is our philosophy, where students are exposed towards workplace ethics and
                    professional code of conducts on-campus.
                    The campus simulates a real-life working environment, allowing students to adapt to the professional
                    working environment even before they graduate.<br><br>

                    <img src="APU_16.jpg" alt=apu-16 style="float:right;">

                    &nbsp;&nbsp;At APU, students are exposed towards our core values: Technology & Innovation,
                    Professional Development, Multiculturalism and Cultural Diversity.<br><br>

                    &nbsp;&nbsp;While teaching and learning processes pay focus on practical learning experience,
                    innovative thinking is stimulated among students of all programmes,
                    encouraging them to think outside the box and to solve the world's biggest problems. The
                    multicultural experience at APU is spectacular - with students from over
                    130 countries studying on-campus, both local and international students are exposed to the amazing
                    experience of cultural exchange and interactions that are happening on a daily basis.<br><br>

                    <img src="APU_17.jpg" alt=apu-17 style="float:left;">

                    &nbsp;&nbsp;Teaching and learning facilities are redesigned to suit the needs of the industry, in
                    line with the Industrial Revolution 4.0, a strong emphasis on cooperative learning
                    is reflected at APU's new iconic campus, through the abundance of communal spaces and discussion
                    areas, where aspiring young minds come together to formulate innovative ideas.
                    Wings spreading out from the Spine offer creative spaces intended to foster self-directed learning
                    and teaching. Highly conducive teaching & learning spaces, study lounges, studios,
                    laboratories, tutorial rooms, breakout rooms and syndicate rooms sit alongside modern, fully
                    equipped lecture theatres where core knowledge is taught by well qualified academics.
                    All spaces are carefully designed to create an unforgettable learning and lifestyle experience that
                    lasts for a lifetime, while enabling professional learning and cultivating global mindsets.
                </p>
            </div>

            <div id='content-5'>
                <h2>Awards</h2>
                <ol>
                    <li>KPMG CYBER SECURITY CHALLENGE 2018 - Top University Award</li><br>
                    <li>PROTON DRB-HICOM CREATIVE CAR CHALLENGE 2018 - Champion</li><br>
                    <li>NASA SPACE APPS CHALLENGE (KUALA LUMPUR) 2018 - Champion</li><br>
                    <li>WORLD ASIAN BUSINESS CASE COMPETITION 2018 - Top 10</li><br>
                    <li>F-SECURE INTERVARSITY CYBERSECURITY CHALLENGE 2018, 2017, 2016 - Champion</li><br>
                    <li>SAS NATIONAL FINTECH CHALLENGE 2018 - 1st Place</li><br>
                    <li>INSTITUTE OF ENGINEERS MALAYSIA (IEM) AWARD 2018, 2017, 2016, 2015, 2014 – Gold Medal</li><br>
                </ol>
            </div>

            <div id='content-6'>
                <h2>Location & Contact</h2>
                <h4>Asia Pacific University of Technology & Innovation (APU)</h4>
                <div class="map" style="text-align:center;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1992.0728304413744!2d101.698882!3d3.0556661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4abb795025d9%3A0x1c37182a714ba968!2sAsia%20Pacific%20University%20of%20Technology%20%26%20Innovation%20(APU)!5e0!3m2!1sen!2smy!4v1600110176149!5m2!1sen!2smy"
                        width="700" height="400" frameborder="0" style="border:0;margin-left: 220px;margin-top: 20px;"
                        allowfullscreen aria-hidden="false" tabindex="0"></iframe>
                </div><br>
                <center>
                    <p style="font-weight: bold;">
                        Address: Technology Park Malaysia,
                        Bukit Jalil,
                        57000 Kuala Lumpur
                        Wilayah Persekutuan <br>
                        Tel: +6-03-8996 1000 or 1300-888-278 (APU)<br>
                        Fax: +6-03-8996 1001<br><br>
                        General Enquries: <a href="mailto:info@apu.edu.my">info@apu.edu.my</a><br>
                        Study Programmes and Courses: <a href="mailto:courses@apu.edu.my">courses@apu.edu.my</a><br>
                        Website: <a href="http://www.apu.edu.my">http://www.apu.edu.my</a>
                    </p>
                </center>
            </div>

            <div id='content-7'>
                <h2>Reviews</h2>
                <?php
                if(isset($_SESSION['ID'])){
                    echo "
                    <div style='margin-bottom:100px; padding:20px; border: 2px solid black;'>
                    <form method='post' action='".writeReview('apu_review',$conn)."'>
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
                getReviews('apu_review',$conn);
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