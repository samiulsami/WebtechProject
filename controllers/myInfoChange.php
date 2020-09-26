<?php require_once 'models/db_connection.php';
      require_once 'controllers/crudController.php';
	  require_once 'controllers/loginSessionController.php';

	$err_newUsername = "";
	$err_newPass = "";
	$err_oldPass = "";
	$err_flag=false;
	$newname = "";
	$newpass = "";
	$oldpass = "";
	
	if(isset($_POST['newUsername'])){
		if(!empty($_POST['newnameinp'])){
			$newname = $_POST['newnameinp'];
		}
		else{
			$err_newUsername = "Username required";
			$err_flag = true;
		}
		
		if(!$err_flag && usernameExists($newname)){
			$err_newUsername = "Username already exists";
			$err_flag = true;
		}
		
		if(!empty($_POST['oldpassinp'])){
			$oldpass = $_POST['oldpassinp'];
			$oldpass = md5($oldpass);
		}
		else{
			//echo "<script> alert('here') </script>";
			$err_oldPass = "Password required";
			$err_flag = true;
		}
		
		if(!$err_flag && strlen($newname)<4){
			$err_newUsername = "Username too short";
			$err_flag = true;
		}
		
		if(!$err_flag && !validCredentials($username,$oldpass)){
			$err_flag = true;
			$err_oldPass = "Incorrect password";
		}
		
		if(!$err_flag){
			updateUsername($user_id,$newname);
			$_SESSION['username']=$newname;//Update username in current login session
			$username = $newname;
		}
	}	
	else if(isset($_POST['newPass'])){
		if(!empty($_POST['newpassinp'])){
			$newpass = $_POST['newpassinp'];
		}
		else{
			$err_newPass = "Password required";
			$err_flag = true;
		}
		
		if(!empty($_POST['oldpassinp'])){
			$oldpass = $_POST['oldpassinp'];
			$oldpass = md5($oldpass);
		}
		else{
			$err_oldPass = "Password required";
			$err_flag = true;
		}
		
		if(!$err_flag && strlen($newpass)<=4){
			$err_newPass = "Password too short";
			$err_flag = true;
		}
		else $newpass = md5($newpass);
		
		if(!$err_flag && !validCredentials($username,$oldpass)){
			$err_flag = true;
			$err_oldPass = "Incorrect password";
		}
		
		if(!$err_flag){
			updatePassword($user_id,$newpass);
			session_destroy();
			setCookie("password_changed", " ", time()+3600, "/");
			header("Location: login.php");
		}		
	}
	else {
		$err_newUsername = "";
		$err_newPass = "";
		$err_oldPass = "";		
	}
	


?>