<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
?>
<form action="final.php" method="POST">
    <h3>Step 2: Profile Info</h3>
    <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
    <input type="hidden" name="password" value="<?php echo htmlspecialchars($password); ?>">
    
    <input type="text" name="bio" placeholder="Bio"><br>
    <input type="text" name="location" placeholder="Location"><br>
    <button type="submit">Finish</button>
</form>