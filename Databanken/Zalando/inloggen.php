<?php 
  include("cnnConnection.php");
  include("algemeen.php");
  $tekens = array ("2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","j","k","l","m","n","p","q","r","s","t","u","v","w","x","y","z");


  //registratie
  $errorRegistratie = "";

  //als de gebruiker heeft geklikt op knop
  if(isset($_POST["btnRegistreer"])) {
    //alle gegevens ophalen
    $geslacht = $_POST["optGeslacht"];
    $fnaam = $_POST["txtFamilienaam"];
    $vnaam = $_POST["txtVoornaam"];
    $geboortedatum = $_POST["txtGeboortedatum"];
    $email = $_POST["txtEmail"];
    $emailcontrole = $_POST["txtEmail2"];

    //controleren of controle van email klopt
    if($email == $emailcontrole) {
      //controleren of email al in gebruik is
      $sqlCheckEmail = "SELECT Familienaam, Voornaam from tblklanten WHERE Email = '$email'";
      $resultEmailCheck = $db->query($sqlCheckEmail) or die(mysql_error());
      
      if($resultEmailCheck->num_rows > 0) {
        $row = $resultEmailCheck->fetch_assoc();

        $errorRegistratie = "<p>E-mail is in gebruik door <strong>".$row["Voornaam"]."</strong> <strong>".$row["Familienaam"]."</strong></p>";
      }
      else {
        // Wachtwoord genereren
        for($i = 0; $i < 6; $i++) {
          $wachtwoord .= $tekens[mt_rand(0,count($tekens)-1)];
        }

        // KlantID vaststellen
        $r1 = $db->query("SELECT MAX(KlantID) from tblklanten");

        //fetch row => waarde uit array ophalen op basis van een index
        $waarde = $r1->fetch_row();
        $nieuwnr = intval(substr($waarde[0],2,4)) +1;
        $klantID = "KL".$nieuwnr;


        //sql statement opmaken
        $sqlRegistratie = "INSERT INTO tblklanten (KlantID, Familienaam, Voornaam, Geslacht, Wachtwoord, Email, Geboortedatum) VALUES ('$klantID', '$fnaam', '$vnaam', '$geslacht', '$wachtwoord', '$email', '$geboortedatum')";

        //registratie uitvoeren
        $db->query($sqlRegistratie) or die(mysql_error());

        $errorRegistratie = "<p>Registratie is voltooid</p>";

      }
    }
    else {
      $errorRegistratie = "<p>Gelieve dezelfde e-mail in te geven</p>";
    }
  }

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zalando</title>
<link href="opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
	<div id="banner"><?php include("banner.php");?></div>
    <div id="login">
    <?php include("login.php");?>
    </div>
    <div id="menu"><?php include("menu.php");?></div>
    <div id="content"> <div id="inlog">
<h1>Ik ben al klant - LOGIN</h1>
<form  name="frmLogin" method="post">
    <table width="90%" border="0">
      <tbody>
        <tr>
          <td>E-mailadres</td>
          <td><input type="email" name="txtEmail" required ></td>
        </tr>
        <tr>
          <td>Wachtwoord</td>
          <td><input type="password" name="txtWachtwoord" id="txtWachtwoord"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="btnLogin" id="btnLogin" value="Login"></td>
        </tr>
      </tbody>
    </table>
  </form>
  <div id="message">BERICHT</div>
  </div>
  <div id="registreer">
  <h1>Nieuwe klant - REGISTREER</h1>
  <form  name="frmRegister" method="post">
    <table width="90%" border="0" id="tblregistreer">
      <tbody>
	  <tr>
          <td>Aanspreking</td>
          <td><input type="radio" name="optGeslacht" value="V" <?php if($geslacht == "V") {echo "checked";}?> required> Mevrouw &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="optGeslacht" value="M" <?php if($geslacht == "M") {echo "checked";}?> required> 
          De heer</td>
        </tr>
        <tr>
        <tr>
          <td>Familienaam</td>
          <td><input name="txtFamilienaam" type="text" value=<?=$fnaam;?> required="required"></td>
        </tr>
        <tr>
          <td>Voornaam</td>
          <td class="tabledistance"><input name="txtVoornaam" type="text" value=<?=$vnaam;?> required="required"></td>
        </tr>
        <tr>
          <td>Geboortedatum</td>
          <td><input name="txtGeboortedatum" type="date" value=<?=$geboortedatum;?> required="required"></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input name="txtEmail" type="email" value=<?=$email;?> required="required" id="txtEmail"></td>
        </tr>
        <tr>
          <td>Bevestig e-mail</td>
          <td><input name="txtEmail2" type="email" value=<?=$emailcontrole;?> required="required" id="txtEmail2"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="btnRegistreer" id="btnRegistreer" value="Registreer"></td>
        </tr>
      </tbody>
    </table>
  </form>
  <div id="message1">
    <?= $errorRegistratie ?>
  </div>
  </div>
	
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>