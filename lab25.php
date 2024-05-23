<?php

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, 'SET NAMES utf8');

$limitQueries = [
    'SELECT * FROM workers LIMIT 6',
    'SELECT * FROM workers LIMIT 2,3',
];

$orderByQueries = [
    'SELECT * FROM workers ORDER BY salary',
    'SELECT * FROM workers ORDER BY salary DESC',
    'SELECT * FROM workers LIMIT 2,4 ORDER BY age',
];

$countQueries = [
    'SELECT COUNT(*) FROM workers',
    'SELECT COUNT(*) FROM workers WHERE salary >= 300',
];

$likeQueries = [
    'SELECT * FROM pages WHERE author LIKE "%ов"',
    'SELECT * FROM pages WHERE article LIKE "%элемент%"',
    'SELECT * FROM workers WHERE age LIKE "3_"',
    'SELECT * FROM workers WHERE name LIKE "%я"',
];

//foreach ($insertQueries as $query) {
//    $result = mysqli_query($link, $query) or die(mysqli_error($link));
//
//    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//
//    var_dump($data);
//}

