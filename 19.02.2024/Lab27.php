<?php
session_name("MySession");
session_start();

// Задание 3
$_SESSION['a'] = 42;

// Задание 4
setcookie('user', 'John Doe', time() + 3600, '/');

// Задание 5
$_SESSION['a'] = 42;
$_SESSION['b'] = 'Hello';
$_SESSION['c'] = true;

setcookie('a_cookie', $_SESSION['a'], time() + 3600, '/');
setcookie('b_cookie', $_SESSION['b'], time() + 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №27</title>
</head>

<body>
    <!-- Задание 3 -->
    <p><?php echo "Переменная 'a' установлена в сессии."; ?></p>

    <!-- Задание 4 -->
    <p><?php echo "Установлен cookie 'user'."; ?></p>

    <!-- Задание 5 -->
    <p><?php echo "Переменные 'a', 'b', 'c' устанавливаются в сессии, а 'a', 'b' - в cookies."; ?></p>

    <!-- Задание 3 -->
    <p><?php echo isset($_SESSION['a']) ? "Переменная 'a' из сессии: {$_SESSION['a']}" : "Переменная 'a' не найдена в сессии."; ?></p>

    <!-- Задание 4 -->
    <p><?php echo isset($_COOKIE['user']) ? "Значение cookie 'user': {$_COOKIE['user']}" : "Cookie 'user' не установлен."; ?></p>

    <!-- Задание 5 -->
    <p><?php
        $a = isset($_SESSION['a']) ? $_SESSION['a'] : "N/A";
        $b = isset($_SESSION['b']) ? $_SESSION['b'] : "N/A";
        $c = isset($_SESSION['c']) ? $_SESSION['c'] : "N/A";
        echo "Переменные 'a', 'b', 'c' из сессии: $a, $b, $c";
        ?></p>

    <p><?php
        $a_cookie = isset($_COOKIE['a_cookie']) ? $_COOKIE['a_cookie'] : "N/A";
        $b_cookie = isset($_COOKIE['b_cookie']) ? $_COOKIE['b_cookie'] : "N/A";
        echo "Переменные 'a', 'b' из файлов cookie: $a_cookie, $b_cookie";
        ?></p>

</body>

</html>