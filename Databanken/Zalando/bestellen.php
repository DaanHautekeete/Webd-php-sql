<?php 
    include("cnnConnection.php");
    include("algemeen.php");

    // Controleren of gebruiker ingelogd is
    if($_SESSION['ingelogd'] == "True") {
        $alert = "<p>Ingelogde klanten kunnen bestellen</p>";
    }
    else {
        $alert = "<p>Enkel ingelogde klanten kunnen bestellen!</p>";
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
    <div id="content"><h1>Bestellen</h1>
    <?= $alert ?>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>