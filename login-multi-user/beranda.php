<?php 
session_start();
if (!isset($_SESSION['level'])) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nafrozen | Murah Mudah Cepat</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<ul>
		<li><a href="">Home</a></li>
		<?php
		$level = $_SESSION['level'] == 'user';
		if($level) {
		?>
		<li><a href="">Update Status</a></li>
		<?php } else{ ?>
		<li><a href="">Kelola User</a></li>
		<li><a href="">Kelola Status</a></li>
		<?php } ?>
		<li><a href="logout.php">Logout</a></li>
	</ul>

</body>
</html>