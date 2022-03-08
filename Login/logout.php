<?php
session_start();
session_unset();
session_destroy();
header("Location: ../Main Page/MainPage.php?logout=success");
?>