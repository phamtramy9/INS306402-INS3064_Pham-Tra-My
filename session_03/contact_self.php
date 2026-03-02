<?php
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Giả sử dữ liệu hợp lệ
    $submitted = true;
}
?>

<?php if ($submitted): ?>
    <h2>Thank You!</h2>
    <p>Tin nhắn của bạn đã được gửi đi thành công.</p>
    <a href="contact_self.php">Gửi tin nhắn khác</a>
<?php else: ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Tên" required><br>
        <textarea name="msg" placeholder="Nội dung"></textarea><br>
        <button type="submit">Gửi</button>
    </form>
<?php endif; ?>