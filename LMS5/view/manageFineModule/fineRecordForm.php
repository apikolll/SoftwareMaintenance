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
		$days = $_POST['days'];
		$fine = $_POST['fine'];
		$total = $_POST['total'];
		
		$query = "INSERT INTO calculatefine (id, borrower_name, days, fine, total)
					VALUES ('$id', '$borrower_name', '$days', '$fine', '$total')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:../../view/manageFineModule/viewFineDetails.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:../../view/manageFineModule/calculateFine.php");
		}
	}
	
	else
	{
		header("location:../../view/manageModule/calculateFine.php");
	}
?>