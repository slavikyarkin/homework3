<?php
session_start();
require_once('user.php');
if (!$_SESSION['login'])
    header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home-inform</title>
</head>
<body>
<a href="information.php">Моя страница</a>
<a href="edit.php">Редактировать</a>
<a href="page.php">Что такое PHP?</a>
<h1>Добро пожаловать!</h1>
<p>Вы вошли под логином: <?php echo $_SESSION['login']?></p>
<p>Имя: <?php echo $admin->name?></p>
<p>Фамилия: <?php echo $admin->surname?></p>
<a href="destroy-session.php">Выйти</a>
</body>
</html>
