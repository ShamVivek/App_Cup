<?php
session_start();
$URL=$_POST['link'];

$_SESSION['loggedIn'] = "false";
$_SESSION['userID']="";
$_SESSION['username']="";
$_SESSION['userType']="";
echo "success";
exit;