<?php
include_once "connect_db.php";
try {
	$pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Структура таблицы `users`
	$sql = "CREATE TABLE IF NOT EXISTS `users` (
			`id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`full_name` varchar(128) NOT NULL,
			`login` varchar(60) NOT NULL,
			`password` varchar(128) NOT NULL,
			`email` varchar(128) NOT NULL,
			`confirmation` int(6) DEFAULT 0

			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	// Структура таблицы `images`
	$sql .= "CREATE TABLE IF NOT EXISTS `images` (
			`id_images` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`id_gallery` int(11) NOT NULL,
			`path_images` varchar(255) NOT NULL,
			`text_images` text NOT NULL

			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	// Структура таблицы `commenst`
	$sql .= "CREATE TABLE IF NOT EXISTS `commenst` (
			`id_commenst` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`id_images` int(11) NOT NULL DEFAULT '0',
			`user_name` varchar(255) NOT NULL,
			`text_commenst` text NOT NULL

			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
			
	$sql .= "CREATE TABLE IF NOT EXISTS `likes` (
			`id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`user_id` varchar(255) NOT NULL,
			`post_id` int(11) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	// Admin1234
	$sql .= "INSERT INTO `users` (`id`, `full_name`, `login`, `password`, `email`, `confirmation`) VALUES
		(62, 'Maxim', 'admin', '63f8e99f39ef63632dc2c2188152839e7c05b897fdca12eff22fed0ee6829bb6d3d53b86439334998f71aabe1bf2cb13f5c2d0676939fbcfe60012750fce7506', 'maks_ru@i.ua', 1);";
	$pdo->exec($sql);
	header('Location: ../login.php');
} catch (PDOException $e) {
	echo 'Error: ' . $e->getMessage();
}  
?>