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
				<div id="viewport">
					<ul id="slidewrapper">
						<li class="slide"><img class="slider_img" src="img/one_foto.jpg" alt="1"></li>
						<li class="slide"><img class="slider_img" src="img/2_foto.jpg" alt="2"></li>
						<li class="slide"><img class="slider_img" src="img/3_foto.jpg" alt="3"></li>
						<li class="slide"><img class="slider_img" src="img/4_foto.jpg" alt="4"></li>
						<li class="slide"><img class="slider_img" src="img/5_foto.jpg" alt="5"></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="login_block">
			<div class="main_form">
				<h1>Camagru</h1>
				<form method="POST" action="#">
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

<div id="test" onclick="$('#test').hide ()">Test</div>

<!-- <script type="text/javascript">
	var slideNow = 1
	var translateWidth = 0;
	var slideInterval = 2000;
	var slideCount = $('#slidewrapper').children().lenght();

	$(document).ready(function() {
		setInterval(nextSlide, slideInterval);
	});

	function nextSlide() 
	{
		if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) 
		{
			$('#slidewrapper').css('transform', 'translate(0, 0)');
			slideNow = 1;
		}
		else 
		{
			translateWidth = -$('#viewport').width() * (slideNow);
			$('#slidewrapper').css({
				'transform': 'translate(' + translateWidth + 'px, 0)',
				'-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            	'-ms-transform': 'translate(' + translateWidth + 'px, 0)',
			});
			slideNow++;
		}
	}
</script> -->
</body>
</html>