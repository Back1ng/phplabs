<?php session_start();  ?>

<h2>Главная страница</h2>

<?php

if (isset($_SESSION['logged_in'])) {
    echo "Вы успешно авторизовались!";
    unset($_SESSION['logged_in']);
} else {
    echo '<a href="auth.php">Авторизоваться</a>';
}