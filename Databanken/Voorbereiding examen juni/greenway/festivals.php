<?php 
    include("cnnConnectie.php");
    include("algemeen.php");


    // Alle informatie over festivals ophalen
    $queryFestivals = "SELECT * from tblfestivals";
    $queryFestivalsResult = $db->query($queryFestivals) or die(mysql_error());
    while($festival = $queryFestivalsResult->fetch_assoc()) {
        $idNL = $festival["idnl"];
        $idFR = $festival["idfr"];
        $factNL = $festival["factnl"];
        $factFR = $festival["factfr"];

        if($_SESSION['taal'] == "nl") {
            $outputFestivals .= "<div id='fact'><img src='images/$idNL.jpg' class='img-fluid'><p>$factNL</p></div>";
        }
        else if($_SESSION["taal"] == "fr") {
            $outputFestivals .= "<div id='fact'><img src='images/$idFR.jpg' class='img-fluid'><p>$factFR</p></div>";
        }
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
   	   <h1>Festivals - facts & figures</h1>

<!-- <div id='fact'><img src='images/foto.jpg' class='img-fluid'><p>tekst fact</p></div> -->
<?= $outputFestivals;?>
<div id='clearing'></div>
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
