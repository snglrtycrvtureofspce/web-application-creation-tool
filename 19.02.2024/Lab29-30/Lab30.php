<!DOCTYPE html>
<html>

<head>
    <title>Лабораторная работа №30</title>
</head>

<body>
    <?php
    $email = $_POST['email'];
    $from = "asp1rantzenevich@gmail.com";
    $to = $email;
    $subject = 'Лабораторная работа №29';
    $message = 'Тестовое сообщение!';
    $headers = ["From: $from"];

    if (mail($to, $subject, $message, implode("\n", $headers))) {
        echo '<div class="success-message">Письмо успешно отправлено.</div>';
    } else {
        echo '<div class="error-message">Ошибка при отправке письма.</div>';
    }
    ?>
    <form method="POST">
        <div class="banner">
            <h1>Введите e-mail</h1>
        </div>
        <div class="item">
            <label for="email">E-mail<span>*</span></label>
            <input type="email" id="email" name="email" placeholder="example@example.com" required>
        </div>
        <div class="btn-block">
            <button type="submit" href="/">Отправить</button>
        </div>
    </form>
</body>