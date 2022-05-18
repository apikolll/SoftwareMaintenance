<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	} 
	
	if(isset($_POST['Confirm']))
	{
		$id = $_POST['id'];
		$borrower_name = $_POST['borrower_name'];
		$book_title = $_POST['book_title'];
		$isbn = $_POST['isbn'];
		$borrowed_date = $_POST['borrowed_date'];
		$return_date = $_POST['return_date'];
		
		$query = "INSERT INTO finerecord (id, borrower_name, book_title, isbn, borrowed_date, return_date)
					VALUES ('$id', '$borrower_name', '$book_title', '$isbn', '$borrowed_date', '$return_date')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:../../view/manageFineModule/viewDetails.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:../../view/manageFineModule/addBorrowerDetails.php");
		}
	}
	
	else
	{
		header("location:../../view/manageFineModule/addBorrowerDetails.php");
	}
?>