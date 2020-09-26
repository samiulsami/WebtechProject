<?php require_once 'controllers/crudController.php'; 
	  require_once 'controllers/loginSessionController.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About</title>

 


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />

  
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
            <a class="nav-link" href="about.php">About</a>
          </li>
		  
		  <?php
				if($logged_in){				
					echo '<li class="nav-item">
						  <a class="nav-link" href="create_post.php">Create Posts</a>
						  </li>';
						  
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
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>A blog for computer science enthusiasts</h2>
            <span class="subheading"><u><b>Created by </b></u>: Rabbi Akm Kawser and Samiul Islam </span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Bootstrap core JavaScript -->
  <script src="https://startbootstrap.github.io/startbootstrap-clean-blog/vendor/jquery/jquery.min.js"></script>
  <script src="https://startbootstrap.github.io/startbootstrap-clean-blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="https://startbootstrap.github.io/startbootstrap-clean-blog/js/clean-blog.min.js"></script>

</body>

</html>
