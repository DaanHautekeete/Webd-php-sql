<?php 
    include("cnnConnection.php");
    include("algemeen.php");

    // Controleren of er een klantenID is meegegeven
    if(isset($_GET['id'])) {
        // Alle gegevens ophalen van de klant
        $sql = "Select * from tblklanten WHERE KlantID='". $_GET['id'] ."'";
        $result = $db->query($sql) or die(mysql_error());
        $klant = $result->fetch_assoc();

        $vnaam = $klant["Voornaam"];
        $fnaam = $klant["Familienaam"];
        $klantNummer = $klant["KlantID"];
        $email = $klant["Email"];
        $wachtwoord = $klant["Wachtwoord"];


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
    <h1>Welkome bij Zalando, <?php echo "$vnaam $fnaam"; ?></h1>
    <p>Uw klantnummer is <strong><?= $klantNummer?></strong></p>
    <p>U kunt voortaan als volgt inloggen:</p>
    <p>Account: <strong><?=$email?></strong></p>
    <p>Wachtwoord: <strong><?=$wachtwoord?></strong></p>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>