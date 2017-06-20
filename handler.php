<?php
session_start();
include 'array.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    if (isset($credentials[$_POST['login']]) && $credentials[$_POST['login']] == $_POST['password']) {
        $_SESSION['login'] = $_POST['login'];
        header('Location: information.php');
    } else {
        header('Location: error.php');
    }
} else {
    header('Location: information.php');
}
