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
    <div id="content"> <h1>WHO WE ARE</h1>
<p class='welcome'><img src="images/zalando_scheme.jpg" width="410" height="413" alt="" class='floatright'/>Zalando is a story that connects young professionals from more than 50 nations: Infused with great passion and business instinct, they created in just a few years a pure-play online fashion leader that delivers fashion to the homes of millions of customers across Europe today. Back in 2008, the idea of selling shoes or fashion over the internet seemed far-fetched. Online shopping was considered complicated and unsafe. Today, Zalando’s online store offers customers in 15 European countries a wealth of products from a variety of brand partners
and a convenient, secure shopping experience through their desktop, tablet or smartphone – anywhere, anytime. Zalando’s assortment comprises not just trendy brands and local designer fashion – the creative whizzes at zLabels, Zalando’s private labels arm, now also create unique fashion designs. All orders are distributed through custom-built logistics centers. Zalando Service ensures that all customer needs and desires are addressed in a timely manner and at no extra cost. Zalando has contributed to establishing e-commerce as a relevant economic factor in Germany.</p>
	
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>