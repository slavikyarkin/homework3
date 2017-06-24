<?php
session_start();
require_once('user.php');

if (isset($_POST['name']) && (isset($_POST['surname']))) {
    $_SESSION['name']= $_POST['name'];
    $_SESSION['surname']= $_POST['surname'];
}

header('Location: information.php');