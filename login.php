<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<title>Camagru</title>
</head>
<body>
	<div class="container">
		<div class="main_foto">
			<img src="img/main_foto.png">
		</div>
		<div class="login_block">
			<div class="main_form">
				<h1>Camagru</h1>
				<form method="POST" action="#">
					<label for="login">Login</label>
					<br />
					<input type="text" name="login" id="login" placeholder="Phone number, username, or email" required>
					<br />
					<label for="password">Password</label>
					<br />
					<input type="password" id="password" placeholder="Password" name="password" required>
					<br />
					<button type="submit" name="login" disabled>Log in</button>
					<br />
					<p><a href="#">Forgot password</a></p>
				</form>
			</div>
			<div class="newacc">
				<p>Don't have an account?<a href="#"> Sign up</a></p>
			</div>
		</div>
	</div>
</body>
</html>