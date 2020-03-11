<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "test_drive";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: " . mysqli_connect_error());

//$db = mysqli_select_db($con, $db);

//echo"success!";







?>
