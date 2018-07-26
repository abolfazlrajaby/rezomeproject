<?php
session_start();
include 'db.php';


$u = $_POST['user'];
$p = $_POST['userpassword'];

if (isset($_SESSION['login'])) {

    header("location:p.php");
} else {

    $query = "SELECT * FROM usertbl WHERE username='$u' and password='$p'";
    $result = $conn->query($query);
    if ($result->num_rows == 1 and !empty($u) and !empty($p)) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['userid'] = $row["id"];
        $_SESSION['login'] = $row["username"];
        header("location:select.php");
    } else {

        header("location:login.php");
    }
}

?>
