<?php 
    include("cnnConnection.php");
    include("algemeen.php");

    // informatie over product ophalen
    $gekozenArtNr = $_GET['ID'];

    $qryInfo = "SELECT * FROM tblartikels WHERE Artnr = '$gekozenArtNr'";
    $qryInfoResult = $db->query($qryInfo);
    while($resultInfo = $qryInfoResult->fetch_assoc()) {
        $cat = $resultInfo['Categorie'];
        $subCat = $resultInfo['Subcategorie'];
        
        $merk = $resultInfo['Merk'];
        $omschrijvingProduct = $resultInfo['Omschrijving'];
        $prijs = $resultInfo['Prijs'];

        // Problemen met afkappingstekens vermijden
        $subcatQuery = addslashes($subCat);

        // Omschrijving subcat ophalen
        $qryOmschrijvingSubCat = "SELECT Omschrijving from tblcategorie WHERE Subcat = '$subcatQuery'";
        $qryOmschrijvingSubCatResult = $db->query($qryOmschrijvingSubCat);
        
        while($resultOmschrijving = $qryOmschrijvingSubCatResult->fetch_assoc()) {
            $omschrijvingSubCat = $resultOmschrijving["Omschrijving"];
        }
        
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zalando</title>
<link href="opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
	<div id="banner"><?php include("banner.php");?></div>
    <div id="login">
    <?php include("login.php");?>
    </div>
    <div id="menu"><?php include("menu.php");?></div>
    <div id="content">
<h1>Detailinfo <?php echo "$gekozenArtNr - $subCat - $merk";?></h1>

<p class='omschrijving'><?=$omschrijvingSubCat?><br></p>
<div id='product'>
<div id='foto'><img src='images/<?=$gekozenArtNr?>.jpg'></div>
<div id='cat'><?php echo "$cat - $subCat";?></div>
<div id='merk'><?=$merk?></div>
<div id='omschrijving'><?=$omschrijvingProduct?></div>
<div id='prijs'>€ <?=$prijs?></div>
</div>
<p class='stopfloat'><a href='productinfo.php'>Terug naar productoverzicht</a></p>




	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>