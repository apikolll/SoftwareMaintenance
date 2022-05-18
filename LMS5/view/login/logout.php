<?php
    $conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	//logout
	if(isset($_GET['logout']))
	{
		session_destroy();
		header("location:userLogin.php");
	}
?>