<?php
include("cnnfietsgraveer.php");
include("algemeen.php");


// Lijst plaatsen links
$qryPlaatsen = $db->query("SELECT * from tblplaatsen ORDER BY gemeente");

while($rowPlaatsen = $qryPlaatsen->fetch_assoc()) 
{
  $ID = $rowPlaatsen["graveerID"];
  $gemeente = $rowPlaatsen["gemeente"];
  $locatie = $rowPlaatsen["locatie"];

  // Hier geven we een parameter mee aan de hyperlink, deze gebruiken we dan later om de info op te halen
  $plaatsen .= "<tr><td>$gemeente</td><td>$locatie</td><td><a href='detailinfo.php?id=$ID'> <img src='images/picto_detail.jpg'></a></td></tr>\n";
}

// Conditioneel maken
if(!empty($_GET['id'])) {
  // Detailinfo ophalen
  $gekozenID = $_GET['id'];

  // record ophalen
  $qryInfo = $db->query("SELECT * FROM tblplaatsen WHERE graveerID = $gekozenID");
  while($rowInfo = $qryInfo->fetch_assoc()) {
    $gemeente = $rowInfo["gemeente"];
    $locatie = $rowInfo["locatie"];
    $adres = $rowInfo["adres"];
    $datum = $rowInfo["datum"];
    $uur = $rowInfo["uur"];
  }
  
  // Tabel met info over gemeente maken
  $details = "<p><strong>Detailinfo $gemeente</strong></p>
  <table class='table'>
  <tr>
    <td width ='100' class='onderrand'>Gemeente</td>
    <td width ='200' class='onderrand'>$gemeente</td>
  </tr>
  <tr>
    <td class='onderrand'>Locatie</td>
    <td class='onderrand'>$locatie</td>
  </tr>
  <tr>
    <td class='onderrand'>Adres</td>
    <td class='onderrand'>$adres</td>
  </tr>
  <tr>
    <td class='onderrand'>Datum</td>
    <td class='onderrand'>$datum</td>
  </tr>
  <tr>
    <td class='onderrand'>Uur</td>
    <td class='onderrand'>$uur</td>
  </tr>
  </table>";
}



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
<?= $plaatsen;?>
</table>
</div>	
<div class="col-md-4">
  <?= $details;?>

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
