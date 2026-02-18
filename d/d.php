<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มรับข้อมูล - พรรษวสา กวนขุนทด (บอม)</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* Mermaid Theme */
body {
    background: linear-gradient(135deg, #8fd3f4, #84fab0);
    font-family: 'Prompt', sans-serif;
}

.mermaid-card {
    background: rgba(255,255,255,0.8);
    border-radius: 18px;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
    padding: 25px;
}

.btn-mermaid {
    background: #6ed3cf;
    color: white;
    border-radius: 20px;
    transition: 0.3s;
}
.btn-mermaid:hover {
    background: #3bccc3;
}

h1 {
    color: #ffffff;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
}
</style>
</head>

<body>

<div class="container mt-4">
    <h1 class="text-center mb-4">ฟอร์มรับข้อมูล - พรรษวสา กวนขุนทด (บอม)</h1>

    <div class="mermaid-card">
        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" name="fullname" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label class="form-label">เบอร์โทร</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ส่วนสูง (ซม.)</label>
                <input type="number" name="height" min="100" max="200" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ที่อยู่</label>
                <textarea name="address" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">วันเดือนปีเกิด</label>
                <input type="date" name="birthday" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">สีที่ชอบ</label>
                <input type="color" name="color" class="form-control form-control-color">
            </div>

            <div class="mb-3">
                <label class="form-label">สาขาวิชา</label>
                <select name="major" class="form-select">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <button type="submit" name="Submit" class="btn btn-mermaid">สมัครสมาชิก</button>
            <button type="reset" class="btn btn-secondary">ยกเลิก</button>

            <button type="button" class="btn btn-warning"
                onclick="window.location='https://youtu.be/cYNXh9AkvMg?list=RDcYNXh9AkvMg';">
                ไม่เอฟ
            </button>

            <button type="button" class="btn btn-danger"
                onMouseOver="alert('ผีหลอกวิญญาณหลอน');">
                เห้อ
            </button>

            <button type="button" class="btn btn-dark" onclick="window.print();">
                อ๊ากกก
            </button>
        </form>
    </div>

    <hr class="my-4">

    <?php
    if (isset($_POST['Submit'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $major = $_POST['major'];
        $color = $_POST['color'];
        $birthday = $_POST['birthday'];

        echo '<div class="mermaid-card mt-3">';
        echo "<h3>ผลลัพธ์</h3>";
        echo "ชื่อ-สกุล: $fullname<br>";
        echo "เบอร์โทรศัพท์: $phone<br>";
        echo "ส่วนสูง: $height ซม.<br>";
        echo "สาขาวิชา: $major<br>";
        echo "ที่อยู่: $address<br>";
        echo "วันเดือนปีเกิด: $birthday<br>";
        echo "สีที่ชอบ: <div style='background-color:{$color}; width:200px; height:40px; border-radius:10px; margin-top:5px;'></div>";
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
