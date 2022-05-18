<?php 

if (isset($_GET['BookReservID'])) {
	include "DatabaseCon.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$BookReservID = validate($_GET['BookReservID']);

	$sql = "SELECT * FROM bookreservation WHERE BookReservID=$BookReservID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: viewBReserv.php");
    }


}else if(isset($_POST['update'])){
    include "../DatabaseCon.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $BorrowerName = validate($_POST['BorrowerName']);
    $ISBN = validate($_POST['ISBN']);
    $BookName = validate($_POST['BookName']);
    $BorrowDate = validate($_POST['BorrowDate']);
    $ReturnDate = validate($_POST['ReturnDate']);
    $BookReservID = validate($_POST['BookReservID']);

	if (empty($BorrowerName)) {
		header("Location: ../EditBReserv.php?BookReservID=$BookReservID&error=Borrower name is required");
	}
    else if (empty($ISBN)) {
            header("Location: ../EditBReserv.php?BookReservID=$BookReservID&error=ISBN is required");
        }
    else if (empty($BookName)) {
            header("Location: ../EditBReserv.php?BookReservID=$BookReservID&error=Book name is required");
    }
    else if (empty($BorrowDate)) {
            header("Location: ../EditBReserv.php?BookReservID=$BookReservID&error=Borrow date is required");
    }
    else if (empty($ReturnDate)) {
            header("Location: ../EditBReserv.php?BookReservID=$BookReservID&error=Return date is required");
    }
    else{

       $sql = "UPDATE bookreservation
               SET BorrowerName='$BorrowerName', ISBN='$ISBN', BookName='$BookName', BorrowDate='$BorrowDate', ReturnDate='$ReturnDate'
               WHERE BookReservID=$BookReservID ";
               
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../viewBReserv.php?success=successfully updated");
       }else {
          header("Location: ../EditBReserv.php?BookReservID=$BookReservID&error=unknown error occurred&$&$BookReservData");
       }
	}
}else {
	header("Location: viewBReserv.php");
}