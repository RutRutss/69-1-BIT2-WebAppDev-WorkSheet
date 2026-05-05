<?php
include "../database/connect.php";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];

$sql = "INSERT INTO students(name, gender, age)
        VALUES('$name', '$gender', '$age')";

mysqli_query($conn, $sql);

header("Location: ../student.php");