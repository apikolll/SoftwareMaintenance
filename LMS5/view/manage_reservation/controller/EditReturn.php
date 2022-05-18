<?php 

if (isset($_GET['ReturnBookID'])) {
	include "DatabaseCon.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ReturnBookID = validate($_GET['ReturnBookID']);

	$sql = "SELECT * FROM returnbook WHERE ReturnBookID=$ReturnBookID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: viewReturn.php");
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
    $LateReturnDay = validate($_POST['LateReturnDay']);
    $ReturnStatus = validate($_POST['ReturnStatus']);
    $ReturnBookID = validate($_POST['ReturnBookID']);

	if (empty($LateReturnDay)) {
		header("Location: ../EditReturn.php?ReturnBookID=$ReturnBookID&error=Borrower name is required");
	}
    else if (empty($ReturnStatus)) {
            header("Location: ../EditReturn.php?ReturnBookID=$ReturnBookID&error=Return Status is required");
    }
    else{

       $sql = "UPDATE returnbook
               SET LateReturnDay='$LateReturnDay', ReturnStatus='$ReturnStatus'
               WHERE ReturnBookID=$ReturnBookID ";
               
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../viewReturn.php?success=successfully updated");
       }else {
          header("Location: ../EditReturn.php?ReturnBookID=$ReturnBookID&error=unknown error occurred&$&$ReturnData");
       }
	}
}else {
	header("Location: viewReturn.php");
}