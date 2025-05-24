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
    <div id="content"> <h1>Productinfo</h1>

<form method='post' name='frmCat'>
<input type='submit' name='btnCat' value='xxx' class='knop'>
</form>

<div id="producten">

<div id='product'>
<div id='foto'>FOTO</div>
<div id='cat'>categorie - subcategorie</div>
<div id='merk'>merk</div>
<div id='omschrijving'>omschrijving</div>
<div id='prijs'>€ xxx</div>
</div>

</div>
	
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>