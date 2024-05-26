<?php

session_start();

$host = 'db';
$user = 'root';
$password = 'password';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, 'SET NAMES utf8');

if (!empty($_POST['password']) && !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = mysqli_query($link, $query);

    $user = mysqli_fetch_assoc($result);

    if (!empty($user)) {
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
    } else {
        echo "Неверно введен логин или пароль";
    }
}
?>

<?php
if (!isset($_SESSION['logged_in'])) {
    ?>
    <form action="" method="post">
        <input name="login" placeholder="Логин">
        <input name="password" type="password" placeholder="password">
        <input type="submit" value="Отправить">
    </form>
    <?php
}
?>
