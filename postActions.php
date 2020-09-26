<?php require_once 'controllers/crudController.php'; 
	  require_once 'controllers/loginSessionController.php';?>

<?php

	$action = $_GET['action'];
	$postid = $_GET['postid'];
	
	$done = false;
	if($action=="approve"){
		approvePost($postid);
		$done=true;
	}
	else if($action=="disapprove"){
		disapprovePost($postid);
		$done=true;
	}
	else if($action=="remove"){
		removePost($postid);
		$done=true;
	}
	
	if($done)echo "success";
	else echo "failed";
?>