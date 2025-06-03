<?php
    include("cnnConnectie.php");
    include("algemeen.php");

    // Alle info ophalen van gekozen product
    if(isset($_GET['artnr'])) {
        $artnr = $_GET['artnr'];
        $sqlinfo = "SELECT * FROM tblproducten WHERE artnr = '$artnr'";
        $sqlinfoResult = $db->query($sqlinfo) or die(mysql_error());
        while($product = $sqlinfoResult->fetch_assoc()) {
            $artnr = $product['artnr'];
            $naam = $product['product'];
            $omschrijving = $product['omschrijving'];
            $prijs = $product['prijs'];

            //aantal bestellingen van dit product ophalen
            $sqlBestellingen = "SELECT COUNT(*) FROM tblorderlijnen WHERE artikel = '$artnr'";
            $sqlBestellingenResult = $db->query($sqlBestellingen) or die(mysql_error());
            $bestellingen = $sqlBestellingenResult->fetch_row();
            $aantalBestellingen = $bestellingen[0];


        }
    } 
    else 
    {
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
<div id='info'><p class='prod'><?=$naam?></p><p><?=$omschrijving;?></p><p><strong>€ <?=$prijs;?></strong></p>
<p>Reeds <strong><?=$aantalBestellingen;?></strong> stuks besteld!</p>
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
