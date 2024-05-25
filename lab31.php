<style>
    table {
        border-collapse: collapse;
    }
    table td, table th {
        border: 1px solid black;
    }
    table tr:first-child th {
        border-top: 0;
    }
    table tr:last-child td {
        border-bottom: 0;
    }
    table tr td:first-child,
    table tr th:first-child {
        border-left: 0;
    }
    table tr td:last-child,
    table tr th:last-child {
        border-right: 0;
    }
</style>

<form method="post" action="lab31-create.php">
    <label for="name">Имя сотрудника:</label>
    <input type="text" name="name" placeholder="Иван">
    <br>
    <label for="age">Возраст сотрудника:</label>
    <input type="text" name="age" placeholder="23">
    <br>
    <label for="salary">Зарплата сотрудника:</label>
    <input type="text" name="salary" placeholder="400">
    <input type="submit" value="Сохранить">
</form>
<?php

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, 'SET NAMES utf8');

$query = 'SELECT * FROM workers';

$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

?>

<table>
    <thead>
    <td>id</td>
    <td>name</td>
    <td>age</td>
    <td>salary</td>
    </thead>

    <?php
        /** @var array{id: string, name: string, age: string, salary: string} $row */
    foreach ($data as $row) {
            echo "<tr>";

            foreach ($row as $column) {
                echo "<td style='padding: 20px;'>" . $column . "</td>";
            }

            echo "<td><a href='lab31-del.php?id=".$row['id']."'>Удалить</a></td>";

            echo "<td><a href='lab31-edit-form.php?id=".$row['id']."'>Редактировать</a></td>";

            echo "</tr>";
        }
    ?>
</table>
