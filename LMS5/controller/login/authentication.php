<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	session_start();
	
	//check account exist or not
	if(isset($_POST['Login']))
	{
		if(empty($_POST['username']) || empty($_POST['password']))
		{
			header("location:userLogin.php?Empty= <b> ! Please Fill in the required info ! </b>");
		}
		else
		{
			$query = "SELECT * from librarian
						WHERE username='".$_POST['username']."'
						AND password='".$_POST['password']."'";
			
			$result = mysqli_query($conn, $query);
			
			if(mysqli_fetch_assoc($result))
			{
				$_SESSION['User']=$_POST['username'];
				header("location:librarian.php");
			}
			else
			{
				header("location:userLogin.php?Invalid= <br><b>Invalid username and password <br>! Please enter the correct username and password ! </b>");
			}
		}
	}
	else
	{
		echo "Please refresh this page";
	}

?>