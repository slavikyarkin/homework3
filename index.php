<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework #2</title>
</head>
<body>
<a href="information.php">Моя страница</a>
<a href="edit.php">Редактировать</a>
<a href="page.php">Что такое PHP?</a>
<h1>Войдите в систему</h1>
<form method="POST" action="handler.php">
    <p><input type="text" name="login" placeholder="Логин" ></p>
    <p><input type="password" name="password" placeholder="Пароль"></p>
    <p> <button type="submit">Вход</button></p>
</form>
</body>
</html>
