<?php

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, 'SET NAMES utf8');

$id = $_GET['id'];
$query = 'SELECT * FROM workers WHERE id = ' . $id;
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$data = $data[0];

?>

<form method="post" action="lab31-update.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label for="name">Имя сотрудника:</label>
    <input type="text" name="name" placeholder="Иван" value="<?= $data['name'] ?>">
    <br>
    <label for="age">Возраст сотрудника:</label>
    <input type="text" name="age" placeholder="23" value="<?= $data['age'] ?>">
    <br>
    <label for="salary">Зарплата сотрудника:</label>
    <input type="text" name="salary" placeholder="400" value="<?= $data['salary'] ?>">
    <input type="submit" value="Обновить">
</form>