<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/register.css">
	<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<title>Camagru</title>
</head>
<body>
	<div class="container">
		<div class="main_foto">
			<img src="img/main_foto.png">
		</div>
		<div class="register_block">
			<div class="main_form">
				<h1>Camagru</h1>
				<form method="POST">
					<input type="text" name="mobile_number_or_email" placeholder="Mobile Number or Email" required>
					<br />
					<input type="text" name="full_name" placeholder="Full Name" required>
					<br />
					<input type="text" name="username" placeholder="Username" required>
					<br />
					<input type="password" name="password" placeholder="Password" required>
					<br />
					<input type="submit" name="sign_up" value="Sign up" id="color_button">
				</form>
			</div>
			<div class="to_login">
				<p>Have an account?<a href="login.php" style="color: #5097ea"> Log in</a></p>
			</div>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>