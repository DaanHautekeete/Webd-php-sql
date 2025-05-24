<?php
include("cnnfietsgraveer.php");
include("algemeen.php");

// lijst met personen opstellen
if(!isset($_GET['id']) or $_POST['btnKnop'] == "Nee") {
  $sql = "SELECT * FROM tblregistratie ORDER BY fnaam,voornaam";
  $result = $db->query($sql);
  while($rowresult = $result->fetch_assoc()) {
    $totnaam = $rowresult['voornaam'];
    $totnaam .= " ";
    $totnaam .= $rowresult['fnaam'];
    $id = $rowresult['registratieID'];
    $lijst.="<tr><td width='60%'>$totnaam</td><td><a href='?id=$id'><img src='images/picto_delete.jpg'></a></td></tr>";
  }
}

// effectief verwijderen
if($_POST['btnKnop'] == "Ja"){
  $sqlverwijder = "DELETE FROM tblregistratie WHERE registratieID=".$_SESSION['id'];
  $db->query($sqlverwijder);
  $message = "<strong>".$_SESSION['vnaam']." ".$_SESSION['fnaam']."</strong> is definitief verwijderd!<br/><br/>";
  //session leeg maken
  unset($_SESSION['id'],$_SESSION['fnaam'],$_SESSION['vnaam']);
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
   	   <div class="col-md-5">
          <h1>Verwijder registratie</h1>
<table class='table table-striped table-hover'>
  <?= $lijst?>
</table>

<?php
//je zou ook gwn de voor- en achternaam kunnen hebben meegegeven met de href
if(isset($_GET['id']) and !isset($_POST['btnKnop'])){
  $_SESSION['id'] = $_GET['id'];
  $sql1 = "SELECT *FROM tblregistratie WHERE registratieID =".$_GET['id'];
  $result1 = $db->query($sql1);
  $row1 = $result1->fetch_assoc();
  $_SESSION['fnaam'] = $row1['fnaam'];
  $_SESSION['vnaam'] = $row1['voornaam'];
?>



<form id="form1" name="form1" method="post" action="">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="500">Wilt u de gegevens van <?= $_SESSION['vnaam']." ".$_SESSION['fnaam'];?> definitief verwijderen? </td>
      <td width="50"><input name="btnKnop" type="submit" id="btnKnop" value="Ja" /></td>
      <td width="50"><input name="btnKnop" type="submit" id="btnKnop" value="Nee" /></td>
    </tr>
  </table>
</form>

<?php 
} 
echo $message
?>

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
