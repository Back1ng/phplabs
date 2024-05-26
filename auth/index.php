<?php session_start();  ?>

<h2>Главная страница</h2>

<?php

if (isset($_SESSION['auth'])) {
    echo "<a href=\"logout.php\">Выйти</a><br>";
    echo "Вы успешно авторизовались!";
    unset($_SESSION['logged_in']);
} else {
    echo '<a href="auth.php">Авторизоваться</a>';
}

?>

<a href="1.php">Страница 1</a>
<a href="2.php">Страница 2</a>
<a href="3.php">Страница 3</a>
