<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มสมัครงาน | Synergy Tech Solutions</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
:root {
    --primary-color: #00bcd4;
    --bg-overlay: rgba(0, 50, 70, 0.9);
}
body {
    background-image: url('https://picsum.photos/1920/1080?random=2&blur=2');
    background-size: cover;
    padding: 40px 0;
    color: #e0f7fa;
}
.form-card {
    background-color: var(--bg-overlay);
    padding: 40px;
    border-radius: 12px;
    border: 2px solid var(--primary-color);
    box-shadow: 0 0 30px rgba(0,0,0,.8);
}
label {
    color: #b2ebf2;
}
</style>
</head>

<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 form-card">

<h2 class="text-center mb-4">
<i class="bi bi-person-workspace"></i> ฟอร์มสมัครงาน
</h2>

<form method="post" action="result.php">

<!-- ตำแหน่ง -->
<div class="mb-3">
<label class="form-label">ตำแหน่งที่สมัคร</label>
<select name="position" class="form-select" required>
    <option value="">-- เลือกตำแหน่ง --</option>
    <option value="Programmer">Programmer</option>
    <option value="Web Designer">Web Designer</option>
    <option value="IT Support">IT Support</option>
</select>
</div>

<!-- คำนำหน้า + ชื่อ -->
<div class="row">
<div class="col-md-3 mb-3">
<label class="form-label">คำนำหน้า</label>
<select name="title" class="form-select">
    <option value="นาย">นาย</option>
    <option value="นาง">นาง</option>
    <option value="นางสาว">นางสาว</option>
</select>
</div>

<div class="col-md-9 mb-3">
<label class="form-label">ชื่อ - นามสกุล</label>
<input type="text" name="fullname" class="form-control" required>
</div>
</div>

<!-- วันเกิด -->
<div class="mb-3">
<label class="form-label">วันเดือนปีเกิด</label>
<input type="date" name="birthday" class="form-control">
</div>

<!-- โทร + ส่วนสูง -->
<div class="row">
<div class="col-md-6 mb-3">
<label class="form-label">เบอร์โทรศัพท์</label>
<input type="text" name="phone" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">ส่วนสูง (ซม.)</label>
<input type="number" name="height" class="form-control">
</div>
</div>

<!-- การศึกษา -->
<div class="mb-3">
<label class="form-label">ระดับการศึกษา</label>
<select name="education" class="form-select">
    <option value="ปวช.">ปวช.</option>
    <option value="ปวส.">ปวส.</option>
    <option value="ปริญญาตรี">ปริญญาตรี</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">สาขาวิชา</label>
<input type="text" name="major" class="form-control">
</div>

<!-- ความสามารถ -->
<div class="mb-3">
<label class="form-label">ความสามารถพิเศษ</label>
<textarea name="skills" class="form-control" rows="3"></textarea>
</div>

<!-- ประสบการณ์ -->
<div class="mb-3">
<label class="form-label">ประสบการณ์ทำงาน</label>
<textarea name="experience" class="form-control" rows="3"></textarea>
</div>

<!-- ที่อยู่ -->
<div class="mb-3">
<label class="form-label">ที่อยู่ปัจจุบัน</label>
<textarea name="address" class="form-control" rows="3"></textarea>
</div>

<!-- สี -->
<div class="mb-4">
<label class="form-label">สีชุดดำน้ำที่ชอบ</label>
<input type="color" name="color" class="form-control form-control-color w-100" value="#00bcd4">
</div>

<div class="text-center">
<button type="submit" name="Submit" class="btn btn-info px-5">
<i class="bi bi-send-fill"></i> ส่งใบสมัคร
</button>
</div>

</form>

</div>
</div>
</div>

</body>
</html>
