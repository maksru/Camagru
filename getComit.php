<?php
	require_once "config/connect_db.php";
	session_start();
	
	if (!empty($_POST) && isset($_POST) != 0)
	{
		$sql = "INSERT INTO `commenst` (id_images, user_name, text_commenst) VALUES ('" . $_GET['id_photo'] . "', '" . $_SESSION['login_user']['login'] . "', '" . $_POST['text'] . "')";
		$pdo->exec($sql);
	}
	header("Location: get_foto_gallery.php?id=" . $_GET['id_photo'] . "&path=" . $_GET['path_photo'] . "&user=" . $_GET['user_photo']);
?>