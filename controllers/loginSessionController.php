<?php
	session_start();
	if(isset($_COOKIE["logged_out"])){
		echo "<script> alert('Logged out') </script>";
		setcookie("logged_out", " ", time()-3600, "/");
	}
	
	$logged_in = false;
	$username = "";
	$type = "";
	$user_id = "";
	$email = "";
	if(isset($_SESSION["logged_in"])){
		$logged_in = true;
		$username = $_SESSION["username"];
		$type = $_SESSION["user_type"];
		$user_id = $_SESSION["user_id"];
		$email = $_SESSION["user_email"];
	}
	
?>