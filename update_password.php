<?php
	require_once "config/connect_db.php";
	session_start();
	if (isset($_POST) && !empty($_POST))
	{
		$pass = hash('whirlpool', $_POST['password']);
		$sql = "UPDATE `users` SET `password`='$pass' WHERE email = '".$_POST['email']."'";
		$result = $pdo->query($sql);
		header("refresh:3;login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/update_password.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<title>Camagru | Update password</title>
</head>
<body>
	<div class="container">
		<div id="main_foto">
			<img src="img/main_foto.png">
			<div id="block_for_slider">
					<img src="img/one_foto.jpg" id="img_1"/>
					<img src="img/2_foto.jpg" id="img_2"/>
					<img src="img/3_foto.jpg" id="img_3"/>
					<img src="img/4_foto.jpg" id="img_4"/>
					<img src="img/5_foto.jpg" id="img_5"/>
			</div>
		</div>
		<div class="register_block">
			<div class="main_form">
				<h1>Camagru</h1>
				<form method="POST" action="update_password.php">
					<input type="text" name="email" placeholder="Email" required pattern="^[A-Za-z0-9._\-]{1,32}@(?!\.)[A-Za-z0-9.\-]+\.[A-Za-z]{2,63}$">
					<input type="password" name="password" placeholder="New Password" required pattern="^(?=.*[A-Z])(?=.*[0-9]).{6,32}$">
					<br />
					<input type="submit" name="sign_up" value="Forgot password" id="color_button">
				</form>
			</div>
			<div class="to_login">
				<p>Have an account?<a href="login.php" style="color: #5097ea"> Log in</a></p>
			</div>
		</div>
	</div>

	<footer>
		<ul>
			<li><a href="#">ABOUT US</a></li>
			<li><a href="#">SUPPORT</a></li>
			<li><a href="#">BLOG</a></li>
			<li><a href="#">PRESS</a></li>
			<li><a href="#">API</a></li>
			<li><a href="#">JOBS</a></li>
			<li><a href="#">PRIVACY</a></li>
			<li><a href="#">TERMS</a></li>
			<li><a href="#">DIRECTORY</a></li>
			<li><a href="#">PROFILES</a></li>
			<li><a href="#">HASHTAGS</a></li>
			<li><a href="#">LANGUAGE</a></li>
			<li><a href="https://profile.intra.42.fr/users/mrudyk">© 2018 MRUDYK - CAMAGRU</a></li>
		</ul>
	</footer>
	<script src="js/slider_script.js" type="text/javascript"></script>

</body>
</html>