<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form method="post" name="myForm" action="a.php" >
    <input type="submit" name="Submit" value="change" />
</form>
<br/>
<a href="logout.php"><input type="button" name="logout" value="logout"></a>
<br/>
<br/>
<form  method="post" action="comment.php" id="usrform">
    <textarea rows="4" cols="50" name="comment" form="usrform">
Enter your comment....</textarea>

    <input type="submit">
</form>
<p>Click to download document<p>

    <a href="project.rar" ><input type="button" name="logout" value="download"></a>
    <br/>
    <br/>
<?php

session_start();
if (isset($_SESSION['login'])) {
    echo "welcome";

} else {
    header("location:login.php");
}
?>
</body>
</html>