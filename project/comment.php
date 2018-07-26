<?php
include 'db.php';
session_start();
$id = $_SESSION['userid'];

$comment = $_POST['comment'];

$sql = "UPDATE usertbl SET comment='$comment' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "your comment recorded successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
?>