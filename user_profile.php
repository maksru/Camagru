<?php
	require_once "config/connect_db.php";
	session_start();
	if (empty($_SESSION['login_user']) && $_SESSION['login_user'] == "")
		header('Location: index.php');
	if (isset($_POST) && !empty($_POST))
	{
		$login = $_SESSION['login_user']['login'];
		$email = $_POST['email'];
		$pass = hash('whirlpool', $_POST['new_password']);
		$sql = "UPDATE `users` SET `password`='$pass', `email`='$email' WHERE login = '".$login."'";
		$result = $pdo->query($sql);
	}
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
	<div class="header_container">
		<div class="gallery">
			<a href="account_user.php"><img src="img/galleryIcon1.png"></a>
		</div>
		<div>
			<p>CAMAGRU</p>
		</div>
	</div>
	<div class="user-profile">
		<div class="panel-user-profile">
			<form method="POST" action="user_profile.php">
				Профиль пользователя: <?php  echo $_SESSION['login_user']['full_name']?><hr />
				<label>Электронная почта</label>
				<br />
				<input type="text" name="email" value="<?php  echo $_SESSION['login_user']['email']?>">
				<br />
				<label>Логин</label>
				<br />
				<input type="text" name="login" value="<?php  echo $_SESSION['login_user']['login']?>">
				<br />
				<label>Введите старый пароль</label>
				<br />
				<input type="password" name="old_password">
				<br />
				<label>Введите новый пароль.</label>
				<br />
				<input type="password" name="new_password">
				<input type="submit" value="Сохранить" style="background-color: #5097ea;">
				<a href="logout.php"><input type="button" name="Exit" value="Выход"  style="background-color: #5097ea;"></a>
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