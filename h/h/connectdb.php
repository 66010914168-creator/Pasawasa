<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "4168db"; // ชื่อฐานข้อมูลตามรูปใน phpMyAdmin ของคุณ

$conn = mysqli_connect($host, $user, $pw, $db);

if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");
?>