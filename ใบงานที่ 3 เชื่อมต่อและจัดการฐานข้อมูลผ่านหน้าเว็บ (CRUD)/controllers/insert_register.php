<?php
include "../database/connect.php";

$student_id = $_POST['student_id'];
$subject = $_POST['subject'];

$sql = "INSERT INTO registers (student_id, subject) 
        VALUES ('$student_id', '$subject')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: ../register.php");
    exit();
} else {
    echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
}