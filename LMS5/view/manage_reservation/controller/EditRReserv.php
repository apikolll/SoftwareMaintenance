<?php 

if (isset($_GET['RoomReservID'])) {
	include "DatabaseCon.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$RoomReservID = validate($_GET['RoomReservID']);

	$sql = "SELECT * FROM roomreservation WHERE RoomReservID=$RoomReservID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: viewRReserv.php");
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
    $RoomID = validate($_POST['RoomID']);
    $RoomName = validate($_POST['RoomName']);
    $RoomDetails = validate($_POST['RoomDetails']);
    $reservDate = validate($_POST['reservDate']);
    $RoomReservID = validate($_POST['RoomReservID']);

	if (empty($BorrowerName)) {
		header("Location: ../EditRReserv.php?RoomReservID=$RoomReservID&error=Borrower name is required");
	}
    else if (empty($RoomID)) {
            header("Location: ../EditRReserv.php?RoomReservID=$RoomReservID&error=ISBN is required");
        }
    else if (empty($RoomName)) {
            header("Location: ../EditRReserv.php?RoomReservID=$RoomReservID&error=Book name is required");
    }
    else if (empty($RoomDetails)) {
            header("Location: ../EditRReserv.php?RoomReservID=$RoomReservID&error=Borrow date is required");
    }
    else if (empty($reservDate)) {
            header("Location: ../EditRReserv.php?RoomReservID=$RoomReservID&error=Return date is required");
    }
    else{

       $sql = "UPDATE roomreservation
               SET BorrowerName='$BorrowerName', RoomID='$RoomID', RoomName='$RoomName', RoomDetails='$RoomDetails', reservDate='$reservDate'
               WHERE RoomReservID=$RoomReservID ";
               
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../viewRReserv.php?success=successfully updated");
       }else {
          header("Location: ../EditRReserv.php?RoomReservID=$RoomReservID&error=unknown error occurred&$&$RoomReservData");
       }
	}
}else {
	header("Location: viewRReserv.php");
}