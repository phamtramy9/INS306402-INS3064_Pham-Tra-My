<?php
$query = $_GET['q'] ?? '';
?>

<form action="search.php" method="GET">
    <input type="text" name="q" value="<?php echo htmlspecialchars($query); ?>" placeholder="Tìm kiếm...">
    <button type="submit">Search</button>
</form>

<?php if ($query): ?>
    <p>Kết quả tìm kiếm cho: <strong><?php echo htmlspecialchars($query); ?></strong></p>
<?php endif; ?>