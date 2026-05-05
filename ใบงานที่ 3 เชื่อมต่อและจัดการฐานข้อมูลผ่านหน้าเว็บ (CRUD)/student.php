<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักเรียน</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
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

        /* ปุ่ม */
        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            margin: 2px;
            display: inline-block;
            transition: 0.2s;
        }

        .btn-add {
            background: #4CAF50;
            color: white;
        }

        .btn-add:hover {
            background: #45a049;
        }

        .btn-edit {
            background: #2196F3;
            color: white;
        }

        .btn-edit:hover {
            background: #1e88e5;
        }

        .btn-delete {
            background: #f44336;
            color: white;
        }

        .btn-delete:hover {
            background: #e53935;
        }

        .top-bar {
            margin-bottom: 15px;
            text-align: right;
        }
    </style>
</head>

<body>

    <?php include "database/connect.php"; ?>

    <div class="container">

        <h2>ข้อมูลนักเรียน</h2>

        <div class="top-bar">
            <a href="add_student_form.php" class="btn btn-add">+ เพิ่มนักเรียนใหม่</a>
            <a href="index.php" class="btn btn-edit">กลับหน้าหลัก</a>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>ชื่อ</th>
                <th>เพศ</th>
                <th>อายุ</th>
                <th>จัดการ</th>
            </tr>

            <?php
            $sql = "SELECT * FROM students";
            $result = mysqli_query($conn, $sql);

            foreach ($result as $student) {
            ?>
                <tr>
                    <td><?= $student['student_id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['gender'] ?></td>
                    <td><?= $student['age'] ?></td>
                    <td>
                        <a href="edit_student_form.php?id=<?= $student['student_id'] ?>" class="btn btn-edit">แก้ไข</a>
                        <a href="controllers/delete_student.php?id=<?= $student['student_id'] ?>"
                            class="btn btn-delete">
                            ลบ
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>

    </div>

</body>

</html>