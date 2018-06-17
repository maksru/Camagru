<?php
	require_once "config/connect_db.php";
	session_start();
	$img_del = $_POST['img_id'];
	if (isset($_POST) && !empty($_POST)) 
	{
		$img_pas = "SELECT `path_images` FROM `images` WHERE id_images='".$img_del."' ";
		$row = $pdo->query($img_pas);
		$del_pas = $row->fetch();
		unlink($del_pas["path_images"]);
		$sql = "DELETE FROM `images` WHERE id_images='".$img_del."'";
		$pdo->query($sql);
		echo "Success";
	}
?>

