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
border: solid 1px #660066;
background-color: #3CF;	
font-family: Verdana, Geneva, sans-serif;
font-size: 1.2em;
margin-bottom: 2em;
width: 100%;
}
form input, select {
color: #C00;	
font-size: 1.2em;
}

strong {
font-weight: 900;
color: #C00;
font-size: 1.3em;	
}
.onderlijn {
border-bottom: solid 1px #C00;	
}
.rechts {
text-align: right;
border-bottom: solid 1px #C00;		
}
#links {
float: left;
width: 20%;
margin-right: 3em;
}
#rechts {
float: left;
width: 20%;	
}	
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" method="post">
<p>Gewicht van de brief 
  <input name="txtGewicht" type="text" size="2" /> 
  <span class="klein">(in gram) voor 
  
  </span>
  <input type="submit" name="btnPosttarief" value="Posttarief" /></p>
</form>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>