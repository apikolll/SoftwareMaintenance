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
		$days = $_POST['days'];
		$fine = $_POST['fine'];
		$total = $_POST['total'];

		$query = "UPDATE calculatefine SET borrower_name='".$borrower_name."', days='".$days."', fine='".$fine."', total='".$total."' WHERE id = '".$id."'";
			
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
