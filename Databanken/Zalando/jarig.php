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
<table>
<tr><td class='horlijn'></td><td class='horlijn'></td></tr>
</table>
<p>Er zijn geen jarige klanten vandaag!</p>   
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>