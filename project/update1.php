<?php
include 'db.php';
session_start();
$id = $_SESSION['userid'];
$password = $_POST['password'];

$sql = "UPDATE usertbl SET password='$password' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
