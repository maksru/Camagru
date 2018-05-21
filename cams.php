<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/cams.css">
	<meta charset="utf-8">
	<title>Camagru | Cams</title>
</head>
<body>
	<div class="container">
		<a href="account_user.php" style="color: red">Gallery</a>
	</div>
	<div class="container_cams">
		<div id="allow"></div>

		<div class="cams_block">
			<div class="cams-block-end-button">
				<div class="window_cams">
					<video id="video" width="640" height="480" autoplay="autoplay" ></video>
				</div>

				<div class="button">
					<input id="button" type="button" value="Shoot" onclick="three_buttons()" />
					<a href="" download="awesome_pic.png">
						<input id="button1" type="button" value="Download" style="display: none;" download="awesome_pic.png" />
					</a>
					<input id="button2" style="display: none;" value="Try again" />
					<input id="button3" style="display: none;" value="Save to gallery" />
				</div>
			</div>

			<div class="item">
				<canvas id="canvas" width="640" height="480"></canvas>
			</div>

			<div id="gallery_block"></div>
		</div>
	
		<div class="carousel-container">
			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super01.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super02.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super03.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super04.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super05.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super06.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super07.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super08.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super09.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super10.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super12.png">
				</div>
			</div>

			<div class="carousel-container-block">
				<div class="foto-wrapper">
					<img class="foto-carusel" src="super_icon/super13.png">
				</div>
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

	<script src="js/cams_script.js" type="text/javascript"></script>
</body>
</html>