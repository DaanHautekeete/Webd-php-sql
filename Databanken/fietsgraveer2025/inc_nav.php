<?php
//ophalen van de navigatiemenu items
$sql = "SELECT * FROM tblmenu";
if($_SESSION['login'] != "ingelogd"){
  $sql .= " WHERE login='nee'";
}
$qry = $db->query($sql);
while($row = $qry->fetch_assoc()) {
  $menutekst = $row['menutekst'];
  $menulink = $row['menulink'];
  $login = $row['login'];
    $lijstmetkeuze .= "<li class='nav-item active'><a class='nav-link' href='$menulink'>$menutekst<span class='sr-only'>(current)</span></a></li>\n";
}
?>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">[Brugge *** fietsende stad]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hoofdmenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="hoofdmenu">
    <ul class="navbar-nav mr-auto">
    <?= $lijstmetkeuze ?>


  </ul>
  </div>
</nav>