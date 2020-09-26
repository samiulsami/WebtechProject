<?php require_once 'controllers/crudController.php'; 
	  require_once 'controllers/loginSessionController.php';?>

<?php
	$id = $_GET["uid"];
	if($id != $user_id && $type=="admin"){
		removeUser($id);
		echo "Success";
	}
	else echo "Failed";
	

?>