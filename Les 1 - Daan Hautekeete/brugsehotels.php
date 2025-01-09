<?php
$hotels = array ("Hotel Dukes Palace Brugge"=>"5","Asiris"=>"2","Bauhau hotel"=>"1","Boterhuis"=>"2","Crowne Plaza Brugge"=>"4","Gasthof De Krakele"=>"2","Grand Hotel Du Sablon"=>"3","Grand Hotel Oude Burg"=>"3","Hostellerie Pannenhuis"=>"3","Hotel ('t) Putje"=>"3","Hotel Academie"=>"4","Hotel Adornes"=>"3","Hotel Albert I"=>"3","Hotel Anselmus"=>"3","Hotel Aragon"=>"4","Hotel Azalea"=>"4","Hotel Béthune"=>"1","Hotel Biskajer"=>"4","Hotel Botaniek"=>"3","Hotel Boudewijn I"=>"3","Hotel Bourgoensch Hof"=>"3","Hotel Bourgoensche Cruyce"=>"3","Hotel Bryghia"=>"3","Hotel Campanile"=>"3","Hotel Cavalier"=>"2","Hotel Central"=>"1","Hotel Cordoeanier"=>"2","Hotel Dante"=>"3","Hotel De Barge"=>"3","Hotel De Castillion"=>"4","Hotel De Goezeput"=>"2","Hotel De' Medici"=>"4","Hotel De Orangerie"=>"4","Hotel De Pauw"=>"2","Hotel De Snippe"=>"3","Hotel De Tassche"=>"3","Hotel De Tuilerieën"=>"4","Hotel Die Swaene"=>"4","Hotel Duc de Bourgogne"=>"3","Hotel Egmond"=>"3","Hotel Ensor"=>"3","Hotel Erasmus"=>"2","Hotel Europ"=>"2","Hotel Fevery"=>"3","Hotel Flanders"=>"4","Hotel Groenhove"=>"3","Hotel Groeninghe"=>"3","Hotel Gulden Vlies"=>"2","Hotel Hans Memling"=>"4","Hotel Heritage"=>"5","Hotel Holiday City Center"=>"1","Hotel Ibis Brugge Centrum"=>"2","Hotel Imperial"=>"2","Hotel Inter"=>"3","Hotel Jacobs"=>"3","Hotel Jan Brito"=>"4","Hotel Karel de Stoute"=>"3","Hotel Karos"=>"2","Hotel Kasteel Cateline"=>"2","Hotel Leopold"=>"2","Hotel Lodewijk van Male"=>"1","Hotel Lucca"=>"2","Hotel Lybeer"=>"1","Hotel Malleberg"=>"3","Hotel Maraboe"=>"3","Hotel Markies"=>"3","Hotel Mirabel"=>"3","Hotel Montanus"=>"4","Hotel Montovani"=>"2","Hotel Navarra"=>"4","Hotel Nicolas"=>"2","Hotel Notre Dame"=>"1","Hotel Novotel Centrum"=>"3","Hotel Olympia"=>"3","Hotel Patritius"=>"3","Hotel Portinari"=>"4","Hotel Prinsenhof"=>"4","Hotel Salvators"=>"3","Hotel Scandic"=>"4","Hotel Sofitel Brugge"=>"4","Hotel 't Keizershof"=>"1","Hotel 't Koffieboontje"=>"2","Hotel 't Voermanshuys"=>"2","Hotel Ter Brughe"=>"4","Hotel Ter Duinen"=>"3","Hotel Van Eyck"=>"2","Hotel Walburg"=>"4","Hotel Wilgenhof"=>"2","Leeuwebrugghe"=>"3","Novotel Brugge Zuid"=>"3","Park Hotel"=>"4","Relais Oud Huis Amsterdam"=>"4","Romantik Pandhotel"=>"4","Ter Reien"=>"3");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP basisoefeningen</title>
<style type="text/css">
	body {
	color: #0A0A55;		
	}
	#wrapper {
width: 1080px;
	margin-left: auto;
	margin-right: auto;
	border: solid 1px #0070C0;
	padding: 0.3em;
	}	
	main {
	min-height: 20em;
	padding: 1em;
	}
	footer {
	height: 0.5em;
	background-color: #0070C0;
	}
    form {border: #003366 1px solid;
background-color: #CCCCCC;
width: 100%;
padding: 5px;}
.binnentabel {
background-color: #FFFF99;
padding: 5px;
}
	.prijs {
text-align: right;
	padding-right: 12em;
    }
td {
border-bottom: solid 1px darkred;	
color: darkred;
}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" name="frmInfo" method="post">
<table>
<tr><td>Sterren</td><td>
<select name="cboSterren">
<!-- hier bouw je de keuzelijst -->
</select>
    </td><td><input type="checkbox" name='optAll' value="alle"> Alle hotels</td><td><input type="submit" name="btnVersturen" value="Toon lijst" /></td></tr>    
    </table>
</form>
        
<!--tabel voor de hotellijst -->        
<table>
<tr><td>hotelnaam</td><td>sterren</td></tr>        
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>                
</table>        
        
</main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>