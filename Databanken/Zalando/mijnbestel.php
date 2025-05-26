<?php 
    include("cnnConnection.php");
    include("algemeen.php");
    $maanden = array("maanden","januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");

    // Data ophalen van de gebruiker
    $vnaam = $_SESSION['vnaam'];
    $fnaam = $_SESSION['fnaam'];
    $klantID = $_SESSION['klantID'];

    $outputTitel = "<h1>Mijn bestellingen - $vnaam $fnaam </h1>";


    // Alle bestellingen ophalen
    $sqlBestellingen = "SELECT * from tblbestellingen inner join tblbestellijnen on tblbestellijnen.Bestelling = tblbestellingen.BestelID order by tblbestellingen.Datum DESC";
    $sqlbestellingenResult = $db->query($sqlBestellingen);
    while($bestelling = $sqlbestellingenResult->fetch_assoc()) {
        $klantIdBestelling = $bestelling["KlantID"];
        // Controleren of IDs overeenkomen
        if($klantIdBestelling == $klantID) {
            // Alle andere informatie ophalen
            $datumBestelling = $bestelling['Datum']; 
            $Artikel = $bestelling['Artikel'];
            $aantal = $bestelling['Aantal'];

            // Info over product ophalen
            $sqlProductInfo = "Select Omschrijving, Prijs FROM tblartikels WHERE Artnr = '$Artikel'";
            $sqlProductInfoResult = $db->query($sqlProductInfo);
            while($productInfo = $sqlProductInfoResult->fetch_assoc()) {
                $omschrijvingProduct = $productInfo['Omschrijving'];
                $prijs = $productInfo['Prijs'];
            }

            $prijsAankoop = $aantal * $prijs;

            $totaleOmzet = $totaleOmzet + $prijsAankoop;

            $outputTabel .= "<tr><td class='tabellijn'>$datumBestelling</td><td class='tabellijn'>$omschrijvingProduct</td><td class='tabellijn'>€ $prijs</td><td class='tabellijn2'>$aantal</td><td class='tabellijn3'>€ $prijsAankoop</td></tr>";

            $outputTotaleOmzet = "<tr><td>&nbsp;</td><td><strong>Totale omzet</strong></td><td>&nbsp;</td><td>&nbsp;</td><td class='tabellijn4'><strong>€ $totaleOmzet</strong></td></tr>";
        }
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
        <?php
            // Controleren of de gebruiker is ingelogd
            if($_SESSION["ingelogd"] == "True")  
            {

            
        ?>
            <?= $outputTitel ?>


            <table>
            <tr><td class='tabeltitel'>Datum</td><td class='tabeltitel'>Artikel</td><td class='tabeltitel'>Prijs</td><td class='tabeltitel'>Aantal</td><td class='tabeltitel2'>Totaal</td></tr>
                <?= $outputTabel ?>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td class='tabellijn4'>&nbsp;</td></tr>
            <?= $outputTotaleOmzet ?>
            </table>

        <?php
            }
            else {
                echo "<h1>U moet ingelogd zijn om uw bestellingen te kunnen raadplegen</h1>";
            }
        ?>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>