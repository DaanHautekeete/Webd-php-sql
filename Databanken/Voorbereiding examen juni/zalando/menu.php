<?php
  // alle menu-items ophalen
  $qryMenu =  "SELECT * FROM tblmenu";
  $qryMenuResult = $db->query($qryMenu) or die(mysql_error());
  while($item = $qryMenuResult->fetch_assoc()) {
    $menutekst = $item["menutekst"];
    $menulink = $item["menulink"];

    // Ouput opstellen
    $outputMenu .= "<li><a href='$menulink'>$menutekst</a></li>";
  }
?>


<ul>
<!-- <li><a href='XXX'>YYY</a></li> -->
 <?=$outputMenu;?>
</ul>