<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>คำนวณพื้นที่สามเหลี่ยม</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        input {
            margin: 10px;
            padding: 8px;
            width: 90%;
        }
    </style>
</head>

<body>

    <h2>โปรแกรมคำนวณพื้นที่สามเหลี่ยม</h2>

    <form action="result.php" method="post">
        ฐาน:
        <input type="number" name="base" required>

        สูง:
        <input type="number" name="height" required>

        <input type="submit" value="คำนวณ">
    </form>

</body>

</html>