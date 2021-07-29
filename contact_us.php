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
	<link rel="stylesheet" type="text/css" href="CSS/contactUs.css">
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
					<div class="nav-list-item">
						<a href="about_us.php">
							About Us
						</a>
					</div>
					<div class="nav-list-item active">
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
					Lorem ipsum sed 	
				</div>
				<div class="banner-text-list-item">
					CONTACT US
				</div>
				
			</div>
		</div>
	</div>

	<div class="description-1">
		<div class="description-1-wrapper">
			<div class="description-header">
				Contacts
			</div>
			<div class="description-block">
				<div class="description-content-1">
					<p>
						Et est ad elit et laboris ea tempor aute non magna dolor ex nostrud voluptate nulla consequat irure dolore sed sint pariatur dolore veniam cupidatat ad in ut quis mollit.
					</p>
					<p>
						Esse mollit et labore voluptate adipisicing nulla veniam sunt duis ea cillum sit non elit amet culpa elit cillum elit reprehenderit quis officia sint nostrud deserunt eu nostrud. Dolor consectetur non id voluptate laborum et quis ex magna id dolore nostrud veniam laboris ut mollit in duis.
					</p>
					<p>
						<ul>
							<li>
								<span>Email : </span>sublimeresturant@gmail.com , sublimeresturant@yahoo.com
							</li>
							<li>
								<span>Telephone : </span>061-1234456 , 061-9876543
							</li>
							<li>
								<span>Mobile Number : </span>9812345678 , 9876543210
							</li>
						</ul>
					</p>
					<p>
						Moreover, we can be contacted through Social Medias. Make sure to follow and like our pages to get latest updates,events and shows in our Resturant.Sunt sed adipisicing minim velit proident irure incididunt nulla non aute nulla duis excepteur sint nulla ut dolor et deserunt enim ea ad enim.
					</p>
					
					
				</div>
				<div class="description-content-2">
					<p>
						Social Medias
					</p>
					<div class="social-media-button-list">
						<div class="social-media-button">
							<button>
								<a href="https://www.facebook.com" target="_blank">
									Facebook
								</a>								
							</button>
							<div class="social-media-slider">
								Follow Us in Facebook
							</div>
						</div>
						<div class="social-media-button">
							<button>
								<a href="https://www.instagram.com" target="_blank">
									Instagram
								</a>								
							</button>
							<div class="social-media-slider">
								Follow Us in Instagram
							</div>
						</div>
						<div class="social-media-button">
							<button>
								<a href="https://www.twitter.com" target="_blank">
									Twitter
								</a>								
							</button>
							<div class="social-media-slider">
								Follow Us in Twitter
							</div>
						</div>
						<div class="social-media-button">
							<button>
								<a href="https://www.linkedin.com" target="_blank">
									LinkedIn
								</a>								
							</button>
							<div class="social-media-slider">
								Follow Us in LinkedIn
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="description-1">
		<div class="description-1-wrapper">
			<div class="description-header">
				Visit Us
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
	<div class="foot-container">
		<div class="foot-wrapper">
			&#169 2021 Key. All Rights Reserved.
		</div>
	</div>

</body>
</html>