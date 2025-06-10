<?php 
    include("cnnConnection.php");
    include("algemeen.php");

    $klantID = $_GET["ID"];

    // Gegevens ophalen van de geregistreerde persoon
    $qryOphalenGegevens = "SELECT * from tblklanten WHERE KlantID = '$klantID'";
    $qryOphalenGegevensResult = $db->query($qryOphalenGegevens) or die(mysql_error());
    while($gegevens = $qryOphalenGegevensResult->fetch_assoc()) {
        $vnaam = $gegevens["Voornaam"];
        $fnaam = $gegevens["Familienaam"];
        $email = $gegevens["Email"];
        $wachtwoord = $gegevens["Wachtwoord"];


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
    <h1>Welkome bij Zalando, <?php echo "$vnaam $fnaam";?>!</h1>
    <p>Uw klantnummer is <strong><?=$klantID?></strong></p>
    <p>U kunt voortaan als volgt inloggen:</p>
    <p>Account: <strong><?=$email?></strong></p>
    <p>Wachtwoord: <strong><?=$wachtwoord?></strong></p>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>