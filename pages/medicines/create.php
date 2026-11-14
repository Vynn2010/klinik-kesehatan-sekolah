<?php
include "../../config/database.php";

    $message = "";

if (isset($_POST)){
   global $conn;
   $stmt= $conn->prepare("INSERT INTO medicines (medicine_code, medicine_name, type, usage_rule, side_effects, price, stock, expired_date, need_prescription, description) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
   $mcode = "medicine_code";
   $mname = "medicine_name";
   $type = "type";
   $rule = "usage_rule";
   $effects = "side_effects";
   $price = "price";
   $stock = "stock";
   $exdate = "expired_date";
   $prescription = "need_prescription";
   $description = "description";
   $stmt->bind_param("sssssiisis", $mcode, $mname, $type, $rule, $effects, $price, $stock, $exdate, $prescription, $description);
   $stmt->execute();
   $stmt->close();

   $message = "Data berhasil dimasukkan";
}

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

    <form>
        <h1>Input Medicines Data</h1>
        <label>Medicine Code</label>
        <input type="text" id="medicine_code" name="medicine_code">
        <label>Medicine Name</label>
        <input type="text" id="medicine_name" name="medicine_name">
        <label>Medicine Type</label>
        <select name="type" id="type">
            <option value="Tablet">Tablet</option>
            <option value="Syrup">Syrup</option>
            <option value="Capsule">Capsule</option>
            <option value="Ointment">Ointment</option>
        </select>
        <label>Usage Rule</label>
        <select name="usage_rule" id="usage_rule">
            <input type="radio" name="Before Meal" id="Before Meal">
            <input type="radio" name="After Meal" id="After Meal">
        </select>
        <label>Side Effects</label>
        <select name="side_effects" id="side_effects">
            <input type="check">Sleepy</input>
            <input type="check">Hunger</input>
            <input type="check">Dehidrate</input>
        </select>
        <label>Input Price: </label>
        <input type="number" name="price" id="price">
        <label>Input Stock: </label>
        <input type="number" name="stock" id="stock">
        <label>Expired At: </label>
        <input type="date" name="expired_date" id="expired_date">
        <label>Need Prescription: </label>
        <input type="check" name="need_prescription" id="need_prescription">
        <label>Description</label>
        <input type="text" name="description" id="description">
        <button type="submit" name="submit" id="submit" method="POST">Simpan</button>
    </form>
    

    <?php include "../../components/landing/footer.php" ?>
</body>

</html>