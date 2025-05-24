<?php 
include("cnnConnection.php");
include("algemeen.php");
$maanden = array("maanden","januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zalando</title>
<link href="opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
	<div id="banner"><?php include("banner.php");?></div>
    <div id="login">
    <?php include("login.php");?>
    </div>
    <div id="menu"><?php include("menu.php");?></div>
    <div id="content"> 
<h1>Mijn bestellingen - xxx yyy </h1>

<table>
<tr><td class='tabeltitel'>Datum</td><td class='tabeltitel'>Artikel</td><td class='tabeltitel'>Prijs</td><td class='tabeltitel'>Aantal</td><td class='tabeltitel2'>Totaal</td></tr>
<tr><td class='tabellijn'>xxx</td><td class='tabellijn'>xxx</td><td class='tabellijn'>€ xxx</td><td class='tabellijn2'>xxx</td><td class='tabellijn3'>€ xxx</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td class='tabellijn4'>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><strong>Totale omzet</strong></td><td>&nbsp;</td><td>&nbsp;</td><td class='tabellijn4'><strong>€ xxx</strong></td></tr>
</table>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>