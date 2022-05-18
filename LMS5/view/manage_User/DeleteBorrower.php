<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['DeleteBorrower']))
	{
		$Borrower_ID = $_GET['DeleteBorrower'];
		
		$query = "DELETE FROM borrower 
					WHERE Borrower_ID = '".$Borrower_ID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:BorrowerList.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:BorrowerList.php");
	}
?>