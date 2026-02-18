<?php session_start(); include_once("connectdb.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
    body { background: #0b0e14; color: #fff; font-family: 'Segoe UI', sans-serif; padding: 60px; }
    .content-box { background: #151921; border-radius: 35px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); }
    h2 { font-weight: 300; letter-spacing: 2px; }
    table { width: 100%; border-collapse: separate; border-spacing: 0 10px; }
    th { padding: 20px; color: #94a3b8; font-weight: 400; text-align: left; }
    tr { background: #1c222d; transition: 0.3s; }
    tr:hover { background: #252d3a; transform: scale(1.01); }
    td { padding: 20px; }
    td:first-child { border-radius: 15px 0 0 15px; }
    td:last-child { border-radius: 0 15px 15px 0; }
    .btn { padding: 8px 18px; border-radius: 10px; text-decoration: none; font-size: 13px; }
    .edit { background: rgba(234, 179, 8, 0.1); color: #eab308; border: 1px solid #eab308; }
    .del { background: rgba(239, 68, 68, 0.1); color: #ef4444; border: 1px solid #ef4444; }
    .add { background: #00f2fe; color: #000; font-weight: bold; float: right; padding: 12px 25px; border-radius: 15px; text-decoration: none; }
</style>
</head>
<body>
<div class="content-box">
    <a href="add_product.php" class="add">+ ADD PRODUCT</a>
    <h2>PRODUCT LIST</h2>
    <table>
        <thead><tr><th>ID</th><th>NAME</th><th>PRICE</th><th>ACTION</th></tr></thead>
        <tbody>
            <tr>
                <td>#01</td><td>Smart Watch V2</td><td>฿3,500</td>
                <td><a href="#" class="btn edit">EDIT</a> <a href="#" class="btn del">DELETE</a></td>
            </tr>
        </tbody>
    </table>
    <br><a href="index2.php" style="color: #4a5568;">← Back to Home</a>
</div>
</body>
</html>