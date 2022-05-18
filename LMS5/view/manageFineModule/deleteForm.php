<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['Delete']))
	{
		$id = $_GET['Delete'];
		
		$query = "DELETE FROM finerecord 
					WHERE id = '".$id."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:viewDetails.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:viewDetails.php");
	}
?>