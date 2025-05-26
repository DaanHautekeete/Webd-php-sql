<?php 
    include("cnnConnection.php");
    include("algemeen.php");

    //alle categorien ophalen
    $sqlcategorien = "SELECT DISTINCT categorie from tblcategorie ";
    $categorieResult = $db->query($sqlcategorien) or die(mysql_error());

    while($row = $categorieResult->fetch_assoc()) {
        $outputKnoppen .= "<input type='submit' name='btncategorie' value='".$row["categorie"]."' class='knop'>";
    }


    //controleren of gebruiker op een knop heeft geklikt
    if(isset($_POST["btncategorie"])) {
        //ophalen geselecteerde categorie
        $gekozenCategorie = $_POST["btncategorie"];


        //sql statement maken om alle producten in die categorie op te halen
        $sqlProducten = "SELECT * FROM tblartikels WHERE Categorie = '$gekozenCategorie'";
        $sqlProductenCommand = $db->query($sqlProducten);
        while($product = $sqlProductenCommand->fetch_assoc()) {
            $artikelNummer = $product['Artnr'];
            $merk = $product['Merk'];
            $omschrijving = $product['Omschrijving'];
            $prijs = $product['Prijs'];
            $categorie = $product['Categorie'];
            $subcategorie = $product['Subcategorie'];

            //opstellen van output
            $outputProducten .= "<div id='product'>";
            $outputProducten .= "<div id='foto'><img src='/images/".$artikelNummer.".jpg'></div>";
            $outputProducten .= "<div id='cat'><p>".$categorie." - ".$subcategorie."</div>";
            $outputProducten .= "<div id='merk'><p>".$merk."</p></div>";
            $outputProducten .= "</div>";
            
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
<?= $outputKnoppen;?>
</form>

<div id="producten">

<div id='product'>
<div id='foto'>FOTO</div>
<div id='cat'>categorie - subcategorie</div>
<div id='merk'>merk</div>
<div id='omschrijving'>omschrijving</div>
<div id='prijs'>€ xxx</div>

<?= $outputProducten ?>
</div>

</div>
	
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>