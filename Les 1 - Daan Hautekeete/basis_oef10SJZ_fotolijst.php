
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
	clear: both;
	}
  .persoon {
		float: left;	
		margin: 0.5em;
		border: solid 1px #0AC;
		text-align: center;
	}
	.naam {
		color: #FFF;
		background-color: #0AC;	
	}
	.startonder {
		clear: left;	
	}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <?php
			$leerlingen=array("Lobke Bonte"=>"BonteLobke","Simon Declerck"=>"DeclerckSimon","Emma Devolder"=>"DevolderEmma","Alexander Dossche"=>"DosscheAlexander","Daan Hautekeete"=>"HautekeeteDaan","Aaron Injon"=>"InjonAaron","Pahul Malhi"=>"MalhiPahul","Tuur Mispelaere"=>"MispelaereTuur","Stan Tanghe"=>"TangheStan","Luka Verbrugghe"=>"VerbruggheLuka", "Milo Claessens Pillen"=>"ClaessensPillenMilo","Celestin De Marez"=>"DeMarezCelestin","Senna Devolder"=>"DevolderSenna","Gilles Longueville"=>"LonguevilleGilles","Hugo Popelier"=>"PopelierHugo","Joshua Radford"=>"RadfordJoshua","Arthur Roets"=>"RoetsArthur","Julian Stoops"=>"StoopsJulian","Maxim Van Belle"=>"VanBelleMaxim","Bouke Vandenbussche"=>"VandenbusscheBouke","Sem Van Eenoge"=>"VanEenogeSem");

			
			foreach($leerlingen as $leerling=>$foto) {
				$output .= "<div class='persoon'>";
				$output .= "<img src='fotosSJZ/$foto.jpg' alt='foto van $leerling'> <div class='naam'><p>$leerling</p></div>";
				$output .= "</div>";
			}


			echo $output;
    ?>
    
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>