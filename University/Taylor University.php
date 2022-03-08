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
    <title>Taylor University</title>
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
            <a href="#">Taylor University</a>
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

        <h1>Taylor University</h1>

        <div style="display:flex; ">
        <img src='Taylor_Campus.jpg' alt="taylor" height="400" width="800" style="margin-top:90px;padding-bottom: 10px;">
        <img src='Taylor_0.jpg' alt="taylor" height="200" width="300" style="margin-top:90px;padding-bottom: 10px;">
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
                    Since its inception in 1969, Taylor’s has continuously provided excellent services for 
                    its students in terms of diverse study options, relevant curriculum and teaching methods, 
                    on-going partnerships with leading universities worldwide, strong industry linkages, up-to-date 
                    facilities and a well-equipped campus.
                    
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="Taylor_1.jpg" alt=apu-13 style="float:right;" width='320px' height='213px'>
                    It is a modern and progressive university, well respected in Malaysia and often considered a benchmark for other private higher education providers. 
                    Taylor’s prides itself in the delivery of a holistic education that results not just in excellent academic accomplishments but also in graduates with 
                    qualities that are highly sought after in the global marketplace. Industry-relevant learning activities and industry-relevant curriculum are widely incorporated 
                    into all tertiary courses in close partnership with the relevant industries.
                    
                </p><br>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YCYUgTcmOb8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div><br><br>

                <h4>History</h4><br>
                <p>
                    <img src="Taylor_1.jpg" alt=apu-14 style="float:right;" width='320px' height='213px'>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    The first campus was located at a building in Jalan Pantai, Kuala Lumpur offering the Victorian Higher School Certificate (VHSC) programme for a student population of 345. 
                    In 1985, Taylor's moved to its second campus in PJ New Town. Four years later, the Subang Jaya Campus was launched and two new pre-university programmes were introduced: 
                    the Canadian Pre-University Programme (CPU) and South Australian Matriculation (SAM).

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    By 1990, more programmes were introduced, including the American Degree Programme; Architecture, Quantity Surveying and Construction; Business, Accounting, Marketing and Finance; 
                    Cambridge A Level; Computer Science, Software Engineering and IT; Engineering; Hospitality, Tourism and Culinary Arts; and the Taylor's Business Foundation.

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    In 2001, the fourth campus in Wisma Subang housing the Taylor's Business School was launched. The following year, Taylor's College Petaling Jaya (TCPJ) became the fifth campus at Leisure
                    Commerce Square, and Taylor's School of Hospitality and Tourism was relocated from Kuala Lumpur to this new campus. TCPJ also housed the School of Communication, School of Architecture,
                    Building and Design, and Taylor's School of Computing. In 2004, the sixth campus was launched in Subang Square housing the American Degree Programme.

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    More expansion came with the launch of the seventh campus in Sri Hartamas (TCSH) in 2008. This campus was able to accommodate 800 students and ran the Cambridge A Level programme, 
                    South Australian Matriculation programme and International Baccalaureate Diploma Programme.

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Work commenced on the RM450 million Taylor's University Lakeside Campus in Subang Jaya in early 2007 and was completed in 2010.
                    In January 2018, Taylor’s College was moved to the Lakeside Campus.
                </p><br>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/b5LFe6ZGZWQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
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
                <img src="Taylor_2.jpg" alt=apu-15>
                <ul>
                    <li>No.1 Private University in Malaysia for Academic Reputation* - Among non-GLC linked private universities by QS World University Rankings 2018/19</li><br>
                    <li>Top 1% in the World Employer Reputation - By QS World University Rankings 2018/2019</li><br>
                    <li>No.4 in the World and Top in Asia</li><br>
                    <li>#1 in Business Management Studies amongst all Private Universities in Malaysia - In the 2019 QS World Rankings by Subject</li><br>
                    <li>#14 in the world for Hospitality & Leisure Management - According to 2019 QS World University Rankings by Subject</li><br>
                    <li>5-Star Rating in five categories – Teaching, Employability, Internationalisation, Facilities, Inclusiveness - QS Stars Rating 2016</li><br>
                    <li>Tier 5: Excellent rating (since 2009) - Rating System for Malaysian Higher Education (SETARA) by the Ministry of Higher Education Malaysia</li><br>
                    <li>#1 Private University in Malaysia for Art & Design - According to 2017 QS World University Rankings by Subject</li><br>
                </ul>
            </div>

            <div id='content-2'>
                <h2>Courses Offered</h2>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Accountancy Professional Qualification</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Association of Chartered Certified Accountants (ACCA)</td>
                            <td>Fees (Local): RM30,890 / Course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Semi Professional Accounting Qualification</th>
                            <th>Fees</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Certified Accounting Technician (CAT)</td>
                            <td>Fees (Local): RM18,210 / Course</td>
                            <td>Duration: 1.5 Yrs</td>
                        </tr>
                    </tbody>
                </table>

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
                            <td>Cambridge A Level</td>
                            <td>Fees (Local): 3 Subjects: RM32,855 / 4 Subjects: RM40,760</td>
                            <td>Duration: 1.5 Yrs</td>
                        </tr>
                        <tr>
                            <td>Foundation in Arts</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>Foundation in Business</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>Foundation in Communication</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>Foundation in Computing</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>Foundation in Design</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>Foundation in Engineering</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>Foundation in Natural & Built Environments</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>Foundation in Science</td>
                            <td>Fees (Local): RM24,500 / course</td>
                            <td>Duration: 1 Yr</td>
                        </tr>
                        <tr>
                            <td>SACE International</td>
                            <td>Fees (Local): RM23,450 (Jan & Mar Intakes) / RM26,280 (Aug Intake)</td>
                            <td>Duration: 1 Yr (Jan & Mar Intakes) / 1.5 Yrs (Aug Intake)</td>
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
                            <td>Intensive English - Entry Level</td>
                            <td>Fees (Local): RM5,865 / level</td>
                            <td>Duration: 12 wks / 240 Hrs per level</td>
                        </tr>
                        <tr>
                            <td>Intensive English - Subsequent Level</td>
                            <td>Fees (Local): RM4,420 / level</td>
                            <td>Duration: 12 wks / 240 Hrs per level</td>
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
                            <td>Diploma in Business</td>
                            <td>Fees (Local): RM48,000 / course</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Diploma in Communication</td>
                            <td>Fees (Local): RM54,000 / course</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Diploma in Culinary Arts</td>
                            <td>Fees (Local): RM53,762 / course</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Diploma in Event Management</td>
                            <td>Fees (Local): RM48,000 / course</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Diploma in Hotel Management</td>
                            <td>Fees (Local): RM47,508 / course</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Diploma in Information Technology</td>
                            <td>Fees (Local): RM48,000 / course</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Diploma in Interior Design</td>
                            <td>Fees (Local): RM60,000 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Diploma in Tourism Management</td>
                            <td>Fees (Local): RM48,000 / course</td>
                            <td>Duration: 2 Yrs</td>
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
                            <td>American Degree Transfer Program (Business)</td>
                            <td>Fees (Local): RM 730/credit hour in Malaysia* *Number of credit hours 
                                depends on major and number of subjects taken by student</td>
                            <td>Duration: 2 yrs (2+2)</td>
                        </tr>
                        <tr>
                            <td>American Degree Transfer Program (Computer Science)</td>
                            <td>Fees (Local): RM 730/credit hour in Malaysia* *Number of credit hours 
                                depends on major and number of subjects taken by student.</td>
                            <td>Duration: 2 yrs (2+2)</td>
                        </tr>
                        <tr>
                            <td>American Degree Transfer Program (Engineering)</td>
                            <td>Fees (Local): RM 730/credit hour in Malaysia* *Number of credit hours 
                                depends on major and number of subjects taken by student.</td>
                            <td>Duration: 2 yrs (2+2)</td>
                        </tr>
                        <tr>
                            <td>American Degree Transfer Program (Liberal Arts)</td>
                            <td>Fees (Local): RM 609/credit hour in Malaysia* *Number of credit hours 
                                depends on major and number of subjects taken by student</td>
                            <td>Duration: 2 yrs (2+2)</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) Accounting & Finance</td>
                            <td>Fees (Local): RM99,900 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Arts (Hons) Interior Architecture</td>
                            <td>Fees (Local): RM103,250 / course</td>
                            <td>Duration: 3.5 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Biomedical Science (Hons)</td>
                            <td>Fees (Local): RM110,250 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Biotechnology (Hons)</td>
                            <td>Fees (Local): RM94,500 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Business (Hons)</td>
                            <td>Fees (Local): RM99,900 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Business (Hons) Banking and Finance</td>
                            <td>Fees (Local): RM99,430 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Business (Hons) Finance and Economics</td>
                            <td>Fees (Local): RM99,430 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Business (Hons) International Business & Marketing</td>
                            <td>Fees (Local): RM99,430 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Computer Science (Hons)</td>
                            <td>Fees (Local): RM94,500 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Culinary Management (Hons)</td>
                            <td>Fees (Local): RM99,900 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Design (Hons) in Creative Media</td>
                            <td>Fees (Local): RM94,500 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Education (Hons)</td>
                            <td>Fees (Local): RM83,400 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Engineering (Hons) Chemical Engineering</td>
                            <td>Fees (Local): RM135,200 / course</td>
                            <td>Duration: 4 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Engineering (Hons) Electrical & Electronic Engineering</td>
                            <td>Fees (Local): RM135,200 / course</td>
                            <td>Duration: 4 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Engineering (Hons) Mechanical Engineering</td>
                            <td>Fees (Local): RM135,200 / course</td>
                            <td>Duration: 4 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Information Technology (Hons)</td>
                            <td>Fees (Local): RM94,500 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of International Hospitality Management (Hons)</td>
                            <td>Fees (Local): RM99,900 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of International Tourism Management (Hons)</td>
                            <td>Fees (Local): RM99,900 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of International Tourism Management (Hons) (Events Management)</td>
                            <td>Fees (Local): RM99,900 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Laws</td>
                            <td>Fees (Local): RM101,400 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Mass Communication (Hons)</td>
                            <td>Fees (Local): RM93,000 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Mass Communication (Hons) (Advertising)</td>
                            <td>Fees (Local): RM93,000 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Mass Communication (Hons) (Broadcasting)</td>
                            <td>Fees (Local): RM93,000 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Mass Communication (Hons) (Public Relations & Event Management)</td>
                            <td>Fees (Local): RM93,000 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Mass Communication (Hons) (Public Relations & Marketing)</td>
                            <td>Fees (Local): RM93,000 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Medicine, Bachelor of Surgery (MBBS)</td>
                            <td>Fees (Local): RM395,100 / course</td>
                            <td>Duration: 5 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Pharmacy (Hons)</td>
                            <td>Fees (Local): RM164,900 / course</td>
                            <td>Duration: 4 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Psychology (Hons)</td>
                            <td>Fees (Local): RM83,400 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Quantity Surveying (Hons)</td>
                            <td>Fees (Local): RM75,600 / course</td>
                            <td>Duration: 3.5 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor Of Science (Hons) (Culinology®)</td>
                            <td>Fees (Local): RM99,900 / course/td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Actuarial Studies</td>
                            <td>Fees (Local): RM83,400 (3 years); RM 90,240 (4 years) / course</td>
                            <td>Duration: 3 Yrs / 4 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) Food Science</td>
                            <td>Fees (Local): RM94,500 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Science (Hons) in Architecture</td>
                            <td>Fees (Local): RM119,400 / course</td>
                            <td>Duration: 3 Yrs</td>
                        </tr>
                        <tr>
                            <td>Bachelor of Software Engineering (Hons)</td>
                            <td>Fees (Local): RM94,500 / course</td>
                            <td>Duration: 3 Yrs</td>
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
                            <td>Master in Computer Science</td>
                            <td>Fees (Local): 29,300 / course</td>
                            <td>Duration: 2 - 4 Yrs (Full Time) / 3 - 6 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Master in International Hospitality Management</td>
                            <td>Fees (Local): 49,950 / course</td>
                            <td>Duration: 1.5 - 5 Yrs (Full Time)</td>
                        </tr>
                        <tr>
                            <td>Master in Management</td>
                            <td>Fees (Local): 45,500 (full-time) / 46,616 (part-time) / course</td>
                            <td>Duration: 1 Yr (Full Time) / 1.5 - 5 Yrs {Part Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Architecture</td>
                            <td>Fees (Local): 50, 000 / course</td>
                            <td>Duration: 2 Yrs</td>
                        </tr>
                        <tr>
                            <td>Master of Business Administration</td>
                            <td>Fees (Local): 45,500 (full-time); 46,616 (part-time) / course</td>
                            <td>Duration: 1 Yr (Full Time) / 2 - 5 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Communication</td>
                            <td>Fees (Local): 37,500 / course</td>
                            <td>Duration: Min. 1.5 Yrs (Full Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Laws (Healthcare and Medical Law)</td>
                            <td>Fees (Local): 47,250 (without bridging module) / 5,428 (for bridging module)</td>
                            <td>Duration: 1.5 Yrs (Full Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Laws (International Business and Trade Law)</td>
                            <td>Fees (Local): 47,250 (without bridging module) / 5,428 (for bridging module)</td>
                            <td>Duration: 1.5 Yrs (Full Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Philosophy (Food Studies)</td>
                            <td>Fees (Local): 37,500 / course</td>
                            <td>Duration: Min. 1.5 Yrs (Full Time) / Min. 2.5 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Philosophy (Pharmacy)</td>
                            <td>Fees (Local): 29,300 / course</td>
                            <td>Duration: 2 - 4 Yrs (Full Time) / 3 - 6 Yrs (Full Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Science</td>
                            <td>Fees (Local): 29,300 / course</td>
                            <td>Duration: 2 - 4 Yrs (Full Time) / 3 - 6 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Science (Tourism)</td>
                            <td>Fees (Local): 35,300 / course</td>
                            <td>Duration: 2 - 4 Yrs (Full Time) / 3 - 6 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Science in Engineering</td>
                            <td>Fees (Local): 29,300 / course</td>
                            <td>Duration: 2 - 4 Yrs (Full Time) / 3 - 6 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Master of Science in Medical Science</td>
                            <td>Fees (Local): 29,300 / course</td>
                        </tr>
                        <tr>
                            <td>Master of Teaching and Learning</td>
                            <td>Fees (Local): 30,000 / course</td>
                            <td>Duration: Min. 2 Yrs (Full Time) / 5 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Postgraduate Certificate in Teaching and Learning</td>
                            <td>Fees (Local): 11,800 / course</td>
                            <td>Duration: 1 Yr (Full Time)</td>
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
                            <td>Fees (Local): 42,300 (full-time) / 29,300 (part-time) / course</td>
                            <td>Duration: 3 - 6 Yrs (Full Time) / 4 - 8 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (Computer Science)</td>
                            <td>Fees (Local): 42,300 / course</td>
                            <td>Duration: 3 - 6 Yrs (Full Time) / 4 - 8 Yrs (Part Time))</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (Education)</td>
                            <td>Fees (Local): 51,300 / course</td>
                            <td>Duration: 3 - 6 Yrs (Full Time) / 4 - 8 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (Engineering)</td>
                            <td>Fees (Local): 42,300 (full-time) / 29,300 (part-time) / course</td>
                            <td>Duration: 3 - 6 Yrs (Full Time) / 4 - 8 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (Hospitality and Tourism)</td>
                            <td>Fees (Local): 51,300 / course</td>
                            <td>Duration: 3 - 6 Yrs (Full Time) / 4 - 8 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (Law)</td>
                            <td>Fees (Local): 42,300 (full-time); 29,300 (part-time) / course</td>
                            <td>Duration: 3 Yrs (Full Time) / 4 Yrs (Part Time)</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (Science)</td>
                            <td>Fees (Local): 42,300 / course</td>
                            <td>Duration: 3 - 6 Yrs (Full Time) / 4 - 8 Yrs (Part Time)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id='content-3'>
                <h2>Resources & Facilities</h2>
                <p>
                    &nbsp;&nbsp;Taylor’s Lakeside Campus is strategically located in a modern 
                    and well-planned township. It is an ideal environment supported by good 
                    infrastructure. Just 30 minutes away from the bustling Kuala Lumpur city, 
                    it is linked by highways to all major locations in the Klang Valley.
                    
                    <br><br>&nbsp;&nbsp;
                    Students have access to various facilities such as a medical centre, a shopping mall, 
                    hotels, banks, recreational clubs, shops, restaurants, and cinemas located within the vicinity of the campus.

                    <br><br>&nbsp;&nbsp;
                    Taylor’s Lakeside Campus is set on 27 acres of tropical greenery, encompassing a modern, 
                    functional design with state-of-the-art facilities and its trademark 5.5 acre lake. The campus 
                    strikes a balance between form and function, providing a conducive environment for learning 
                    and development as well as social and leisure activities.

                    <br><br>&nbsp;&nbsp;
                    More than just a home to the student population, the campus serves as a nurturing ground to build an 
                    energetic and dynamic community. Taylor’s Lakeside Campus provides a comprehensive list of features and 
                    facilities to cater to students’ learning needs and comfort.

                    <br><br>&nbsp;&nbsp;
                    Scan this QR code below for a 360° virtual campus tour:
                </p>
                <p class="images-para" style='height:auto;'>
                    <img src="Taylor_6.jpg" alt='taylor-6'>
                    <img src="Taylor_7.jpg" alt='taylor-7'>
                    <img src="Taylor_8.png" alt='taylor-8'>
                </p>
            </div>

            <div id='content-4'>
                <h2>International University Partnerships</h2>
                <p>
                    &nbsp;&nbsp;Strategic partnerships with world-class universities have cemented Taylor’s edge in providing 
                    world-class foundation, diploma and degree programmes. The committed and careful implementation of these 
                    programmes according to respective guidelines given by each partner university ensures that students receive
                    qualifications that are internationally recognised and accepted globally. Through these strong partnerships, 
                    students can benefit from our dual award programmes as well as global mobility programmes to gain added exposure.<br><br>

                    &nbsp;&nbsp;With over 250 university partners across 45 countries, we offer various mobility programmes for inbound 
                    and outbound students such as student exchange, overseas transfer options, summer programmes, residency programmes 
                    and various study trips.<br><br>

                    &nbsp;&nbsp;Students from the Faculty of Hospitality, Food and Leisure Management can benefit from our dual award 
                    programmes with University of Toulouse or Academie de Toulouse, one of the oldest and most reputable culinary and 
                    hospitality schools in France.<br><br>

                    <img src="Taylor_5.jpg" alt=taylor-5 style="float:right;">

                    &nbsp;&nbsp;Taylor’s Business School also offers dual award programmes through our partnership with the Bristol Business 
                    School, University of the West of England (UWE), UK and Queensland University of Technology (QUT), Australia.<br><br>

                    &nbsp;&nbsp;Other dual award programmes are offered by School of Communication and School of Computing & IT.<br><br>
                </p>
            </div>

            <div id='content-5'>
                <h2>Scholarships & Bursaries</h2>
                <ol>
                    <li>Scholarships up to RM10,000 for international students across Pre-U, Foundation, Diploma and Undergraduate.</li><br>
                    <li>Bursaries up to RM5,000 available for international students across Pre-U, Foundation, Diploma, Undergraduate & Postgraduate (Taught).</li><br>
                </ol>
            </div>

            <div id='content-6'>
                <h2>Location & Contact</h2>
                <h4>Taylor University</h4>
                <div class="map" style="text-align: center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.1199174289986!2d101.61463661525225!3d3.0625934545315037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5f9450eaf9%3A0xe4c38bd5f7d440b1!2sTaylor&#39;s%20Lakeside%20Campus!5e0!3m2!1sen!2smy!4v1601991767740!5m2!1sen!2smy" 
                    width="700" height="400" frameborder="0" style="border:0;margin-left: 220px;margin-top: 20px;" allowfullscreen aria-hidden="false" tabindex="0">
                </iframe>
                </div><br>
                <center>
                    <p style="font-weight: bold;">
                        Address: No. 1, Jalan Taylor’s,
                        47500 Subang Jaya
                        Selangor Darul Ehsan<br>
                        Tel: +603-5629 5000<br>
                        Fax: +603-5629 5001<br><br>
                        Website: <a href="http://university2.taylors.edu.my/intstudent-id/">http://university2.taylors.edu.my/intstudent-id/</a>
                    </p>
                </center>
            </div>

            <div id='content-7'>
                <h2>Reviews</h2>
                <?php
                if(isset($_SESSION['ID'])){
                    echo "
                    <div style='margin-bottom:100px; padding:20px; border: 2px solid black;'>
                    <form method='post' action='".writeReview('taylor_review',$conn)."'>
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
                getReviews('taylor_review',$conn);
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