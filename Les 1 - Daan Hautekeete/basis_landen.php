<?php
$landen = array ("Albanië"=>"Tirana","Andorra"=>"Andorra la Vella","Armenië"=>"Jerevan","Azerbeidzjan"=>"Bakoe","België"=>"Brussel","Bosnië en Herzegovina"=>"Sarajevo","Bulgarije"=>"Sofia","Cyprus"=>"Nicosia","Denemarken"=>"Kopenhagen","Duitsland"=>"Berlijn","Estland"=>"Tallinn","Finland"=>"Helsinki","Frankrijk"=>"Parijs","Georgië"=>"Tbilisi","Griekenland"=>"Athene","Hongarije"=>"Boedapest","Ierland"=>"Dublin","IJsland"=>"Reykjavik","Italië"=>"Rome","Kazachstan"=>"Nur-Sultan","Kosovo"=>"Pristina","Kroatië"=>"Zagreb","Letland"=>"Riga","Liechtenstein"=>"Vaduz","Litouwen"=>"Vilnius","Luxemburg"=>"Luxemburg","Malta"=>"Valletta","Moldavië"=>"Chisinau","Monaco"=>"Monaco","Montenegro"=>"Podgorica","Nederland"=>"Amsterdam","Noord-Macedonië"=>"Skopje","Noorwegen"=>"Oslo","Oekraïne"=>"Kiev","Oostenrijk"=>"Wenen","Polen"=>"Warschau","Portugal"=>"Lissabon","Roemenië"=>"Boekarest","Rusland"=>"Moskou","San Marino"=>"San Marino","Servië"=>"Belgrado","Slovenië"=>"Ljubljana","Slowakije"=>"Bratislava","Spanje"=>"Madrid","Tsjechië"=>"Praag","Turkije"=>"Ankara","Vaticaanstad"=>"Vaticaanstad","Verenigd Koninkrijk"=>"Londen","Wit-Rusland"=>"Minsk","Zweden"=>"Stockholm","Zwitserland"=>"Bern");

$gekozenland = $_POST['cboLand'];
$gekozenhoofdstad = $_POST['txtHoofdstad'];

if ($landen[$gekozenland]==$gekozenhoofdstad)
{
$output = "<img src='vlaggen/$gekozenland.jpg'>"    ;
}
else {
$output = "<p>De hoofdstad klopt niet!</p>";
}

/*combobox*/
foreach ($landen as $land=>$hoofdstad)
{
$keuzelijst .= "<option";
if ($gekozenland == $land) $keuzelijst .=" selected='selected'";
$keuzelijst .= ">$land</option>";
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP basisoefeningen</title>
<style type="text/css">
	body {
	color: #0A0A55;	
    font-family: "Source Sans Pro",Arial,Helvetica,sans-serif;
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
	select, input {
font-size: 1.2em;    }
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" name="frmInfo" method="post">
<table>
<tr><td>Land</td><td>Hoofdstad (Nederlands)</td><td></td></tr>
<tr><td>
<select name="cboLand">
<?php echo $keuzelijst;?></select>
    </td><td><input name="txtHoofdstad" type="text" value='<?php echo $gekozenhoofdstad;?>' required  /></td><td><input type="submit" name="btnVersturen" value="Toon vlag" /></td></tr>     
    </table>
</form>
<p>&nbsp;</p>
<?php 
echo $output;        
?>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>