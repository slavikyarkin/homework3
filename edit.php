<?php
session_start();
include 'array.php';
if (!$_SESSION['login'])
    header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<a href="information.php">Моя страница</a>
<a href="edit.php">Редактировать</a>
<a href="page.php">Что такое PHP?</a>

<h1>Представься!</h1>
<p>Вы вошли под логином:  <?php echo $_SESSION['login']?></p>

<form method="POST" action="handler2.php">
    <label>Заполните поля ввода:</label>
    <p><input type="text" name="name" placeholder="Имя"></p>
    <p><input type="text" name="surname" placeholder="Фамилия"></p>
    <p> <button type="submit">Отправить</button></p>
</form>
<a href="destroy-session.php">Выйти</a>

</body>
</html>