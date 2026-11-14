<?php
include "../../config/database.php";
// include "../../actions/medicines/store.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Medicines</title>
</head>
<body>
    <?php include "../../components/landing/header.php" ?>

    <form method="POST" action="../../actions/medicines/store.php">
        <h1>Input Medicines Data</h1>
        <br><label>Medicine Code</label>
        <br><input type="text" id="medicine_code" name="medicine_code">
        <br><label>Medicine Name</label>
        <br><input type="text" id="medicine_name" name="medicine_name">
        <br><label>Medicine Type</label>
        <br><select name="type" id="type">
                <option value="Tablet">Tablet</option>
                <option value="Syrup">Syrup</option>
                <option value="Capsule">Capsule</option>
                <option value="Ointment">Ointment</option>
            </select>
        <br><label>Usage Rule</label>
        <br><select name="usage_rule" id="usage_rule">
                <option value="After Meal">After Meal</option>
                <option value="Before Meal">Before Meal</option>
            </select>
        <br><label>Side Effects</label>
        <br><select name="side_effects" id="side_effects">
                <option value="Hunger">Hunger</option>
                <option value="Dehydrate">Dehydrate</option>
                <option value="Sleepy">Sleepy</option>
            </select>
        <br><label>Input Price: </label>
        <br><input type="number" name="price" id="price">
        <br><label>Input Stock: </label>
        <br><input type="number" name="stock" id="stock">
        <br><label>Expired At: </label>
        <br><input type="date" name="expired_date" id="expired_date">
        <br><label>Need Prescription: </label>
        <br><input type="check" name="need_prescription" id="need_prescription">
        <br><label>Description</label>
        <br><input type="text" name="description" id="description">
        <br><button type="submit" name="submit" id="submit" method="POST">Simpan</button>
    </form>
    

    <?php include "../../components/landing/footer.php" ?>
</body>

</html>