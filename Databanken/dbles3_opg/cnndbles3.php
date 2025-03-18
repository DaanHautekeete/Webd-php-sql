<?php
//mysqli connectie OO
$dbhost="localhost";
$dbuser="root";
$dbpaswoord="";
$dbdatabase="dbles3";
$db = new mysqli($dbhost, $dbuser, $dbpaswoord, $dbdatabase) or die ("<p>Connectie niet geslaagd!</p>");
$db->query("SET character_set_results=utf8");
?>
