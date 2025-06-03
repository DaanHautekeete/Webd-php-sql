a<?php
    include("cnnConnectie.php");
    include("algemeen.php");

    // Als de gebruiker een categorie heeft gekozen
    if(isset($_POST['cboCategorie'])) {
        $gekozenCat = $_POST['cboCategorie'];


        $sqlProducten = "SELECT * FROM tblproducten WHERE productgroep = '$gekozenCat'";
        $sqlProductenResult = $db->query($sqlProducten) or die(mysql_error());
        while($product = $sqlProductenResult->fetch_assoc()) {
            $artnr = $product['artnr'];
            $productGroep = $product['productgroep'];
            $productNaam = $product['product'];
            $productOmschrijving = $product['omschrijving'];
            $productPrijs = $product['prijs'];

            $outputProducten .= "<tr><td><a href='info.php?artnr=$artnr'><img src='images/picto_info1.jpg'></a></td><td>$productNaam</td></tr>";
        }
    }

    // Categorieën ophalen
    $sqlcategorien = "SELECT * FROM tblcategorie";
    $sqlcategorienResult = $db->query($sqlcategorien) or die(mysql_error());
    while($categorie = $sqlcategorienResult->fetch_assoc()) {
        $catID = $categorie['catID'];
        $catomschrijving = $categorie['catomschrijving'];
        

        $outputKeuzeCat .= "<option value='$catID'"; 
        if($gekozenCat == $catID) {
            $outputKeuzeCat.=" selected";
        }
        
        $outputKeuzeCat.= ">$catomschrijving</option>\n";
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
   	   <h1>Productlijst</h1>
   	   <form name="frmCategorie" method="post">
   	   <p><select name="cboCategorie" onChange="document.frmCategorie.submit()">
   	   <option value="0">Kies een categorie</option>
       <?=$outputKeuzeCat;?>
       </select>
       </p>
       </form>
           
<table id ="prodlijst" class='table table-hover' >	   
<!-- <tr><td><img src='images/picto_info1.jpg'></td><td></td></tr> -->
 <?=$outputProducten;?>
</table>
   
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
