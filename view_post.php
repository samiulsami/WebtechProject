<?php require_once 'controllers/crudController.php'; 
	require_once 'controllers/loginSessionController.php';?>
<!DOCTYPE html>


<?php 
	
	if(isset($_GET["id"])){
		
		$id = $_GET["id"];
		$posts = getPosts($id);
		foreach($posts as $post) {
			
			if($post['status']=="pending"){
				if($user_id!=$post['posterid'] && $type!="admin")header("Location: index.php");
			}
			
			$str = $post['txt'];
			$text1 = $str;
			$text2 = null;
			$count = str_word_count($str);
			if($count > 100){
				$count1 = ceil($count/2);
				$count2  =  $count - $count1; 
				$texts = explode(" ",$str);
				$text1 = $text2 = array();
				$counter=0;
				foreach($texts as $txt){
					if($counter<$count1)array_push($text1,$txt);
					else array_push($text2,$txt);					
					$counter++;
				}
				$text1 = implode(" ",$text1);
				$text2 = implode(" ",$text2);
				//echo $text1;
				//echo $text2;
			}
			
		?>
		
		
		
		<html lang="en">
			
			<head>
				
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<meta name="description" content="">
				<meta name="author" content="">
				
				<title><?php echo $post['title'];?></title>
				
				<!-- Bootstrap core CSS -->
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
				
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />
				
				<!-- Custom fonts for this template -->
				
				<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
				<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
				
				<!-- Custom styles for this template -->
				<link href="clean-blog.min.css" rel="stylesheet">
				
				
			</head>
			
			<body>
				
				<!-- Navigation -->
				<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
					<div class="container">
						<a class="navbar-brand" href="index.php">Algorithm Blog</a>
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							Menu
							<i class="fas fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarResponsive">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">About</a>
								</li>
								<?php
									if($logged_in){				
										echo '<li class="nav-item">
										<a class="nav-link" href="create_post.php">Create Posts</a>
										</li>';
										
										if($post['posterid']==$user_id){
											echo '<li class="nav-item">
											<a class="nav-link" href="edit_post.php?id='.$id.'">Edit post</a>
											</li>';
										}
										
										echo '<li class="nav-item">
										<a class="nav-link" href="dboardall.php">Dashboard</a>
										</li>';
									}
								?>
								
								<?php
									if($logged_in){					
										echo '<li class="nav-item">
										<a class="nav-link" href="logout.php">Logout</a>
										</li>';
									}
									else{
										echo '<li class="nav-item">
										<a class="nav-link" href="login.php">Login/Register</a>
										</li>';
									}
								?>
							</ul>
						</div>
					</div>
				</nav>
				
				<!-- Page Header -->
				<header class="masthead" style="background-image: url('uploads/<?php echo $post['cover_image'];?>')">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-10 mx-auto">
								<div class="post-heading">
									<h1><?php echo $post['title'];?></h1>
									<h2 class="subheading"><?php echo $post['tag'];?></h2>
									<span class="meta">Posted by
										<a href="#"><?php echo $post['username'];?></a>
									on <?php echo $post['date'];?></span>
								</div>
							</div>
						</div>
					</div>
				</header>
				
				<!-- Post Content -->
				<article>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-10 mx-auto">
								<p><?php echo $text1;?></p>
								
								
								<a href="#">
									<img class="img-fluid" src="uploads/<?php echo $post['post_image1'];?>" alt="">
								</a>
								<p><?php echo $text2;?></p>
								
								<a href="#">
									<img class="img-fluid" src="uploads/<?php echo $post['post_image2'];?>" alt="">
								</a>
								
							</div>
						</div>
					</div>
				</article>
				
				<hr>
				
				<!-- Footer -->
				
				<!-- Bootstrap core JavaScript -->
				<script src="vendor/jquery/jquery.min.js"></script>
				<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
				
				
			</body>
			
		</html>
		
	<?php } } ?>