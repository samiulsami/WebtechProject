<?php require_once 'models/db_connection.php';
	  require_once 'controllers/loginSessionController.php';
?>

<?php
	if(isset($_POST["content"]) && isset($_POST["title"]) && isset($_POST["tag"])){
		
		$title = $_POST["title"];
		$txt = $_POST["content"];
		$tag = $_POST["title"];
		$posterid = $user_id;
		$date = date("Y-m-d");
		$status = "pending";
		
		if($type=="admin"){// Articles posted by admins are always approved
			$status = "approved";
		}
		
		
			//$target_dir = "../../upload/";
			//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 0;
			//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$photo_name = md5(rand(99,9999));
			$filename = $_FILES["cover_image"]["name"];
			$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
			$file_ext = substr($filename, strripos($filename, '.')); // get file name
			$filesize = $_FILES["cover_image"]["size"];
			$allowed_file_types = array('.jpg','.JPG','.JPEG','.jpeg','.png','.PNG');
			if (in_array($file_ext,$allowed_file_types) && ($filesize < 1000000))
			{
				$newfilename = $photo_name. $file_ext;
				if (file_exists("uploads/" . $newfilename))
				{
					$uploadOk = 1;
				}
				else
				{
					move_uploaded_file($_FILES["cover_image"]["tmp_name"], "uploads/" . $newfilename);
					$photoName = $newfilename;
					$uploadOk = 1;
				}
			}

			if ($uploadOk==0) {
				$photoName = "post-default.jpg";
			}
			
			
			$cover_image = $photoName;
			
			$uploadOk = 0;
			//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$photo_name = md5(rand(99,9999));
			$filename = $_FILES["post_image1"]["name"];
			$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
			$file_ext = substr($filename, strripos($filename, '.')); // get file name
			$filesize = $_FILES["post_image1"]["size"];
			$allowed_file_types = array('.jpg','.JPG','.JPEG','.jpeg','.png','.PNG');
			if (in_array($file_ext,$allowed_file_types) && ($filesize < 1000000))
			{
				$newfilename = $photo_name. $file_ext;
				if (file_exists("uploads/" . $newfilename))
				{
					$uploadOk = 1;
				}
				else
				{
					move_uploaded_file($_FILES["post_image1"]["tmp_name"], "uploads/" . $newfilename);
					$photoName = $newfilename;
					$uploadOk = 1;
				}
			}

			if ($uploadOk==0) {
				$photoName = "post-default.jpg";
			}
			
			$post_image1 = $photoName;
			
			
			
			$uploadOk = 0;
			//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$photo_name = md5(rand(99,9999));
			$filename = $_FILES["post_image2"]["name"];
			$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
			$file_ext = substr($filename, strripos($filename, '.')); // get file name
			$filesize = $_FILES["post_image2"]["size"];
			$allowed_file_types = array('.jpg','.JPG','.JPEG','.jpeg','.png','.PNG');
			if (in_array($file_ext,$allowed_file_types) && ($filesize < 1000000))
			{
				$newfilename = $photo_name. $file_ext;
				if (file_exists("uploads/" . $newfilename))
				{
					$uploadOk = 1;
				}
				else
				{
					move_uploaded_file($_FILES["post_image2"]["tmp_name"], "uploads/" . $newfilename);
					$photoName = $newfilename;
					$uploadOk = 1;
				}
			}

			if ($uploadOk==0) {
				$photoName = "post-default.jpg";
			}
			
			$post_image2 = $photoName;
			


		$query = "INSERT INTO posts (title, txt, tag, posterid, date, status,cover_image,post_image1,post_image2) VALUES ('$title', '$txt', '$tag', '$posterid', '$date', '$status','$cover_image','$post_image1','$post_image2')";
		execute($query);
		
		echo "<script> alert('post submitted') </script>";
		
		unset($_POST["content"]);
		unset($_POST["title"]);
		unset($_POST["tag"]);
	}

?>
