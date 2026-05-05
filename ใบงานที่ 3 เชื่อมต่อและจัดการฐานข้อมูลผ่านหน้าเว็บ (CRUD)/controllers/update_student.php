<?php
include "../database/connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "UPDATE students 
        SET name='$name', age='$age', gender='$gender'
        WHERE student_id=$id";

mysqli_query($conn, $sql);

header("Location: ../student.php");
?>