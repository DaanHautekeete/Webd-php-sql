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
   	   <h1>Registreer je fietsgravure</h1>

<form id="form1" name="form1" method="post" action="">
  <fieldset><legend>Persoonlijke gegevens</legend>
    <table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>Familienaam</td>
        <td><input name="txtFamilienaam" type="text" required /></td>
        <td>Voornaam</td>
        <td><input name="txtVoornaam" type="text" required  /></td>
        </tr>
      <tr>
        <td>Telefoon</td>
        <td><input name="txtTelefoon" type="text"   /></td>
        <td>E-mailadres</td>
        <td><input name="txtEmail" type="text"   /></td>
        </tr>
  </table>
    
  </fieldset><br />
  <fieldset><legend>Kies je graveerplaats</legend>
  <table width="800" border="0" cellspacing="0" cellpadding="0"> 
  <tr>
HIER KOMEN DE PLAATSEN WAARUIT JE KUNT KIEZEN!
  
  
  </tr>
  </table>
  </fieldset>
<p class="bericht"></p>
  <input name="btnRegistreer"  type="submit" id="btnRegistreer" value="Registreer je fietsgravure" />
</form>
<p>&nbsp;</p>
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
