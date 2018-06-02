<?php
	require_once "config/connect_db.php";
	session_start();
	if (empty($_SESSION['login_user']) && $_SESSION['login_user'] == "")
		header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/user_profile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Camagru | User Profile</title>
</head>
<body>
<div class="container">
	<div class="container">
		<a href="account_user.php" style="color: red">Gallery</a>
	</div>
	<h1>Camagru</h1>
	<div class="user-profile">
		<div class="panel-user-profile">
			Профиль пользователя: <?php  echo $_SESSION['login_user']['full_name']?><hr />
			<form method="POST" action="user_profile.php">
				<label>Электронная почта: <?php  echo $_SESSION['login_user']['email']?></label>
				<br />
				<label>Логин: <?php  echo $_SESSION['login_user']['login']?></label>
				<br />
				<label>Пароль: </label>
				<button><a href="logout.php">Выход</a></button>
			</form>
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
</body>
</html>