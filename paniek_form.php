<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="B3W22O1_style.css">
</head>
<body>
	<?php require 'menu.php';?>
		<form method="post" action="<?php echo htmlspecialchars("paniek_result.php");?>">
			<h2>Er heerst paniek...</h2>
			<p class="form">Welk dier zou je nooit als huisdier willen hebben?<input type="text" name="dier" required> <span> <?php echo $dierErr;?></span></p>
			<p class="form">Wie is de belangrijkste persoon in je leven?<input type="text" name="persoon" required><span> <?php echo $persoonErr;?></span></p>
			<p class="form">In welk land zou je graag willen wonen<input type="text" name="land" required><span> <?php echo $landErr;?></span></p>
			<p class="form">Wat doe je als je je verveelt?<input type="text" name="verveelt" required><span> <?php echo $verveeltErr;?></span></p>
			<p class="form">Met welk speelgoed speelde je als kind het meest?<input type="text" name="speelgoed" required><span> <?php echo $speelgoedErr;?></span></p>
			<p class="form">Bij welke docent spijbel je het liefst?<input type="text" name="docent" required><span> <?php echo $docentErr;?></span></p>
			<p class="form">Als je €100.000,- had wat zou je dan kopen?<input type="text" name="geld" required><span> <?php echo $geldErr;?></span></p>
			<p class="form">Wat is je favoriete bezigheid?<input type="text" name="bezigheid" required><span> <?php echo $bezigheidErr;?></span></p>
			
			<input type="submit">	
		</form>
	<?php include 'footer.php';?>
</body>
</html>

