<?php include("cnnConnectie.php");
include("algemeen.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Missault</title>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/ddv.css" rel="stylesheet">    
<style type="text/css">
		
</style>
</head>
<body>
    <?php include("inc_nav.php");?>
<div class="container ddvnopad">
        <?php include("inc_banner.php");?>
</div>
    <div class="container">
 <div class="row">
   	   <div class="col-md-4">
   	   <h1>Nuttige tips</h1>
   	   <h2>Bewaren</h2>
   	   <img src="images/bewaren.jpg" class='img-fluid'>
<p>Indien u over een diepvries beschikt, kunt u uw roomijs of sorbets op -20°C tot -25°C verschillende maanden bewaren.</p>

<p>U bewaart uw roomijs best door deze zo goed en zo vlug mogelijk af te dekken zodat contact met de lucht tot een minimum beperkt wordt.</p>
	 </div>
	 <div class="col-md-4">
	 <h1>&nbsp;</h1>
<h2>Degusteren</h2>
<img src="images/degusteren.jpg" class='img-fluid'>
<p>De ideale temperatuur om uw roomijs te degusteren is -12°C tot -15°C. Te koud en te hard, verliest ze van haar aroma.</p>

<p>Roomijs is optimaal van smaak, als elke hap zachtjes in de mond smelt. Drink tussenin een slokje fris water om de fijne smaak te proeven. Een droog koekje is altijd zeer lekker bij uw roomijs-nagerecht.</p>
		   </div>
        <div class="col-md-4">
        <?php include("inc_aside.php");?>
		 </div>
   
   
  </div>
<div class="row footerback">
	<?php include("inc_footer.php");?>
</div>  

	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
