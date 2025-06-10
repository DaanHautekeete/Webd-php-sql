<?php
    include("cnnConnectie.php");
    include("algemeen.php");

    // Artnr ophalen
    $artnr = $_GET["artnr"];

    // Alle informatie ophalen van product
    $queryProductInfo = "SELECT * FROM tblproducten WHERE artnr = '$artnr'";
    $queryProductInfoResult = $db->query($queryProductInfo) or die(mysql_error());
    while($info = $queryProductInfoResult->fetch_assoc()) {
        $naam = $info["product"];
        $omschrijving = $info["omschrijving"];
        $prijs = $info["prijs"];

        // Output opstellen
        $outputInfoProduct .= "<p class='prod'>$naam</p><p>$omschrijving</p><p><strong>€ $prijs</strong></p>";

        // Ophalen hoeveel stuks er verkocht werden
        $queryVerkochtAantal = "SELECT COUNT(*) from tblorderlijnen WHERE artikel = '$artnr'";
        $queryVerkochtAantalResult = $db->query($queryVerkochtAantal) or die(mysql_error());
        $orders = $queryVerkochtAantalResult->fetch_row();
        $aantalBestellingen = $orders[0];
        
        // Output opstellen
        $outputAantalStuks = "<p>Reeds <strong>$aantalBestellingen</strong> stuks besteld!</p>";

    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Greenway - meet the new meat!</title>

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
   	   <div class="col-md-8">
   	   <h1>Productinformatie</h1>

<div id='prodinfo'>
<div id='foto'><img src='images/<?=$artnr;?>.jpg'></div>
<div id='info'>
<!-- <p class='prod'>product</p><p>omschrijving</p><p><strong>€ XXX</strong></p> -->
<?=$outputInfoProduct;?>
<!-- <p>Reeds <strong>XXX</strong> stuks besteld!</p> -->
<?=$outputAantalStuks;?>
</div>
    
<div id='clearing'></div>
</div>
<p><a href='productlijst.php'>Terug naar productlijst</a></p>
           
           
           
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
