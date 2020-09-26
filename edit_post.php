<?php require_once 'controllers/crudController.php'; 
	require_once 'controllers/loginSessionController.php';?>

<?php
	if(!$logged_in)header("Location: index.php");
	
	$id = "";
	$newtxt = "";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$posts = getThisPost($id);
		if(count($posts)==0)header("Location: index.php");
		$post = $posts[0];
		$txt=$post['txt'];
		$title = $post['title'];
		if($user_id != $post['posterid'])header("Location: index.php");
	}
	
	if(isset($_POST["submit"])){

		if(isset($_POST['content']))$newtxt=$_POST['content'];
		
			if(isset($_POST['content']))$newtxt = $_POST['content'];
			if(strlen($newtxt)<=100){
				echo "<script> alert('Content must contain at least 100 characters') </script>";
			}
			else{
				updatePost($id, $newtxt);
				echo "<script> alert('$id') </script>";
			    header("Location: view_post.php?id=$id");
			}
		
	}
	

?>
<html>
	<title>Edit post</title>
	<link rel="stylesheet" type = "text/css" href="dboardall.css">
	<div>
		<h2 style="text-align:center"><u><?php echo $title ?> </u></h2>
	</div>
	<hr style="border:2px solid grey">
	<form action="" method = "post">
		<textarea id="content" name="content" class="txtarea1"> <?php echo $txt ?> </textarea>
		<hr style="border:2px solid grey">
		<div style="margin-left:555px">
			<input class ="btnView" style = "width:120px" type = "button" onClick = "location.href = 'index.php'" value = "Home"> </input>
			<input class ="btnView" style = "width:120px" type = "button" onClick = "location.href = 'view_post.php?id=<?php echo $id; ?>'" value = "View Post"> </input>
			<input class ="btnView" style = "width:120px" type = "button" onClick = "location.href = 'dboardall.php'" value = "Dashboard"> </input>
			<input class ="btnView" style = "margin-left:50px; width:120px; background:blue; color:white" name = "submit" type = "submit" value = "Update"> </input>
		</div>
	</form>

</html> 
	