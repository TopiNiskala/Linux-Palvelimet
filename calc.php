<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="UTF-8">
</head>
<body>
	<div class="container" style="margin-top: 50px">
		<?php
			if (isset ($_POST['submit'])) {
				if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
					if ($_POST['calc'] == '+') {
						$total = $_POST['number1'] + $_POST['number2'];
					} else if ($_POST['calc'] == '-') {
						$total = $_POST['number1'] - $_POST['number2'];
					} else if ($_POST['calc'] == '*') {
						$total = $_POST['number1'] * $_POST['number2'];
					} else if ($_POST['calc'] == '/') {
						$total = $_POST['number1'] / $_POST['number2'];
					}
					echo "<p>{$_POST['number1']} {$_POST['calc']} {$_POST['number2']} = {$total}</p>";
				} else {
					echo 'ERROR! Use numeric values only';
				}
			}
		?>
		<form method="post" action="calc.php">
			<input name="number1" type="text" class="form-control" style="width: 150px; display: inline" /><br>
			<input name="number2" type="text" class="form-control" style="width: 150px; display: inline" /><br>
			<select name="calc">
				<option value="+">ADD</option>
				<option value="-">SUBTRACT</option>
				<option value="*">MULTIPLY</option>
				<option value="/">DIVIDE</option>
			</select>
			<br><input name="submit" type="submit" value="GO!">
		</form>
	</div>
</body>
</html>
