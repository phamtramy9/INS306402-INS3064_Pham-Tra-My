<?php
include 'utils.php';

$testEmail = "test@domain.com";
$testPass = "Abc@12345";

echo "Email hợp lệ: " . (validateEmail($testEmail) ? "Pass" : "Fail") . "<br>";
echo "Password hợp lệ: " . (validatePassword($testPass) ? "Pass" : "Fail") . "<br>";
?>