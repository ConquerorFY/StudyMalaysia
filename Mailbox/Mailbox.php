<?php
session_start();
if(isset($_SESSION['ID'])){
    $dbServer = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'studymalaysia';

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error().' '.mysqli_connect_errno());
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mailbox</title>
    <link rel='stylesheet' href='mail.css'>
</head>

<body>
    <header>
        <img class="logo"
            src="Screenshot 2020-08-22 at 10.02.00 PM.png">
        <nav>
            <ul class="nav_links">
                <li><a class="nav-items" href="../Main Page/MainPage.php">Main Page</a></li>
                <li><a class="nav-items" href="../Static/PrivateUni.html">Private Universities</a></li>
                <li><a class="nav-items" href="../Static/Student Life.html"
                        style="color:wheat; border: 2px solid darkred;padding: 1px 1px 1px 1px;">Student Life in
                        Malaysia</a></li>
                <li><a class="nav-items" href="../Static/Why Study.html">Why Study in Malaysia</a></li>
                <li><a class="nav-items" href="../Static/Culture&Environment.html">Culture and Environment</a></li>
                <li><a class="nav-items" href="../Feedback/Feedback & Enquiry.php">Feedback or Enquiry</a></li>
            </ul>
            <form>
                <input type="text" class="box" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </nav>
    </header>

    <div style='overflow:hidden;'>

        <?php
            include 'showContent.php';
        ?>

        <div id='content-div'>
            <h1>Mail</h1>
            <div id='title'>Title: <?php echo "$mailid"?></div>
            <div id='sender-profile'>
                <p>From: <?php echo "$sender"?></p><br>
                <?php
                if(file_exists("Documents/MailID$mailid.docx")){
                    echo "<p>File: <a href='$docs' download >Click here to download</a></p>";
                }
                ?>
                <br>
                <p>Date: <?php echo "$date"?></p>

            </div>
            <label id='receipient'>To: <?php echo "$name"?></label>
            <label id='details'>About: <?php echo "$about"?></label>
            <div id='main'>
                <div id='content'>
                    <?php echo "$content"?>
                </div>

            </div>

        </div>

        <div id='left-div'>
            <h1>Mail List</h1>
            <?php
                include 'showMail.php';
            ?>

        </div>

    </div>


</body>

</html>