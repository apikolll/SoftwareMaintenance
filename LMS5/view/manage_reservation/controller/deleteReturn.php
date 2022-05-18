<?php  

if(isset($_GET['ReturnBookID'])){
   include "../DatabaseCon.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$BookReservID = validate($_GET['ReturnBookID']);

	$sql = "DELETE FROM returnbook
	        WHERE ReturnBookID=$ReturnBookID";

   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../viewReturn.php?success=successfully deleted");
   }else {
      header("Location: ../viewReturn.php?error=unknown error occurred&$ReturnData");
   }

}else {
	header("Location: ../viewReturn.php");
}