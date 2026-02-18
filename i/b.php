<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรรษวสา กวนขุนทด(บอม)</title>
</head>
<h1>งาน i -- พรรษวสา กวนขุนทด(บอม)<h1>

<?php
include_once("../connectdb.php");

/* ====== บันทึกข้อมูล ====== */
if (isset($_POST['Submit'])) {

    $pname = $_POST['pname'];
    $rid   = $_POST['rid'];

    $ext = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION);

    $sql = "INSERT INTO provinces (p_name, p_ext, r_id)
            VALUES ('$pname', '$ext', '$rid')";
    mysqli_query($conn, $sql) or die("เพิ่มข้อมูลไม่ได้");

    $pid = mysqli_insert_id($conn);

    move_uploaded_file(
        $_FILES['pimage']['tmp_name'],
        "images/".$pid.".".$ext
    );

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

/* ====== ลบข้อมูล ====== */
if (isset($_GET['del'])) {

    $id = $_GET['del'];

    // ลบรูปก่อน
    $sqlimg = "SELECT p_ext FROM provinces WHERE p_id='$id'";
    $rsimg  = mysqli_query($conn, $sqlimg);
    $dataimg = mysqli_fetch_array($rsimg);

    if ($dataimg) {
        @unlink("images/".$id.".".$dataimg['p_ext']);
    }

    // ลบข้อมูล
    mysqli_query($conn, "DELETE FROM provinces WHERE p_id='$id'")
        or die("ลบไม่ได้");

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>จัดการจังหวัด</title>
</head>
<body>

<h2>เพิ่มจังหวัด</h2>

<form method="post" enctype="multipart/form-data">
    ชื่อจังหวัด
    <input type="text" name="pname" required>

    รูปภาพ
    <input type="file" name="pimage" required><br><br>

    ภาค
    <select name="rid">
        <?php
        $sql3 = "SELECT * FROM regions";
        $rs3 = mysqli_query($conn, $sql3);
        while ($r = mysqli_fetch_array($rs3)){
        ?>
            <option value="<?php echo $r['r_id']; ?>">
                <?php echo $r['r_name']; ?>
            </option>
        <?php } ?>
    </select>

    <button type="submit" name="Submit">บันทึก</button>
</form>

<hr>

<h2>รายการจังหวัด</h2>

<table border="1" cellpadding="5">
<tr>
    <th>รหัสจังหวัด</th>
    <th>ชื่อจังหวัด</th>
    <th>ชื่อภาค</th>
    <th>รูป</th>
    <th>ลบ</th>
</tr>

<?php
$sql = "SELECT p.*, r.r_name
        FROM provinces p
        JOIN regions r ON p.r_id = r.r_id";

$rs = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($rs)) {
?>
<tr>
    <td><?php echo $data['p_id']; ?></td>
    <td><?php echo $data['p_name']; ?></td>
    <td><?php echo $data['r_name']; ?></td>

    <td>
        <img src="images/<?php echo $data['p_id']; ?>.<?php echo $data['p_ext']; ?>" width="120">
    </td>

    <td align="center">
        <a href="../?del=<?php echo $data['p_id']; ?>"
           onclick="return confirm('ยืนยันการลบ?');">
           <img src="../images/delete.jpg" width="20">
        </a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
