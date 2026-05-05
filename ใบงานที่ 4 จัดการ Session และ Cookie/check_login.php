<?php
session_start();
require 'db.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$remember = isset($_POST['remember']);

// ป้องกัน SQL Injection เบื้องต้น
$username = mysqli_real_escape_string($conn, $username);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if ($user = mysqli_fetch_assoc($result)) {

    if ($password === $user['password']) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['fname'] = $user['fname'];

        if ($remember) {
            setcookie("remember_username", $username, time() + (86400 * 30), "/");
        } else {
            setcookie("remember_username", "", time() - 3600, "/");
        }

        header("Location: index.php");
        exit();
    }
}

header("Location: login.php?error=Invalid username or password");
exit();