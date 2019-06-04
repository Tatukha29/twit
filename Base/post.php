<?php       $connect = mysqli_connect('127.0.0.1','root','','tanya29');
			$insert=mysqli_query($connect, "INSERT INTO tweet (post_text, post_image,  account_name, account_link, account_image) VALUES ('" . $_POST['post_text'] . "','habr.jpg','MarySmith','@MarySmith','avatar.jpg')"  );
			header('location:http://localhost/tanya29/Base/index.php');
			 ?>