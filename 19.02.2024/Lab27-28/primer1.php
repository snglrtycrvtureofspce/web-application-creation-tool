<?php
session_name("MySession");
session_start();

$_SESSION['a'] = 42;

echo "Variable 'a' set in session.";
?>