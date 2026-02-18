<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรรษวสา กวนขุนทด (บอม)</title>
</head>

<body>
<h1>พรรษวสา กวนขุนทด (บอม)</h1>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>พรรษวสา กวนขุนทด (บอม) - Sales Report</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body { background-color: #f8f9fa; padding-top: 50px; }
        .card { border: none; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); }
        .table img { border-radius: 5px; object-fit: cover; }
    </style>
</head>

<body>

<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">พรรษวสา กวนขุนทด (บอม) - รายการสินค้า</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-hover border" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>Order ID</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include_once("connectdb.php");
                    $sql = "SELECT * FROM `popsupermarket`";
                    $rs = mysqli_query($conn, $sql);

                    while ($data = mysqli_fetch_array($rs)) {
                    ?>
                        <tr>
                            <td><?php echo $data['p_order_id']; ?></td>
                            <td>
                                <img src="images/<?php echo $data['p_product_name']; ?>.jpg" width="50" height="50" alt="product">
                            </td>
                            <td><?php echo $data['p_product_name']; ?></td>
                            <td><span class="badge bg-info text-dark"><?php echo $data['p_category']; ?></span></td>
                            <td><?php echo $data['p_date']; ?></td>
                            <td><?php echo $data['p_country']; ?></td>
                            <td class="text-end fw-bold"><?php echo number_format($data['p_amount'], 2); ?></td>
                        </tr>
                    <?php
                    }
                    mysqli_close($conn);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json" // เมนูภาษาไทย
            },
            "pageLength": 10,
            "order": [[0, "desc"]] // เรียงตาม Order ID ล่าสุด
        });
    });
</script>

</body>
</html>
