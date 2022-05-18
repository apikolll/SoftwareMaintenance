<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['DeleteBook']))
	{
		$ISBN = $_GET['DeleteBook'];
		
		$query = "DELETE FROM book 
					WHERE ISBN = '".$ISBN."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:BookList.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:BookList.php");
	}
?>