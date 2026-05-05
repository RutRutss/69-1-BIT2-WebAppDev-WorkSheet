<?php include "database/connect.php"; ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ทะเบียนเรียน</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 10px;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
        }

        th {
            background: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
        }

        .btn-add {
            background: #4CAF50;
        }

        .btn-edit {
            background: #2196F3;
        }

        .btn-delete {
            background: #f44336;
        }
    </style>
</head>

<body>
    <div class="container">

        <h2>ทะเบียนเรียน</h2>

        <a href="add_register.php" class="btn btn-add">+ เพิ่มข้อมูล</a>

        <table>
            <tr>
                <th>รหัสทะเบียน</th>
                <th>นักเรียน</th>
                <th>วิชา</th>
                <th>จัดการ</th>
            </tr>

            <?php
            $sql = "SELECT r.*, s.name 
                    FROM registers r
                    JOIN students s ON r.student_id = s.student_id";

            $result = mysqli_query($conn, $sql);

            foreach ($result as $row) {
            ?>
                <tr>
                    <td><?= $row['register_id'] ?></td>

                    <td><?= $row['name'] ?></td>

                    <td><?= $row['subject'] ?></td>

                    <td>
                        <a href="edit_register.php?id=<?= $row['register_id'] ?>" class="btn btn-edit">แก้ไข</a>
                        <a href="delete_register.php?id=<?= $row['register_id'] ?>"
                            class="btn btn-delete">
                            ลบ
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
</body>

</html>