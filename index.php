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
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
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
					<div class="nav-list-item active">
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
					Explore Our Resturant	
				</div>
				<div class="banner-text-list-item">
					Deserunt quis incididunt commodo 
				</div>
				
			</div>
		</div>
	</div>

	<div class="service-container">
		<div class="service-wrapper">
			<div class="service-heading">
				Services
			</div>
			<div class="service-list">
				<div class="service-list-item">
					<div class="service-list-img">
						<a href="book_table.php">
							<img src="IMAGES/HOME/food_3.jpg" alt="Birthday Photo">
						</a>
					</div>
					<div class="service-list-description">
						<div class="service-list-description-heading">
							<a href="book_table.php">
								Birthdays
							</a>
						</div>
						<div class="service-list-description-body">
							Ex reprehenderit in eu officia nostrud cillum et sunt ullamco eiusmod officia sit irure esse est in deserunt laboris cupidatat.
						</div>
					</div>
				</div>
				<div class="service-list-item">
					<div class="service-list-img">
						<a href="book_table.php">
							<img src="IMAGES/HOME/food_3.jpg" alt="Anniversary Photo">
						</a>
					</div>
					<div class="service-list-description">
						<div class="service-list-description-heading">
							<a href="book_table.php">
								Anniversary
							</a>
						</div>
						<div class="service-list-description-body">
							Labore labore in laboris reprehenderit consectetur voluptate ad dolor anim officia consectetur cupidatat incididunt nulla ea eu incididunt.
						</div>
					</div>
				</div>
				<div class="service-list-item">
					<div class="service-list-img">
						<a href="book_table.php">
							<img src="IMAGES/HOME/food_3.jpg" alt="Party Photo">
						</a>
					</div>
					<div class="service-list-description">
						<div class="service-list-description-heading">
							<a href="book_table.php">
								Party
							</a>
						</div>
						<div class="service-list-description-body">
							Laborum tempor pariatur in deserunt dolore ad eiusmod mollit veniam laborum cillum qui fugiat magna ullamco ullamco aute tempor anim velit.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="event-container">
		<div class="event-wrapper">
			<div class="event-heading">
				Join Us
			</div>
			<div class="event-list">
				<div class="event-list-item">
					<div class="event-list-img">
						<a href="book_table.php">
							<img src="IMAGES/HOME/euro_cup.jpg" alt="Birthday Photo">
						</a>
					</div>
					<div class="event-list-description">
						<div class="event-list-description-heading">
							<a href="book_table.php">
								Euro Cup 2021
							</a>
						</div>			
						<div class="event-list-description-body">
							Duis voluptate non ut exercitation sunt exercitation ad et tempor sit ut sed consequat anim labore officia non adipisicing nisi ut pariatur dolore veniam.
						</div>
					</div>
				</div>
				<div class="slider slider1">
					<div class="slider-date">
						25th July- 25th August
					</div>
					<div class="slider-time">
						Time: 5pm - 11pm
					</div>
				</div>				
				<div class="event-list-item">
					<div class="event-list-img">
						<a href="book_table.php">
							<img src="IMAGES/HOME/copa_america.jpg" alt="Anniversary Photo">
						</a>
					</div>
					<div class="event-list-description">
						<div class="event-list-description-heading">
							<a href="book_table.php">
								Copa America 2021
							</a>
						</div>
						<div class="event-list-description-body">
							Labore labore in laboris reprehenderit consectetur voluptate ad dolor anim officia consectetur cupidatat incididunt nulla ea eu incididunt.
						</div>
					</div>
				</div>
				<div class="slider slider2">
					<div class="slider-date">
						1st August - 1st Semptember
					</div>
					<div class="slider-time">
						Time: 7pm - 1am
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about-us-container">
		<div class="about-us-wrapper">
			<div class="about-us-heading">
				About Us
			</div>
			<div class="about-us-content">		
				<div class="about-us-description">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, esse consequatur alias  inventore ad. Accusantium tenetur voluptate excepturi minus in pariatur praesentium, corporis, aliquid dicta.
					</p>
					<p>
						Nostrud sunt ut ut in anim elit magna cillum adipisicing id ut laboris ut do eu duis labore eiusmod eiusmod magna est quis aliqua irure exercitation ut fugiat deserunt.
					</p>
					
					<ul>
						<li>
							Est sunt occaecat do nulla.
						</li>
						<li>
							Ex dolore adipisicing.
						</li>
						<li>
							Dolore dolore dolor consequat non.
						</li>
						<li>
							Velit occaecat ad do elit.
						</li>
					</ul>
					<div class="about-us-button">
						<button>
							<a href="about_us.php">
								Read More
							</a>
						</button>
					</div>
				</div>				
				<div class="location">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1mh0kMtqFcysx1qT2BRhZoAE8sdCJmrk_" title="Our Location" ></iframe>
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