<?php
  $leerlingen=array("Lobke Bonte_6BI"=>"BonteLobke","Simon Declerck_6BI"=>"DeclerckSimon","Emma Devolder_6BI"=>"DevolderEmma","Alexander Dossche_6BI"=>"DosscheAlexander","Daan Hautekeete_6BI"=>"HautekeeteDaan","Aaron Injon_6BI"=>"InjonAaron","Pahul Malhi_6BI"=>"MalhiPahul","Tuur Mispelaere_6BI"=>"MispelaereTuur","Stan Tanghe_6BI"=>"TangheStan","Luka Verbrugghe_6BI"=>"VerbruggheLuka", "Milo Claessens Pillen_6AD"=>"ClaessensPillenMilo","Celestin De Marez_6AD"=>"DeMarezCelestin","Senna Devolder_6AD"=>"DevolderSenna","Gilles Longueville_6AD"=>"LonguevilleGilles","Hugo Popelier_6AD"=>"PopelierHugo","Joshua Radford_6AD"=>"RadfordJoshua","Arthur Roets_6AD"=>"RoetsArthur","Julian Stoops_6AD"=>"StoopsJulian","Maxim Van Belle_6AD"=>"VanBelleMaxim","Bouke Vandenbussche_6AD"=>"VandenbusscheBouke","Sem Van Eenoge_6AD"=>"VanEenogeSem");




  // Als de gebruiker de keuze heeft gemaakt
  if(isset($_POST["cboLeerlingen"])) {
    $gekozenLeerling = $_POST["cboLeerlingen"];
    
    $naamLeerling = substr($gekozenLeerling, 0, strpos($gekozenLeerling, "_"));
    
    $klasLeerling = substr($gekozenLeerling, strpos($gekozenLeerling, "_") + 1);

    $gekozenFoto = $leerlingen[$gekozenLeerling];

    // Controleren of er een leerling gekozen is
    if($gekozenLeerling == "null") {
      $output = "<p>Kies een leerling!</p>";
    }
    else {
      //onderscheid maken tussen de klassen
      if($klasLeerling == "6BI") {
        $output = "<div class='klas1'><p>Gekozen leerling: $naamLeerling</p><p>Klas van leerling: $klasLeerling</p><img src='fotosSJZ/$gekozenFoto.jpg'></div>";
      }
      else {
        $output = "<div class='klas2'><p>Gekozen leerling: $naamLeerling</p><p>Klas van leerling: $klasLeerling</p><img src='fotosSJZ/$gekozenFoto.jpg'></div>";
      }
    }


  }

    //vullen van combobox met leerlingen
    foreach($leerlingen as $leerlingID=>$fotoLeerling) {
      $naamLeerling = substr($leerlingID, 0,strpos($leerlingID, "_"));
  
      //controleren of de leerling de gekozen leerling is
      if($leerlingID == $gekozenLeerling) {
        $combo .= "<option value='$leerlingID' selected>$naamLeerling</option>";
      }
      else {
        $combo .= "<option value='$leerlingID'>$naamLeerling</option>";
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

  .klas1 {
    border: 1px solid red;
  }

  .klas2 {
    border: 1px solid green;
  }

	footer {
	height: 0.5em;
	background-color: #0070C0;
	}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form name="frmLeerling" method="Post">
      <select name="cboLeerlingen" onchange="document.frmLeerling.submit()">
        <option value="null">Kies een leerling</option>
        <?php
          echo $combo;
        ?>
</select>
    </form>

    <?php
      echo $output;
    ?>
  </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>