<?php
include("cnnfietsgraveer.php");
include("algemeen.php");
if ($_SESSION['inlogstatus']<>"ingelogd")
{
Header("Location:index.php");
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
   	   <div class="col-md-7">
   	   <h1>Gegevens van XXX YYY</h1>

  <table class='table'>
    <tr>
      <td width="200" class="rand">Voor- en familienaam</td>
      <td class="rand">XXX YYY</td>
    </tr>
    <tr>
      <td width="200" class="rand">Telefoon</td>
      <td class="rand">XXX</td>
    </tr>
    <tr>
    <td width="200" class="rand">E-mailadres</td>
    <td class="rand">XXX</td>
  </tr>
  <tr>
  <td width="200" valign="top" class="rand">Plaats</td>
  <td class="rand">XXX <br>
  XXX<br>
  XXX
  </td>
</tr>
    
    <tr>
      <td colspan="2"></td>
      
    </tr>
  </table>
           </div>
           <div class="col-md-2">
            <img src='images/fietsstad.jpg' class='img-fluid'>
            
            <div class='regcode'><p class='regcodeklein'>registratiecode</p>XXX</div>
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
