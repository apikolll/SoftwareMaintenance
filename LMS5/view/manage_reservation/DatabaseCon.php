<?php 
$sname = "localhost";
$uname = "root";
$password = "";

//hello

$db_name = "lms_db";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if (!$conn) {
	echo "Connection Failed";
}
