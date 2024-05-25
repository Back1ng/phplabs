<?php

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = new mysqli($host, $user, $password, $db_name);

$link->query('SET NAMES utf8');

//$query = 'DELETE FROM workers WHERE id = ' . $_GET['id'];
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$stmt = $link->prepare('UPDATE workers SET name=?, age=?, salary=? WHERE id=?');

$stmt->bind_param('sssi', $name, $age, $salary, $id);

$stmt->execute();

//$result = mysqli_query($link, $query) or die(mysqli_error($link));

header('Location: /lab31.php');