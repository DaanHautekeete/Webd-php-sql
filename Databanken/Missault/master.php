<?php 
include("cnnConnectie.php");
include("algemeen.php");?>
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
   	   <h1>Productoverzicht</h1>
   	   <form name="frmCategorie" method="post">
   	   <p><select name="cboCategorie">
   	   <option value="0">Kies een categorie</option>
   	   <option value="1">Alle categorieën</option>
       </select>
        </p></form>

<div id='product'>
FOTO
<p class='midden'><strong>PRODUCT</strong></p>
</div>

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
