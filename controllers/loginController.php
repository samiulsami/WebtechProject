<?php require_once 'models/db_connection.php';?>

<?php
	session_start();
	
	if(isset($_COOKIE["registration_success"])){
		echo "<script> alert('Registration successful') </script>";
		setcookie("registration_success", " ", time() - 3600, "/");
	}
	
	if(isset($_COOKIE["password_changed"])){
		echo "<script> alert('Password changed successfully') </script>";
		setcookie("password_changed", " ", time() - 3600, "/");
	}
	
	$err_creds="";
	if(isset($_POST["username"]) && isset($_POST["password"])){
			$username = $_POST["username"];
			$password = $_POST["password"];
			$password = md5($password);
			
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = getResult($query);
			
			if(mysqli_num_rows($result)>=1) {
				
				$values = mysqli_fetch_assoc($result);
		
				$_SESSION["logged_in"] = "yes";
				$_SESSION["username"] = $username;
				$_SESSION["user_type"] = $values['type'];
				$_SESSION["user_id"] = $values['id'];
				$_SESSION["user_email"] = $values['email'];
				 
				header("Location: index.php");
			}
			else {
				$err_creds = "Invalid Credentials";
			}
	}
	
?>
