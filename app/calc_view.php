<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<title>Kalkulator kredytowy</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body>

	<form action="<?php print (_APP_URL); ?>/app/calc.php" method="get">
		<label for="id_x">Liczba 1: </label>
		<input id="id_x" type="text" name="x" value="<?php if (isset($x))
			print ($x); ?>" /><br />
		<label for="id_op">Operacja: </label>
		<select name="op">
			<option value="plus" <?php if ($operation == 'plus') {
				print ('selected');
			} ?>>+</option>
			<option value="minus" <?php if ($operation == 'minus') {
				print ('selected');
			} ?>>-</option>
			<option value="times" <?php if ($operation == 'times') {
				print ('selected');
			} ?>>*</option>
			<option value="div" <?php if ($operation == 'div') {
				print ('selected');
			} ?>>/</option>
		</select><br />
		<label for="id_y">Liczba 2: </label>
		<input id="id_y" type="text" name="y" value="<?php if (isset($y))
			print ($y); ?>" /><br />
		<input type="submit" value="Oblicz" />
	</form>

	<?php
	//wyświeltenie listy błędów, jeśli istnieją
	if (isset($messages)) {
		if (count($messages) > 0) {
			echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
			foreach ($messages as $msg) {
				echo '<li>' . $msg . '</li>';//Konkatynacja następuje po kropce! np $msg.$key
			}
			echo '</ol>';
		}
	}
	?>

	<?php if (isset($result)) { ?>
		<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
			<?php echo 'Wynik: ' . $result; ?>
		</div>
	<?php } ?>

</body>

</html>