<?php 
    include("cnnConnection.php");
    include("algemeen.php");

    // Alle categorien ophalen
    $qryCat = "SELECT Categorie from tblcategorie WHERE CatType ='hoofd'";
    $qryCatResult = $db->query($qryCat) or die(mysql_error());
    while($cat = $qryCatResult->fetch_assoc()) {
        $naam = $cat["Categorie"];
        // Output opstellen
        $outputCat .= "<input type='submit' name='btnCat' value='$naam' class='knop'>";
    }

    if(isset($_POST["btnCat"])) {
        $gekozenCat = $_POST['btnCat'];

        // Alle producten ophalen van die categorie
        $qryProducten = "SELECT * FROM tblartikels WHERE Categorie LIKE '%$gekozenCat%'";
        $qryProductenResult = $db->query($qryProducten);
        
        while($product = $qryProductenResult->fetch_assoc()) {
            $artNr = $product['Artnr'];
            $subCat = $product['Subcategorie'];
            $merk = $product['Merk'];
            $omschrijving = $product['Omschrijving'];
            $prijs = $product['Prijs'];

            // Output opstellen
            $outputProducten .= "<a href='detail.php?ID=$artNr'>";
            $outputProducten .= "<div id='product'>";
            $outputProducten .= "<div id='foto'><img src='images/$artNr.jpg'></div>";
            $outputProducten .= "<div id='cat'>$gekozenCat - $subCat</div>";
            $outputProducten .= "<div id='merk'>$merk</div>";
            $outputProducten .= "<div id='omschrijving'>$omschrijving</div>";
            $outputProducten .= "<div id='prijs'>€ $prijs</div>";
            $outputProducten .= "</div>";
            $outputProducten .= "</a>";
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
    <div id="content"> <h1>Productinfo</h1>

<form method='post' name='frmCat'>
<!-- <input type='submit' name='btnCat' value='xxx' class='knop'> -->
<?=$outputCat?>
</form>

<div id="producten">

<!-- <div id='product'>
<div id='foto'>FOTO</div>
<div id='cat'>categorie - subcategorie</div>
<div id='merk'>merk</div>
<div id='omschrijving'>omschrijving</div>
<div id='prijs'>€ xxx</div>
</div> -->
<?=$outputProducten?>

</div>
	
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>