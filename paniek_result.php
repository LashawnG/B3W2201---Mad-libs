<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="B3W22O1_style.css">
</head>
<body>
	<?php
	$dierErr = $persoonErr = $landErr = $verveeltErr = $speelgoedErr = $docentErr = $geldErr = $bezigheidErr = "";
	$dier = $persoon = $land = $verveelt = $speelgoed = $docent = $geld = $bezigheid = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["dier"])) {
    		$dierErr = "Dit veld is verplicht.";
  		}

  		if (empty($_POST["persoon"])) {
    		$persoonErr = "Dit veld is verplicht.";
    	}

  		if (empty($_POST["land"])) {
    		$landErr = "Dit veld is verplicht.";
    	}

  		if (empty($_POST["verveelt"])) {
    		$verveeltErr = "Dit veld is verplicht.";
    	}

  		if (empty($_POST["speelgoed"])) {
    		$speelgoedErr = "Dit veld is verplicht.";
    	}

  		if (empty($_POST["docent"])) {
    		$docentErr = "Dit veld is verplicht.";
    	}

  		if (empty($_POST["geld"])) {
    		$geldErr = "Dit veld is verplicht.";
    	}

  		if (empty($_POST["bezigheid"])) {
    		$bezigheidErr = "Dit veld is verplicht.";
    	}
	}
?>
	<?php include 'menu.php'; ?>
	<p class="result">Er heerst paniek in het koninkrijk Gallifrey. Koning Egmond is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer
		<?php echo $_POST["persoon"];?>.</p>
	<p class="result">"<?php echo $_POST["persoon"];?>! Het is een ramp! Het is een schande!"</p>
	<p class="result">"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p>
	<p class="result">"Mijn <?php echo $_POST["dier"];?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"];?> voor hem gekocht!"</p>
	<p class="result">"Majesteit, uw <?php echo $_POST["dier"];?> komt vast vanzelf weer terug?"</p>
	<p class="result">"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"];?> leren?"</p>
	<p class="result">"Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"];?> voor gebruiken."</p>
	<p class="result">"<?php echo $_POST["persoon"];?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
	<p class="result">"Mij <?php echo $_POST["verveelt"];?>, Sire."</p>
	<?php include 'footer.php'; ?>
</body>
</html>