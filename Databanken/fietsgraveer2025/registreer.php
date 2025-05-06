<!-- Stappenplan -->
<!-- 1) graveerplaatsen in form krijgen -->
<!-- 2) registreren (indienen & bevestigen) -->
<!-- 3) feedback-->

<?php
include("cnnfietsgraveer.php");
include("algemeen.php");

$show = "form";

//Inladen van graveerplaatsen
$sqlGraveerplaatsen = "select * from tblplaatsen ORDER BY gemeente";

$resultGraveerplaatsen = $db->query($sqlGraveerplaatsen) or die("Ophalen data is mislukt");
$echoVulTabelGraveerlijsten = "";
$blokje = 0;

//tabel vullen met informatie
while($graveerplaatsen = $resultGraveerplaatsen->fetch_assoc()) {
  $graveerplaats = $graveerplaatsen["gemeente"];
  $graveerplaatsID = $graveerplaatsen["graveerID"];
  
  // Controleren of er 5 plaatsen naast elkaar staan => zoja, dan moeten we een lege rij toevoegen
  if($blokje == 5) {
    $echoVulTabelGraveerlijsten .= "<tr><td>&nbsp;</td></tr><tr><td></td></tr>\n";
    $blokje = 0;
  }
  
  $echoVulTabelGraveerlijsten .= "<td><input value='$graveerplaatsID' type='radio' name='rdbGraveerplaats'>$graveerplaats</input></td>";

  
  $blokje += 1;

};


// Als het formulier verzonden is
if(isset($_POST["btnRegistreer"])) 
{
  $show = "output";
  // Waarden ophalen uit de velden
  $familienaam = addslashes($_POST["txtFamilienaam"]);
  $voornaam = $_POST["txtVoornaam"];
  $telefoon = $_POST["txtTelefoon"];
  $email = $_POST["txtEmail"];
  $gekozengraveerplaats = $_POST["rdbGraveerplaats"];
  $ipadres = $_SERVER['REMOTE_ADDR'];

  // Wachtwoord genereren
  $wachtwoord = "";
  $wwtekens = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z','2', '3', '4', '5', '6', '7', '8', '9');
  
  // loop voor wachtwoord te maken
  for($i = 0; $i < 8; $i++) {
    $teken = $wwtekens[mt_rand(0,count($wwtekens))];
    $wachtwoord .= $teken;
  }

  // SQL query maken
  $sqlRegistreren = "INSERT INTO `tblregistratie`(`fnaam`, `voornaam`, `telefoon`, `email`, `plaats`, `wachtwoord`, `ipadres`) VALUES ('$familienaam','$voornaam', '$telefoon','$email',$gekozengraveerplaats,'$wachtwoord','$ipadres')";
  
  $db->query($sqlRegistreren);

  // Bevestiging registratie
  $bevestiging = "De volgende gegevens werden geregistreerd:<br>";
  $bevestiging .= "Naam: <strong>$familienaam $voornaam</strong><br>";
  $bevestiging .= "Telefoon: <strong>$telefoon</strong><br>";
  $bevestiging .= "E-mailadres: <strong>$email</strong><br>";

  $sqlInfoPlaats = "Select * from tblplaatsen where graveerID = $gekozengraveerplaats";

  $InfoPlaats = $db->query($sqlInfoPlaats);

  $info = $InfoPlaats->fetch_assoc();

  $bevestiging .= "Graveerplaats: ". $info["gemeente"] . " - ". $info["locatie"] . " (" . $info["adres"] .") <br>";

  $bevestiging .= "Tijdstip:";





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
   	   <h1>Registreer je fietsgravure</h1>

<?php 
  if($show == "form") {
?>
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
        <td><input name="txtTelefoon" type="text" required  /></td>
        <td>E-mailadres</td>
        <td><input name="txtEmail" type="text"  required /></td>
        </tr>
  </table>
    
  </fieldset><br />
  <fieldset><legend>Kies je graveerplaats</legend>
  <table width="800" border="0" cellspacing="0" cellpadding="0"> 
  <tr>
    <?= $echoVulTabelGraveerlijsten?>
  
  
  </tr>
  </table>
  </fieldset>
<p class="bericht"></p>
  <input name="btnRegistreer"  type="submit" id="btnRegistreer" value="Registreer je fietsgravure" />
</form>
<?php
}
else
{echo $bevestiging;}?>
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
