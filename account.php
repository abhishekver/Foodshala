<?php
	session_start();
	
	if(isset($_SESSION['logged']))	{
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
	else {
		header('Location: login.php');
	}
?>