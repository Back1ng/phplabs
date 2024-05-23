<?php

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, 'SET NAMES utf8');

$selectQueries = [
    'SELECT * FROM workers WHERE id = 3',
    'SELECT * FROM workers WHERE salary = 1000',
    'SELECT * FROM workers WHERE age = 23',
    'SELECT * FROM workers WHERE salary > 400',
    'SELECT * FROM workers WHERE salary >= 500',
    'SELECT * FROM workers WHERE salary <> 500',
    'SELECT * FROM workers WHERE salary <= 900',
    'SELECT salary, age FROM workers WHERE name = "Вася"',
];

$orAndQueries = [
    'SELECT * FROM workers WHERE age > 25 AND age <= 28',
    'SELECT * FROM workers WHERE name = "Петя"',
    'SELECT * FROM workers WHERE name = "Петя" OR name = "Вася"',
    'SELECT * FROM workers WHERE name <> "Петя"',
    'SELECT * FROM workers WHERE age = 27 OR salary = 1000',
    'SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000',
    'SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR (salary >= 400 AND salary <= 1000)',
    'SELECT * FROM workers WHERE age = 27 OR salary <> 400',
];

$insertQueries = [
//    'INSERT INTO workers(name, age, salary) VALUES("Никита", 26, 300)',
//    'INSERT INTO workers(name, salary) VALUES("Светлана", 1200)',
    'INSERT INTO workers(name, age, salary) VALUES("Ярослава", 30, 1200), ("Петр", 31, 1000)',
];

$deleteQueries = [
    'DELETE FROM workers WHERE id = 7',
    'DELETE FROM workers WHERE name = "Коля"',
    'DELETE FROM workers WHERE age = 23',
];

$updateQueries = [
    'UPDATE workers SET salary = 200 WHERE name="Вася"',
    'UPDATE workers SET age = 35 WHERE id = 4',
    'UPDATE workers SET salary = 700 WHERE salary = 500',
    'UPDATE workers SET age = 23 WHERE id > 2 AND id <= 5',
    'UPDATE workers SET name = "Женя", salary = 900 WHERE name = "Вася"',
];

//foreach ($insertQueries as $query) {
//    $result = mysqli_query($link, $query) or die(mysqli_error($link));
//
//    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//
//    var_dump($data);
//}

