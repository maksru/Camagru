<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
	<title>Camagru</title>
</head>
<body>

	<!-- <script type="text/javascript">
	    var images = new Array();
	    var i = 0;
	     
	    images[0] = 'img/one_foto.jpg';
	    images[1] = 'img/2_foto.jpg';
	     
	    function viewImages() 
	    {
	        document.getElementById("img_main").src = images[i]; 
	        i++;
	        if (i == images.length) 
	        {
	            i = 0;
	        }
	        setTimeout("viewImages()",5000);
	    }   
	</script>
 
	<img src="" id="img_main">
 
	<script> viewImages(); </script> -->

	<div class="container">
		<div id="img_main" class="main_foto">
			<img src="img/main_foto.png">
			<!-- <img class="foto_1" src="img/one_foto.jpg">
			<img class="foto_2" src="img/2_foto.jpg"> -->
			<!-- <img class="one_foto_3" src="img/"> -->
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

</body>
</html>