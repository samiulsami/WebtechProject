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
    <title>Dashboard</title>
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
		<div style="overflow:auto; height:600px;">
		<h1 style = "margin-left: 600px" id = "displayType"> </h1>
		<table id = "dboardTable">
			<tr >
				<td>
					<div class="card">
						<p >Total posts: </p>
					</div>			
				</td>
				<td>
					<div class="card2">
						<p ><?php 
							if($type=="admin")echo $totalPosts;
							else echo $approvedPosts;
						?></p>
					</div>			
				</td>
				<td>
					<?php 
						if($type=="admin")$toShow="all";
						else $toShow = "approved";
					?>
					<input class = "btn" onClick = "showPosts('<?php echo $toShow ?>')" type = "button" value = "View">  </button>	
				</td>
			</tr>			
			
			<tr >
				<td>
					<div class="card">
						<p >My posts: </p>
					</div>			
				</td>
				<td>
					<div class="card2">
						<p ><?php echo $myPosts ?></p>
					</div>			
				</td>
				<td>
					<input class = "btn" onClick = "showPosts('mine')" type = "button" value = "View">  </button>	
				</td>
			</tr>
			<?php
				if($type=="admin"){
					echo'
						<tr >
							<td>
								<div class="card">
									<p >Approved posts: </p>
								</div>			
							</td>
							<td>
								<div class="card2" style = "background-color:yellow">
									<p >'.$approvedPosts.'</p>
								</div>			
							</td>
							<td>
								<input class = "btn" onClick = "showPosts('."'approved'".')" type = "button" value = "Manage">  </button>	
							</td>
						</tr>
						
						<tr >
							<td>
								<div class="card">
									<p >Pending posts: </p>
								</div>			
							</td>
							<td>
								<div class="card2" style = "background-color:red">
									<p >'.$pendingPosts.'</p>
								</div>			
							</td>
							<td>
								<input class = "btn" onClick = "showPosts('."'pending'".')" type = "button" value = "Manage">  </button>	
							</td>
						</tr>';
					
				}
				else {
					echo'
						<tr >
							<td>
								<div class="card">
									<p >My approved posts: </p>
								</div>			
							</td>
							<td>
								<div class="card2" style = "background-color:yellow">
									<p >'.$myApproved.'</p>
								</div>			
							</td>
							<td>
								<input class = "btn" onClick = "showPosts('."'myapproved'".')" type = "button" value = "View">  </button>	
							</td>
						</tr>
						
						<tr >
							<td>
								<div class="card">
									<p >My pending posts: </p>
								</div>			
							</td>
							<td>
								<div class="card2" style = "background-color:red">
									<p >'.$myPending.'</p>
								</div>			
							</td>
							<td>
								<input class = "btn" onClick = "showPosts('."'mypending'".')" type = "button" value = "View">  </button>	
							</td>
						</tr>';
					
				}
			?>
		</table>
		</div>
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

	function showPosts(rqtype){
		//alert(rqtype);
		var toshow = " ";
		if(rqtype==="all")toshow = "All posts";
		else if(rqtype==="approved")toshow = "Approved posts";
		else if(rqtype==="mine")toshow = "My posts";
		else if(rqtype==="mypending")toshow = "My pending posts";
		else if(rqtype==="myapproved")toshow = "My approved posts";
		else toshow = "Pending posts";
		
		//document.getElementById("dboardTable").innerHTML = "";
		document.getElementById("displayType").innerHTML = toshow;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("dboardTable").innerHTML = this.responseText;
			}
		};
		
		xhttp.open("GET","showPostList.php?key="+rqtype,true);
		xhttp.send();
	}
	
	function postAction(postid, action, rq){
		//do action on post
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				var resp = this.responseText.trim();
				if(resp=="failed"){
					alert("Error");
				}
			}
		};
		
		var chk = false;
		if(action=="remove")chk = confirm("Are you sure?");
		
		if(chk || action!="remove"){
			xhttp.open("GET","postActions.php?postid="+postid+"&action="+action,true);
			xhttp.send();
			showPosts(rq);
		}

	}

</script>