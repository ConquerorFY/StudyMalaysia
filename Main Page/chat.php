<?php
//echo 'Welcome ' . $_SESSION['Username'];
?>

<style>
  * {
    margin: 0px;
    padding: 0px;
  }

  .chat-button {
    background-color: firebrick;
    border: 2px solid maroon;
    color: whitesmoke;
    font-size: 15px;
    font-weight: bolder;
    padding: 16px 20px;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
  }

  .chat-button:hover {
    background-color: maroon;
  }

  .chat-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }

  #main {
    max-width: 450px;
    height: 400px;
    padding: 10px;
    background-color: white;
  }

  #message {
    width: 300px;
    border: 4px solid darkred;
    height: 200px;
    font-family: sans-serif;
    font-size: 15px;
    overflow-x: hidden;
    overflow-y: scroll;
  }

  .input-text {
    width: 100%;
    height: 50px;
    margin-top: 20px;
    font-family: sans-serif;
    font-size: 13px;
    border: 2px solid darkred;
  }

  .btnSubmit {
    background-color: green;
    color: white;
    font-weight: bold;
    padding: 16px 20px;
    border: 2px solid darkred;
    cursor: pointer;
    width: 100px;
    margin-right: 20px;
    opacity: 0.8;
  }

  .btnClose {
    background-color: darkred;
    color: white;
    font-weight: bold;
    padding: 16px 20px;
    border: 2px solid green;
    cursor: pointer;
    width: 100px;
    margin-bottom: 10px;
    opacity: 0.8;
  }
</style>

<body>
  <button class="chat-button" onclick="openForm()">Chat</button>
  <div class="chat-popup" id="myForm">
    <div id="main">
      <center>
        <h3 style="font-family: Arial, Helvetica, sans-serif;color:maroon;margin-bottom:12px;">Chat Here</h3>
      </center>
      <div id="message">
        <?php
        $dBServername = "localhost";
        $dBUsername = "root";
        $dBPassword = "";
        $dBName = "studymalaysia";

        $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

        $sql = "SELECT * FROM `Chat`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $message = $row['Message'];
          $username = $row['Username'];
          echo '<h4 style = "color:darkred;line-height:25px;margin-left:3px;">' . $username . '</h4>';
          echo '<p style="margin-left:3px;">' . $message . '</p>';
          echo  '<br><hr>';
        };
        ?>
        <?php
        if (isset($_POST['submit'])) {
          $message = $_POST['message'];
          $sql = "INSERT INTO Chat (`Message`,`Username`) VALUES ('$message','{$_SESSION['Username']}')";
          if (mysqli_query($conn, $sql)) {
            echo '<h4 style = "color:darkred;line-height:25px;margin-left:3px;">' . $_SESSION['Username'] . '</h4>';
            echo '<p style="margin-left:3px;">' . $message . '</p>';
          };
        };

        ?>
      </div>
      <form method="POST">
        <input type="text" class="input-text" name="message" placeholder="Type message.."><br><br>
        <center><input type="submit" class="btnSubmit" name="submit" value="Enter">
          <button type="button" class="btnClose" onclick="closeForm()">Close</button></center>
      </form>
    </div>
  </div>

  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
      var objDiv = document.getElementById("message");
      objDiv.scrollTop = objDiv.scrollHeight;
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>

</body>

