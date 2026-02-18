<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรรษวสา กวนขุนทด (บอม)</title>
</head>

<body>
<h1>พรรษวสา กวนขุนทด (บอม)</h1>

<?php
include_once("connectdb.php");

// 1. ดึงข้อมูลเตรียมไว้ใน Array
$months = [];
$sales = [];

$sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales 
        FROM popsupermarket 
        GROUP BY MONTH(p_date) 
        ORDER BY Month";
$rs = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($rs)) {
    // แปลงตัวเลขเดือนเป็นชื่อเดือน (แบบย่อ)
    $months[] = "เดือน " . $row['Month'];
    $sales[] = $row['Total_Sales'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container { display: flex; flex-wrap: wrap; gap: 30px; align-items: flex-start; }
        .chart-box { width: 350px; text-align: center; }
        table { border-collapse: collapse; min-width: 200px; }
    </style>
</head>
<body>

<div class="container">
    <table border="1" cellpadding="8">
        <tr bgcolor="#f2f2f2">
            <th>เดือน</th>
            <th>ยอดขาย</th>
        </tr>
        <?php foreach ($months as $index => $mName): ?>
        <tr>
            <td><?php echo $mName; ?></td>
            <td align="right"><?php echo number_format($sales[$index]); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="chart-box">
        <canvas id="barChart"></canvas>
        <p>กราฟแท่งแสดงยอดขาย</p>
    </div>

    <div class="chart-box">
        <canvas id="doughnutChart"></canvas>
        <p>กราฟโดนัทแสดงสัดส่วน</p>
    </div>
</div>

<script>
// ข้อมูลจาก PHP
const mLabels = <?php echo json_encode($months); ?>;
const mData = <?php echo json_encode($sales); ?>;
const colors = ['#36A2EB', '#FF6384', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'];

// ฟังก์ชันสร้างกราฟแบบลดรูป (Concise)
function draw(id, type) {
    new Chart(document.getElementById(id), {
        type: type,
        data: {
            labels: mLabels,
            datasets: [{
                label: 'ยอดขาย',
                data: mData,
                backgroundColor: colors
            }]
        },
        options: { responsive: true }
    });
}

// สั่งวาด 2 กราฟ
draw('barChart', 'bar');
draw('doughnutChart', 'doughnut');
</script>

</body>
</html>
