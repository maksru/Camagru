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
	<link rel="stylesheet" type="text/css" href="style/get_foto_gallery.css">
	<meta charset="utf-8">
	<title>Camagru | Photo</title>
</head>
<body>
<div class="container">
	<div class="logout">
		<a href="logout.php"><img src="img/logout.png"></a>
	</div>
	<div>
		<p><a href="account_user.php">CAMAGRU</a></p>
	</div>
	<div class="user_profile">
		<div class="icon_user">
			<a href="user_profile.php"><img src="img/user_male_filled-512.png"></a>
			<a href="user_profile.php"><?php echo mb_strtoupper($_SESSION['login_user']['login']);?></a>
		</div>
	</div>
	<div class="use_cams">
		<a href="cams.php"><img src="img/take_foto.png"></a>
	</div>
</div>

	<div class="gallery">
		<div class="foto_gallery commits_block">
				<img src="<?php echo $_GET['path'] ?>">
				<?php
					$id_artical = $_GET['id'];
					$sql = "SELECT * FROM `likes` WHERE post_id = '$id_artical'";
					$data = $pdo->query($sql);
					$rezult = $data->fetchAll();
					// $count = 0;
					// $i = 0;
					// while ($rezult[$i])
					// {
					// 	if ($rezult['post_id'])
					// 		$count++;
					// 	$i++;
					// }
					echo '<div class="like-container">Количество лайков: '.count($rezult).'</div>';
				?>
			<form action="<?php echo 'getLike.php?id_photo=' . $_GET['id'] . '&path_photo=' . $_GET['path'] . '&user_photo=' . $_GET['user'] ?>" method="POST">
				<div class="like-container">
					<!-- <img src="img/like.png" class="like-icon">
					<span class="like-count">5</span> -->
					<input type="hidden" name="id_post" value="<?php echo $_GET['id']?>">
					<input type="hidden" name="post_user" value="<?php echo $_SESSION['login_user']['login']?>">
					<input type="submit" name="like" value="Like">
					<input type="submit" name="dislike" value="DisLike">
				</div>
			</form>
			<?php
				$sql = "SELECT * FROM `commenst` WHERE id_images='".$_GET['id']."'";
				$data = $pdo->query($sql);
				$rezult = $data->fetchAll();
				foreach ($rezult as $value)
				{
					// Пересмотерть
					// .$_SESSION['login_user']['login'].'<br />'
					echo ('<div class="container-box">
						'.date("F j, Y, g:i a").'
						'.'<br />'.$value['text_commenst'].'
						</div>');
				}
			?>
			<form action="<?php echo 'getComit.php?id_photo=' . $_GET['id'] . '&path_photo=' . $_GET['path'] . '&user_photo=' . $_GET['user'] ?>" method="POST">
				<textarea class="add-coment-box" rows="5" name="text" style="margin-top: 50px;" placeholder="Оставить коментарий..."></textarea>
				<input type="submit" name="button" value="Отправить">
			</form>
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