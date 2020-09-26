<!DOCTYPE html>
<?php require_once 'controllers/loginSessionController.php'; ?>
<?php require_once 'controllers/postSubmissionController.php'; ?>

<html lang="en" dir="ltr">
	<?php 
		if(!$logged_in)header("Location: index.php");
	?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Creat post</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="dboardall.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		
		<style>
			.left_area h3{
			color: #f44242;
			}
			
			*,
			*::before,
			*::after {
			box-sizing: content-box;
			}
			
		</style>
		
		
		
	</head>
	<body>
		
		<input type="checkbox" id="check">
		<!--header area start-->
		<header>
			<label for="check">
				<i class="fas fa-bars" id="sidebar_btn"></i>
			</label>
			<div class="left_area">
				<h3>Algorithm <span>Blog</span></h3>
			</div>
			<div class="right_area">d
				<a href="logout.php" class="logout_btn">Logout</a>
			</div>
		</header>
		<!--header area end-->
		<!--mobile navigation bar start-->
		<div class="mobile_nav">
			<div class="nav_bar">
				<img src="1.png" class="mobile_profile_image" alt="">
				<i class="fa fa-bars nav_btn"></i>
			</div>
			<div class="mobile_nav_items">
				<a href="index.php"><i class="fas fa-desktop"></i><span>Home</span></a>
				<a href="create_post.php"><i class="fas fa-file-signature"></i><span>Create Post</span></a>
				<!--<a href="view_all_post.php"><i class="fas fa-th"></i><span>View All Post</span></a> -->
				<?php
					if($type=="admin"){
						echo '<a href="manage_user.php"><i class="fas fa-cogs"></i><span>Manage Users</span></a>';
					}
				?>
				<a href="myInfo.php"><i class="fas fa-sliders-h"></i><span>My info</span></a>
				
				
			</div>
		</div>
		<!--mobile navigation bar end-->
		<!--sidebar start-->
		<div class="sidebar">
			<div class="profile_info">
				<img src="1.png" class="profile_image" alt="">
				<?php
					if($type=="admin")echo "<h4>Admin Panel</h4>";
					else echo "<h4> User Panel</h4>";
				?>
			</div>
			<a href="index.php"><i class="fas fa-desktop"></i><span>Home</span></a>
				<a href="dboardall.php"><i class="fas fa-th"></i><span>Dashboard</span></a>
				<a href="create_post.php"><i class="fas fa-file-signature"></i><span>Create Post</span></a>
				<!--<a href="view_all_post.php"><i class="fas fa-th"></i><span>View All Post</span></a> -->
				<?php
					if($type=="admin"){
						echo '<a href="manage_user.php"><i class="fas fa-cogs"></i><span>Manage Users</span></a>';
					}
				?>
				<a href="myInfo.php"><i class="fas fa-sliders-h"></i><span>My info</span></a>
				
		</div>
		<!--sidebar end-->
		
		<div class="content">
			<div class="row">
				<div class="card">
					<div class="col-md-12">
						<form id = "form1" method = "post" class="form" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="title" class="col-3 col-form-label">Title</label> 
								<div class="col-9">
									<textarea id="title" name="title" cols="40" rows="1" class="form-control"></textarea>
									<label id = "err_title"> </label>
								</div>
							</div>
							<div class="form-group row">
								<label for="content" class="col-3 col-form-label">Content</label> 
								<div class="col-9">
									<textarea id="content" name="content" cols="40" rows="7" class="form-control"></textarea>
									<label id = "err_content"> </label>
								</div>
							</div>
							<div class="form-group row">
								<label for="tag" class="col-3 col-form-label">Tag</label> 
								<div class="col-9">
									<input id="tag" name="tag" type="text" class="form-control">
									<label id = "err_tag"> </label>
								</div>
							</div>
							<div class="form-group row">
								<label for="tag" class="col-3 col-form-label">Cover Image</label> 
								<div class="col-9">
									<input id="cover" name="cover_image" type="file" class="form-control">
									<label id = "err_cover"> </label>
								</div>
							</div> 
							
							
							<div class="form-group row">
								<label for="tag" class="col-3 col-form-label">Post Image 1</label> 
								<div class="col-9">
									<input id="image1" name="post_image1" type="file" class="form-control">
									<label id = "err_image1"> </label>
								</div>
							</div> 
							
							
							<div class="form-group row">
								<label for="tag" class="col-3 col-form-label">Post Image 2</label> 
								<div class="col-9">
									<input id="image2" name="post_image2" type="file" class="form-control">
									<label id = "err_image2"> </label>
								</div>
							</div>
							
							<div class="form-group row">
								<div class="offset-3 col-9">
									<button onClick = "validateAndSubmit(this.form)" type="button" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
					
				</div>
				
			</div>
				
		</div>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('.nav_btn').click(function(){
					$('.mobile_nav_items').toggleClass('active');
				});
				});
				</script>
				
			</body>
		</html>		
		
		

<script>
	function get(id){
		return document.getElementById(id);
	}

	function emptyString(str){
		return (str.length === 0 || !str.trim());
	}
	
	function validateAndSubmit(myform){
		var flag = 0;

		if(document.getElementById("image2").files.length == 0 ){
			flag=1;
			document.getElementById("err_image2").innerHTML = "*Required";
			document.getElementById("err_image2").style.color="red";
			get("image2").focus();
		}
		else document.getElementById("err_image2").innerHTML = "";

		if(document.getElementById("image1").files.length == 0 ){
			flag=1;
			document.getElementById("err_image1").innerHTML = "*Required";
			document.getElementById("err_image1").style.color="red";
			get("image1").focus();
		}
		else document.getElementById("err_image1").innerHTML = "";

		if(document.getElementById("cover").files.length == 0 ){
			flag=1;
			document.getElementById("err_cover").innerHTML = "*Required";
			document.getElementById("err_cover").style.color="red";
			get("cover").focus();
		}
		else document.getElementById("err_cover").innerHTML = "";
		
		if(emptyString(get("tag").value)){
			flag=1;
			document.getElementById("err_tag").innerHTML = "*Required";
			document.getElementById("err_tag").style.color="red";
			get("tag").focus();
		}
		else document.getElementById("err_tag").innerHTML = "";
		
		if(emptyString(get("content").value)){
			flag=1;
			document.getElementById("err_content").innerHTML = "*Required";
			document.getElementById("err_content").style.color="red";
			get("content").focus();
		}
		else document.getElementById("err_content").innerHTML = "";
		
		if(emptyString(get("title").value)){
			flag=1;
			document.getElementById("err_title").innerHTML = "*Required";
			document.getElementById("err_title").style.color="red";
			get("title").focus();
		}		
		else document.getElementById("err_title").innerHTML = "";
		
		if(flag===0){
			myform.submit();
		}
	}
	
</script>