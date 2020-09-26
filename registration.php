<!doctype html>
<?php require_once 'controllers/registrationController.php'; ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="background.css">
 
    <title>Registration From</title>
  </head>
  <body>
    <form action="" method = "post" style="width:900px; margin:auto">
    <div class="container my-5">
        <div class="row">
          <div class="col-md-6 mx-auto" style="top: 200px;">
            <div class="form-group">
              <h3 align="center"> Registration</h3>
            </div>


            <div class="form-group">
              <input type="text" name = "username" id="username" class="form-control" required>
              <label class="form-control-placeholder" for="username">UserName</label>
			  <label style = "color:red" > <?php echo $err_username ?> </label>
            </div>
            <div class="form-group">
              <input type="password" name = "password" id="password" class="form-control" required>
              <label class="form-control-placeholder" for="password">Password</label>
			  <label style = "color:red" > <?php echo $err_password ?> </label>
            </div>
            <div class="form-group">
                <input type="email" name = "email" id="email" class="form-control" required>
                <label class="form-control-placeholder" for="email">Email</label>
				<label style = "color:red" > <?php echo $err_email ?> </label>
            </div> 


            <div align="center" > 
                <button type = "submit" class="btn btn-primary">Sign up</button>
				<a href="login.php" class="btn btn-secondary">Sign in</a>
            </div>
          </div>
        </div>
      </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</form>
  </body>
</html>

<script>

	
	
</script>