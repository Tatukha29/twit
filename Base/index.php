<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css	">
	<meta charset="utf-8">
</head>

<body style="background: #e6ecf0;">
<?php 
$connect = mysqli_connect('127.0.0.1','root','','tanya29');
 ?>


<div class="col-12" style="background: white">
	<div class="container">
		
	
	<div class="row">
		
	
	<div class="col-4" style="background: white">	
			<div class="container">	
					<div class="row">	
						<div class="col-4; row" style="margin-right: 25px;">	
								<img src="icons8-home-50.png" class="w-50 h-70">
								<a href="#" style="margin-top: 20px">
									<h6>	Lorem</h6>
								</a>
						</div>
						<div class="col-4; row" style="margin-right: 25px;">	
								<img src="icons8-new-post-50.png" class="w-50 h-70">
								<a href="#" style="margin-top: 20px">
									<h6>	Lorem</h6>
								</a>
						</div>
						<div class="col-4; row" style="margin-right: 25px;">	
								<img src="icons8-notification-50.png" class="w-50 h-70">
								<a href="#" style="margin-top: 20px">
									<h6>	Lorem</h6>
								</a>
						</div>
					</div>
			</div>
	</div>
	<div class="col-4" style="background: white; padding-left: 15%; box-sizing: border-box;">
		<img src="icons8-twitter-50.png">
	</div>
	<div class="col-4" style="background: white">
		
	</div>
</div>
</div>
</div>
<div class="container">
	<div class="row">
		<!--левая колонка-->
		<div class="col-3" >
			<div style="background: white">
				<img src="background.jpg" class="row; w-100">
				<div class="row">
					<div class="col-4">
						<img src="avatar.jpg">
					</div>
					<div class="col-8">
						<a href="#">
							<h6>
								Mary Mary
							</h6>
						</a>
						<a href="#">
							<p>
								@test59904
							</p>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<h6>
							<a href="#">
								Твиты
							</a>
							
						</h6>
						<p>
							<a href="#">
								123Lorem
							</a>
							
						</p>
					</div>
					<div class="col-6">
					<h6>
						<a href="#">
							100500
						</a>
						
					</h6>
					</div>
				</div>
			</div>

			<div style="margin-top: 10px; background:white" >
					<h5>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</h5>
					<p>	
							<a href="#">
								Lorem ipsum dolor
							</a>
					</p>
					<?php 
				
				$result1 = mysqli_query($connect,"SELECT * FROM actual");
				for($i=0;$i<7;$i++){
					$res1=$result1->fetch_assoc();
					?>
					<a href="#" >
						<h6 style="margin-left: 5px">
							<?php 
								echo $res1['actual'];
							 ?>

						</h6>
					</a>
					<?php
				}
			 ?>
			</div>
		</div>
		<div class="col-6" style="background: white">
			
			<form method="POST" action="post.php">
				
			<div class="row" style="background: #E8F5FD; margin-right: auto;
			margin-left: auto;">
			
				<img src="avatar.jpg" style="border-radius: 50px; height: 50px">
				<input type="" name="post_text" placeholder="New post" style="border-radius: 20px; height: 40px; margin-top: 5px; font-size: 14px; width: 60%" class="npinp">
				
					<button type="submit" style="height: 40px; margin-top: 5px; border-radius: 20px;">
						TWIT
					</button>
				
			</div>
			</form>
			

			<?php 
				
				$result = mysqli_query($connect,"SELECT * FROM tweet");
				
				for($i=$result->num_rows;$i>0;$i--){
					$res=$result->fetch_assoc();
					?>
					<div style="margin-bottom: 10px" class="row">
						<div class="col-2">
						<?php
							echo '<img class="w-100" src=" ' . $res['account_image'] . '"</img>';
							?>
						</div>
						<div class="col-10">
							<div class="row">
								<?php
							echo '<h5>' . $res['account_name'] . '</h5>';
							echo '<a href="#">' . '<h5>' . $res['account_link'] . '</h5>' . '</a>';
							?>
							</div>
						<?php
							echo '<p>' . $res['post_text'] . '</p>';
							echo '<img class="w-100" src=" ' . $res['post_image'] . '"</img>';
						?>
					
						<div class="row">
							<div class="col-3">
								<img src="comment.png">
							</div>
							<div class="col-3">
								<img src="retweet.png">
							</div>
							<div class="col-3">
								<img src="like.png">
							</div>
							<div class="col-3">
								<img src="envelope.png">
							</div>
				</div>
				<form method="POST" action="delete.php">
				<button type="submit">
					Del.
				</button>
				</form>
				<form method="POST" action="up1.php">
				<button type="submit">
					Red.
					<?php 	
					  echo '<input type="hidden" name="post_text" value="' . $res['post_text'] . '" class="form-control">'?>
 	 			<?php echo '<input type="hidden" name="post_image" value="' . $res['post_image'] . '" class="form-control">'?>
 				<?php echo '<input type="hidden" name="id" value="' . $res['id'] . '" class="form-control">'
					 ?>
				</button>
			</form>
						</div>
					</div>
					<hr>
<?php
				}
			 ?>
		</div>
		<div class="col-3" >
			<div style="background: white">	
				<div class="row" >	
					<div class="col-4">	
						<h5 style="margin-right: 5px">	
							Кого читать
						</h5>
					</div>
					<div class="col-8">	
						<p style="margin-right: 5px">	
							Обновить
						</p>
						<p>	
							всё
						</p>
					</div>		
				</div>
				<?php 
				
				$result2 = mysqli_query($connect,"SELECT * FROM mail");
				
				for($i=0;$i<4;$i++){
					$res2=$result2->fetch_assoc();
					?>
				<div class="row" style="margin-left: 5px;">	
					<div class="col-4">	
							<?php echo '<img src="' . $res2['logo'] . '" class="w-100">' ?>

							
					</div>
					<div class="col-8">	
						<div class="row">	
						<h6 style="margin-right: 2px;">	
							<?php echo '<a href="#">' . $res2['name'] . '</a>'?>
							
								
						</h6>
						<h6>	
							<?php echo $res2['text'] ?>
						</h6>
						</div>
						<?php echo '<button>' . '<a href="' . $res2['btn'] . '">' . 'read' . ' </a>' . '</button>' ?>
						
					</div>
			</div>
				<hr>
				<?php
				}
			 ?>	

			</div>
			
			
		
		</div>
	</div>
</div>
<script type="text/javascript">
	
</script>
</body>
</html>