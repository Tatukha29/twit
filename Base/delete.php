<?php       
$connect = mysqli_connect('127.0.0.1','root','','tanya29');
mysqli_query($connect, "DELETE FROM tweet WHERE id='" . $_POST['delete'] . "'");
header('location:http://localhost/tanya29/Base/index.php');
			?>