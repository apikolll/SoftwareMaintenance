<?php 
include "DatabaseCon.php";

$searchroom = $_POST['searchroom'];

$sql = "select * from roomreservation where RoomReservID like '%$searchroom%'";

$result = mysqli_query($conn, $sql);
?>
