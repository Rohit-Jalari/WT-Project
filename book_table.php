<?php
	session_start();

if(!isset($_SESSION['loggedIn'])){
	?>
	<script>
		alert("Login to Continue");
		location.replace("login.php");
	</script>
	<?php
}else { ?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Sublime Resturant
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , inital-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="CSS/bookTable.css">
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
					<div class="nav-list-item active">
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
					Lorem ipsum tempor nisi
				</div>
				<div class="banner-text-list-item">
					BOOK A TABLE
				</div>
			</div>
		</div>
	</div>

	<div class="description-1">
		<div class="description-1-wrapper">
			<div class="description-header">
				Deserunt magna quis ad officia eu aute ex ad 
			</div>
			<div class="description-block">
				<div class="form">
					<form id="login-id">
						<div class="input">
							<label for="date">
								Choose Date :
							</label>
							<input type="date" id="date" name="date" value="2021-07-27" min="2021-07-27" max="2021-08-27" required>	
						</div>
						<div class="input">
							<label for="time">
								Choose Time
							</label>
							<input type="time" id="time" name="time" value="12:00" required>	
						</div>
						<div class="input">
							<label for="people">
								Table for :
							</label>
							<select id="people">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>Group</option>
							</select>
						</div>
						<div class="input">
							<label for="notes">
								Notes :
							</label>
							<textarea id="notes">
								
							</textarea>
						</div>
						
						<div class="submit-button">
							<button type="button" onclick="bookTable()">
								<a href="book_table.php">
									Check Availability
								</a>
							</button>
						</div>
					</form>					
				</div>
				<div class="description-content">
					<div class="content-image">
						<img src="IMAGES/BOOK_TABLE/manager.jpg" alt="manager">
					</div>					
					<div class="manager-name">
						ABCD EFHIJKLM
					</div>
					<div class="manager-title">
						Manager
					</div>
					<div class="contact-us">
						<button>
							<a href="contact_us.php">
								Contact Us
							</a>
							
						</button>
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
<script type="text/javascript">
	function bookTable() {
		alert("Table Succesfully Booked");
		location.replace('book_table.php');
	}
</script>
</html>

<?php } ?>