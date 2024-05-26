<?php

session_start();

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, 'SET NAMES utf8');

if (!empty($_POST['password']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['birthday'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];

    $query = "INSERT INTO 
            users(`login`, `password`, `email`, `birthday`) 
            VALUES('$login', '$password', '$email', '$birthday')";

    try {
        $result = mysqli_query($link, $query);
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
        die();
    }

    if ($result) {
        $_SESSION['logged_in'] = true;
        $_SESSION['auth'] = [
            'login' => $login,
        ];
        header("Location: index.php");
    } else {
        echo "Неверно введен логин или пароль";
    }
}
?>

<?php
if (!isset($_SESSION['logged_in'])) {
    ?>
    <h2>Регистрация</h2>
    <form action="" method="post">
        <input name="login" placeholder="Логин">
        <input name="password" type="password" placeholder="password">
        <input name="birthday" type="date" placeholder="2000-04-27">
        <input name="email" type="email" placeholder="example@mail.com">
        <input type="submit" value="Отправить">
    </form>
    <?php
}
?>
