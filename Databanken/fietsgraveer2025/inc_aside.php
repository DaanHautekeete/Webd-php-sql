<form name="frmLogin" id="frmLogin" method="post">
  <?php

  if($_SESSION['weergave'] == 'inloggen')
  {
    echo '<h4>Log hier op de website in</h4>
    <input type="text" name="txtVnaam" placeholder="Typ je voornaam in" class=-"inputsmall">
    <input type="text" name="txtFnaam" placeholder="Typ je familienaam in" class="inputsmall">
    <input type="password" name="txtWW" placeholder="Typ je wachtwoord in" class="inputsmall">
    <p><input type="submit" name="btnLogin" value="Login"></p>';
  }
  else 
  {
    echo '<input type="submit" name="btnLogout" value="Logout $_SESSION["vnaam"] $_SESSION["fnaam"]">';	
  }
  
  echo "<p class='alert'>$loginFout</p>";
  ?>
</form>

<img src='images/fietsster.jpg' class='img-fluid'>