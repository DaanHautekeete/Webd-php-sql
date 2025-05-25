<?php

  // Sql statement maken om alle webpagina's op te halen
  $sql = "Select * from tblmenu";
  $result = $db->query($sql);

  while($resultrow = $result->fetch_assoc()) {
    $menutekst = $resultrow["menutekst"];
    $menulink = $resultrow["menulink"];

    $vulnavigatie .= "<li><a href='$menulink'>$menutekst</a></li>";
  }
?>

<ul>
 <?= $vulnavigatie;?>
</ul>