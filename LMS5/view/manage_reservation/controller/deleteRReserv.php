<?php  

if(isset($_GET['RoomReservID'])){
   include "../DatabaseCon.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$RoomReservID = validate($_GET['RoomReservID']);

	$sql = "DELETE FROM roomreservation
	        WHERE RoomReservID=$RoomReservID";

   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../viewRReserv.php?success=successfully deleted");
   }else {
      header("Location: ../viewRReserv.php?error=unknown error occurred&$RoomReservData");
   }

}else {
	header("Location: ../viewRReserv.php");
}