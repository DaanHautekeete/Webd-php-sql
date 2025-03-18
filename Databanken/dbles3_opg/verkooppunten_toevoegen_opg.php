<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP met databanken</title>
<style type="text/css">
	body {
	color: #DC0831;		
    font-family: 'Source sans Pro',Arial,Helvetica,sans-serif;
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
    h1 {

    font-size: 1.5em;
        font-weight: bold;
        
    }
    form {border: #003366 1px solid;
background-color: #DC0831;
        color: white;
width: 40%;
padding: 5px;}
    input {padding-top: 0.2em;
    padding-bottom: 0.2em;
    color: #DC0831;
        font-weight: bold;
        font-size: 1.2em;
        width: 90%;
    }
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
        <h1>Verkooppunt toevoegen</h1>
    <form action="" name="frmInfo" method="post">
<table>
<tr><td>Verkooppunt</td><td><input name="txtVerkooppunt" type="text" required  /></td></tr>
<tr><td>Straat</td><td><input name="txtStraat" type="text" required  /></td></tr>    
<tr><td>Huisnr</td><td><input name="txtHuisnr" type="text" required  /></td></tr>    
<tr><td>Busnr</td><td><input name="txtBusnr" type="text" /></td></tr>       
<tr><td>Postcode</td><td><input name="txtPostcode" type="text" required  /></td></tr>   
<tr><td>Gemeente</td><td><input name="txtGemeente" type="text" required  /></td></tr>      
<tr><td>&nbsp;</td><td><input type="submit" name="btnVersturen" value="Verkooppunt toevoegen" /></td></tr>    
    </table>
    <td></td>
</form>
    
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>