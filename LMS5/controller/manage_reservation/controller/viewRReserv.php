<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM roomreservation ORDER BY roomReservID DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
?>