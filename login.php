<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Sublime Resturant-Login Page
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
	require_once "dbcon.php";

	if(isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$email_search = " SELECT * FROM `userrecord` WHERE 	email='$email' ";

		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);

		if($email_count){
			$email_pass = mysqli_fetch_assoc($query);

			$db_pass = $email_pass['password'];

			$pass_decode = password_verify($password, $db_pass);
			if($pass_decode){
				$_SESSION['loggedIn'] = true;
				$_SESSION['email'] = $email_pass['email'];

				?>
				<script>
					alert("Login Succesfull");
					location.replace('index.php');
				</script>
				<?php
			} else { ?>
				<script>
					alert("Incorrect Password");
				</script>
				<?php
			}
		} else { ?>
			<script>
				alert("Account doesnot Exists");

			</script>
			<?php
		}
	}	
?>

	
	<div class="background">
		<div class="login-container">
			<div class="nav-container">
				<div class="nav-wrapper">
					<div class="logo">
						<a href="index.php">
							Sublime Resturant
						</a>
					</div>
					<div class="nav-list">
						<div class="nav-list-item">
							<a href="index.php">
								Home
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
			<div class="login-body">
				<div class="login-heading">
					Login
				</div>
				<div class="login-input">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="login-id">
						<div class="input">
							<input type="text" name="email" id="email" placeholder=" ">
							<label for="email">
								Email
							</label>
							<i class="fa fa-exclamation-circle"></i>
							<small>Error Message</small>
						</div>
						<div class="input">
							<input type="password" name="password" id="password" placeholder=" ">
							<label for="password">Password</label>
							<i class="fa fa-exclamation-circle"></i>
							<i class="fa fa-eye" id="eye" ></i>
							<small>Error Message</small>
						</div>
						<div class="submit-button">
							<button type="submit" name="submit" value="Login">
								Log In
							</button>
						</div>
						<div class="link">
							<a href="contact_us.php">
								Direct Contact
							</a>
							<a href="#">
								Forgot Password ?
							</a>
						</div>
						<div class="link">
								Don't Have an Account ?
								<span>
									<a href="sign_up.php">
										Create Account
									</a>
								</span>
						</div>
					</form>
				</div>
			</div>	
			<div class="login-foot">
				<div class="login-foot-wrapper">
					<div class="login-foot-list-1">
						<div class="login-foot-item">
							<a href="#">
								Privacy Policy
							</a>
						</div>
						<div class="login-foot-item">
							<a href="#">
								Terms of Use
							</a>
						</div>
					</div>
					<div class="login-foot-list-2">
						&#169 2021 Key. All Rights Reserved.
					</div>
				</div>
			</div>						
		</div>
	</div>
</body>
<script type="text/javascript"
src="JS/loginValidation.js">
		
</script>
</html>