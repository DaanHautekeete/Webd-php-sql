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
    <div id="content"><h1>Bestellen</h1>

<?php
    if($_SESSION['ingelogd'] == true) {
        echo "<p>Je bent een ingelogde klant die kan bestellen!</p>";

    }
    else {
        echo "<p>Enkel ingelogde klanten kunnen bestellen!</p>";

    }
?>

	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>