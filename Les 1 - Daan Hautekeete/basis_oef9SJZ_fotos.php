<?php
$leerlingen2=array("Lobke Bonte"=>"BonteLobke","Simon Declerck"=>"DeclerckSimon","Emma Devolder"=>"DevolderEmma","Alexander Dossche"=>"DosscheAlexander","Daan Hautekeete"=>"HautekeeteDaan","Aaron Injon"=>"InjonAaron","Pahul Malhi"=>"MalhiPahul","Tuur Mispelaere"=>"MispelaereTuur","Stan Tanghe"=>"TangheStan","Luka Verbrugghe"=>"VerbruggheLuka");
$leerlingen=array("Milo Claessens Pillen"=>"ClaessensPillenMilo","Celestin De Marez"=>"DeMarezCelestin","Senna Devolder"=>"DevolderSenna","Gilles Longueville"=>"LonguevilleGilles","Hugo Popelier"=>"PopelierHugo","Joshua Radford"=>"RadfordJoshua","Arthur Roets"=>"RoetsArthur","Julian Stoops"=>"StoopsJulian","Maxim Van Belle"=>"VanBelleMaxim","Bouke Vandenbussche"=>"VandenbusscheBouke","Sem Van Eenoge"=>"VanEenogeSem");
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
font-size: 0.8em;
margin-bottom: 2em;
width: 400px;
}
form input {
color: #C00;	
}
form td {
border-bottom: solid 1px #FFF;	
}
form td td {
border-bottom: none;	
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
    <form action="" method="post" name="frmFormulier">
<table width="100%"  border="0">
  <tr>
    <td width="150px">Student</td>
    <td></td>
	<td><input type="submit" name="btnResultaat" value="Toon foto" /></td>
  </tr>
</table>
</form>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>