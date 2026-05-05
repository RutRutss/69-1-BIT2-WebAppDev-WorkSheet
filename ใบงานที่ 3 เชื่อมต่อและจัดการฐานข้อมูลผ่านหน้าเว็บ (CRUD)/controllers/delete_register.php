<?php
include "../database/connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM registers WHERE register_id=$id";

mysqli_query($conn, $sql);

header("Location: ../register.php");
?>