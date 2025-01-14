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
			//array maken (numeriek)
			//$leerlingen = array("Lobke", "Simon", "Emma", "Alexander", "Daan", "Aaron", "Pahul", "Tuur", "Stan", "Luka");

			//array maken (associatief)
			// Lobke = key, Oostkamp = value
			$leerlingen = array("Lobke" => "Oostkamp", "Simon" => "Oostkamp", "Emma" => "Brugge", "Alexander" => "Beernem");

			// echo "<p>De eerste leerling in de lijst is: $leerlingen[0]";
 
			//lijst met leerlingen uit de array halen met een for loop
			// for($i=0; $i < count($leerlingen); $i++) {
			// 	echo "<p> $leerlingen[$i]</p>";
			// }

			echo "<p>$leerlingen[Lobke]</p>";

			//array overlopen met foreach
			foreach ($leerlingen as $leerling=>$gemeente) {
				echo "<p>$leerling: $gemeente </p>";
			}
    ?>

		<form	name="Woonplaats" method="Post">
			<p>
				<select name="cboLeerlingen">
					<?php
						foreach ($leerlingen as $leerling=>$gemeente) {
							echo "<option>$leerling</option>";
						}
					?>
				</select>
			</p>
		</form>
  </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>