<?php require_once 'controllers/crudController.php'; 
	  require_once 'controllers/loginSessionController.php';?>

<?php
	
	$users = getUsers();
	echo '  <th class = "userHeader">Username</th>
			<th class = "userHeader">E-mail</th>
			<th class = "userHeader">Type</th>
			<th class = "userHeader">ID</th>
			<th class = "userHeader"> </th>
	';
	
		foreach($users as $user){
			
			echo 			'<tr >
								<td>
									<div class="userName">
										<p >'.$user["username"].'</p>
									</div>			
								</td>
								<td>
									<div class="email">
										<p >'.$user["email"].'</p>
									</div>			
								</td>
								<td>
									<div class="type">
										<p >'.$user["type"].'</p>
									</div>			
								</td>
								<td>
									<div class="id">
										<p >'.$user["id"].'</p>
									</div>			
								</td>
								<td>
									<input class = "btnUser" onClick = "banUser('.$user["id"].')" type = "button" value = "Delete">  </button>	
								</td>
							</tr>';
		}
	

?>