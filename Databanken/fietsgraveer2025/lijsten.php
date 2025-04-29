<?php
include("cnnfietsgraveer.php");
include("algemeen.php");
$maanden = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
$weekdagen = array("maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag","zondag");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Brugge - Fietsstad</title>

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
   	   <div class="col-md-9">
   	   <h1>Lijst van geregistreerde personen per locatie</h1>

<form id="form1" name="frmLijst" method="post" action="">
Kies je locatie: 
  <select name="cboPlaats" onchange="document.frmLijst.submit()">
  <option value="0">Maak je keuze!</option>

  </select>
  <br/>
</form>

<strong>Locatie: </strong>XXX<br/>
<strong>Adres: </strong>XXX<br/>
<strong>Datum en uur: </strong>XXX<br/><br/>
<table class='table'><tr class='onpaar'><td><strong>Naam</strong></td><td><strong>Telefoon</strong></td><td><strong>Email</strong></td></tr>
</table>
<br/>Totaal aantal geregistreerde personen: XXX.

<p>&nbsp;</p>
           </div>
           <div class="col-md-3">
    <h2>Brugge - fietsende stad</h2>
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
