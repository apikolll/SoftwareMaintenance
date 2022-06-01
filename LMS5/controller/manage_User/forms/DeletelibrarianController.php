<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['DeleteLibrarian']))
	{
		$librarianID = $_GET['DeleteLibrarian'];
		
		$query = "DELETE FROM librarian 
					WHERE librarianID = '".$librarianID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:LibrarianList.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:LibrarianList.php");
	}
?>