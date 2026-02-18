<!DOCTYPE html>
<html>
<head>
    <title>งาน K</title>
</head>
<body>

<h2>งาน a 66010914168 ชื่อ พรรษวสา กวนขุนทด(บอม)</h2>

<!-- ปุ่มเปิดรูปตัวเอง -->
<button onclick="openMyPhoto()" 
style="background-color:green;color:white;padding:10px;">
เปิดรูปฉัน
</button>

<!-- ปุ่มเปิดรูปอาจารย์ -->
<button onclick="openTeacherPhoto()" 
style="background-color:orange;color:white;padding:10px;">
เปิดรูปอาจารย์
</button>

<br><br>

<img id="showimg" width="300">

<script>
function openMyPhoto(){
    document.getElementById("showimg").src="me.jpg";
}

function openTeacherPhoto(){
    document.getElementById("showimg").src="teacher.jpg";
}
</script>

</body>
</html>