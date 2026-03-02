<?php
$error = "";
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (strlen($_POST['password'] ?? '') < 6) {
        $error = "Password too short (min 6 chars)!";
    } else {
        echo "Success!";
        exit;
    }
}
?>

<form method="POST">
    <p style="color:red;"><?php echo $error; ?></p>
    
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
    
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
    
    <label>Password:</label>
    <input type="password" name="password"><br>
    
    <button type="submit">Register</button>
</form>