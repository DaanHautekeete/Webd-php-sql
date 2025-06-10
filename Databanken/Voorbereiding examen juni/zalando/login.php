<?php 
  if(isset($_POST['btnLogout'])) {
    $_SESSION['ingelogd'] = false;
    unset($_SESSION['vnaam'], $_SESSION['fnaam'], $_SESSION['Email'], $_SESSION['KlantID']);

    // Klant doorverwijzen naar de welkom pagina
    Header("Location: index.php");
  }
?>

<?php
  if($_SESSION["ingelogd"] == true) {

?>
<form name='frmLogout' method='post'>
<input type='submit' name='btnLogout' value='<?php echo "$_SESSION[vnaam] $_SESSION[fnaam]"; ?> uitloggen'>
</form>

<?php
}
?>