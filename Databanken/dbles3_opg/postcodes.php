<?php
  // Connectie maken met DB
  include("cnndbles3.php");

  $sql = "select postcode,gemeente,deelgemeente from tblpostcodes order by postcode";
  $sqlProvincies = "select DISTINCT provincie from tblpostcodes ";

  // $db => uit cnndbles3
  // Die => foutopvang
  $result = $db->query($sql) or die("Ophalen data mislukt!");
  $resultProvincies = $db->query($sqlProvincies) or die("Ophalen data mislukt!");

  // Keuzelijst vullen met provincies
  while($provincies = $resultProvincies->fetch_assoc()) {
    $provincie = $provincies['provincie'];

    $vulLijstProvincies .= "<option>$provincie</option>";
  }



  $teller = 1;
  $blokje = 0;

  // Data uitlezen => while => maak van elke rij dat in de dataset zit een associatieve array
  while($row = $result->fetch_assoc())
  {
    $postcode = $row['postcode'];
    $gemeente = $row['gemeente'];
    $deelgemeente = $row['deelgemeente'];

    if ($blokje == 10) {
      // 2 lege rijen toevoegen
      $output .= "<tr><td>&nbsp;</td></tr><tr><td></td></tr>\n";
      $blokje = 0;
    }

    // Rij toevoegen met data
    $output .= "<tr";

    //controleren als de postcode in WV is => indien ja => rij rood kleuren
    if($postcode >= 8000 && $postcode < 9000) {
      $output .= " class='wvl'";
    }

    $output .= "><td>$teller</td> <td>$postcode</td> <td>$gemeente</td> <td>$deelgemeente</td></tr>\n";
      
    $blokje++;
    $teller++;
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
    form {border: #003366 1px solid;
background-color: #CCCCCC;
width: 100%;
padding: 5px;}
.binnentabel {
background-color: #FFFF99;
padding: 5px;
}
	.prijs {
text-align: right;
	padding-right: 12em;
    }
  
  .wvl {
    color: red;
    font-weight: bold; 
  }
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner2.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" name="frmInfo" method="post">
<table>
<tr><td>Voornaam</td><td><input name="txtVoornaam" type="text"  /></td></tr>
<tr><td>Leeftijd</td><td><input name="txtLeeftijd" type="number"  /></td></tr>
<tr><td>Keuze</td><td>
<select name="cboKeuze">
<?php
  echo $vulLijstProvincies;
?>
</select>
    </td></tr>    
<tr><td>&nbsp;</td><td><input type="submit" name="btnVersturen" value="Verstuur" /></td></tr>    
    </table>
    <td></td>
</form>
    <table>
      <tr> <td>Nummer</td> <td>Postcode</td> <td>Gemeente</td> <td>Deelgemeente</td></tr>
      <?= $output;?>
  </table>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>