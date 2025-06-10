<?php 
  include("cnnConnection.php");
  include("algemeen.php");
  $tekens = array ("2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","j","k","l","m","n","p","q","r","s","t","u","v","w","x","y","z");

  // Als de gebruiker op knop duwt om in te loggen 
  if(isset($_POST['btnRegistreer'])) {
    // Alle gegevens ophalen
    $aanspreking = $_POST['optGeslacht'];
    $fnaam = $_POST['txtFamilienaam'];
    $vnaam = $_POST['txtVoornaam'];
    $geboortedatum = $_POST['txtGeboortedatum'];
    $email = $_POST['txtEmail'];
    $emailBevestiging = $_POST['txtEmail2'];

    // Controleren of emails overeenkomen
    if($email == $emailBevestiging) {
      // Controleren of de email al bestaat
      $qryEmailControle = "SELECT Familienaam, Voornaam FROM tblklanten WHERE Email = '$email'";
      $qryEmailControleResult = $db->query($qryEmailControle) or die(mysql_error());
      
      if($qryEmailControleResult->num_rows > 0) {
        $persoon = $qryEmailControleResult->fetch_assoc();
        $fnaamPersoon = $persoon["Familienaam"];
        $vnaamPersoon = $persoon["Voornaam"];
        $berichtRegistreer = "E-mailadres is reeds in gebruik door $vnaamPersoon $fnaamPersoon";
      }
      else {
        // KlantID maken
        $MaxKlantID = $db->query("SELECT MAX(KlantID) from tblklanten");
        $waarde = $MaxKlantID->fetch_row();
        $nieuwnr = intval(substr($waarde[0],2,4)) + 1;
        $klantID = "KL".$nieuwnr;

        // Random wachtwoord genereren
        for($i = 0; $i < 6; $i++) {
          $wachtwoord .= $tekens[mt_rand(0,count($tekens) - 1)];
        }

        // Persoon registreren
        $qryRegistreer = "INSERT INTO tblklanten (KlantID, Familienaam, Voornaam, Geslacht, Wachtwoord, Email, Geboortedatum) VALUES ('$klantID', '$fnaam', '$vnaam', '$aanspreking', '$wachtwoord', '$emailBevestiging', '$geboortedatum')";
        $qryRegistreerResult = $db->query($qryRegistreer) or die(mysql_error());

        // Persoon doorverwijzen naar welkom pagina
        Header("Location: welkom.php?ID=$klantID");
      }
    }
    else {
      $berichtRegistreer = "Gelieve dezelfde e-mail in te geven!";
    }
  }

  // INLOGGEN
  if(isset($_POST["btnLogin"])) {
    $email = $_POST["txtEmail"];
    $wachtwoord = $_POST["txtWachtwoord"];

    // controleren of email bestaat
    $qryEmailControle = "SELECT * FROM tblklanten WHERE Email = '$email'";
    $qryEmailControleResult = $db->query($qryEmailControle) or die(mysql_error());
    
    if($qryEmailControleResult->num_rows > 0) {
      $account = $qryEmailControleResult->fetch_assoc();
      // Controlen of wachtwoord juist is
      if($wachtwoord == $account["Wachtwoord"]) {
        // Persoon inloggen
        $_SESSION['ingelogd'] = true;
        $_SESSION['vnaam'] = $account["Voornaam"];
        $_SESSION['fnaam'] = $account["Familienaam"];
        $_SESSION['Email'] = $email;
        $_SESSION['KlantID'] = $account["KlantID"]; 

        // Persoon doorverwijzen naar productpagina
        Header("Location: productinfo.php");
      }
      else {
        $berichtLogin = "Fout wachtwoord";
      }
    }
    else {
      $berichtLogin = "Uw account werd niet gevonden, gelieve te registreren!";
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
          <td><input type="email" name="txtEmail" value='<?=$email?>' required ></td>
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
  <div id="message"><?=$berichtLogin?></div>
  </div>
  <div id="registreer">
  <h1>Nieuwe klant - REGISTREER</h1>
  <form  name="frmRegister" method="post">
    <table width="90%" border="0" id="tblregistreer">
      <tbody>
	  <tr>
          <td>Aanspreking</td>
          <td><input type="radio" name="optGeslacht" value="V" <?php if($aanspreking == "V") {echo "checked";}?> required> Mevrouw &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="optGeslacht" value="M" <?php if($aanspreking == "M") {echo "checked";}?> required> 
          De heer</td>
        </tr>
        <tr>
        <tr>
          <td>Familienaam</td>
          <td><input name="txtFamilienaam" type="text" value='<?=$fnaam?>' required="required"></td>
        </tr>
        <tr>
          <td>Voornaam</td>
          <td class="tabledistance"><input name="txtVoornaam" type="text" value='<?=$vnaam?>' required="required"></td>
        </tr>
        <tr>
          <td>Geboortedatum</td>
          <td><input name="txtGeboortedatum" type="date" value='<?=$geboortedatum?>' required="required"></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input name="txtEmail" type="email" required="required" value='<?=$email?>' id="txtEmail"></td>
        </tr>
        <tr>
          <td>Bevestig e-mail</td>
          <td><input name="txtEmail2" type="email" required="required" value='<?=$emailBevestiging?>' id="txtEmail2"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="btnRegistreer" id="btnRegistreer" value="Registreer"></td>
        </tr>
      </tbody>
    </table>
  </form>
  <div id="message1"><?=$berichtRegistreer;?></div>
  </div>
	
	</div>
    <footer><?php include("footer.php");?></footer>
</div>
</body>
</html>