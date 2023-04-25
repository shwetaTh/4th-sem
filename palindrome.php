<!DOCTYPE html>
<html>
  <head>
    <title>Check if a number is Palindrome</title>
  </head>
  <body>
    <form method="post" action="">
      <label>Enter a number:</label>
      <br>
      <input type="number" name="num">
      <br><br>
      <input type="submit" name="submit" value="Check Palindrome">
    </form>
<?php
	if(isset($_POST['submit']))  {
		$num = $_POST["num"];
		$rev = 0;
		$temp = $num;
		while ($temp > 0) {
			$rem = $temp % 10;
			$rev = $rev * 10 + $rem;
			$temp = (int)($temp / 10);
		}
		if ($num == $rev) {
			echo "<p>$num is a Palindrome Number.</p>";
		} else {
			echo "<p>$num is not a Palindrome Number.</p>";
		}
	}
?>
</body>
</html>
