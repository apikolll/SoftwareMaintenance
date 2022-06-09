<?php 
include "DatabaseCon.php";

$searchbooking = $_POST['searchbooking'];

$sql = "select * from bookreservation where BookReservID like '%$searchbooking%'";

$result = mysqli_query($conn, $sql);
?>
