<?php
session_start();

// In- en uitloggen (uitloggen moet zeker conditioneel zijn)
// Uitloggen:
if(isset($_POST["btnLogout"]))
{
  $_SESSION['login'] = "";
  $_SESSION['vnaam'] = "";
  $_SESSION['fnaam'] = "";
  $_SESSION['regid'] = "";
  $_SESSION['weergave'] = "inloggen";
}

// Inloggen
if($_POST['btnLogin'] == 'Login') 
{
  $vnaam = $_POST['txtVnaam'];
  $fnaam = $_POST['txtFnaam'];
  $wachtwoord = $_POST['txtWW'];

  $sqlLogin = "SELECT * from tblregistratie WHERE voornaam='$vnaam' AND fnaam='$fnaam'";
  $resultLogin = $db->query($sqlLogin);
  $rowLogin = $resultLogin->fetch_assoc();

  // num_rows is een eigenschap dat het aantal rijen telt in dataset
  if($resultLogin->num_rows == 0) 
  {
    $loginFout = "Gebruiker onbekend!";
  }
  else 
  {
    if($rowLogin['wachtwoord'] == $wachtwoord) 
    {
      // Het inloggen is oké
      $loginFout = "Correct ingelogd!";

      $_SESSION['login'] = "ingelogd";
      $_SESSION['vnaam'] = "$vnaam";
      $_SESSION['fnaam'] = "$fnaam";
      $_SESSION['regid'] = $rowLogin['registratieID']; 

      $_SESSION['weergave'] = "uitloggen";
    }
    else
    {
      // wachtwoord is fout
      $loginFout = "Wachtwoord onjuist!";
    }
  }

}


?>
