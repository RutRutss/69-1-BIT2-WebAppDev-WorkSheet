<?php
include "../database/connect.php";

$id = $_POST['id'];
$student_id = $_POST['student_id'];
$subject = $_POST['subject'];

$sql = "UPDATE registers 
        SET student_id='$student_id', subject='$subject' 
        WHERE register_id=$id";

mysqli_query($conn, $sql);

header("Location: ../register.php");