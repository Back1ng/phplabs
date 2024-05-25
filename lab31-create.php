<?php

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = new mysqli($host, $user, $password, $db_name);

$link->query('SET NAMES utf8');

//$query = 'DELETE FROM workers WHERE id = ' . $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];
$query = 'INSERT INTO workers(name, age, salary) VALUES(?, :age, :salary)';

$stmt = $link->prepare('INSERT INTO workers(`name`, `age`, `salary`) VALUES(?, ?, ?)');

$stmt->bind_param('sss', $name, $age, $salary);

$stmt->execute();

//$result = mysqli_query($link, $query) or die(mysqli_error($link));

header('Location: /lab31.php');