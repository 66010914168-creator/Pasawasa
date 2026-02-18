<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login - Minimalist</title>
<style>
    body {
        margin: 0; background: #f0f2f5;
        height: 100vh; display: flex; justify-content: center; align-items: center;
        font-family: 'Kanit', sans-serif;
    }
    .login-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        padding: 50px; border-radius: 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        width: 350px; border: 1px solid #fff;
    }
    h2 { color: #333; text-align: center; font-weight: 500; margin-bottom: 30px; letter-spacing: 1px; }
    input {
        width: 100%; padding: 15px; margin-bottom: 20px;
        background: #fff; border: 1px solid #e1e4e8;
        border-radius: 15px; color: #333; outline: none; box-sizing: border-box;
    }
    input:focus { border-color: #007aff; }
    button {
        width: 100%; padding: 15px; border: none; border-radius: 15px;
        background: #007aff; color: white; font-weight: bold; cursor: pointer;
        transition: 0.3s; box-shadow: 0 10px 20px rgba(0, 122, 255, 0.2);
    }
    button:hover { background: #005bb5; transform: translateY(-2px); }
</style>
</head>
<body>
<div class="login-card">
    <h2>ADMIN LOGIN</h2>
    <form method="post" action="">
        <input type="text" name="auser" placeholder="Username" required>
        <input type="password" name="apwd" placeholder="Password" required>
        <button type="submit" name="Submit">เข้าสู่ระบบ</button>
    </form>
</div>
<?php
if(isset($_POST['Submit'])){
    include_once("connectdb.php");
    $u = $_POST['auser']; $p = $_POST['apwd'];
    $sql = "SELECT * FROM admin WHERE username='$u' AND password='$p' LIMIT 1";
    $rs = mysqli_query($conn, $sql);
    if ($rs && mysqli_num_rows($rs) == 1){
        $data = mysqli_fetch_array($rs);
        $_SESSION['aid'] = $data['id']; $_SESSION['aname'] = $data['name'];
        echo "<script>window.location='index2.php';</script>";
    } else { echo "<script>alert('Username หรือ Password ผิด');</script>"; }
}
?>
</body>
</html>