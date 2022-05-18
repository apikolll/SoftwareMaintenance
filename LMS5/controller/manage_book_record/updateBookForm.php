<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_POST['Update']))
	{
		$ISBN = $_GET['GetISBN'];
		$Book_title = $_POST['Book_title'];
		$Book_author = $_POST['Book_author'];
		$Book_desc = $_POST['Book_desc'];
		$publication_date = $_POST['publication_date'];
		$totalPages = $_POST['totalPages'];
		$Book_rating = $_POST['Book_rating'];
		
		$query = "UPDATE book 
					SET ISBN='".$ISBN."',
					Book_title='".$Book_title."', 
					Book_author='".$Book_author."',
					Book_desc='".$Book_desc."',
					publication_date='".$publication_date."',
					totalPages='".$totalPages."',
					Book_rating='".$Book_rating."'
					WHERE ISBN='".$ISBN."'";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:BookList.php");
		}
		else
		{
			die("Error updating data !  ".$conn->error);
		}
	}

	else
	{
		header("location:BookList.php");
	}
	
?>