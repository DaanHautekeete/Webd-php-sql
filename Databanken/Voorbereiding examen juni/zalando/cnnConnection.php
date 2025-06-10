<?php
$dbhost="localhost";
$dbuser="root";
$dbpaswoord="";
$dbdatabase="zalando";
$db = new mysqli($dbhost, $dbuser, $dbpaswoord, $dbdatabase) or die ("<p>Connectie niet geslaagd!</p>");
$db->set_charset('utf8');
?>