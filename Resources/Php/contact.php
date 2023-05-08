<?php
$uname=$_POST['uname'];
$mail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
include './dbh.inc.php';
$sql="Insert into Contact forms values($uname,$mail,$subject,$message)";
mysqli_query($sql);
echo "Success";