<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขนักเรียน</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.2s;
        }

        input:focus {
            border-color: #2196F3;
        }

        .btn {
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
            transition: 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-update {
            background: #2196F3;
            color: white;
        }

        .btn-update:hover {
            background: #1e88e5;
        }

        .btn-back {
            background: #9e9e9e;
            color: white;
            margin-left: 5px;
        }

        .btn-back:hover {
            background: #757575;
        }

        .actions {
            margin-top: 15px;
            text-align: right;
        }
    </style>
</head>

<body>

<?php
include "database/connect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE student_id=$id";
$result = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($result);
?>

<div class="container">

    <h2>แก้ไขนักเรียน</h2>

    <div class="card">
        <form action="controllers/update_student.php" method="post">

            <input type="hidden" name="id" value="<?= $id ?>">

            <label>ชื่อ</label>
            <input type="text" name="name" value="<?= $student['name'] ?>" required>

            <label>เพศ</label>
            <input type="text" name="gender" value="<?= $student['gender'] ?>">

            <label>อายุ</label>
            <input type="number" name="age" value="<?= $student['age'] ?>" required>

            <div class="actions">
                <button type="submit" class="btn btn-update">อัปเดต</button>
                <a href="student.php" class="btn btn-back">กลับ</a>
            </div>

        </form>
    </div>

</div>

</body>
</html>