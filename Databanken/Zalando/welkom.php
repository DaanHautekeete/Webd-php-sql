<?php 
include("cnnConnection.php");
include("algemeen.php");
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
    <h1>Welkome bij Zalando, xxx yyy!</h1>
    <p>Uw klantnummer is <strong>xxx</strong></p>
    <p>U kunt voortaan als volgt inloggen:</p>
    <p>Account: <strong>e-mailadres</strong></p>
    <p>Wachtwoord: <strong>wachtwoord</strong></p>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>