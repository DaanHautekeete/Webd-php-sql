<?php

//controleren of gebruiker wilt uitloggen
if(isset($_POST['btnLogout'])) {
  unset($_SESSION['vnaam'],$_SESSION['fnaam'],$_SESSION['klantID'], $_SEESION['email']);
  $_SESSION['ingelogd'] = "False";
//   Navigeren naar Home
header("Location:index.php");
}

?>

<?php
    if($_SESSION['ingelogd'] == "True") {
?>
<form name='frmLogout' method='post'>

    <input type='submit' name='btnLogout' value='<?php echo "$_SESSION[vnaam] $_SESSION[fnaam]"?> uitloggen'>


</form>
<?php
    }
?>