<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM bookreservation ORDER BY BookReservID DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
?>