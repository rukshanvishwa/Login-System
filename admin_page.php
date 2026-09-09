<?php
session_start();

if (!isset($_SESSION['name'], $_SESSION['email'], $_SESSION['role']) || $_SESSION['role'] !== 'admin') {
	header('Location: index.php');
	exit();
}

$name = htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main class="dashboard">
		<h1>Admin Dashboard</h1>
		<p>Welcome, <?= $name ?>.</p>
		<p><?= $email ?></p>
		<a class="button" href="logout.php">Log out</a>
	</main>
</body>
</html>
