<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM returnbook ORDER BY ReturnBookID DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
?>