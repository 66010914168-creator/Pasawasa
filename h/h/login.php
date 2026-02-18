<?php
session_start();
include('config.php');

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("location: index2.php"); // ถ้าผ่าน ให้ไปหน้า index2.php
    } else {
        echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านผิด!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login เข้าสู่ระบบ</title>
</head>
<body>
    <h2>เข้าสู่ระบบแอดมิน</h2>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit" name="login">เข้าสู่ระบบ</button>
    </form>
</body>
</html>