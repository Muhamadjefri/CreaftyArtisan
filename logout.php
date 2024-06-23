<?php
session_start();
session_destroy();
header("Location: ../model/login-signnup.php");
exit();
?>
