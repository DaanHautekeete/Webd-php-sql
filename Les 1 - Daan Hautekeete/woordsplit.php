<?php
$splitstekens = array ('/','-','*','+','.');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP basisoefeningen</title>
<style type="text/css">
	body {
	color: #0A0A55;	
    font-size: 1.2em;	
    font-family: Verdana;
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
input,select {font-size: 1.3em;}   
.opvallend {font-size: 1.5em; color: #0AF;} 
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" name="frmInfo" method="post">
<table>
<tr><td>Typ een woord</td><td><input name="txtWoord" type="text" /></td><td>Splitsteken</td><td>
<select name="cboTeken">
<option value="0">Kies splitsteken</option>    
<option>/</option>    
<option>-</option>        
<option>*</option>
</select>
    </td>
<td>&nbsp;</td><td><input type="submit" name="btnSplits" value="Splits in letters" /></td></tr>    
    </table>
    <td></td>
</form>
<p class='opvallend'>PLAATS HIER JE RESULTAAT/FOUTMELDING.</p>    
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>