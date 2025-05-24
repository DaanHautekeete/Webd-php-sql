<?php 
include("cnnConnectie.php");
include("algemeen.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Missault</title>

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
   	   <div class="col-md-8">
	<h1>Detailinformatie</h1>
	
   	<div id='productdetail'>
	<table class='table table-hover'>
	<tr><td class='backwit' width='30%'>FOTO</td>
	<td>
	<table class='table table-hover'>	   
	<tr><td><strong>PRODUCT</strong></td></tr>
	<tr><td>CATEGORIE</td></tr>
	<tr><td>OMSCHRIJVING</td></tr>
	<tr><td>X - Y personen</td></tr>
	<tr><td>€ XXX,XX</td></tr>
        <tr><td>Ook per 6 stuks verkrijgbaar.</td></tr>
	   <tr><td class='opvallend'>PROMO - 15 % korting!</td></tr>
	   </table>
	   </td></tr>
	   </table>
	   </div>
<p>Terug naar overzicht</p>
	
     </div>
        <div class="col-md-4">
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
