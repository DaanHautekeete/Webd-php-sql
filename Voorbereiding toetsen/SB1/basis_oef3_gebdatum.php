<?php
// array maken met alle maanden
$maanden = array("Maand", "januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");







//als het formulier verzonden is
if(isset($_POST["btnResultaat"])) {
  //var aanmaken
  $gekozenNaam = $_POST["txtNaam"];
  $gekozendag = $_POST["Dag"];
  $gekozenmaand = $_POST["Maand"];
  $gekozenjaar = $_POST["Jaar"];

  //dagen van de maand berekenen
  switch($gekozenmaand){
    case 2:
      if($gekozenjaar%400 == 0) {$aantalDagen = 29;}
      elseif($gekozenjaar%100 == 0) {$aantalDagen = 28;}
      elseif($gekozenjaar%4 == 0) {$aantalDagen = 29;}
      else{$aantalDagen = 28;}
      break;
    
    case 11:
      $aantalDagen = 30;

    default:
      $aantalDagen = 31;
  }

  $notatieNBN .= "Notatie NBN: $gekozenjaar-";
  
  if($gekozenmaand < 10) {
    $notatieNBN .= "0";
  }
  $notatieNBN .= "$gekozenmaand-";
  
  if($gekozendag < 10) {
    $notatieNBN .= "0";
  }
  $notatieNBN .= "$gekozendag";


  $output .= "<p>Beste $gekozenNaam, u bent geboren op $gekozendag $maanden[$gekozenmaand] $gekozenjaar.</p><p>$notatieNBN</p>";

}


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP basisoefeningen</title>
<style type="text/css">
	body {
	color: #0A0A55;		
	}
	#wrapper {
width: 1080px;
	margin-left: auto;
	margin-right: auto;
	border: solid 1px #0070C0;
	padding: 0.3em;
	}	
	main {
	min-height: 20em;
	padding: 1em;
	}
	footer {
	height: 0.5em;
	background-color: #0070C0;
	}
    form {
border: solid 1px #660066;
background-color: #3CF;	
font-family: Verdana, Geneva, sans-serif;
font-size: 1.2em;
margin-bottom: 2em;
width: 100%;
}
form input {
color: #C00;	
font-size: 1.2em;
}

strong {
font-weight: 900;
color: #C00;
font-size: 1.3em;	
}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" method="post" name="frmgebdat">
<table width="100%"  border="0">
  <tr>
    <td width="30%">Mijn naam</td>
    <td><input name="txtNaam" type="text" value='<?php echo $gekozenNaam?>'/></td>
  </tr>
  <tr>
    <td width="30%">Mijn geboortedatum</td>
    <td><table border="0">
  <tr>
    <td>Dag</td>
    <td>Maand</td>
    <td>Jaar</td>
  </tr>
  <tr>
    <td>
      <select name="Dag">
        <?php
          //lijst met dagen vullen
          $aantalDagen = 31;

          for($dag = 1; $dag <= $aantalDagen; $dag++) {
            $vulLijstDagen .= "<option ";
            if($dag == $gekozendag) {
              $vulLijstDagen .= "selected";
            }
            $vulLijstDagen .= ">$dag</option>";
          }
          echo $vulLijstDagen;
        ?>
      </select>
    </td>
    <td>
      <select name="Maand">
        <?php

        //Lijst van maanden vullen
        for($maand = 1; $maand <= 12; $maand++) {
          $vulLijstMaanden .= "<option value='$maand' ";
          if($maand == $gekozenmaand)
          {
            $vulLijstMaanden .= " selected";
          }
          $vulLijstMaanden .= ">$maanden[$maand]</option>";
          
        }
          echo $vulLijstMaanden; 
        ?>
      </select>
    </td>
    <td>
      <select name="Jaar" >
          <?php
            //lijst met jaren vullen
            for($jaar = (date("Y") -5); $jaar > (date("Y") - 125); $jaar--) {
              $vulLijstJaar .= "<option ";
              if($jaar == $gekozenjaar){
                $vulLijstJaar .= "selected";
              }
              $vulLijstJaar .= ">$jaar</option>";
            }
            echo $vulLijstJaar;
          ?>
      </select>
    </td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%"></td>
    <td><input type="submit" name="btnResultaat" value="Resultaat" /></td>
  </tr>
</table>
</form>

<?php
  echo $output;
?>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>