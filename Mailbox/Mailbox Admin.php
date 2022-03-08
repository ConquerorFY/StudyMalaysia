<?php
include 'writeMail.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mailbox</title>
    <link rel='stylesheet' href='mailadmin.css'>
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
            <form id='nav-form'>
                <input type="text" class="box" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </nav>
    </header>

    <div style='overflow:hidden;'>
        <div id='content-div'>
            <h1>Mail</h1>
            <div id='title'><i>Write Your Mail Here...</i></div>

            <form method='POST' enctype='multipart/form-data'>

                <div id='sender-profile'>
                    <p><input type='text' name='sender-name' required placeholder='Admin Name...'></p>
                    <p><input type='date' name='date' required></p>
                </div>

                <input id='submit' type='submit' name='submit' value='Send' required>

                <label id='receipient'>
                    <table style='margin-left:20px;'>
                        <tr>
                            <td rowspan="4">
                                To:
                            </td>
                            <td>
                                <input id='all' type='radio' name='student' required value='all'>All Students</input>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id='one' type='radio' name='student' required value='one'>One Student</input>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id='name' type='text' name='receiver-name' placeholder = 'Enter Student ID...'>
                            </td>
                        </tr>
                    </table>
                </label>

                <input class='details' type='text' name='about' required placeholder='About the mail'></input>
                <input id='doc' class='details' type='file' name='docs'></input>
                <div id='main'>
                    <div id='content'>
                        <!-- whitespace in between <textarea></textarea> will affect the position of cursor due to spacing -->
                        <textarea name='content' style="width:100%; height:100%;" required></textarea>  
                    </div>

                </div>
            </form>

            <script>
                document.getElementById('name').disabled = true;

                document.getElementById('one').onclick = function(){
                    document.getElementById('name').disabled = false;
                    document.getElementById('doc').disabled = false;
                }

                document.getElementById('all').onclick = function(){
                    document.getElementById('name').value = '';
                    document.getElementById('name').disabled = true;
                    document.getElementById('doc').disabled = true;
                }


                </script>

        </div>

        <div id='left-div'>
            <h1>Mail List</h1>
            
            <?php
                include 'showMailAdmin.php';
            ?>

        </div>


    </div>


</body>

</html>