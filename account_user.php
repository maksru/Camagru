<?php
	require_once "config/connect_db.php";
	session_start();
	if (empty($_SESSION['login_user']) && isset($_SESSION['login_user']) == 0)
		header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/account_user.css">
	<link rel="stylesheet" type="text/css" href="<?php echo GALLERY?>theme/style.css">
	<meta charset="utf-8">
	<title>Camagru | User account</title>
</head>
<body>
<div class="container">
	<div class="logout">
		<a href="logout.php" style="color: red"><img src="img/exit_icon.png"></a>
	</div>
	<h1>CAMAGRU</h1>
	<div class="user_profile">
		<div class="icon_user">
			<a href="user_profile.php"><img src="img/user_male_filled-512.png"></a>
			<a href="user_profile.php"><?php echo mb_strtoupper($_SESSION['login_user']['login']);?></a>
		</div>
	</div>
	<div class="use_cams">
		<a href="cams.php" style="color: red"><img src="img/take_foto.png"></a>
	</div>
</div>

	<div class="gallery">
		<div class="foto_gallery">
			<a href="gallery/by WhiteWolfik (2).jpg"><img src="gallery/by WhiteWolfik (2).jpg"></a>
			<a href="gallery/by WhiteWolfik (3).jpg"><img src="gallery/by WhiteWolfik (3).jpg"></a>
			<a href="gallery/by WhiteWolfik (4).jpg"><img src="gallery/by WhiteWolfik (4).jpg"></a>
			<a href="gallery/by WhiteWolfik (5).jpg"><img src="gallery/by WhiteWolfik (5).jpg"></a>
			<a href="gallery/by WhiteWolfik (6).jpg"><img src="gallery/by WhiteWolfik (6).jpg"></a>
			<a href="gallery/by WhiteWolfik (7).jpg"><img src="gallery/by WhiteWolfik (7).jpg"></a>
			<a href="gallery/by WhiteWolfik (8).jpg"><img src="gallery/by WhiteWolfik (8).jpg"></a>
			<a href="gallery/by WhiteWolfik (9).jpg"><img src="gallery/by WhiteWolfik (9).jpg"></a>
			<a href="gallery/by WhiteWolfik (3).jpg"><img src="gallery/by WhiteWolfik (3).jpg"></a>
			<a href="gallery/by WhiteWolfik (7).jpg"><img src="gallery/by WhiteWolfik (7).jpg"></a>
			<a href="gallery/by WhiteWolfik (19).jpg"><img src="gallery/by WhiteWolfik (19).jpg"></a>
			<a href="gallery/by WhiteWolfik (20).jpg"><img src="gallery/by WhiteWolfik (20).jpg"></a>
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