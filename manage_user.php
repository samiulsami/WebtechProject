<!DOCTYPE html>
<?php require_once 'controllers/loginSessionController.php';
      require_once 'controllers/statsController.php';?>

<html lang="en" dir="ltr">
	<?php 
		if(!$logged_in)header("Location: index.php");
	?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage users</title>
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
	
		<div style="overflow:auto; height:600px;">
		<table class="table table-striped center" id="user_list">			
		
		</table>
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
	$(document).ready( function () {
		document.getElementById("user_list").innerHTML = " ";
		fillTable();
	});
	
	function fillTable(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("user_list").innerHTML = this.responseText;
			}
		};
		
		xhttp.open("GET","showUserList.php?key=no",true);
		xhttp.send();
	}
	
	function banUser(id){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				if(this.responseText.trim()==="Failed")alert('Cannot delete user');				
				document.getElementById("user_list").innerHTML = "";
				fillTable();
			}
		};
		var chk = confirm("Are you sure?");
		if(chk){
			xhttp.open("GET","banUser.php?uid="+id,true);
			xhttp.send();
		}
	}
</script>