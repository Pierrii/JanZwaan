<?php
require '../database.php';

//ophalen gegevens database
$username = $_POST["loginUser"];
$password = $_POST["loginPassword"];

$sql = "SELECT * FROM login WHERE Gebruikersnaam='$username' AND Wachtwoord='$password'";
$result = mysqli_query($conn, $sql);

  $row1= mysqli_fetch_array($result);
  
      if($row1["Rol"]=="werknemer")
      {
          header("location:../medewerker/mw.html");
      }
  
      if($row1["Rol"]=="owner")
      {
        header("location:../owner/owner.html");
      }

//wanneer wachtwoord goed
// } else{
  //  echo "<script>location.replace('/zwaanurenapp/login/logintest.html')</script>";
  //  echo "<script>alert('login succesfull')</script>";


    
//wanneer wachtwoord fout
//if (!$row = mysqli_fetch_assoc($result)) {
 //header("location:../index.html");
  //echo "<script>alert('gebruikersnaam of wachtwoord is fout')</script>";
  
  // test ( moet nog naar gekeken worden !!!!!)
  //if (!$row1 = mysqli_fetch_assoc($result)) {
    // header("location:../index.html");
    // echo "<script>alert('gebruikersnaam of wachtwoord is fout')</script>";
    //}

     
  ?>

  