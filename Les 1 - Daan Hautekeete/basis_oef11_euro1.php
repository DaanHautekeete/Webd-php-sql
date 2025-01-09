<?php
$biljetten =array("500","200","100","50","20","10","5","2","1","0.50","0.20","0.10","0.05","0.02","0.01");
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
	
#eenheid {
display: inline-block;
padding: 0.5em;
border: solid 1px #061690;
margin: 0.5em;	
}
#aantal {
font-weight: bold;
font-size: 2em;	
text-align: center;
}
#foto {
text-align: center;
display: inline-block;	
}
</style>
</head>

<body>
<div id="wrapper">
	<header><img src="images/banner.jpg" width="100%"  alt=""/></header>
	<main>
    <form action="" method="post">
<p>€ <input name="txtGetal" type="number" min="1" max="5000" step="0.01" /> <input type="submit" name="btnResultaat" value="Biljetten en munten" />
</form>
    </main>
	<footer>&nbsp;</footer>
</div>
</body>
</html>