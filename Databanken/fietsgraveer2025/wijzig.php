<?php
include("cnnfietsgraveer.php");
include("algemeen.php");

// Stappenplan:
// 1) keuzelijst vullen met alle personen
// 2) gegevens ophalen (persoon & keuzelijst voor plaats maken)
// 3) gegevens aanpassen


// als het formulier verzonden is
if(isset($_POST['btnWijzig'])) 
{
  // Alle informatie uit velden halen
  $idPersoon = $_POST['cboPersoon'];

  if($idPersoon != '0') 
  {
    $aangepastefnaam = $_POST['txtFamilienaam'];
    $aangepastevnaam = $_POST['txtVoornaam'];
    $aangepasteTelefoon = $_POST['txtTelefoon'];
    $aangepasteEmail = $_POST['txtEmail'];
    $aangepastePlaats = $_POST['cboPlaatsen'];

    $ipadres = $_SERVER['REMOTE_ADDR'];
    $tijdreg = date('Y-m-d');
  
    // Query uitvoeren
    $qryGegevensAanpassen = $db->query("UPDATE tblregistratie SET fnaam = '$aangepastefnaam', voornaam = '$aangepastevnaam', telefoon = '$aangepasteTelefoon', email = '$aangepasteEmail', plaats = $aangepastePlaats, ipadres='$ipadres', tijdreg = '$tijdreg' WHERE registratieID = $idPersoon");


    $bericht = "$aangepastefnaam $aangepastevnaam is gewijzigd op $tijdreg via ip: $ipadres";
  }

}

// keuzelijst vullen met personen
$qryPersonen = $db->query("select * from tblregistratie order by fnaam, voornaam");

while($recordpersoon = $qryPersonen->fetch_assoc()) {
  $vnaam = $recordpersoon['voornaam'];
  $fnaam = $recordpersoon['fnaam'];
  $registratieID = $recordpersoon['registratieID'];

  $comboPersonen .= "<option value='$registratieID'>$fnaam $vnaam</option>\n";
}

// Als een keuze gemaakt is van persoon
if(isset($_POST['cboPersoon'])) 
{
  $gekozenPersoon = $_POST['cboPersoon'];

  $qryPersonen = $db->query("select * from tblregistratie order by fnaam, voornaam");

  while($recordpersoon = $qryPersonen->fetch_assoc()) {
    $vnaam = $recordpersoon['voornaam'];
    $fnaam = $recordpersoon['fnaam'];
    $registratieID = $recordpersoon['registratieID'];

    $comboPersonen .= "<option value='$registratieID' ";

    if($registratieID == $gekozenPersoon) {
      $comboPersonen .= "selected";
    }
    
    $comboPersonen .= ">$fnaam $vnaam</option>";
  }


  //informatie inladen van de gebruiker
  $qryPersoon = $db->query("select * from tblregistratie where registratieID = $gekozenPersoon");

  while($recordgekozenpersoon = $qryPersoon->fetch_assoc()) {
    $fnaamGekozenpersoon = $recordgekozenpersoon['fnaam'];
    $vnaamGekozenpersoon = $recordgekozenpersoon['voornaam'];
    $telefoonGekozenpersoon = $recordgekozenpersoon['telefoon'];
    $emailGekozenpersoon = $recordgekozenpersoon['email'];
  }


  // Keuzelijst met plaatsen vullen
  $qryPlaatsen = $db->query("select * from tblplaatsen order by gemeente");

  while($recordPlaats = $qryPlaatsen->fetch_assoc()) {
    $gemeente = $recordPlaats['gemeente'];
    $locatie = $recordPlaats['locatie'];
    $graveerID = $recordPlaats['graveerID'];

    $vulPlaatsen .= "<option value='$graveerID'>$gemeente - $locatie</option>";

  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Brugge - Fietsstad</title>

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
   	   <div class="col-md-9">
   	   <h1>Gegevens van geregistreerde personen wijzigen </h1>

<form id="form1" name="frmPersoon" method="post" action="">
  <p>Kies een persoon: 
    <select name="cboPersoon" onchange="document.frmPersoon.submit()">
      <option value="0">Maak je keuze!</option>
      <?= $comboPersonen?>
      </select>
  </p>
 
  <?php 
  if(isset($_POST['cboPersoon'])) {

  ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="120">Familienaam</td>
      <td><input name="txtFamilienaam" type="text" id="txtFamilienaam" value='<?php echo $fnaamGekozenpersoon?>'/></td>
    </tr>
    <tr>
      <td>Voornaam</td>
      <td><input name="txtVoornaam" type="text" id="txtVoornaam" value='<?php echo $vnaamGekozenpersoon?>'/></td>
    </tr>
    <tr>
      <td>Telefoon</td>
      <td><input name="txtTelefoon" type="text" id="txtTelefoon" value='<?php echo $telefoonGekozenpersoon?>'/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="txtEmail" type="text" id="txtEmail" size="40" value='<?php echo $emailGekozenpersoon?>'/></td>
    </tr>
    <tr>
      <td>Plaats</td>
      <td>
     <select name="cboPlaatsen">
      <option value='0'>Kies je plaats</option>
      <?= $vulPlaatsen?>
</select>
</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <input name="btnWijzig" type="submit" value="Wijzigingen registreren" /></td>
      
    </tr>
    
    <tr>
      <td colspan="2"><?= $bericht;?></td>
      
    </tr>
  </table>
<?php }?>
</form>
           </div>
           <div class="col-md-3">
    <h2>Brugge - fietsende stad</h2>
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
