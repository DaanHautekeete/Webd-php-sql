<?php
session_start();

/*code voor taalkeuze - Opdracht 1*/

if(isset($_POST['cboTaal'])) {
  $taal = $_POST['cboTaal'];

  if($taal == "0") {
    $_SESSION["taal"] = "nl";
  }
  else {
    $_SESSION["taal"] = $taal;
  }
}
  else {
    // Standaardtaal instellen
    if(!isset($_SESSION["taal"])) {
      $_SESSION["taal"] = "nl";

    }
  }
?>