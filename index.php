<?php
	// session_start();
	// if ($_SESSION['login_user'] != NULL && $_SESSION['login_user'] != "")
 //    	header('Location: game.php');
	// else
 //    	header('Location: login.php');

//FRONT CONTROLLER

//1. Общие настройки.
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов сиситемы.
define('ROOT', dirname(__FILE__));
echo ROOT;
require_once(ROOT . '/components/Router.Class.php');

//3. Установка и соединение с БД.

//4. Вызов Router
$router = new Router();
$router->run();

?>