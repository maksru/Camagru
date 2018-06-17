<?php  
	require_once "config/connect_db.php";
	session_start();
	
	$post_user = $_POST['post_user'];
	$id_post = $_POST['id_post'];
	if ($_POST['like'])
	{
		$sql = "SELECT * FROM `likes` WHERE user_id = '$post_user' AND post_id = '$id_post'";
		$data = $pdo->query($sql);
		$rezult = $data->fetch();
		if ($rezult == false)
		{
			$sql = "INSERT INTO `likes` (user_id, post_id) VALUES ('" . $post_user. "', '" . $id_post . "')";
			$pdo->exec($sql);
			header("Location: get_foto_gallery.php?id=" . $_GET['id_photo'] . "&path=" . $_GET['path_photo'] . "&user=" . $_GET['user_photo']);
		}
		else
			header("Location: get_foto_gallery.php?id=" . $_GET['id_photo'] . "&path=" . $_GET['path_photo'] . "&user=" . $_GET['user_photo']);
	}

	if ($_POST['dislike'])
	{
		$sql = "SELECT * FROM `likes` WHERE user_id = '$post_user' AND post_id = '$id_post'";
		$data = $pdo->query($sql);
		$rezult = $data->fetch();
		if ($rezult == true)
		{
			$sql = "DELETE FROM `likes` WHERE user_id = '$post_user' AND post_id = '$id_post'";
			$data = $pdo->query($sql);
			header("Location: get_foto_gallery.php?id=" . $_GET['id_photo'] . "&path=" . $_GET['path_photo'] . "&user=" . $_GET['user_photo']);
		}
		else
			header("Location: get_foto_gallery.php?id=" . $_GET['id_photo'] . "&path=" . $_GET['path_photo'] . "&user=" . $_GET['user_photo']);
	}
?>