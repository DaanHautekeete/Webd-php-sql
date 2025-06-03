<?php 
    include("cnnConnectie.php");
    include("algemeen.php");

    // Festivals
    $sqlFestivals = "SELECT * FROM tblfestivals"; 
    $sqlFestivalsResult = $db->query($sqlFestivals) or die(mysql_error());
    while($festival = $sqlFestivalsResult->fetch_assoc()) {
        $idnl = $festival['idnl'];
        $idfr = $festival['idfr'];
        $beschrijvingNL = $festival['factnl'];
        $beschrijvingFR = $festival['factfr'];

        $outputProducten .= "<div id='fact'>";
        // Controleren welke taal gekozen is
        if($_SESSION['taal'] == 'nl') {
            $outputProducten .= "<img src='images/$idnl.jpg' class='img-fluid'>";
            $outputProducten .= "<p>$beschrijvingNL</p>";
        }
        else if($_SESSION['taal'] == 'fr') {
            $outputProducten .= "<img src='images/$idfr.jpg' class='img-fluid'>";
            $outputProducten .= "<p>$beschrijvingFR</p>";
        }


        $outputProducten .= "</div>";
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
<?=$outputProducten?>
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
