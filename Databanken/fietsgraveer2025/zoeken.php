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
   	   <h1>Gegevens van geregistreerde personen opzoeken </h1>

<form id="form1" name="frmPersoon" method="post" action="">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100">&nbsp;</td>
      <td width="160">Familienaam</td>
      <td width="160">Voornaam      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Wie zoek je? </td>
      <td><input name="txtFamilienaam" type="text" id="txtFamilienaam2"  /></td>
      <td><input name="txtVoornaam" type="text" id="txtVoornaam"  /></td>
      <td><input name="btnZoeken" type="submit" id="btnZoeken" value="Zoeken" /></td>
    </tr>
  </table>
  </form>
  <p>BERICHT/FEEDBACK</p>

  <table class='table'>
    <tr>
      <td><strong>Familienaam</strong></td>
      <td><strong>Voornaam</strong></td>
      <td><strong>Telefoon</strong></td>
      <td><strong>Email</strong></td>
      <td><strong>Plaats</strong></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	 </tr>
</table>

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
