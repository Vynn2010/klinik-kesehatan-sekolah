<?php
include "../../config/database.php";

$message = "";

if (isset($_POST)){
   global $conn;
   $stmt= mysqli_prepare($conn,"INSERT INTO medicines(medicine_code, medicine_name, type, usage_rule, side_effects, price, stock, expired_date, need_prescription, description) VALUES (?,?,?,?,?,?,?,?,?,?)");

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
   header("Location: ../../pages/medicines/create.php");

   echo$message = "Data berhasil dimasukkan";
}

?>