<?php 
$sname = "localhost";
$uname = "root";
$password = "";

//test1

$db_name = "lms_db";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if (!$conn) {
	echo "Connection Failed";
}
