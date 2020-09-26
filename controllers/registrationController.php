<?php require_once 'models/db_connection.php';?>

<?php

		$err_flag = false;
		$err_username = "";
		$err_email = "";
		$err_password = "";
		
		if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])){
			$username = $_POST["username"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$type = "user";
			
			if(strlen($username)<4){
				$err_username = 'username "'.$username.'" is too short (minimum 4 characters)';
				$err_flag = true;
			}
			else if(strlen($password)<=4){
				$err_password = 'password too short (minimum 5 characters)';
				$err_flag = true;
			}

			$query = "SELECT * FROM users WHERE username = '$username'";
			$result = getResult($query);
			if(mysqli_num_rows($result)>=1) {
				$err_username = 'username "'.$username.'" already exists';
				$err_flag=true;
			}

			$query = "SELECT * FROM users WHERE email = '$email'";
			$result = getResult($query);
			if(mysqli_num_rows($result)>=1) {
				$err_email = 'email "'.$email .'" already exists';
				$err_flag=true;
			}

			if(!$err_flag){
				$password = md5($password);
				$query = "INSERT INTO users (username, password, email, type) VALUES ('$username', '$password', '$email', '$type')";
				execute($query);

				setcookie("registration_success", " " , time() + 3600, "/");
				header("Location: login.php");
			}
		}
	
?>