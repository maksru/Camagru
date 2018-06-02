<?php
	require_once "config/connect_db.php";
	session_start();
	$author_id = $_POST['auth_id'];
	$src_img = $_POST['img_src'];
	$log = $_POST['log_user'];
	if (isset($_POST) && !empty($_POST)) 
	{
		// Поиск по регулярному выражению.
		// $rawImgSrc = preg_replace('/^data:image\/\w+;base64,/i', '', $_POST['img_src']);
		$photo_patch = "gallery/" . time() . $log . ".png";
		$photo = str_replace("data:image/png;base64,", "", $src_img);
		$photo = str_replace(' ', '+', $photo);
		$decodedImg = base64_decode($photo);
		file_put_contents($photo_patch, $decodedImg);
		addImgToBd($pdo, $photo_patch);
		echo "Success";
	}
	function addImgToBd($pdo, $photo_patch)
	{
		$id_gallery = $_SESSION['login_user']['id'];
		$text_images = $_SESSION['login_user']['login'];

		$sql = "INSERT INTO `images` (`id_gallery`, `path_images`, `text_images`) VALUES ('$id_gallery', '$photo_patch', '$text_images')";
		$pdo->exec($sql);
	}
?>

