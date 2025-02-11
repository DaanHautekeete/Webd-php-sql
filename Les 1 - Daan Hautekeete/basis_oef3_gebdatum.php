<?php
//array maken met alle maanden
$maanden = array("Maand", "januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");

//als het formulier verzonden is
if(isset($_POST["btnResultaat"])) {
  $gekozennaam = $_POST["txtNaam"];
  $gekozendag = $_POST["Dag"];
  $gekozenmaand = $_POST["Maand"];
  $gekozenjaar = $_POST["Jaar"];

  //berekening van aantal dagen in de maand

  switch($gekozenmaand) {
    case 2:
      if($gekozenjaar%400 == 0){$aantalDag = 29;}
      elseif($gekozenjaar%100 == 0) {$aantalDag = 28;}
      elseif($gekozenjaar%4 == 0){$aantalDag = 29;}
      else{$aantalDag = 28;}
      break;
    
    case 4:
    case 6:
    case 9:
    case 11:
      $aantalDag = 30;
      break;

    default:
      $aantalDag = 31;

  }

  //Output
  $gebdatvol = $gekozendag." ".$maanden[$gekozenmaand]." ".$gekozenjaar;
  
  $datNBN = "$gekozenjaar-";

  if($gekozenmaand < 10) {
    $datNBN.= "0";
  }

  $datNBN.="$gekozenmaand-";

  if($gekozendag < 10) {
    $datNBN.= "0";
  }

  $datNBN.="$gekozendag";


  $output = " Beste $gekozennaam, u bent geboren op $gebdatvol <br>Notatie NBN: $datNBN";
}

//Keuzelijst dag vullen met waarden
$vulDagen = "";
$aantalDag = 31;

for($i=1; $i<=$aantalDag; $i++){
  if($i == $gekozendag) {
    $vulDagen .= "<option selected>$i</option>\n";
  }
  else {
    $vulDagen .= "<option>$i</option>\n";
  }
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
    <td><input name="txtNaam" type="text" value='<?php echo $gekozennaam ?>'/></td>
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
        <?php echo $vulDagen; ?>
      </select>
    </td>
    <td>
      <select name="Maand" onchange="document.frmgebdat.submit()">
        <?php 
        for($i = 1; $i <= 12; $i++) {
        
          echo "<option value='$i'";
        
          if($i == $gekozenmaand) {
            echo " selected";
          }

          echo ">$maanden[$i]</option>";
        }
        ?>
      </select>
    </td>
    <td>
      <select name="Jaar" >
        <?php 
          for($jaar= (date("Y") - 5); $jaar > (date("Y") - 125); $jaar--)
          {
            echo "<option>$jaar</option>";
          }
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