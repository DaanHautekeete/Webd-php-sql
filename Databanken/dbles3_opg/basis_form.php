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
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner2.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" name="frmInfo" method="post">
<table>
<tr><td>Voornaam</td><td><input name="txtVoornaam" type="text"  /></td></tr>
<tr><td>Leeftijd</td><td><input name="txtLeeftijd" type="number"  /></td></tr>
<tr><td>Keuze</td><td>
<select name="cboKeuze">
<option value="1">Keuze 1</option>    
<option value="2">Keuze 2</option>    
<option value="3">Keuze 3</option>        
</select>
    </td></tr>    
<tr><td>&nbsp;</td><td><input type="submit" name="btnVersturen" value="Verstuur" /></td></tr>    
    </table>
    <td></td>
</form>
    
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>