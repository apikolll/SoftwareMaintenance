<?php 
$sname = "localhost";
$uname = "root";
$password = "";

//test1
//this is a test from admin1
//this is a test from admin2
//okay
//testfromvscode

$db_name = "lms_db";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if (!$conn) {
	echo "Connection Failed";
}
