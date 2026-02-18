<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มรับข้อมูล พรรษวสา กวนขุนทด(บอม)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* --- CSS ธีมนางเงือก (Mermaid Theme) --- */
    :root {
        --mermaid-blue-dark: #004d66; /* น้ำเงินเข้มของมหาสมุทร */
        --mermaid-teal: #009688;     /* เขียวน้ำทะเล/หางนางเงือก */
        --mermaid-light-blue: #b2ebf2; /* น้ำทะเลอ่อน */
        --mermaid-accent: #ffb74d;   /* สีทอง/ไข่มุก */
    }

    body {
        background: linear-gradient(135deg, var(--mermaid-blue-dark) 0%, #1e88e5 100%);
        padding-top: 50px;
        min-height: 100vh;
        color: var(--mermaid-light-blue); /* สีข้อความหลัก */
        font-family: 'Sarabun', sans-serif; /* แนะนำให้ใช้ฟอนต์ที่อ่านง่าย */
        /* เอฟเฟกต์ฟองอากาศ (ถ้าต้องการ) */
        /* background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 30px 30px; */
    }

    .card-mermaid {
        background-color: rgba(2, 60, 77, 0.9); /* สีน้ำเงินเข้มโปร่งแสง */
        border: 2px solid var(--mermaid-teal);
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 50px rgba(0, 150, 136, 0.4); /* เงาลึกและเรืองแสง */
    }

    .form-control, .form-select, .form-control-color {
        background-color: rgba(255, 255, 255, 0.1); /* พื้นหลัง input โปร่งแสง */
        border-color: var(--mermaid-teal);
        color: white;
    }
    .form-control:focus, .form-select:focus {
        background-color: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 0 0.25rem rgba(0, 150, 136, 0.5); /* เรืองแสงสีเขียวน้ำทะเลเมื่อ Focus */
        border-color: var(--mermaid-teal);
    }
    .form-select option {
        color: #000; /* ทำให้ตัวเลือกใน Dropdown อ่านง่าย */
        background-color: var(--mermaid-blue-dark);
    }

    /* ปุ่มธีมนางเงือก */
    .btn-mermaid {
        color: var(--mermaid-blue-dark);
        background-color: var(--mermaid-light-blue);
        border-color: var(--mermaid-teal);
        font-weight: bold;
        transition: all 0.3s ease;
    }
    .btn-mermaid:hover {
        background-color: var(--mermaid-teal);
        color: white;
        transform: scale(1.05);
    }

    .btn-accent { /* ปุ่มเน้น เช่น สมัครสมาชิก */
        background-color: var(--mermaid-accent);
        border-color: var(--mermaid-accent);
        color: var(--mermaid-blue-dark);
    }
    .btn-accent:hover {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .text-ocean {
        color: var(--mermaid-light-blue) !important;
    }
    
    .color-display {
        border: 2px solid var(--mermaid-light-blue);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* ให้ดูเหมือนไข่มุก */
    }
    
    .result-alert {
        background-color: rgba(0, 150, 136, 0.2); /* พื้นหลังผลลัพธ์โปร่งแสง */
        border-color: var(--mermaid-teal);
        color: white;
    }
    
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 card-mermaid">
            <h1 class="mb-5 pt-4 text-center text-ocean">
                <i class="bi bi-gem"></i> ฟอร์มใต้สมุทร: พรรษวสา กวนขุนทด(บอม)
            </h1>
            
            <form method="post" action="" class="needs-validation" novalidate>
                
                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-นามสกุล (Sirens' Name) <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                    <div class="invalid-feedback text-warning">
                        โปรดระบุชื่อของท่านเจ้าหญิงใต้น้ำ
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทรติดต่อ (Seashell Phone) <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                    <div class="invalid-feedback text-warning">
                        จำเป็นต้องมีเบอร์โทรเพื่อติดต่อสื่อสารใต้น้ำ
                    </div>
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">ส่วนสูง (ความยาวหาง, ซม.) <span class="text-warning">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
                        <span class="input-group-text bg-info text-dark">ซม.</span>
                        <div class="invalid-feedback text-warning">
                            กรุณาระบุความยาวหาง (100-200 ซม.)
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">ที่อยู่ (ตำแหน่งอาณาจักรใต้น้ำ)</label>
                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="birthday" class="form-label">วันเดือนปีเกิด (วันกำเนิดพรายน้ำ)</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">สีเกล็ดหางที่ชอบ (Tail Color)</label>
                    <input type="color" class="form-control form-control-color w-100" id="color" name="color" value="#009688">
                </div>

                <div class="mb-3">
                    <label for="major" class="form-label">สาขาวิชา (ความสามารถพิเศษ)</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การสื่อสารกับปลาโลมา</option>
                        <option value="การตลาด">การรวบรวมไข่มุก</option>
                        <option value="การจัดการ">การควบคุมกระแสน้ำ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">การถอดรหัสซากเรือ</option>
                    </select>
                </div>
                
                <hr class="my-5 border-mermaid">

                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4">
                    <button type="submit" name="Submit" class="btn btn-accent me-md-2">
                        <i class="bi bi-water"></i> สมัครสมาชิกใต้น้ำ
                    </button>
                    <button type="reset" class="btn btn-mermaid me-md-2">
                        <i class="bi bi-x-octagon-fill"></i> ยกเลิกการลงทะเบียน
                    </button>
                    <button type="button" class="btn btn-info text-dark" onClick="window.location='https://youtu.be/cYNXh9AkvMg?list=RDcYNXh9AkvMg';">ไม่เอฟ</button>
                    <button type="button" class="btn btn-secondary" onMouseOver="alert('ผีหลอกวิญญาณหลอน (อาจจะเป็นปลาหมึกยักษ์)');">เห้อ</button>
                    <button type="button" class="btn btn-danger" onClick="window.print();">
                        <i class="bi bi-printer-fill"></i> อ๊ากกก (พิมพ์ใบรับสมัคร)
                    </button>
                </div>

            </form>
            
            <hr class="mt-5 mb-0">
            
            <?php
            if (isset($_POST['Submit'])){
                $fullname = $_POST['fullname'];
                $phone= $_POST['phone'];
                $height = $_POST['height'];
                $address = $_POST['address'];
                $major = $_POST['major'];
                $color = $_POST['color'];
                $birthday= $_POST['birthday'];
                
                echo '<div class="alert result-alert mt-4 mb-4" role="alert">';
                echo '<h4 class="alert-heading text-ocean">🌊 บันทึกข้อมูลเรียบร้อย (Deep Sea Record)</h4>';
                echo '<p><strong>ชื่อ-สกุล:</strong> ' . htmlspecialchars($fullname) . '</p>';
                echo '<p><strong>เบอร์โทรศัพท์:</strong> ' . htmlspecialchars($phone) . '</p>';
                echo '<p><strong>ส่วนสูง:</strong> ' . htmlspecialchars($height) . ' ซม</p>';
                echo '<p><strong>สาขาวิชา:</strong> ' . htmlspecialchars($major) . '</p>';
                echo '<p><strong>ที่อยู่:</strong> ' . nl2br(htmlspecialchars($address)) . '</p>';
                echo '<p><strong>วันเดือนปีเกิด:</strong> ' . htmlspecialchars($birthday) . '</p>';
                echo '<p class="d-flex align-items-center"><strong>สีเกล็ดที่ชอบ:</strong> 
                      <span class="color-display" style="background-color:'.$color.';width:50px;height:25px;border-radius:50%"></span> 
                      ('.htmlspecialchars($color).')</p>';
                echo '</div>';
            }
            ?>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
// JavaScript สำหรับเปิดใช้งาน Bootstrap Form Validation
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>