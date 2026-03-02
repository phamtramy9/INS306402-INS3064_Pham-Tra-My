<?php
$result = "";
if (isset($_GET['num1'], $_GET['num2'], $_GET['op'])) {
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];
    $op = $_GET['op'];

    if (is_numeric($n1) && is_numeric($n2)) {
        if ($op == '/' && $n2 == 0) {
            $result = "Error: Division by zero.";
        } else {
            // Basic logic: You could use a switch statement here
            $calc = ($op == '+') ? $n1 + $n2 : (($op == '-') ? $n1 - $n2 : $n1 * $n2); 
            if($op == '/') $calc = $n1 / $n2;
            
            $result = "$n1 $op $n2 = $calc";
        }
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>

<form>
    <input type="number" name="num1">
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2">
    <button type="submit">Calculate</button>
</form>
<p><?php echo $result; ?></p>