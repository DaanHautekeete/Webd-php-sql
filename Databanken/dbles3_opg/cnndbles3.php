<?php
//mysqli connectie OO
$dbhost="localhost";
$dbuser="root";
$dbpaswoord="";
$dbdatabase="dbles3";
$db = new mysqli($dbhost, $dbuser, $dbpaswoord, $dbdatabase) or die ("<p>Connectie niet geslaagd!</p>");
$db->query("SET character_set_results=utf8");

/*oude mysql connectie
$dbhost="localhost";
$dbuser="root";
$dbpaswoord="";
$dbdatabase="dbles3";
$db=mysql_connect($dbhost,$dbuser,$dbpaswoord);
mysql_select_db($dbdatabase,$db);
mysql_query("SET character_set_results=utf8",$db); //deze regel werkt autonoom goed
//mb_language('uni'); //deze regel werkt niet autonoom
//mb_internal_encoding('UTF-8'); //deze regel werkt niet autonoom
//mysql_query("set names 'utf8'",$db); //deze regel werkt autonoom goed
*/
?>
