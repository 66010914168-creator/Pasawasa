<?php
session_start();
session_destroy();
header("location: login.php"); // เด้งกลับไปหน้า login
exit();
?>