<?php
include_once("connectdb.php");

$id = $_GET['id'];

/* ดึงนามสกุลไฟล์ก่อน */
$sqlimg = "SELECT p_ext FROM provinces WHERE p_id='$id'";
$rsimg  = mysqli_query($conn, $sqlimg);
$dataimg = mysqli_fetch_array($rsimg);

if ($dataimg) {

    // ลบไฟล์รูป
    unlink("images/".$id.".".$dataimg['p_ext']);

    // ลบข้อมูล
    $sql = "DELETE FROM provinces WHERE p_id='$id'";
    mysqli_query($conn, $sql) or die("ลบข้อมูลไม่ได้");
}

/* กลับไปหน้า b.php */
header("Location: b.php");
exit();
?>
