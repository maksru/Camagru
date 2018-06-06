<?php
require_once "config/connect_db.php";
session_start();
$login = $_GET['id'];
$password = $_GET['hash'];
$accounts = "SELECT * FROM `users` WHERE login = '" . $login . "'";
$data = $pdo->query($accounts);
$rezult = $data->fetch();
if ($rezult['login'] == $login && $rezult['password'] == $password)
{
    try
    {
        $sql = "UPDATE `users` SET confirmation = '1' WHERE login = '" . $_GET['id'] . "'";
        $pdo->exec($sql);

        header("refresh:3;url=login.php");
        return ;
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    } 

    $pdo = null;
}   
header("refresh:3;register.php");
return ;
?>