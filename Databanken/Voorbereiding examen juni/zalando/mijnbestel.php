<?php 
    include("cnnConnection.php");
    include("algemeen.php");
    $maanden = array("maanden","januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");

    $vnaam = $_SESSION['vnaam'];
    $fnaam = $_SESSION['fnaam'];
    $klantID = $_SESSION['KlantID'];

    $totaleOmzet = 0;

    // Alle bestellingen ophalen van de klant
    $qryBestellingen = "SELECT * FROM tblbestellingen WHERE KlantID = '$klantID' ORDER BY Datum DESC";
    $qryBestellingenResult = $db->query($qryBestellingen);
    while($bestellingRow = $qryBestellingenResult->fetch_assoc()) {
        $BestelID = $bestellingRow['BestelID'];
        $Datum = $bestellingRow['Datum'];

        // Informatie over bestellijn ophalen
        $qryBestellijn = "SELECT * from tblbestellijnen WHERE Bestelling = '$BestelID'";
        $qryBestellijnResult = $db->query($qryBestellijn);
        while($BestellijnRow = $qryBestellijnResult->fetch_assoc()) {

            $Artikel = $BestellijnRow['Artikel'];
            $aantal = $BestellijnRow['Aantal'];
            $maat = $BestellijnRow['Maat'];

            // informatie over artikel ophalen
            $qryArtikel = "Select * from tblartikels WHERE Artnr = '$Artikel'";
            $qryArtikelResult = $db->query($qryArtikel);
            while($artikel = $qryArtikelResult->fetch_assoc()) {
                $omschrijving = $artikel['Omschrijving'];
                $prijs = $artikel['Prijs'];

                $totaalPrijs = $aantal * $prijs;
            }
        }
        
        // Totale omzet berekenen
        $totaleOmzet+=$totaalPrijs;

        // Output opstellen
        $outputBestellingen .= "<tr><td class='tabellijn'>$Datum</td><td class='tabellijn'>$omschrijving</td><td class='tabellijn'>€ $prijs</td><td class='tabellijn2'>$aantal</td><td class='tabellijn3'>€ $totaalPrijs</td></tr>";
        $outputBestellingen .= "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td class='tabellijn4'>&nbsp;</td></tr>";
    }

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
<h1>Mijn bestellingen - <?php echo "$vnaam $fnaam";?> </h1>

<table>
<tr><td class='tabeltitel'>Datum</td><td class='tabeltitel'>Artikel</td><td class='tabeltitel'>Prijs</td><td class='tabeltitel'>Aantal</td><td class='tabeltitel2'>Totaal</td></tr>
<!-- <tr><td class='tabellijn'>xxx</td><td class='tabellijn'>xxx</td><td class='tabellijn'>€ xxx</td><td class='tabellijn2'>xxx</td><td class='tabellijn3'>€ xxx</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td class='tabellijn4'>&nbsp;</td></tr> -->
<?=$outputBestellingen?>

<tr><td>&nbsp;</td><td><strong>Totale omzet</strong></td><td>&nbsp;</td><td>&nbsp;</td><td class='tabellijn4'><strong>€ <?=$totaleOmzet?></strong></td></tr>
</table>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>