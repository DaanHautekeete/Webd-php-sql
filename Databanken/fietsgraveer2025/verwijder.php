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
   	   <div class="col-md-5">
          <h1>Verwijder registratie</h1>
<table class='table table-striped table-hover'>
<tr><td width='60%'>XXX YYY</td><td>PICTOGRAM</td></tr>
</table>

<form id="form1" name="form1" method="post" action="">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="500">Wilt u de gegevens van <strong>XXX YYY</strong> definitief verwijderen? </td>
      <td width="50"><input name="btnKnop" type="submit" id="btnKnop" value="Ja" /></td>
      <td width="50"><input name="btnKnop" type="submit" id="btnKnop" value="Nee" /></td>
    </tr>
  </table>
</form>

<strong>XXX YYY</strong> is definitief verwijderd!<br/><br/>
<a href='verwijder.php'>Terug naar lijst</a>
           </div>
           <div class="col-md-4"></div>
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
