<!DOCTYPE html>
<?php require_once 'controllers/loginSessionController.php';
      require_once 'controllers/statsController.php';
	  require_once 'controllers/myInfoChange.php';?>

<html lang="en" dir="ltr">
	<?php 
		if(!$logged_in)header("Location: index.php");
	?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My info</title>
    <link rel="stylesheet" href="dboardall.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	
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
      <div class="right_area">
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
				<?php
					if($type=="admin"){
						echo '<a href="manage_user.php"><i class="fas fa-cogs"></i><span>Manage Users</span></a>';
					}
				?>
			
        
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
				<?php
					if($type=="admin"){
						echo '<a href="manage_user.php"><i class="fas fa-cogs"></i><span>Manage Users</span></a>';
					}
				?>
				<a href="myInfo.php"><i class="fas fa-sliders-h"></i><span>My info</span></a>
				
    </div>
    <!--sidebar end-->

   <div class="content">
		<h1 style="margin-left:550px">My info</h1>
		<table >
			<tr >
					<td>
						<div class="card3" style="margin-left:390px">
							<p ><span style="font-weight:bold">Username: </p>
						</div>			
					</td>	
					<td>
						<div class="card4">
							<p ><?php echo $username; ?> </p>
						</div>			
					</td>					
			</tr>
			<tr >
					<td>
						<div class="card3" style="margin-left:390px">
							<p ><span style="font-weight:bold">E-mail: </p>
						</div>			
					</td>	
					<td>
						<div class="card4">
							<p ><?php echo $email; ?> </p>
						</div>			
					</td>					
			</tr>
		</table>
		
		<hr style="border:2px dashed grey">
		
		<form action="" method="post">
			<table >
				<tr >
						<td>
							<div class="card5">
								<p ><span style="font-weight:bold"> New Username: </p>
							</div>			
						</td>	
						<td>
							<div class="card4">
								<input placeholder="New username" name = "newnameinp" type="text" style="height:35px; width:300px; font-size:20px;"> </input>
							</div>			
							<label class = "err_label"> <?php echo $err_newUsername; ?>
						</td>			
						<td>
								<input class = "btnView" name="newUsername" type="submit" value="Update" style = "width:100px;margin-bottom:20px; height:50px"> </input>		
						</td>					
				</tr>
				<tr >
						<td>
							<div class="card5">
								<p ><span style="font-weight:bold">New Password: </p>
							</div>			
						</td>	
						<td>
							<div class="card4">
								<input placeholder="New password" name = "newpassinp" type="password" style="height:35px; width:300px;  font-size:20px;"> </input>
							</div>	
							<label class = "err_label"> <?php echo $err_newPass; ?>							
						</td>	
						<td>
								<input class = "btnView" name="newPass" type="submit" value="Update" style = "width:100px; margin-bottom:20px;height:50px"> </input>		
						</td>					
				</tr>
				<tr >
						<td>
							<div class="card5">
								<p ><span style="font-weight:bold"><span style="color:red; font-size:25px; font-weight:bold">*</span>Old Password: </p>
							</div>			
						</td>	
						<td>
							<div class="card4">
								<input placeholder="Current password" name = "oldpassinp" type="password" style="height:35px; width:300px; ;font-size:20px;"> </input>								
							</div>			
							<label class = "err_label"> <?php echo $err_oldPass; ?>
						</td>					
				</tr>
			</table>
		</form>
   </div>

    <script type="text/javascript">
    $(document).ready(function(){
		//document.getElementById("dboardTable").innerHTML = "";
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>

<script>



</script>