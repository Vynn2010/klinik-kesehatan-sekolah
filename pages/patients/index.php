<?php
include "../../config/database.php";

$id = $_GET("SELECT * FROM patients ORDER BY id ASC");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat-obat</title>
</head>
<body>
    <?php include "../../components/landing/header.php" ?>
    
    <?php include "../../components/landing/footer.php" ?>
</body>
</html>