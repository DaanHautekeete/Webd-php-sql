<?php
include("cnnfietsgraveer.php");
include("algemeen.php");
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
 <div class="col-md-12">   	   
 <h1>Overzicht en detailinformatie waar u terecht kunt. </h1>    
 <p>U kunt op &eacute;&eacute;n van volgende locaties terecht voor het graveren van je fiets. Klik op <img src='images/picto_detail.jpg'> voor detailinformatie. </p>    
</div>
</div>
<div class="row">
<div class="col-md-5">
<table class='table'>
<tr class='onpaar'><td><strong>Gemeente</strong></td><td><strong>Locatie</strong></td><td>&nbsp;</td></tr>
</table>
</div>	
<div class="col-md-4">

<p><strong>Detailinfo XXX</strong></p>
	<table class='table'>
  <tr >
    <td width ='100' class="onderrand">Gemeente</td>
    <td width ='200' class="onderrand">XXX</td>
  </tr>
  <tr>
    <td class="onderrand">Locatie</td>
    <td class="onderrand">XXX</td>
  </tr>
  <tr>
    <td class="onderrand">Adres</td>
    <td class="onderrand">XXX</td>
  </tr>
  <tr>
    <td class="onderrand">Datum</td>
    <td class="onderrand">XXX</td>
  </tr>
  <tr>
    <td class="onderrand">Uur</td>
    <td class="onderrand">XXX</td>
  </tr>
</table>

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
