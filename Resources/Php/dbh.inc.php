<?php

$ServerName = "Localhost";
$UserName = "squadup_user";
$Password = "9UtlygElG;=7";
$DBName= "squadup_userdatabase";

$Conn = mysqli_connect($ServerName, $UserName, $Password, $DBName);

if (!$Conn) {
    die("Connection failed: ".mysqli_connect_error());
}
