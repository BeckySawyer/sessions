<?php
require 'includes/config.php';
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$username = 'rebecca';
		$password = '12345';

		if($_POST['username'] === $username && $_POST['password'] === $password) {
		$_SESSION['username'] = $_POST['username'];
		addMessage("You have been logged in.");
		redirect("dashboard.php");
		}
		else {
			addMessage("Username and password don't match.");
		}
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title> Sessions </title>
</head>
<body>

<form method="POST" action="index.php">
	<label> Username </label>
	<input type="text" name="username">
	<br>
	<label> Password </label>
	<input type="password" name="password">
	<br>
	<?= showMessage(); ?>
	<button type="submit"> Log In </button>
</form>

</body>
</html>