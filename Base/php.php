<?php 
	$database=[
		[
			"text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
			"account_image"=>"post1.jpg",
			"account_name"=>"Habr",
			"account_link"=>"@HABR.COM",
			"post_image"=>"habr.jpg",
		],
		[
			"text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
			"account_image"=>"post2.png",
			"account_name"=>"Vesti HI tech",
			"account_link"=>"@HI_TECH.COM",
			"post_image"=>"vesti_hi_tech.jpg",
		],
		[
			"text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
			"account_image"=>"post3.jpg",
			"account_name"=>"TJ",
			"account_link"=>"@TJournal.COM",
			"post_image"=>"roscosmos.jpg",
		]

	]

?>




<?php
				for($i=0;$i<count($database);$i++){
					?>
					<div style="margin-bottom: 10px" class="row">
						<div class="col-2">
						<?php
							echo '<img src=" ' . $database[$i]['account_image'] . '"</img>';
							?>
						</div>
						<div class="col-10">
							<div class="row">
								<?php
							echo '<h5>' . $database[$i]['account_name'] . '</h5>';
							echo '<a href="#">' . '<h5>' . $database[$i]['account_link'] . '</h5>' . '</a>';
							?>
							</div>
						<?php
							echo '<p>' . $database[$i]['text'] . '</p>';
							echo '<img class="w-100" src=" ' . $database[$i]['post_image'] . '"</img>';
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
						</div>
					</div>
		
					<hr>

				<?php 
	} 
			?>