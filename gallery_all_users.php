<?php
	require_once "config/connect_db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/gallery_all_users.css">
	<meta charset="utf-8">
	<title>Camagru | Gallery Users</title>
</head>
<body>
<div class="container">
	<div class="logout">
		<a href="logout.php"><img src="img/logout.png"></a>
	</div>
	<div>
		<p>CAMAGRU</p>
	</div>
	<div class="use_cams">
		<a href="cams.php"><img src="img/take_foto.png"></a>
	</div>
</div>

	<div class="gallery">
		<div class="foto_gallery">
				<?php
					$sql = "SELECT * FROM `images` WHERE id_gallery";
					$data = $pdo->query($sql);
					$rezult = $data->fetchAll();
					foreach ($rezult as $value)
					{
						echo('<a href="get_foto_gallery.php"><img src="'.$value['path_images'].'"></a>');
					}
				?>
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