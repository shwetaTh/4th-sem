<!DOCTYPE html>
<html>
<head>
	<title>sum</title>
</head>
<body>
	<h1>Sum of 2 numbers</h1>
	<form method="post" action="">
		<label for="num1">Number 1:</label>
		<input type="number" name="num1" id=""><br><br>
		<label for="num2">Number 2:</label>
		<input type="number" name="num2" id=""><br><br>
		<input type="submit" name="submit" value="Add">
	</form>
	<?php
		if(isset($_POST['submit'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$sum = $num1 + $num2;
			echo "<p> $num1 + $num2 = $sum</p>";
		}
	?>
</body>
</html>
