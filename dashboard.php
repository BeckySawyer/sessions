<?php
require 'includes/config.php';
if (!isLoggedIn()) {
    addMessage("You need to log in to see this page.");
    redirect("index.php");
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title> Dashboard </title>
</head>
<body>

<h1> Welcome, <?= $username ?>! </h1>
	<?= showMessage(); ?>
<a href="logout.php"> Log Out </a>

</body>
</html>