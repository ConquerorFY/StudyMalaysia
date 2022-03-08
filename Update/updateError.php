<!DOCTYPE html>
<html>

<head>
    <title>Update Success</title>
</head>

<body>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "invalidDetails") {
            echo "<h1>Please fill in all the details</h1>";
        } else if ($_GET['error'] == 'invalidUsername') {
            echo '<h1>Invalid Username</h1>';
        } else if ($_GET['error'] == 'passwordCheck') {
            echo '<h1>Your passwords do not match</h1>';
            //echo '<h1>'.$_GET['username'].''.$_GET['mail'].'</h1>';
        } else if ($_GET['error'] == 'userTaken') {
            echo '<h1>Your username is taken. Please enter a new username</h1>';
        }

        echo "<h2><a href='student_register.html'>Register Page</a></h2>";
    } 
    
    else if (isset($_GET['submit'])) {
        if ($_GET['submit'] == 'success') {
            echo '<h1>Updated Successfully</h1>';
            //echo "<p>".$_GET['username']."</p>";
            echo "<h2><a href='#'>Main Page</a></h2>";
        }else if($_GET['submit'] == 'deleted'){
            echo '<h1>Deleted Successfully</h1>';
            echo "<h2><a href='#'>Main Page</a><h2>";
        }

    }
    ?>

</body>

</html>