<?php
include('connection.php');

if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    
    // Удаление пользователя
    $delete_query = $conn->query("DELETE FROM users WHERE user_id='$user_id'");
    if ($delete_query) {
        echo "Пользователь успешно удален.";
    } else {
        echo "Ошибка при удалении пользователя: " . $conn->error;
    }
}
?>