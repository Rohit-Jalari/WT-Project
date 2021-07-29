<?php 
	session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Sublime Resturant
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , inital-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="CSS/menu.css">
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
					<div class="nav-list-item active">
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
					Lorem ipsum ut proident	
				</div>
				<div class="banner-text-list-item">
					MENU
				</div>
			</div>
		</div>
	</div>
	<div class="menu-container">
		<div class="menu-wrapper">
			<div class="menu-product">
				<div class="product-image">
					<img src="IMAGES/MENU/product_1.jpg" alt="food">
				</div>
				<div class="product-description">
					<div class="product-description-heading">
						Est quis cupidatat ut
					</div>
					<div class="product-description-price">
						NRS.500
					</div>
					<div class="product-description-content">
						In est consectetur culpa magna id nulla consectetur magna ut ad veniam sed aliquip in Eiusmod cupidatat. Velit commodo quis aliquip.
					</div>
				</div>
			</div>

			<div class="menu-product">
				<div class="product-image">
					<img src="IMAGES/MENU/product_2.jpg" alt="food">
				</div>
				<div class="product-description">
					<div class="product-description-heading">
						Lorem ipsum minim
					</div>
					<div class="product-description-price">
						NRS.500
					</div>
					<div class="product-description-content">
						In est consectetur culpa magna id nulla consectetur magna ut ad veniam sed aliquip in Eiusmod cupidatat. Velit commodo quis aliquip.
					</div>
				</div>
			</div>

			<div class="menu-product">
				<div class="product-image">
					<img src="IMAGES/MENU/product_3.jpg" alt="food">
				</div>
				<div class="product-description">
					<div class="product-description-heading">
						Magna ea aute
					</div>
					<div class="product-description-price">
						NRS.500
					</div>
					<div class="product-description-content">
						In est consectetur culpa magna id nulla consectetur magna ut ad veniam sed aliquip in Eiusmod cupidatat. Velit commodo quis aliquip.
					</div>
				</div>
			</div>

			<div class="menu-product">
				<div class="product-image">
					<img src="IMAGES/MENU/product_4.jpg" alt="food">
				</div>
				<div class="product-description">
					<div class="product-description-heading">
						Duis id elit 
					</div>
					<div class="product-description-price">
						NRS.500
					</div>
					<div class="product-description-content">
						In est consectetur culpa magna id nulla consectetur magna ut ad veniam sed aliquip in Eiusmod cupidatat. Velit commodo quis aliquip.
					</div>
				</div>
			</div>

			<div class="menu-product">
				<div class="product-image">
					<img src="IMAGES/MENU/product_5.jpg" alt="food">
				</div>
				<div class="product-description">
					<div class="product-description-heading">
						Consectetur commodo nostrud
					</div>
					<div class="product-description-price">
						NRS.500
					</div>
					<div class="product-description-content">
						In est consectetur culpa magna id nulla consectetur magna ut ad veniam sed aliquip in Eiusmod cupidatat. Velit commodo quis aliquip.
					</div>
				</div>
			</div>

			<div class="menu-product">
				<div class="product-image">
					<img src="IMAGES/MENU/product_6.jpg" alt="food">
				</div>
				<div class="product-description">
					<div class="product-description-heading">
						Lorem ipsum dolore 
					</div>
					<div class="product-description-price">
						NRS.500
					</div>
					<div class="product-description-content">
						In est consectetur culpa magna id nulla consectetur magna ut ad veniam sed aliquip in Eiusmod cupidatat. Velit commodo quis aliquip.
					</div>
				</div>
			</div>			
		</div>
	</div>
	<div class="see-more">
		<button>
			<a href="#">
				See More
			</a>			
		</button>
	</div>
	

	<div class="foot-container">
		<div class="foot-wrapper">
			&#169 2021 Key. All Rights Reserved.
		</div>
	</div>

</body>
</html>