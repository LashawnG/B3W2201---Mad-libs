<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="B3W22O1_style.css">
</head>
<body>
  <?php
	$errors = [];
  $errorMsg;


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["kunnen"])) {
        $errors[0] = "kunnen";
      }
  	
  		if (empty($_POST["persoon"])) {
        $errors[1] = "persoon";
      } 

  		if (empty($_POST["getal"])) {
        $errors[2] = "getal";
      }

  		if (empty($_POST["vakantie"])) {
        $errors[3] = "vakantie";
      }

  		if (empty($_POST["besteEig"])) {
        $errors[4] = "besteEig";
      }

  		if (empty($_POST["slechtsteEig"])) {
        $errors[5] = "slechtsteEig";
      }

  		if (empty($_POST["ergste"])) {
        $errors[6] = "ergste";
      }
  }

//array doorlezen
      if (count($errors) > 0) {
        $errorMsg = "Je hebt niet alle velden ingevult, ga terug en probeer opnieuw!";
        echo "<style> .result { display: none; }</style>";
      }
?>

	<?php include 'menu.php';?>

	<p class="result">
		Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"];?>. Neem nou <?php echo $_POST["persoon"];?>. Zelfs met de hulp van een <?php echo $_POST["vakantie"];?> of zelfs <?php echo $_POST["getal"];?> kan <?php echo $_POST["persoon"];?> niet <?php echo $_POST["kunnen"];?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["besteEig"];?>, maar met een te veel aan <?php echo $_POST["slechtsteEig"];?>. Te veel <?php echo $_POST["slechtsteEig"];?> leidt tot <?php echo $_POST["ergste"];?> en dat is niet goed als je wilt <?php echo $_POST["kunnen"];?>. Helaas voor <?php echo $_POST["persoon"];?>
	</p>
  <p id="error"><?=$errorMsg?></p>
	<?php include 'footer.php'; ?>
</body>
</html>