<?php  

if(isset($_GET['BookReservID'])){
   include "../DatabaseCon.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$BookReservID = validate($_GET['BookReservID']);

	$sql = "DELETE FROM bookreservation
	        WHERE BookReservID=$BookReservID";

   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../viewBReserv.php?success=successfully deleted");
   }else {
      header("Location: ../viewBReserv.php?error=unknown error occurred&$BookReservData");
   }

}else {
	header("Location: ../viewBReserv.php");
}