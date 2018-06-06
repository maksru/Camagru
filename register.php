<?php
	require_once "config/connect_db.php";
	session_start();
	if (!empty($_SESSION['login_user']) && $_SESSION(['login_user'] != ""))
		header('Location: video.php');
	if (isset($_POST) && !empty($_POST)) :
		if (isset($_POST['login'])) :
			$login = trim($_POST['login']);
		endif;
		if (isset($_POST['email'])) :
			$email = trim($_POST['email']);
		endif;
		if (isset($_POST['password_1'])) :
			$pass = hash('whirlpool', $_POST['password_1']);
		endif;
		if (isset($_POST['full_name'])) :
			$full_name = trim($_POST['full_name']);
		endif;

		if (!empty($login) && !empty($email) && !empty($pass) && !empty($full_name)) 
		{
			$query = "SELECT * FROM `users` WHERE `login` = '$login'";
			$data = $pdo->query($query);
			$row = $data->fetch();

			if (!isset($row['login']))
			{
				$sql = "INSERT INTO `users` (login, password, full_name, email) VALUES ('" . $login . "', '" . $pass . "', '" . $full_name . "', '" . $email . "')";
				$pdo->exec($sql);
				// header("Location: test.php");
				$mail_to = $email;
				$encoding = "utf-8";
				$mail_subject = "Activation";
				$mail_message = "Your login is: ".$login.".<br />Your password is: ".$_POST['password_1'].".<br />To make photos, like them and leave comments you need to activate your profile,to do this follow link: <a href='http://localhost:8080/Camagru/get_valid_user.php?id=".$_POST['login']."&hash=".$pass."'>Click your link!</a>";
				$from_name = "Camagru";
				$from_mail = "support@camagru.com";

				// Set preferences for Subject field
				$subject_preferences = array(
				"input-charset" => $encoding,
				"output-charset" => $encoding,
				"line-length" => 76,
				"line-break-chars" => "\r\n"
				);

				// Set mail header
				$header = "Content-type: text/html; charset=".$encoding." \r\n";
				$header .= "From: ".$from_name." <".$from_mail."> \r\n";
				$header .= "MIME-Version: 1.0 \r\n";
				$header .= "Content-Transfer-Encoding: 8bit \r\n";
				$header .= "Date: ".date("r (T)")." \r\n";
				$header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);

				// Send mail
				mail($mail_to, $mail_subject, $mail_message, $header);
			}
			else
			{
				echo "<script type=\"text/javascript\">".
				"alert('Логин уже существуйет!');".
				"</script>";
			}
			$pdo = null;
		}
	endif;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="text/css" href="img/insta.png">
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
		<div class="register_block">
			<div class="main_form">
				<h1>Camagru</h1>
				<form method="POST" action="register.php">
					<!-- <input type="text" name="mobile_number_or_email" placeholder="Mobile Number or Email" required> -->
					<input type="text" name="email" placeholder="Email" required>
					<br />
					<input type="text" name="full_name" placeholder="Full Name" required>
					<br />
					<input type="text" name="login" placeholder="Username" required>
					<br />
					<input type="password" name="password_1" placeholder="Password" required>
					<br />
					<input type="submit" name="sign_up" value="Sign up" id="color_button">
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