<?php 
session_start();
if (isset($_SESSION['level'])) {
	session_destroy();
	session_unset($_SESSION['level']);
}
header('Location: index.php');
?>