<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "lab29";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_ip = $_SERVER['REMOTE_ADDR'];
// Регистрация нового пользователя
if (isset($_POST['submit_register'])) {
    $err = array();

    $login = $conn->real_escape_string($_POST['login']);
    if (!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }
    if (strlen($login) < 3 || strlen($login) > 30) {
        $err[] = "Логин должен быть не менее 3 символов и не более 30";
    }

    $query = $conn->query("SELECT COUNT(user_id) as count FROM users WHERE user_login='$login'");
    $row = $query->fetch_assoc();
    if ($row['count'] > 0) {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    if (empty($err)) {
        $password = md5(md5(trim($_POST['password'])));
        $hash = md5(rand(0, 1000));
        $stmt = $conn->prepare("INSERT INTO users (user_login, user_password, user_hash) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $login, $password, $hash);
        if ($stmt->execute()) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Ошибка при выполнении запроса: " . $conn->error;
        }
    } else {
        echo "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach ($err as $error) {
            echo $error . "<br>";
        }
    }
}

// Вход пользователя
if (isset($_POST['submit_login'])) {
    $login = $conn->real_escape_string($_POST['login']);
    $password = md5(md5(trim($_POST['password'])));

    $query = $conn->query("SELECT * FROM users WHERE user_login='$login' AND user_password='$password'");
    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
        $hash = md5(rand(0, 1000));
        $user_id = $row['user_id'];
        $conn->query("UPDATE users SET user_hash='$hash' WHERE user_id='$user_id'");
        setcookie("user_id", $user_id, time() + 3600);
        setcookie("user_hash", $hash, time() + 3600);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Вы ввели неправильный логин/пароль";
    }
}

if (isset($_COOKIE['user_id']) && isset($_COOKIE['user_hash'])) {
    $user_id = $_COOKIE['user_id'];
    $user_hash = $_COOKIE['user_hash'];
    $query = $conn->query("SELECT * FROM users WHERE user_id='$user_id' AND user_hash='$user_hash'");
    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
        echo "Привет, " . $row['user_login'] . ". Вы авторизованы!";
    } else {
        echo "Сессия устарела, войдите снова";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Лабораторная работа №29</title>
</head>

<body>
    <h2>Регистрация</h2>
    <form method="POST">
        Логин: <input type="text" name="login" required><br>
        Пароль: <input type="password" name="password" required><br>
        <input type="submit" name="submit_register" value="Зарегистрироваться">
    </form>

    <h2>Вход</h2>
    <form method="POST">
        Логин: <input type="text" name="login" required><br>
        Пароль: <input type="password" name="password" required><br>
        <input type="submit" name="submit_login" value="Войти">
    </form>
</body>

</html>

<?php
$conn->close();
?>