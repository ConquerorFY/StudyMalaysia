<?php

if (isset($_SESSION["ID"])) {

    $dBServername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "studymalaysia";

    // Create connection
    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function writeReview($uni, $conn)
    {
        if (isset($_POST['reviewSubmit'])) {
            $id = $_POST['review-id'];
            $date = $_POST['date'];
            $review = $_POST['review'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO `" . $uni . "` (Student_ID, Review, Ratings, `Date`) VALUES ($id, '$review', $rating, '$date')";
            $result = mysqli_query($conn, $sql);

            echo "<meta http-equiv='refresh' content='1'>";
        }
    }

    function editComments($uni, $conn)
    {
        if (isset($_POST['reviewEdit'])) {
            $id = $_POST['edit-id'];
            $date = $_POST['date'];
            $review = $_POST['review'];
            $rating = $_POST['rating'];

            $sql = "UPDATE $uni SET Review = '$review', Ratings = $rating, `Date` = '$date' WHERE Uni_Feedback_ID = $id";
            $result = mysqli_query($conn, $sql);

            echo "<meta http-equiv='refresh' content='1'>";

            /*echo "<script>
            var r = confirm('Comment edited successfully');
            if(r === true){
                window.location.reload();  //once called will keep looping its way to the function to loop refresh

            }
            </script>";*/

    }

}

    function deleteComments($uni, $conn)
    {
        if (isset($_POST['reviewDelete'])) {
            $id = $_POST['edit-id'];

            $sql = "DELETE FROM $uni WHERE Uni_Feedback_ID = $id";
            $result = mysqli_query($conn, $sql);
            $secondWait = 1;
            echo '<meta http-equiv="refresh" content="' . $secondWait . '">';
        }
    }

} else {
    $dBServername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "studymalaysia";

    // Create connection
    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

function getReviews($uni, $conn)
{
    $sql = "SELECT * FROM `" . $uni . "`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['Uni_Feedback_ID'];
        $studentid = $row['Student_ID'];
        $review = $row["Review"];
        $rating = $row["Ratings"];
        $date = $row["Date"];

        $sql2 = "SELECT * FROM student WHERE Student_ID = $studentid";
        $result2 = mysqli_query($conn, $sql2);
        if ($row2 = mysqli_fetch_assoc($result2)) {
            echo "<div style='color:white; background-color:#cd5c5c; font-size: 20px; padding:20px; margin:auto; margin-bottom:40px;'>";
            echo "<label>Review ID: $id</label><br>";
            echo "<label>Student ID: $studentid</label><br>";
            echo "<label>Student Name: " . $row2['Name'] . "<br>";
            echo "<label>Date: $date</label><br>";
            echo "<label>Ratings: $rating</label><br>";
            echo "<label>Review: " . nl2br($review) . "</label>";

            if (isset($_SESSION['ID'])) {
                if ($_SESSION['ID'] == $studentid) {
                    echo "<div>
                    <form method='POST' action='" . deleteComments($uni, $conn) . "'>
                    <input type='hidden' name='edit-id' value='" . $id . "'>
                    <input style='cursor:pointer;' type='submit' value='Delete' name='reviewDelete'>
                    </form>

                    <button style='cursor:pointer;' class='btnEdit'>Edit</button>

                    <div class='formEdit' style='display:none;'>
                    <br>
                    <form style='width:100%;' method='POST' action='" . editComments($uni, $conn) . "'>
                    <input type='hidden' name='edit-id' value='" . $id . "'>
                    <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
                    <label>Ratings: </label>
                    <input style='width:50%' type='number' name='rating' required placeholder='Please enter ratings...'><br><br>
                    <label>Reviews: </label>
                    <textarea required style='width:100%; resize:vertical;' name = 'review'></textarea><br><br>
                    <input style='cursor:pointer;' type='submit' name='reviewEdit' value='Save Changes'>
                    </form>
                    </div>
                    </div>";
                }
            }

            echo "</div>";
        }
    }
    echo
    "<script>
        for(let i = 0; i < document.querySelectorAll('.btnEdit').length; i++){
            let editCheck = false;

            document.querySelectorAll('.btnEdit')[i].onclick = function(){
                if(!editCheck){
                    document.querySelectorAll('.formEdit')[i].style.display = 'flex';
                }else{
                    document.querySelectorAll('.formEdit')[i].style.display = 'none';
                }

                editCheck = !editCheck;
            }
        }
    </script>";
}

?>
