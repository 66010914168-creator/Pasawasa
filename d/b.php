<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรรษวสา กวนขุนทด (บอม)</title>
</head>

<body>
<h1>ฟอร์มรับข้อมูล-พรรษวสา กวนขุนทด (บอม)</h1>

<form method="post" action="">
ชื่อ-นามสกุล <input type="text" name="fullname" autofocus required> *<br>
เบอร์โทร <input type="text" name="phone"required> *<br>
ส่วนสูง <input type="number" name="height"min="100"max="200"required>ซม. *<br>

ที่อยู่ <br><textarea name="address" cools="40" rows="4"></textarea><br>
วันเดือนปีเกิด<input type="date" name="birthday"> <br>
สีที่ชอบ <input type="color" name="color"> <br>

สาขาวิชา
<select name="major">
	<option value="การบัญชี">การบัญชี</option>
    <option value="การตลาด">การตลาด</option>
    <option value="การจัดการ">การจัดการ</option>
    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select >
<br><br>
<!--input type="submit" name="Submit" value="สมัครสมาชิก"!-->
<button type="submit" name="Submit">สมัครสมาชิก</button>
<button type="reset">ยกเลิก</button>
<button type="button"onClick="window.location='https://youtu.be/cYNXh9AkvMg?list=RDcYNXh9AkvMg';">ไม่เอฟ</button>
<button type="button"onMouseOver="alert('ผีหลอกวิญญาณหลอน');">เห้อ</button>
<button type="button"onClick="window.print();">อ๊ากกก</button>
</form>
<br>
<hr>

<?php
if (isset($_POST['Submit'])){
	$fullname = $_POST['fullname'];
	$phone= $_POST['phone'];
	$height = $_POST['height'];
	$address = $_POST['address'];
	$major = $_POST['major'];
	$color = $_POST['color'];
	$birthday= $_POST['birthday'];
	
	echo "ชื่อ-สกุล:".$fullname."<br>";
	echo "เบอร์โทรศัพท์:".$phone."<br>";
	echo "ส่วนสูง:".$height."ซม<br>";
	echo "สาขาวิชาู่:".$major."<br>";
	echo "ที่อยู่:".$address."<br>";
	echo "วันเดือนปีเกิด:".$birthday."<br>";
	echo "สีที่ชอบ:<div style='background-color:{$color};width:300px'>".$color."</div>";
}
?>
<div style="br>"
</b\ody>
</html>
