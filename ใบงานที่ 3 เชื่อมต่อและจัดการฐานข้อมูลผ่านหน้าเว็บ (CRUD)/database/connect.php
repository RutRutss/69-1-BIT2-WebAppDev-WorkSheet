<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");

if (!$conn) {
    die("เชื่อมต่อไม่สำเร็จ: " . mysqli_connect_error());
}