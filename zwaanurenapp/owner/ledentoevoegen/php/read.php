<?php  

//ophalen gegevens voor het overzicht

include "db_conn.php";

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);