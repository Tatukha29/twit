<?php
$connect = mysqli_connect('127.0.0.1','root','','tanya29'); 
if($_FILES['img']['name'] !=null){
$query = mysqli_query($connect, "UPDATE tweet SET 
	post_text = '" . $_POST['post_text'] . "',
	post_image = 'images/" . $_FILES['img']['name'] . "'
	WHERE id='" . $_POST['id'] . "'");
move_uploaded_file($_FILES['img']['tmp_name'], $_FILES['img']['name']);
header('Location:http://localhost/tanya29/Base/index.php');
} else {
	$query = mysqli_query($connect,"UPDATE tweet SET post_text='".$_POST['post_text']."' WHERE id ='". $_POST['id'] ."'");
	header('Location:http://localhost/tanya29/Base/index.php');
}
?>




 