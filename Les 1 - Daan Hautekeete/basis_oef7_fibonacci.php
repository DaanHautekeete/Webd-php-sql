<?php
	$getal1 = 0;
	$getal2 = 1;

	for($i = 1; $i <=50; $i++) {
		$resultaat = $getal1 + $getal2;

		$output .= "<td class='randen'>$resultaat</td>";

		if(($i % 5) == 0) {
			$output .= "</tr><tr>";
		}

		$getal1 = $getal2;
		$getal2 = $resultaat;

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
    .randen {border: solid 1px #003399;
text-align:right;}
.vet {font-weight: bold;
text-align:right;}
.blauwerij {background-color: #000033;
color: #FFFFFF;
}
.witterij {background-color: #FFFFFF;
	color: #000033;}
	td {
padding-left: 0.2em;	
padding-right: 0.2em;}	
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
        <table>
					<tr>
					<?php echo $output;?>
					</tr>
        </table>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>