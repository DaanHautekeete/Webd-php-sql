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
<h1>Detailinfo ...</h1>

<p class='omschrijving'>Omschrijving subcategorie<br></p>
<div id='product'>
<div id='foto'><img src='images/XXX.jpg'></div>
<div id='cat'>Categorie - subcategorie</div>
<div id='merk'>Merk</div>
<div id='omschrijving'>Omschrijving</div>
<div id='prijs'>€ XXX</div>
</div>
<p class='stopfloat'><a href='productinfo.php'>Terug naar productoverzicht</a></p>




	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>