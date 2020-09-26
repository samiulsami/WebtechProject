<?php require_once 'models/db_connection.php';?>

<?php
	
	function getUserName($id){
		$query = "SELECT * FROM users where id = '$id'";
		$users = getResult($query);
		$data = mysqli_fetch_assoc($users);
		return $data['username'];
	}
	
	function usernameExists($uname){
		$query = "SELECT * FROM users WHERE username = '$uname'";
		$result = getResult($query);
		if(mysqli_fetch_assoc($result)>=1)return true;
		return false;
	}
	
	function updateUsername($id,$newname){
		$query = "UPDATE users SET username = '$newname' WHERE id = '$id'";
		execute($query);
	}
	
	function updatePassword($id,$newpass){
		$query = "UPDATE users SET password = '$newpass' WHERE id = '$id'";
		execute($query);
	}
	
	function validCredentials($username, $password){
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = getResult($query);
		if(mysqli_fetch_assoc($result)>=1)return true;
		return false;
	}
	
	function getUsers(){
		$query = "SELECT * FROM users";
		$users = getArray($query);
		return $users;
	}
	
	function getApprovedPosts(){
		$query = "SELECT * FROM posts WHERE status = 'approved' ORDER BY date DESC";
		$posts = getArray($query);
		return $posts;
	}
	
	function getPendingPosts(){
		$query = "SELECT * FROM posts WHERE status = 'pending' ORDER BY date DESC";
		$posts = getArray($query);
		return $posts;
	}
		
	function getPosts($id){
		$query = "select a.*,b.username from posts a,users b where a.`posterid`=b.id and a.`id`='$id'";
		$users = getArray($query);
		return $users;
	}
	
	function getThisPost($id){
		$query = "SELECT * FROM posts WHERE id = '$id'";
		$posts = getArray($query);
		return $posts;		
	}
	
	function getMyPosts($id){
		$query = "SELECT * FROM posts WHERE posterid = '$id' ORDER BY date DESC";
		$posts = getArray($query);
		return $posts;
	}
	
	function getMyPendingPosts($id){
		$query = "SELECT * FROM posts WHERE posterid = '$id' AND status = 'pending' ORDER BY date DESC";
		$posts = getArray($query);
		return $posts;
	}
	
	function getMyApprovedPosts($id){
		$query = "SELECT * FROM posts WHERE posterid = '$id' AND status = 'approved' ORDER BY date DESC";
		$posts = getArray($query);
		return $posts;
	}
	
	function getMyApprovedAllPosts($id){
		$query = "select a.*,b.username from posts a,users b where a.`posterid`=b.id and status = 'approved' ORDER BY date DESC ";
		$posts = getArray($query);
		return $posts;
	}
	
	function getAllPosts(){
		$query = "SELECT * FROM posts ORDER BY date DESC";
		$posts = getArray($query);
		return $posts;
	}
	
	function removeUser($id){
		$query = "DELETE FROM users WHERE id = '$id'";
		execute($query);
	}
	
	function removePost($id){
		$query = "DELETE FROM posts WHERE id = '$id'";
		execute($query);
	}
	
	function approvePost($id){
		$query = "UPDATE posts SET status = 'approved' WHERE id = '$id'";
		execute($query);
	}
	
	function disapprovePost($id){
		$query = "UPDATE posts SET status = 'pending' WHERE id = '$id'";
		execute($query);
	}
	
	function updatePost($id, $newtxt){
		$query = "UPDATE posts SET txt = '$newtxt' WHERE id = '$id'";
		execute($query);
	}

?>