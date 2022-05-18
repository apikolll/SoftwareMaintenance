<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['Delete']))
	{
		$id = $_GET['Delete'];
		
		$query = "DELETE FROM calculatefine 
					WHERE id = '".$id."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:viewFineDetails.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:viewFineDetails.php");
	}
?>