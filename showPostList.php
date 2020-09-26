<?php require_once 'controllers/crudController.php'; 
	  require_once 'controllers/loginSessionController.php';?>

<?php
	
	$rq = $_GET['key'];
	$posts;
	if($rq=="approved"){
		$posts = getApprovedPosts();
	}
	else if($rq=="pending"){
		$posts = getPendingPosts();
	}
	else if($rq=="mine"){
		$posts = getMyPosts($user_id);
	}
	else if($rq=="mypending"){
		$posts = getMyPendingPosts($user_id);
	}
	else if($rq=="myapproved"){
		$posts = getMyApprovedPosts($user_id);
	}
	else $posts = getAllPosts();
	
	if($rq == "mine" || $rq=="myapproved" || $rq=="mypending")echo '<th class = "userHeader"> </th>';
	if($type=="admin")echo '<th class = "userHeader"> </th> <th class = "userHeader"> </th>';//For approve/disapprove button and remove button
	else if($rq == "mine" || $rq=="myapproved" || $rq=="mypending"){//Users can delete their own post
		echo '<th class = "userHeader"> </th>';
	}
	
	echo '  <th class = "userHeader"> </th>
			<th class = "userHeader">Title</th>
			<th class = "userHeader">Content preview</th>
			<th class = "userHeader">Tag(s)</th>
			<th class = "userHeader">Status</th>
			<th class = "userHeader">Posted by</th>
			<th class = "userHeader">Posted on</th>
	';
	
	foreach($posts as $post){
			$posterName = getUserName($post['posterid']);
			$postTitle = $post['title'];
			$postContent = $post['txt'];
			$postTag = $post['tag'];
			$color = "yellow";
			$postid = $post['id'];
			
			if($post['status']=='pending')$color = "red";
			
			if(strlen($postContent)>31){
				$postContent = substr($postContent, 0, 30);
				$postContent = $postContent.'...';
			}
			
			if(strlen($postTag)>31){
				$postTag = substr($postTag, 0, 30);
				$postTag = $postTag.'...';
			}
			
			if(strlen($postTitle)>31){
				$postTitle = substr($postTitle, 0, 30);
				$postTitle = $postTitle.'...';
			}
			
			echo 			'<tr >
																							
								<td>								
									<input class = "btnView" onClick = "location.href = '."'view_post.php?id=$postid'".'" type = "button" value = "View">  </button>
								</td>';
			if($rq == "mine" || $rq=="myapproved" || $rq=="mypending"){																			
			echo				'<td>								
									<input class = "btnView" onClick = "location.href = '."'edit_post.php?id=$postid'".'" type = "button" value = "Edit">  </button>
								</td>';
			}
								
			if($type=="admin"){//Adds "approve" and "disapprove" buttons if user is admin
			
				if($post['status']=='pending'){
					echo			'<td>
									<input class = "btnView" onClick = "postAction('.$post["id"].','."'approve'".','."'$rq'".')" type = "button" style = "background-color:lightgreen; width:122px" value = "Approve">  </button>	
									</td>';
				}
				else{
					echo			'<td>
									<input class = "btnView" onClick = "postAction('.$post["id"].','."'disapprove'".','."'$rq'".')" type = "button" style = "background-color:pink; width:122px" value = "Disapprove">  </button>	
									</td>';
				}
			}
			
			if($type=="admin" || $rq == "mine" || $rq=="myapproved" || $rq=="mypending"){
				echo			'<td>
									<input class = "btnView" onClick = "postAction('.$post["id"].','."'remove'".','."'$rq'".')" type = "button" style = "background-color:red; width:100px" value = "Remove">  </button>	
								</td>';
			}
			
			echo				'<td>
									<div class="post1">
										<p >'.$postTitle.'</p>
									</div>			
								</td>
								
								<td>
									<div class="post1">
										<p >'.$postContent.'</p>
									</div>			
								</td>
								
								<td>
									<div class="post1">
										<p >'.$postTag.'</p>
									</div>			
								</td>
								
								<td>								
									<div class="poststatus" style = "background-color:'.$color.'">
										<p >'.$post['status'].'</p>
									</div>			
								</td>
								
								<td>
									<div class="postedby">
										<p >'.$posterName.'</p>
									</div>			
								</td>
								
								<td>
									<div class="postedon">
										<p >'.$post["date"].'</p>
									</div>			
								</td>
							</tr>';
	}
	

?>