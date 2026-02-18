<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ข้อมูลการสมัคร | Synergy Tech Solutions</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* --- CSS ธีมมหาสมุทรสำหรับแสดงผล (Result Ocean Theme) --- */
    :root {
        --primary-color: #00bcd4; 
        --secondary-color: #b2ebf2;
        --accent-color: #ffb74d; 
        --bg-overlay: rgba(0, 50, 70, 0.9);
    }
    body {
        /* ใช้พื้นหลังใต้ทะเลเหมือนเดิม */
        background-image: url('https://picsum.photos/1920/1080?random=1&blur=2'); 
        background-size: cover;
        background-attachment: fixed;
        padding-top: 40px;
        padding-bottom: 40px;
        color: var(--secondary-color);
    }
    .result-card {
        background-color: var(--bg-overlay); 
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.8), 0 0 20px var(--primary-color);
        border: 2px solid var(--primary-color);
        backdrop-filter: blur(3px);
    }
    h2 {
        color: var(--accent-color);
        border-bottom: 3px solid var(--primary-color);
        padding-bottom: 10px;
        margin-bottom: 25px;
        font-weight: 700;
    }
    strong {
        color: var(--primary-color);
    }
    .info-box {
        background-color: rgba(0, 188, 212, 0.1);
        padding: 15px;
        border-left: 5px solid var(--accent-color);
        margin-bottom: 15px;
        border-radius: 5px;
    }
    .btn-outline-info {
        border-radius: 30px;
        color: var(--secondary-color);
        border-color: var(--primary-color);
    }
    .btn-outline-info:hover {
        background-color: var(--primary-color);
        color: #000;
    }
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-9 result-card">
            
            <h2><i class="bi bi-file-earmark-check"></i> ข้อมูลการสมัครงานที่ได้รับ (Deep Sea Data)</h2>
            
            <?php
            // ตรวจสอบว่ามีการส่งข้อมูลมาทาง POST และมีการกดปุ่ม Submit หรือไม่
            if (isset($_POST['Submit'])){
                // ดึงค่าทั้งหมดจาก $_POST โดยใช้ Null Coalescing Operator (??)
                $position = $_POST['position'] ?? 'N/A';
                $title = $_POST['title'] ?? 'N/A';
                $education = $_POST['education'] ?? 'N/A';
                $skills = $_POST['skills'] ?? '';
                $experience = $_POST['experience'] ?? '';
                $fullname = $_POST['fullname'] ?? 'N/A';
                $phone = $_POST['phone'] ?? 'N/A';
                $height = $_POST['height'] ?? 'N/A';
                $address = $_POST['address'] ?? '';
                $major = $_POST['major'] ?? 'N/A';
                $color = $_POST['color'] ?? '#00bcd4';
                $birthday = $_POST['birthday'] ?? 'N/A';
                
                // แสดงผลข้อมูล
                echo '<div class="info-box">';
                echo '<p class="mb-1"><strong>ตำแหน่งที่สมัคร:</strong> ' . htmlspecialchars($position) . '</p>';
                echo '<p class="mb-1"><strong>ชื่อ-สกุล:</strong> ' . htmlspecialchars($title) . ' ' . htmlspecialchars($fullname) . '</p>';
                echo '<p class="mb-1"><strong>วันเดือนปีเกิด:</strong> ' . htmlspecialchars($birthday) . '</p>';
                echo '<p class="mb-1"><strong>เบอร์โทรศัพท์:</strong> ' . htmlspecialchars($phone) . '</p>';
                echo '<p class="mb-1"><strong>ส่วนสูง:</strong> ' . htmlspecialchars($height) . ' ซม</p>';
                echo '</div>'; // สิ้นสุด Personal Info

                echo '<div class="info-box">';
                echo '<p class="mb-1"><strong>ระดับการศึกษา:</strong> ' . htmlspecialchars($education) . ' (' . htmlspecialchars($major) . ')</p>';
                echo '<p class="mb-1"><strong>ความสามารถพิเศษ:</strong> <br>' . nl2br(htmlspecialchars($skills)) . '</p>';
                echo '<p class="mb-1"><strong>ประสบการณ์ทำงาน:</strong> <br>' . nl2br(htmlspecialchars($experience)) . '</p>';
                echo '</div>'; // สิ้นสุด Education/Skills
                
                echo '<p class="mb-1"><strong>ที่อยู่ปัจจุบัน:</strong> ' . nl2br(htmlspecialchars($address)) . '</p>';

                echo '<p class="d-flex align-items-center mt-3"><strong>สีชุดดำน้ำที่ชอบ:</strong> 
                      <span style="background-color:'.$color.';width:25px;height:25px;border-radius:50%;border:2px solid var(--accent-color);margin-left:10px"></span> 
                      ('.htmlspecialchars($color).')</p>';
                
            } else {
                echo '<div class="alert alert-danger" role="alert">
                      <i class="bi bi-exclamation-triangle-fill"></i> ไม่พบข้อมูลการส่งฟอร์ม กรุณาเข้าถึงหน้านี้ผ่านแบบฟอร์มสมัครงาน
                      </div>';
            }
            ?>
            <hr class="my-4" style="border-color: var(--primary-color);">
            <div class="text-center">
                <a href="javascript:history.back()" class="btn btn-outline-info">
                    <i class="bi bi-arrow-left-circle"></i> กลับไปหน้าฟอร์ม
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>