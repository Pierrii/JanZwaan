<?php

require '../database.php';

switch ($_POST['action']) {
    case 'registratie':
        $gebruikersnaam=$_POST['Gebruikersnaam'];
        $wachtwoord=$_POST['pw'];
        $voornaam=$_POST['Voornaam'];
        $achternaam=$_POST['Achternaam'];

 #|-------------------------------------------------------------------------------|#
 #|-Informatie die in de database opgeslagen wordt bij de bij passende entiteiten-|#
 #|-------------------------------------------------------------------------------|#

        $sql="INSERT INTO login(Gebruikersnaam,Wachtwoord) VALUES('$gebruikersnaam','$wachtwoord')";

        $run_gry=mysqli_query($conn,$sql,);

        if($run_gry){
            $sql2="INSERT INTO medewerker(Voornaam,Achternaam) VALUES('$voornaam','$achternaam')";
            $result= mysqli_query($conn,$sql2);

            header("location:../index.html");
        }
        

        break;

        default;

            break;
    }