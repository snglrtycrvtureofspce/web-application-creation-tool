<?php
session_name("MySession");
session_start();

if (isset($_SESSION['a'])) {
    $a = $_SESSION['a'];
    echo "Variable 'a' from session: $a";
} else {
    echo "Variable 'a' not found in session.";
}
?>