<?php 
include "database/connect.php";

$id = intval($_GET['id']);

// ดึงข้อมูล register เดิม
$sql = "SELECT * FROM registers WHERE register_id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>แก้ไขข้อมูล</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
        }

        .btn-update {
            background: #2196F3;
        }

        .btn-update:hover {
            background: #1e88e5;
        }

        .btn-back {
            background: #9e9e9e;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            color: white;
        }

        .btn-back:hover {
            background: #757575;
        }
    </style>
</head>

<body>

<div class="container">
<div class="card">

<h2>แก้ไขทะเบียนเรียน</h2>

<form action="controllers/update_register.php" method="post">

    <input type="hidden" name="id" value="<?= $data['register_id'] ?>">

    นักเรียน
    <select name="student_id" required>
        <option value="">-- เลือกนักเรียน --</option>

        <?php
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);

        foreach ($result as $student) {
            $selected = ($student['student_id'] == $data['student_id']) ? "selected" : "";
        ?>
            <option value="<?= $student['student_id'] ?>" <?= $selected ?>>
                <?= $student['student_id'] ?> - <?= $student['name'] ?>
            </option>
        <?php } ?>
    </select>

    วิชา
    <input type="text" name="subject" value="<?= $data['subject'] ?>" required>

    <br><br>

    <button class="btn btn-update">อัปเดต</button>
    <a href="register.php" class="btn-back">กลับ</a>

</form>

</div>
</div>

</body>
</html>