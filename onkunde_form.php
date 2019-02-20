<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="B3W22O1_style.css">
</head>
<body>
	<?php require 'menu.php';?>
		<form method="POST" class="form-horizontal" action="<?php echo htmlspecialchars('onkunde_result.php')?>">
			<h2>Onkunde</h2>
			<div class="form-group">
				<label class="control-label" for="kunnen">Wat zou je graag willen kunnen?</label>
				<input type="text" class="form-control" name="kunnen" required>
			</div>
			<div class="form-group">
				<label class="control-label" for = "persoon" >Met welke persoon kun je goed opschieten?</label>
				<input type="text" class="form-control" name="persoon" required>
			</div>
			<div class="form-group">
				<label class="control-label" for = "getal" >Wat is je favoriete getal?</label>
				<input type="text" class="form-control" name="getal" equired>
			</div>
			<div class="form-group">
				<label class="control-label" for = "vakantie" >Wat heb je bij je als je op vakantie gaat?</label>
				<input type="text" class="form-control" name="vakantie" required>
			</div>
			<div class="form-group">
				<label class="control-label" for = "besteEig" >Wat is je beste persoonlijke eigenschap?</label>
				<input type="text" class="form-control" name="besteEig" required>
			</div>
			<div class="form-group">
				<label class="control-label" for = "slechtsteEig" >Wat is je slechtste persoonlijke eigenschap?</label>
				<input type="text" class="form-control" name="slechtsteEig" required>
			</div>
			<div class="form-group">
				<label class="control-label" for = "ergste" >Wat is het ergste dat je kan overkomen?</label>
				<input type="text" class="form-control"  name="ergste" required>
			</div>	
			<input type="submit" class="form-control">	
		</form>
	<?php include 'footer.php';?>
</body>
</html>