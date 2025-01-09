<?php
$leerlingen2=array("Lobke Bonte_6BI"=>"BonteLobke","Simon Declerck_6BI"=>"DeclerckSimon","Emma Devolder_6BI"=>"DevolderEmma","Alexander Dossche_6BI"=>"DosscheAlexander","Daan Hautekeete_6BI"=>"HautekeeteDaan","Aaron Injon_6BI"=>"InjonAaron","Pahul Malhi_6BI"=>"MalhiPahul","Tuur Mispelaere_6BI"=>"MispelaereTuur","Stan Tanghe_6BI"=>"TangheStan","Luka Verbrugghe_6BI"=>"VerbruggheLuka");
$leerlingen=array("Milo Claessens Pillen_6AD"=>"ClaessensPillenMilo","Celestin De Marez_6AD"=>"DeMarezCelestin","Senna Devolder_6AD"=>"DevolderSenna","Gilles Longueville_6AD"=>"LonguevilleGilles","Hugo Popelier_6AD"=>"PopelierHugo","Joshua Radford_6AD"=>"RadfordJoshua","Arthur Roets_6AD"=>"RoetsArthur","Julian Stoops_6AD"=>"StoopsJulian","Maxim Van Belle_6AD"=>"VanBelleMaxim","Bouke Vandenbussche_6AD"=>"VandenbusscheBouke","Sem Van Eenoge_6AD"=>"VanEenogeSem");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP basisopdrachten</title>
<style type="text/css">
	body {
	color: #0A0A55;	
    font-family: Verdana,sans-serif;
        font-size: 0.9em;
	}
	#wrapper {
width: 960px;
	margin-left: auto;
	margin-right: auto;
	border: solid 1px #DD0B2F;
	padding: 0.3em;
    font-weight: bold;
	}	
	#content {
	padding: 0.3em;
	}
	footer {
	height: 0.5em;
	background-color: #DD0B2F;
	clear: both;
	}
	
#persoon {
float: left;	
margin: 0.5em;
border: solid 1px #DD0B2F;
text-align: center;
width: 215px;
}
#naam {
color: #FFF;
background-color: #DD0B2F;	
padding: 0.5em;
font-weight: bold;
}
.startonder {
clear: left;	
}
form {
background-color: #DD0B2F;
padding: 1em;
color: white;
margin-bottom:2em;    }
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width='100%' alt=""/></header>
<div id="content">
<form name="frmKlas" method="post">
<input type="submit" name="btnKlas" value="Kies klas">
</form>    
</div>
<footer>&nbsp;</footer>
</div>
</body>
</html>