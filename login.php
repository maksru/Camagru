<?php
	require_once "config/connect_db.php";
	session_start();
	//Спросить у Вани.
	if (!empty($_SESSION['login_user']) && $_SESSION['login_user'] != "")
		header('Location: video.php');
	if (!empty($_POST) && isset($_POST)) :
		if (isset($_POST['login'])) :
			$login = $_POST['login'];
		endif;
		if (isset($_POST['password'])) :
			$password = hash('whirlpool', $_POST['password']);
		endif;

		$sql = "SELECT * FROM users WHERE login='$login'";
		$rezult = mysqli_query($connect, $sql);
		print_r($rezult);
		if (mysqli_num_rows($rezult) == 0) :
			$row = mysqli_fetch_assoc($rezult);
		else :
			die("ERROR: Wrong Login.");
		endif;
		if ($row['password'] != $password) :
			die("ERROR: Wrong Password");
		endif;
		$_SESSION['login_user'] = $row;
	endif;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<title>Camagru</title>
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
		<div class="login_block">
			<div class="main_form">
				<h1>Camagru</h1>
				<form method="POST" action="login.php">
					<input type="text" name="login" id="login" placeholder="Phone number, username, or email" required>
					<br />
					<input type="password" id="password" placeholder="Password" name="password" required>
					<br />
					<input type="submit" name="login" value="Log in" id="color_button">
					<br />
					<p><a href="#" style="color: #5097ea">Forgot password</a></p>
				</form>
			</div>
			<div class="newacc">
				<p>Don't have an account?<a href="register.php" style="color: #5097ea"> Sign up</a></p>
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
<script src="js/script.js" type="text/javascript"></script>


</body>
</html>