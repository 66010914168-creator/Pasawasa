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
$countries = [];
$totals = [];

$sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country";
$rs = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($rs)) {
    $countries[] = $data['p_country'];
    $totals[] = $data['total'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container { display: flex; flex-wrap: wrap; gap: 20px; }
        .chart-box { width: 400px; }
        table { border-collapse: collapse; width: 300px; }
    </style>
</head>
<body>

<div class="container">
    <table border="1" cellpadding="5">
        <tr>
            <th>ประเทศ</th>
            <th>ยอดขาย</th>
        </tr>
        <?php foreach ($countries as $index => $name): ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td align="right"><?php echo number_format($totals[$index], 0); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="chart-box">
        <canvas id="barChart"></canvas>
    </div>

    <div class="chart-box">
        <canvas id="pieChart"></canvas>
    </div>
</div>

<script>
// เตรียมข้อมูลจาก PHP สำหรับ JavaScript
const labels = <?php echo json_encode($countries); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

// ฟังก์ชันสร้างกราฟเพื่อความกระชับ
function createChart(id, type, label) {
    new Chart(document.getElementById(id), {
        type: type,
        data: {
            labels: labels,
            datasets: [{
                label: label,
                data: dataValues,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                borderWidth: 1
            }]
        },
        options: { responsive: true }
    });
}

// เรียกสร้างกราฟทั้งสอง
createChart('barChart', 'bar', 'ยอดขายรายประเทศ (Bar)');
createChart('pieChart', 'pie', 'สัดส่วนยอดขาย (Pie)');
</script>

</body>
</html>
