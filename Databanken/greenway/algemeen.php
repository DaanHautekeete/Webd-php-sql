<?php
session_start();

/*code voor taalkeuze - Opdracht 1*/

  if(isset($_POST['cboTaal'])) {
    $taal = $_POST['cboTaal'];
    
    if($taal == '0') {
      $_SESSION['taal'] = 'nl';
    }
    else {
      // Taal opslaan in sessie
      $_SESSION['taal'] = $taal;
    }
  } 
  else {
    // Als er geen taal is gekozen, gebruik dan de standaardtaal
    if(!isset($_SESSION['taal'])) {
      $_SESSION['taal'] = 'nl'; // Standaardtaal is Nederlands
    }
  }
?>