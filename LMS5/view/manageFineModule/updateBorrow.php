<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}

	if(isset($_POST['up']))
	{
		$id = $_POST['id'];
		$borrower_name=$_POST['borrower_name'];
		$book_title = $_POST['book_title'];
		$isbn = $_POST['isbn'];
		$borrowed_date = $_POST['borrowed_date'];
		$return_date = $_POST['return_date'];
		
		$query = "UPDATE finerecord SET borrower_name='".$borrower_name."', book_title='".$book_title."', isbn='".$isbn."', borrowed_date='".$borrowed_date."', return_date='".$return_date."' WHERE id = '".$id."'";
			
		$result= mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:manageFineModule.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:viewDetails.php");
		die("Error deleting data !  ".$conn->error);
	}





?>
