<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP basisoefeningen</title>
<style type="text/css">
	body {
	color: #0A0A55;		
    font-family: Verdana, sans-serif;
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
    form {
        background-color: #DD082F;
        color: white;
        font-size: 1.3em;
        padding: 1em;
        margin-bottom: 2em;
        
    }
    input {font-size: 1.1em;}
    input[type="text"],input[type="password"] {width: 9em;}
    .red {color: red;
    font-weight: bold;}
    .green {color: green;
    font-weight: bold;}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form name="frmSorteernaam" method="post">
    <table>
    <tr><td>Voornaam</td><td>Familienaam</td><td>code</td><td></td></tr>    
    <tr>
    <td><input type="text" name="txtVoornaam" required></td>
    <td><input type="text" name="txtFamilienaam" required></td>
    <td><input type="password" name="txtCode" required></td>
    <td><input type="submit" name="btnToon" value="Toon sorteernaam"></td>
    </tr>    
    </table>
    </form>
    
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>