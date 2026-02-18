<?php
session_start(); // บรรทัดนี้ต้องมีเพื่อใช้ Session

// ตรวจสอบว่าถ้าไม่ได้ Login ให้เด้งกลับหน้าแรก
if (!isset($_SESSION['aid'])) {
    echo "<script>window.location='index.php';</script>";
    exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรรษวสา กวนขุนทด(บอม)</title>
<style>
    /* ใส่ CSS สีขาวคลีนๆ ที่คุณชอบ */
    body { font-family: 'Kanit', sans-serif; background: #f4f4f7; padding: 50px; }
    .container { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
    a { display: block; padding: 10px; color: #0071e3; text-decoration: none; }
</style>
</head>

<body>
<div class="container">
    <h1>ระบบหลังบ้าน</h1>
    <p>ยินดีต้อนรับคุณ: <strong><?php echo $_SESSION['aname']; ?></strong></p> 
    <hr>
    <ul>
        <li><a href="products.php">จัดการสินค้า</a></li>
        <li><a href="orders.php">จัดการออเดอร์</a></li>
        <li><a href="customers.php">จัดการลูกค้า</a></li>
        <li><a href="logout.php">ออกจากระบบ</a></li>
    </ul>
</div>
</body>
</html>