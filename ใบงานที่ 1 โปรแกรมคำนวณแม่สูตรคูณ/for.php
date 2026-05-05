<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>แม่สูตรคูณ (for loop)</title>
    <style>
        body { font-family: Arial; text-align: center; }
        table { margin: auto; border-collapse: collapse; }
        td, th { border: 1px solid black; padding: 8px; }
    </style>
</head>
<body>

<h2>โปรแกรมคำนวณแม่สูตรคูณ (For Loop)</h2>

<a href="for.php">For Loop</a> |
<a href="while.php">While Loop</a>

<hr>

<form method="get">
    กรอกแม่สูตรคูณ :
    <input type="number" name="num" required>
    <input type="submit" value="คำนวณ">
</form>

<?php
if (isset($_GET['num'])) {
    $num = $_GET['num'];

    echo "<h3>แม่สูตรคูณแม่ $num</h3>";
    echo "<table>";
    echo "<tr><th>สูตร</th><th>ผลลัพธ์</th></tr>";

    for ($i = 1; $i <= 12; $i++) {
        $result = $num * $i;
        echo "<tr><td>$num x $i</td><td>$result</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>