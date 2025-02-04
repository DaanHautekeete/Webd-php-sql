<?php 
	//als het formulier is doorgestuurd
	if(isset($_POST["btnResultaat"])) {
		//waarde ophalen
		$getal = $_POST["txtGetal"];

		$output = "is deelbaar door... ";

		//controleren door welke waarde het getal deelbaar is
		//we moeten maar gaan tot de helft van het getal, boven de helft zijn er geen delers meer
		for($teller = 1; $teller <= ($getal/2); $teller++) {
			if(($getal%$teller) == 0) {
				$output .= "$teller, ";
			}
		}
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
	form input {
		color: #C00;	
		font-size: 1.2em;
	}

	strong {
		font-weight: 900;
		color: #C00;
		font-size: 1.3em;	
	}
</style>
</head>

<body>
<div id="wrapper">
    <header><img src="images/banner.jpg" width="100%"  alt=""/></header>
    <main>
        <form action="" method="post">
            <p><input name="txtGetal" type="number" size="2" value='<?php echo $getal?>'/></p>
            <p><input type="submit" name="btnResultaat" value="Toon resultaat" /></p>
        </form>
			<?php
				echo $output;
			?>
    </main>
    <footer>&nbsp;</footer>
</div>
</body>
</html>