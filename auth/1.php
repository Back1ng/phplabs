<?php session_start();

if (isset($_SESSION['auth'])) {
    ?>

    <a href="logout.php">Выйти</a>

    <h2>Страница 1</h2>
    <p>Вы зашли как <?= $_SESSION['auth']['login'] ?></p>
    <p>Добро пожаловать, авторизованный пользователь!</p>

    <?php
} else {
    ?>

    <h2>Страница 1</h2>
    <p>Для доступа к странице, пожалуйста, <a href="auth.php">авторизуйтесь</a></p>

    <?php
}