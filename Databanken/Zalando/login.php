<?php

//controleren of gebruiker wilt uitloggen
if(isset($_POST['btnLogout'])) {
  unset($_SESSION['vnaam'],$_SESSION['fnaam'],$_SESSION['klantID'], $_SEESION['email']);
  $_SEESION['ingelogd'] == "False";
}



?>


<form name='frmLogout' method='post'>
  <?php
    if($_SESSION['ingelogd'] == "True") {
  ?>
  <input type='submit' name='btnLogout' value='<?php echo "$_SESSION[vnaam] $_SESSION[fnaam]"?> uitloggen'>

  <?php
    }
    ?>
</form>