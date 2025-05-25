<?php
    include("cnnConnection.php");
    include("algemeen.php");

    // datum van vandaag ophalen
    $dagvandaag = date("d");
    $maandvandaag = date("m");
    $jaarvandaag = date("Y");

    //sql statement opmaken voor alle mensen op te halen die geboren zijn op die datum
    $sqlklanten = "Select Familienaam, Voornaam, Geboortedatum from tblklanten ORDER BY Familienaam";
    $klantenresult = $db->query($sqlklanten) or die(mysql_error());

    $teller = 0;

    while($klant = $klantenresult->fetch_assoc()) {
        $familienaam = $klant["Familienaam"];
        $voornaam = $klant["Voornaam"];

        $geboortedatum  = strtotime($klant["Geboortedatum"]);
        $dagGeboortedatum = date('d', $geboortedatum);
        $maandGeboortedatum = date('m', $geboortedatum);
        $jaarGeboortedatum = date("Y", $geboortedatum);

        //controleren of gebruiker jarig is
        if($dagGeboortedatum == $dagvandaag and $maandGeboortedatum == $maandvandaag) {
            $teller++;

            $leeftijd = $jaarvandaag - $jaarGeboortedatum;

            $output .= "<tr><td class='horlijn'>$voornaam $familienaam</td><td class='horlijn'>$leeftijd jaar</td></tr>";
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
<table>
<tr><td class='horlijn'></td><td class='horlijn'></td></tr>
<?php
    if($teller > 0) {
        echo "<h1>VANDAAG JARIG</h1>";
        echo "$output"; 
    }
    else {
        echo "<h1>Er zijn geen jarige klanten vandaag!</h1>";
    }
?>
</table>
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>