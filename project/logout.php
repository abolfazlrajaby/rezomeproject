<?php
session_start();
unset($_SESSION[login]);
unset($_SESSION['userid']);
header("location:login.php");
?>