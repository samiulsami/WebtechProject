<?php
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "algoblog";
		
		function execute($query){
			global $servername, $dbusername, $dbpassword, $dbname;
			$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
			$result = mysqli_query($conn,$query);
		}
		
		function getResult($query){
			global $servername, $dbusername, $dbpassword, $dbname;
			$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
			$result = mysqli_query($conn,$query);
			return $result;
		}
		
		function getArray($query){
			global $servername, $dbusername, $dbpassword, $dbname;
			$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
			$result = mysqli_query($conn,$query);
			
			$data = array();
			
			while($row=mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
			
			return $data;
		}
?>