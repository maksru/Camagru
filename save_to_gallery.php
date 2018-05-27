<?php
	require_once "config/connect_db.php";

	if (isset($_POST) && !empty($_POST)) 
	{
		$author_id = $_POST["auth_id"];
		$src_img = $_POST["img_src"];
		$user_log = $_POST["log_user"];

		// Поиск по регулярному выражению.
		// $rawImgSrc = preg_replace('/^data:image\/\w+;base64,/i', '', $_POST['img_src']);

		$patch = "gallery/" . time() . "-" . $user_log  . ".png";
		$photo = str_replace("data:image/png;base64,", "", $src_img);
		$photo = str_replace(' ', '+', $photo);
		$decodedImg = base64_decode($photo);
		file_put_contents($patch, $decodedImg);
		
		// function save_foto($img)
		// {
		// 	$sql = "INSERT INTO `images` (`id_gallery`, `path_images`) VALUES ('" . $_POST["auth_id"] . "','" . $_POST["img_src"] . "');";
		// 	$pdo->exec($sql);
		// 	$pdo = null;
		// }


		echo "Success";
	}
?>