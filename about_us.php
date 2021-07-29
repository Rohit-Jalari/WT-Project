<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Sublime Resturant
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , inital-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="CSS/aboutUs.css">
</head>
<body>
	<header>
		<div class="nav-container">
			<div class="nav-wrapper">
				<div class="logo">
					<a href="index.php">
						Sublime Resturant
					</a>
				</div>
				<div class="php-email-wrapper">
					<?php
						if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
							?>
							<div class="php-email">
								<?php echo $_SESSION['email']; ?>					
								<ul>
									<li>
										<a href="logout.php">
											Log-Out
										</a>
									</li>
								</ul>						
							</div>
						<?php } else { ?>
								<div class="nav-log-in">
									<a href="login.php">
										Login
									</a>
								</div>
							<?php }	?>
				</div>				
				<div class="nav-list">
					<div class="nav-list-item">
						<a href="index.php">
							Home
						</a>
					</div>
					<div class="nav-list-item">
						<a href="book_table.php">
							Book A Table
						</a>
					</div>
					<div class="nav-list-item">
						<a href="menu.php">
							Menu
						</a>
					</div>
					<div class="nav-list-item active">
						<a href="about_us.php">
							About Us
						</a>
					</div>
					<div class="nav-list-item">
						<a href="contact_us.php">
							Contact Us
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="banner">
		<div class="banner-wrapper">
			<div class="banner-text-list">
				<div class="banner-text-list-item">
					ABOUT US	
				</div>
				<div class="banner-text-list-item">
					OUR RESTURANT
				</div>				
			</div>
		</div>
	</div>
	<div class="description-1">
		<div class="description-1-wrapper">
			<div class="description-header">
				Our Location on Map
			</div>
			<div class="description-block">
				<div class="location">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1mh0kMtqFcysx1qT2BRhZoAE8sdCJmrk_" title="Our Location" ></iframe>
				</div>
				<div class="description-content">
					<p>
						About our office
					</p>
					<p>
						Lorem ipsum mollit mollit commodo mollit laboris sunt sit est veniam cupidatat dolor dolore in sint in eu dolore ut est. 
					</p>
					<p>
						Eu dolor commodo magna officia ut eu duis consequat reprehenderit aliqua ullamco dolor cillum aliqua sit anim enim veniam sed do. 
					</p>
					<p>
						Voluptate ut aliqua fugiat pariatur ut aute et ut adipisicing in eiusmod aliqua consectetur dolore elit ullamco incididunt irure reprehenderit
					</p>
					<p> 
						<ul>
							<li>
								<span>
									Opening Hours :
								</span>
									10am - 2am
							</li>
							<li>
								<span>
									Opening Days :
								</span>	
									Sunday - Friday
							</li>
							<li>
								<span>
									Location :
								</span>
									Lamachaur,Pokhara,Nepal
							</li>
						</ul>

					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="description-2">
		<div class="description-2-wrapper">
			<div class="description-header">
				Lorem ipsum mollit amet
			</div>
				<div class="description-content-2">
					<p>
						Quis duis dolor
					</p>
					<div class="description-content-2-body">
						<p>
							Lorem ipsum mollit mollit commodo mollit laboris sunt sit est veniam cupidatat dolor dolore in sint in eu dolore ut est. Non veniam cupidatat dolore nostrud duis ex ad eu. Aliqua veniam dolor et duis occaecat ex ut in labore anim duis aute ut aute ut in non. Quis enim exercitation ut eiusmod commodo amet dolore voluptate ullamco sint fugiat non enim dolore commodo commodo cupidatat consectetur magna laborum et incididunt. 
						</p>
						<p>
							Eu dolor commodo magna officia ut eu duis consequat reprehenderit aliqua ullamco dolor cillum aliqua sit anim enim veniam sed do. Tempor officia aliquip nulla et laborum id culpa ad incididunt ut est fugiat sit est voluptate in qui veniam fugiat consectetur sunt aliquip eu amet sint occaecat culpa adipisicing dolore nisi magna aliqua labore cupidatat dolore. Excepteur irure do commodo culpa mollit amet laborum adipisicing incididunt ut ex officia aliquip ut velit anim deserunt dolor in consequat consequat nostrud consectetur commodo qui.
						</p>
						<p>
							Voluptate ut aliqua fugiat pariatur ut aute et ut adipisicing in eiusmod aliqua consectetur dolore elit ullamco incididunt irure reprehenderit. Lorem ipsum dolor ea laboris laboris laborum mollit est culpa laboris ullamco sit non pariatur in.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="foot-container">
		<div class="foot-wrapper">
			&#169 2021 Key. All Rights Reserved.
		</div>
	</div>

</body>
</html>