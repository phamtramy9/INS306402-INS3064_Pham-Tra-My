<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if (empty($name) || empty($email)) {
        echo "<h3>Missing Data</h3>";
    } else {
        echo "<ul>";
        foreach ($_POST as $key => $value) {
            echo "<li><strong>" . ucfirst($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
        }
        echo "</ul>";
    }
}
?>