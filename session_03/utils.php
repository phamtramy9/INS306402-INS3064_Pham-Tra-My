<?php
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateLength($str, $min, $max) {
    $len = strlen($str);
    return ($len >= $min && $len <= $max);
}

function validatePassword($pass) {
    // Kiểm tra độ dài ít nhất 8 ký tự và có ít nhất 1 ký tự đặc biệt
    return strlen($pass) >= 8 && preg_match('/[\W]/', $pass);
}
?>