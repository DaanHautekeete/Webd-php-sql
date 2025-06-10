<?php
    include("cnnConnectie.php");
    include("algemeen.php");

    $show = "user";

    if(isset($_POST["txtArtnr"])) {
        $gekozenArtnr = $_POST["txtArtnr"];
        $beheerdersCode = $_POST["txtCode"];

        // Controle op beheerderscode
        if($beheerdersCode == "greenway") {
            $show = "admin";

            // Ophalen van naam en prijs product
            $queryInformationProduct = "SELECT product, prijs FROM tblproducten WHERE artnr = '$gekozenArtnr'";
            $queryInformationProductResult = $db->query($queryInformationProduct) or die(mysql_error());
            while($info = $queryInformationProductResult->fetch_assoc()) {
                $naam = $info["product"];
                $prijs = $info["prijs"];

            }

        }
        else {
            Header("Location: wrongcode.php");
        }
    }

    // als de gebruiker de prijs aanpast
    if(isset($_POST["btnPrijs"])) {
        // info ophalen
        $gekozenArtnr = $_POST["txtArtID"];
        $nieuwePrijs = $_POST["txtPrijs"];

        //scheidingsteken correct toepassen 
        $nieuwePrijs = str_ireplace(",", ".", $nieuwePrijs);

        // query opstellen
        $qryAanpassenPrijs = "UPDATE tblproducten SET prijs = '$nieuwePrijs' WHERE artnr = '$gekozenArtnr'";
        $qryAanpassenPrijsResult = $db->query($qryAanpassenPrijs) or die(mysql_error());

        // Output opstellen
        $outputBevestiging = "<p>De prijs van artikel $gekozenArtnr is aangepast naar $nieuwePrijs EUR.</p>";

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
   	   <h1>Prijsaanpassing</h1>
<form name='frmBesteloverzicht' method='post'>
<input type='text' name='txtArtnr' value='<?php echo $gekozenArtnr;?>' placeholder='Typ artikelnummer in' required>
<input type='password' name='txtCode' placeholder='Typ de beheerdercode in' required>
<input type='submit' name='btnSubmitCode' value='Toon prijsinformatie'>
</form>
<p>&nbsp;</p>

<?php 
if($show == "admin") {

?>
<form name='frmPrijswijzig' method='post'>
<table id='prijsaanpassing'>
<tr><td>ArtikelID</td><td><input type='text' name='txtArtID' value='<?=$gekozenArtnr?>' readonly></td></tr>    
<tr><td>Product</td><td><strong><?=$naam;?></strong></td></tr>
<tr><td>Prijs</td><td><input type='text' name='txtPrijs' value='<?=$prijs;?>'></td></tr>
<tr><td>&nbsp;</td><td><input type='submit' name='btnPrijs' value='Wijzig prijs'></td>
</table>
</form>
<!-- <p>Feedbackboodschap na aanpassing</p> -->
<?php
}
?>
<?=$outputBevestiging;?>
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
