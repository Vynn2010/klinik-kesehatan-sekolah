<?php 
    $message = "";
    if (isset($_GET)){
    global $conn;
    $stmt= mysqli_prepare($conn,"UPDATE medicines (medicine_code, medicine_name, type, usage_rule, side_effects, price, stock, expired_date, need_prescription, description) 
                            SET VALUES (medicine_code = ?, medicine_name = ?,  type = ?, usage_rule = ?, side_effects = ?, price = ?, stock = ?, expired_date = ?, need_prescription = ?, description = ?)");
                            
    $mcode = $_POST['medicine_code'];
    $mname = $_POST['medicine_name'];
    $type = $_POST['type'];
    $rule = $_POST['usage_rule'];
    $effects = $_POST['side_effects'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $exdate = $_POST['expired_date'];
    $prescription = $_POST['need_prescription'];
    $description = $_POST['description'];
    $stmt->bind_param("sssssiisis", $mcode, $mname, $type, $rule, $effects, $price, $stock, $exdate, $prescription, $description);
    $stmt->execute();
    $stmt->close();

    $message = "Data berhasil diupdate";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
</head>
<body>
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
        <button type="submit" name="submit" id="submit" method="GET">Simpan</button>
    </form>
</body>
</html>