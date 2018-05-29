<?php
	require_once "config/connect_db.php";
	session_start();
	print_r($_POST);
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
		addImgToBd($pdo);
	// print_r($_SESSION);
		echo "Success";
	}
	function addImgToBd($pdo)
	{
		global $author_id;
		global $src_img;
		global $log;
		$lol = $_SESSION['login_user']['login'];
		$sql = "INSERT INTO `images` (id_images, id_gallery, path_images, text_images) VALUES ('61', '61', 'gallery', '" . $log . "')";
		$pdo->exec($sql);
	}
?>

