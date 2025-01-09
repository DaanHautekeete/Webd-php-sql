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
    form {
width: 500px;
background-color:#FFFF99;
padding:5px;
border: solid 1px #993300;
}
input {
border: solid 1px #993300;
width: 100px;
}
.opvallend {
color: #3333CC;
}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <h1>Bereken je Body Mass Index (BMI)</h1>
<p></p>
<form id="form1" name="form1" method="post" action="">
  <table width="550" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Mijn gewicht:</td>
      <td><input name="txtGewicht" type="text" size="15" /> 
        (in kg)  -- decimaal teken = punt</td>
    </tr>
    <tr>
      <td>Mijn lengte: </td>
      <td><input name="txtLengte" type="text" /> 
      (in m) -- decimaal teken = punt </td>
    </tr>
    <tr>
      <td width="100">&nbsp;</td>
      <td width="440"><input type="submit" name="btnBereken" value="Bereken je BMI" />
      </td>
    </tr>
  </table>
</form>
    
<p></p>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>