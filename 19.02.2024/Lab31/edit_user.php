<?php
include('connection.php');

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_login = $conn->real_escape_string($_POST['new_login']);

        // Обновление логина пользователя
        $update_query = $conn->query("UPDATE users SET user_login='$new_login' WHERE user_id='$user_id'");
        if ($update_query) {
            echo "Логин пользователя успешно обновлен.";
        } else {
            echo "Ошибка при обновлении логина пользователя: " . $conn->error;
        }
    }

    // Получение текущих данных пользователя
    $user_query = $conn->query("SELECT * FROM users WHERE user_id='$user_id'");
    if ($user_query->num_rows == 1) {
        $user_row = $user_query->fetch_assoc();
?>
        <h2>Редактирование пользователя</h2>
        <form method="POST">
            Новый логин: <input type="text" name="new_login" value="<?php echo $user_row['user_login']; ?>" required><br>
            <input type="submit" value="Сохранить">
        </form>
<?php
    } else {
        echo "Пользователь не найден.";
    }
}
?>