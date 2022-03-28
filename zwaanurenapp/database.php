<?php
//connectie maken met database

$dbhost = "localhost";
$dbuser = "root";
$dbwachtwoord = "";
$dbnaam = "zwaanwerken";

$conn = new mysqli ($dbhost, $dbuser, $dbwachtwoord, $dbnaam,);


//haal de // weg om te controleren of je een connectie heb met de database

//if($conn->connect_error) {
    //echo "error - 404";
//}else{
   // echo "De database is geconnect";
//}

?>