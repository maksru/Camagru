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
					<video id="video" width="640" height="480" autoplay="autoplay"></video>
					<!-- <div class="div_icon"></div> -->
				</div>

				<div class="button">
					<input id="button_shoot" type="button" value="Shoot"  style="display: block;" onclick="three_buttons()" />
					<a href="" download="awesome_pic.png">
						<button id="button_download" class="block-thee-button" style="display: none;" type="button" download="awesome_pic.png" onclick="button_download()">Download</button>
					</a>
					<button id="button_try_again" class="block-thee-button" style="display: none;" onclick="one_button()">Try again</button>
					<button id="button_save_to_gallery" style="display: none;" class="block-thee-button">Save to gallery</button>
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
					<img id="glass_mustache" class="foto-carusel" src="super_icon/super01.png" onclick="initDragDrop()">
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
	<!-- <script src="js/grag_and_drop.js" type="text/javascript"></script> -->
	<!-- <script src="js/test2.js" type="text/javascript"></script> -->
</body>
</html>