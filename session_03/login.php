<?php
session_start();
if (!isset($_SESSION['attempts'])) $_SESSION['attempts'] = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user === 'admin' && $pass === '123456') {
        echo "Login Successful";
        $_SESSION['attempts'] = 0; // Reset on success
    } else {
        $_SESSION['attempts']++;
        echo "Invalid Credentials. Failed Attempts: " . $_SESSION['attempts'];
    }
}
?>
<form method="POST">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <button type="submit">Login</button>
</form>