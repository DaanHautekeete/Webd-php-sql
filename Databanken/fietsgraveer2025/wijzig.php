<?php
include("cnnfietsgraveer.php");
include("algemeen.php");
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
   
      </select>
  </p>
 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="120">Familienaam</td>
      <td><input name="txtFamilienaam" type="text" id="txtFamilienaam"/></td>
    </tr>
    <tr>
      <td>Voornaam</td>
      <td><input name="txtVoornaam" type="text" id="txtVoornaam"/></td>
    </tr>
    <tr>
      <td>Telefoon</td>
      <td><input name="txtTelefoon" type="text" id="txtTelefoon"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="txtEmail" type="text" id="txtEmail" size="40"/></td>
    </tr>
    <tr>
      <td>Plaats</td>
      <td>
     KEUZELIJST PLAATSEN
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
      <td colspan="2">HIER KOMT BERICHT DAT WIJZIGINGEN BEVESTIGT</td>
      
    </tr>
  </table>

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
