<?php 
    include("cnnConnection.php");
    include("algemeen.php");

    // Ophalen van artikelnummer indien nodig
    if(isset($_GET['id'])) {
        $artikelnummer = $_GET['id'];

        //alle nodige informatie ophalen
        $sqlInfo = "Select * from tblartikels WHERE Artnr = '$artikelnummer'";
        $infoResult = $db->query($sqlInfo);
        while($product = $infoResult->fetch_assoc()) {
            $categorie = $product['Categorie'];
            $subCategorie = $product['Subcategorie'];
            $merk = $product['Merk'];
            $omschrijving = $product['Omschrijving'];
            $prijs = $product['Prijs'];

            // Omschrijving van subcategorie ophalen
            $sqlomschrijving = "SELECT Omschrijving FROM tblcategorie WHERE Subcat = '$subCategorie'";
            $omschrijvingResult = $db->query($sqlomschrijving);
            while($row = $omschrijvingResult->fetch_assoc()) {
                $omschrijvingCategorie = $row['Omschrijving'];
            }

        }
        
        // Output opstellen
        $outputTitel =  "<h1>Detailinfo $artikelnummer - $subCategorie - $merk</h1>";
        $outputOmschrijvingCat = "<p class='omschrijving'>$omschrijvingCategorie<br></p>";

        $outputProduct .= "<div id='product'>";
        $outputProduct .= "<div id='foto'><img src=images/".$artikelnummer.".jpg></div></a>";
        $outputProduct .= "<div id='cat'><p>".$categorie." - ".$subCategorie."</div>";
        $outputProduct .= "<div id='merk'><p>".$merk."</p></div>";
        $outputProduct .= "<div id='omschrijving'><p>".$omschrijving."</p></div>";
        $outputProduct .= "<div id='prijs'><p>€ ".$prijs."</p></div>";
        $outputProduct .= "</div>";

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

    <!-- Output -->
    <?= $outputTitel?>
    <?= $outputOmschrijvingCat?>
    <?= $outputProduct ?>
    </div>
    <p class='stopfloat'><a href='productinfo.php'>Terug naar productoverzicht</a></p>




	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>