<?php
	// Ophalen waarden uit verstuurde formulier

	//array maken (associatief)
	// Lobke = key, Oostkamp = value
	$leerlingen = array("Lobke" => "Oostkamp", "Simon" => "Oostkamp", "Emma" => "Brugge", "Alexander" => "Beernem");

	$gekozenLeerling = $_POST['cboLeerlingen'];
	$gekozenGemeente = $leerlingen[$gekozenLeerling];

	$output = "<p>$gekozenLeerling woont in $gekozenGemeente.</p>";

	//opbouw keuzelijst
	foreach ($leerlingen as $leerling=>$gemeente) {
	// Dit kan ook, maar er is hier soort van dubbele code
	// 	if($leerling == $gekozenLeerling) {
	// 		$combo .= "<option selected>$leerling</option>\n";
	// 	}
	// 	else {
	// 		$combo .= "<option>$leerling</option>\n";
	// 	}
	// }
		
		$combo .= "<option";
		if($leerling == $gekozenLeerling) {
			$combo .= " selected";
		}
		$combo .= ">$leerling</option>\n";
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
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <!-- php code -->
    <?php
			echo "<p>$leerlingen[Lobke]</p>";

			//array overlopen met foreach
			foreach ($leerlingen as $leerling=>$gemeente) {
				echo "<p>$leerling: $gemeente </p>";
			}
    ?>

		<form	name="Woonplaats" method="Post">
			<p>
				<select name="cboLeerlingen">
					<!-- code om alle opties toe te voegen in de select -->
					<?php
						echo $combo;
					?>
				</select> <input type="submit" name="btnVerstuur" value="Toon gemeente">
			</p>
		</form>

		<!-- Code om output weer te geven -->
		<?php
			echo $output;
		?>
  </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>