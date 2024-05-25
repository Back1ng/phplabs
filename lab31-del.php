<?php

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, 'SET NAMES utf8');

$query = 'DELETE FROM workers WHERE id = ' . $_GET['id'];
//$query = 'SELECT * FROM workers';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

header('Location: /lab31.php');