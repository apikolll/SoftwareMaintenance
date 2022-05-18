<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	} 
	
	if(isset($_POST['Confirm']))
	{
		$ISBN = $_POST['ISBN'];
		$Book_title = $_POST['Book_title'];
		$Book_author = $_POST['Book_author'];
		$Book_desc = $_POST['Book_desc'];
		$publication_date = $_POST['publication_date'];
		$totalPages = $_POST['totalPages'];
		$Book_rating = $_POST['Book_rating'];
		
		$query = "INSERT INTO book (ISBN, Book_title, Book_author, Book_desc, publication_date, totalPages, Book_rating)
					VALUES ('$ISBN', '$Book_title', '$Book_author', '$Book_desc', '$publication_date', '$totalPages', '$Book_rating')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:../../view/manage_book_record/BookList.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:../../view/manage_book_record/addBook.php");
		}
	}
	
	else
	{
		header("location:../../view/manage_book_record/addBook.php");
	}
?>