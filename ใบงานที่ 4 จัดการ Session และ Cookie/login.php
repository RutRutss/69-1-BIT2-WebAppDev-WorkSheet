<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$remember_username = $_COOKIE['remember_username'] ?? "";
$error = $_GET['error'] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body {
    font-family: Arial;
    background: #f4f6f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.card {
    background: #fff;
    padding: 30px;
    width: 320px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
h2 { text-align: center; margin-bottom: 20px; }
input[type=text], input[type=password] {
    width: 100%;
    padding: 10px;
    margin-top: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button {
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
}
button:hover { background: #0056b3; }
.error {
    color: red;
    margin-bottom: 10px;
    text-align: center;
}
.remember { margin-bottom: 10px; }
</style>
</head>
<body>

<div class="card">
    <h2>Login</h2>

    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="check_login.php">
        <label>Username</label>
        <input type="text" name="username" required value="<?php echo htmlspecialchars($remember_username); ?>">

        <label>Password</label>
        <input type="password" name="password" required>

        <div class="remember">
            <input type="checkbox" name="remember"> Remember me
        </div>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>