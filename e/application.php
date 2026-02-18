<?php
$conn = mysqli_connect("localhost", "root", "", "4168db");
mysqli_set_charset($conn, "utf8");

if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้");
}

// ===== ตรวจสอบการกดปุ่ม =====
if (isset($_POST['submit'])) {

    $r_position  = $_POST['r_position'];
    $r_name      = $_POST['r_name'];
    $r_birthday  = $_POST['r_birthday'];
    $r_height    = $_POST['r_height'];
    $r_phone     = $_POST['r_phone'];
    $r_education = $_POST['r_education'];
    $r_major     = $_POST['r_major'];
    $r_skill     = $_POST['r_skill'];
    $r_address   = $_POST['r_address'];
    $r_color     = $_POST['r_color'];

    $sql = "INSERT INTO appilication
    (r_position, r_name, r_birthday, r_height, r_phone, r_education, r_major, r_skill, r_address, r_color)
    VALUES
    ('$r_position','$r_name','$r_birthday','$r_height','$r_phone','$r_education','$r_major','$r_skill','$r_address','$r_color')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('ส่งใบสมัครเรียบร้อยแล้ว');</script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาด');</script>";
    }
} // 👈 ปิด if ให้ครบตรงนี้
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ใบสมัครงาน</title>
</head>
<body>

<h2>ใบสมัครงาน</h2>

<form method="post">
    ตำแหน่งที่สมัคร :
    <input type="text" name="r_position" required><br><br>

    ชื่อ - นามสกุล :
    <input type="text" name="r_name" required><br><br>

    วันเกิด :
    <input type="date" name="r_birthday"><br><br>

    ส่วนสูง :
    <input type="number" name="r_height"><br><br>

    เบอร์โทร :
    <input type="text" name="r_phone"><br><br>

    วุฒิการศึกษา :
    <input type="text" name="r_education"><br><br>

    สาขา :
    <input type="text" name="r_major"><br><br>

    ทักษะ :
    <textarea name="r_skill"></textarea><br><br>

    ที่อยู่ :
    <textarea name="r_address"></textarea><br><br>

    สีที่ชอบ :
    <input type="text" name="r_color"><br><br>

    <button type="submit" name="submit">ส่งใบสมัคร</button>
</form>

</body>
</html>
