<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ผลลัพธ์</title>
</head>

<body>

    <h2>ผลลัพธ์การคำนวณ</h2>

    <?php
    $base = $_POST['base'];
    $height = $_POST['height'];

    $area = 0.5 * $base * $height;

    echo "ฐาน = $base <br>";
    echo "สูง = $height <br>";
    echo "<hr>";
    echo "พื้นที่สามเหลี่ยม = $area";
    ?>

    <br><br>
    <a href="index.php"> กลับไปคำนวณใหม่</a>

</body>

</html>