<?php 
include "DatabaseCon.php";

$search = $_POST['search'];

$sql = "select * from bookreservation where BookReservID like '%$search%'";

$result = mysqli_query($conn, $sql);
?>
