<?php
include("cnndbles3.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Redder aan Zee</title>
<style type="text/css">
	body {
	color: #0A0A55;		
    font-family: Arial, sans-serif; 
    font-size: 1.2em;
	}
	#wrapper {
width: 1180px;
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
    .rand,select,  { border: solid 1px #990000;}
    select {font-size: 1.3em;}
    #scores td  { border: solid 1px #990000;
padding: 2px;
margin: 5px;
        text-align: center;
}
    #scores td input, p input {
font-size: 1.5em;        
color: #DC0831;
        text-align: center;
        font-weight: bold;
    }    
.pos {text-align: center;
font-size: 20pt;
font-weight:600;
}
.neg {text-align: center;
font-size: 20pt;
font-weight:600;
color: #FFFFFF;
background-color: #FF0000;
}
.ruimte {
height: 3px;
background-color: #FFFFFF;
}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form id="form1" name="frmNaamlijst" method="post">
    <table width= "80%" border="0" align="center" cellpadding="0" cellspacing="0" class="rand">
  <tr>
    <td>
  Kies een examenkandidaat: KEUZELIJST
</td>
  </tr>
  

  <tr>
      <tr><td>&nbsp;</td></tr>
    <td>
 PUNTENTABEL
        
        </td>

  <tr><td class="ruimte"></td></tr>

</table>
</form>  
<p>BEVESTIGING WIJZIGING</p>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>