<?php require_once 'models/db_connection.php';
	  require_once 'controllers/loginSessionController.php'; ?>

<?php
	$totalPosts = 0;
	$myPosts = 0;
	$approvedPosts = 0;
	$pendingPosts = 0;
	
	$query = "SELECT * FROM posts";
	$result = getResult($query);
	$totalPosts = mysqli_num_rows($result);
	
	$query = "SELECT * FROM posts WHERE posterid = '$user_id'";
	$result = getResult($query);
	$myPosts = mysqli_num_rows($result);
	
	$query = "SELECT * FROM posts WHERE status = 'approved'";
	$result = getResult($query);
	$approvedPosts = mysqli_num_rows($result);
	
	$query = "SELECT * FROM posts WHERE status = 'pending' and posterid = '$user_id'";
	$result = getResult($query);
	$myPending = mysqli_num_rows($result);
	
	$myApproved = $myPosts - $myPending;
	$pendingPosts = $totalPosts-$approvedPosts;
?>