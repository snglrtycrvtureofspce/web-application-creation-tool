<?php
session_name("MySession");
session_start();

// Задание 1
if (!isset($_COOKIE['test'])) {
    setcookie('test', '123', time() + 3600, '/');
}

// Задание 2
if (isset($_COOKIE['test'])) {
    setcookie('test', '', time() - 3600, '/');
}

// Задание 3
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}

// Задание 4
$birthdayCookieName = 'user_birthday';

if (isset($_POST['birthday'])) {
    $userBirthday = strtotime($_POST['birthday']);
    setcookie($birthdayCookieName, $userBirthday, time() + 365 * 24 * 3600, '/');
}

$userBirthdayDaysLeft = null;

if (isset($_COOKIE[$birthdayCookieName])) {
    $birthdayTimestamp = $_COOKIE[$birthdayCookieName];
    $currentDate = strtotime(date('Y-m-d'));
    $userBirthdayDaysLeft = ceil(($birthdayTimestamp - $currentDate) / (24 * 3600));

    if (date('md', $currentDate) === date('md', $birthdayTimestamp)) {
        echo "С Днем Рождения!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №28</title>
</head>

<body>
    <!-- Задание 1 -->
    <p><?php echo isset($_COOKIE['test']) ? "Content of 'test' cookie: {$_COOKIE['test']}" : "Cookie 'test' not set."; ?></p>

    <!-- Задание 2 -->
    <p><?php echo "Cookie 'test' deleted."; ?></p>

    <!-- Задание 3 -->
    <p><?php echo "Вы посетили наш сайт {$_SESSION['visits']} раз!"; ?></p>

    <!-- Задание 4 -->
    <form method="POST">
        <label for="birthday">Введите дату рождения (гггг-мм-дд): </label>
        <input type="text" name="birthday" id="birthday" placeholder="ГГГГ-ММ-ДД">
        <input type="submit" value="Отправить">
    </form>

    <!-- Задание 4 -->
    <p><?php echo isset($userBirthdayDaysLeft) ? "До вашего дня рождения осталось $userBirthdayDaysLeft дней." : "Укажите дату рождения."; ?></p>

</body>

</html>