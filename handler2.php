<?php
session_start();
require_once('user.php');

if (isset($_POST['name']) && (isset($_POST['surname']))) {
    $admin->name = $_POST['name'];
    $admin->surname= $_POST['surname'];
}

header('Location: information.php');