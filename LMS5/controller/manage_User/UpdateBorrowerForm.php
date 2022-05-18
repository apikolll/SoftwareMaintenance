<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_POST['Update']))
	{
		$Borrower_ID = $_GET['Borrower'];
		$Borrower_name = $_POST['Borrower_name'];
		$Borrower_type = $_POST['Borrower_type'];
		$Borrower_Phone_num = $_POST['Borrower_Phone_num'];
		$Borrower_Address = $_POST['Borrower_Address'];
		
		$query = "UPDATE borrower 
					SET Borrower_ID='".$Borrower_ID."',
					Borrower_name='".$Borrower_name."', 
					Borrower_type='".$Borrower_type."',
					Borrower_Phone_num='".$Borrower_Phone_num."',
					Borrower_Address='".$Borrower_Address."',
					WHERE Borrower_ID='".$Borrower_ID."'";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:BorrowerList.php");
		}
		else
		{
			die("Error updating data !  ".$conn->error);
		}
	}

	else
	{
		header("location:BorrowerList.php");
	}
	
?>