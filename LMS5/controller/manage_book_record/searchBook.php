<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_POST['search']))
    {
      $ISBN =$_GET['searchID'];
	  $Book_title = $_POST['Book_title'];
	  $Book_author = $_POST['Book_author'];
	  $Book_desc = $_POST['Book_desc'];
	  $publication_date = $_POST['publication_date'];
	  $totalPages = $_POST['totalPages'];
	  $Book_rating = $_POST['Book_rating'];
		
      $query = "SELECT * FROM book 
				WHERE ISBN='".$ISBN."'";
	
      $result = mysqli_query($conn, $query);
	  
	  if($result)
		{
			echo "Data successfully displayed";
			header("location:BookList.php");
		}
		else
		{
			die("Error displaying data !  ".$conn->error);
		}
    }
	
	else
	{
		header("location:BookList.php");
	}
?>