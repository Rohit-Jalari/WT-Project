<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Sign Up
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , intial scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/signUp.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
	require_once "dbcon.php";

	if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
	
		$pass = password_hash($password, PASSWORD_BCRYPT);	
		
		$emailquery = " SELECT * FROM `userrecord` WHERE email = '$email' ";
		$query = mysqli_query($con,$emailquery);
	
		$emailcount = mysqli_num_rows($query);

		if($emailcount!=0){
			?><script>
				alert("Email already exists");
			</script><?php
		}else if($emailcount==0){
			$insertquery = "INSERT INTO `userrecord`(email,password) values('$email','$pass')";
			$iquery = mysqli_query($con,$insertquery);
	
			if($iquery){
				?>
				<script>
					alert("Account Creation Successful");
					alert("Please Login to Continue");
					location.replace('login.php');
				</script>
				<?php
				
			}else{
				?>
				<script>
					alert("Account Creation Unsuccessfull");
				</script>
				<?php
			}
		}
	}
?>

	<div class="background">
		<div class="sign-up-container">
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

			<div class="sign-up-body">
				<div class="sign-up-heading">
					Sign Up
				</div>
				<div class="sign-up-input">
					<form action=""  method="post" id="sign-up-id">
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
						<div class="input">
							<input type="password" name="password2" id="password2" placeholder=" ">
							<label for="password2">Confirm Password</label>
							<i class="fa fa-exclamation-circle"></i>
							<i class="fa fa-eye" id="eye2" ></i>
							<small>Error Message</small>
						</div>
						<div class="submit-button">
							<button type="submit" name="submit" value="sign-up">
								Sign Up
							</button>
						</div>
						<div class="link">
							<a href="contact_us.php">
								Direct Contact
							</a>				
						</div>
						<div class="link">
								Already Have an Account ?
								<span>
									<a href="login.php">
										Login
									</a>
								</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="JS/signUpValidation.js">
	
</script>

</html>