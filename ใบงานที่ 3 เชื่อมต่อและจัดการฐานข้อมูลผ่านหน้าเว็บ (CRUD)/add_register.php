<?php include "database/connect.php"; ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>เพิ่มข้อมูล</title>

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

        input,
        select {
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

        .btn-save {
            background: #4CAF50;
        }

        .btn-save:hover {
            background: #45a049;
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

            <h2>เพิ่มทะเบียนเรียน</h2>

            <form action="controllers/insert_register.php" method="post">

                นักเรียน
                <select name="student_id" required>
                    <option value="">-- เลือกนักเรียน --</option>

                    <?php
                    $sql = "SELECT * FROM students";
                    $result = mysqli_query($conn, $sql);

                    foreach ($result as $student) {
                    ?>
                        <option value="<?= $student['student_id'] ?>">
                            <?= $student['student_id'] ?> - <?= $student['name'] ?>
                        </option>
                    <?php } ?>
                </select>

                วิชา
                <input type="text" name="subject" required>

                <br><br>

                <button class="btn btn-save">บันทึก</button>
                <a href="register.php" class="btn-back">กลับ</a>

            </form>

        </div>
    </div>

</body>

</html>