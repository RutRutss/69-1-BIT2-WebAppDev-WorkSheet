<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<style>
body {
    font-family: Arial;
    background: #eef2f5;
}
.container {
    width: 500px;
    margin: 100px auto;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
h2 { margin-bottom: 20px; }
a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 15px;
    background: #dc3545;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
}
a:hover { background: #a71d2a; }
</style>
</head>
<body>

<div class="container">
    <h2>Welcome <?php echo htmlspecialchars($_SESSION['fname']); ?></h2>
    <p>You are logged in</p>

    <a href="logout.php">Logout</a>
</div>

</body>
</html>