<?php
    include("cnnConnection.php");
    include("algemeen.php");

    // Datum van vandaag
    $dagvandaag = date("d");
    $maandvandaag = date("m");
    $jaarvandaag = date("Y");

    $aantalJarig = 0;


    // Alle klanten ophalen
    $qryKlanten = "SELECT Familienaam, Voornaam, Geboortedatum FROM tblklanten";
    $qryKlantenResult = $db->query($qryKlanten) or die(mysql_error());
    while($klant = $qryKlantenResult->fetch_assoc()) {
        $vnaam = $klant['Voornaam'];
        $fnaam = $klant['Familienaam'];

        $geboortedatum = strtotime($klant["Geboortedatum"]);
        $dagGeboortedatum = date('d', $geboortedatum);
        $maandGeboortedatum = date('m', $geboortedatum);
        $jaarGeboortedatum = date('Y', $geboortedatum);

        // Controleren of gebruiker vandaag jarig is
        if($dagGeboortedatum == $dagvandaag and $maandGeboortedatum == $maandvandaag) {
            $aantalJarig++;

            // Leeftijd berekenen
            $leeftijd = $jaarvandaag - $jaarGeboortedatum;


            // Klant toevoegen aan output
            $outputJarigeKlanten .= "<tr><td class='horlijn'>$vnaam $fnaam</td><td class='horlijn'>$leeftijd jaar</td></tr>";

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
    if($aantalJarig > 0) {
        echo "<h1>VANDAAG JARIG</h1>";
    
?>
<table>
<!-- <tr><td class='horlijn'></td><td class='horlijn'></td></tr> -->
 <?=$outputJarigeKlanten;?>
</table>

<?php
    }
    else {
        echo "<p>Er zijn geen jarige klanten vandaag!</p>";   

    }
?>
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>