<?php
  //associative array maken met alle namen en de woonplaatsen van die leerlingen
  $leerlingen = array("Lobke" => "Oostkamp", "Daan" => "Sint-Michiels", "Simon" => "Oostkamp");

  $show = "form";

  // als de keuze is gemaakt
  if(isset($_POST["cboLeerlingen"])) {
    $gekozenleerling = $_POST["cboLeerlingen"];
    $woonplaatsVanGekozenLeerling = $leerlingen[$gekozenleerling];

    $output = "$gekozenleerling woont in $woonplaatsVanGekozenLeerling.";
    $show = "output";
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
</style>
</head>

<body>
<div id="wrapper">
	<main>	
    
  <!-- conntroleren als we het formulier moeten weergeven -->
   <?php
    if($show == "form") 
    {
   ?>
		<form	name="frmWoonplaats" method="Post">
			<p>
				<select name="cboLeerlingen" onchange="document.frmWoonplaats.submit()">
          <option>Kies een leerling</option>

          <!-- Lijst vullen met waarden uit de array -->
           <?php
              foreach($leerlingen as $leerling => $woonplaats) {
                echo "<option>$leerling</option>";
              }
           ?>
        </select>
			</p>
		</form>
    <?php
    }
    else {
      echo $output;
    }
    ?>
  </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>