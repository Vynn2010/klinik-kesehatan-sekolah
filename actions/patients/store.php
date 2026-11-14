<?php
include "../../config/database.php";
$message = ""; 

if (isset($_POST)){
   global $conn;
   $stmt= mysqli_prepare($conn,"INSERT INTO patients (medical_record_no, full_name, email, phone, gender, birth_date, blood_type, allergies, pain_level, appointment_at, complaint) 
                          VALUES (?,?,?,?,?,?,?,?,?,?,?)");

   $mecord_no = $_POST['medical_record_no'];
   $full_name = $_POST['full_name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $gender = $_POST['gender'];
   $birth_date = $_POST['birth_date'];
   $blood_type = $_POST['blood_type'];
   $allergies = $_POST['allergies'];
   $pain_level = $_POST['pain_level'];
   $appointment_at = $_POST['appointment_at'];
   $complaint = $_POST['complaint'];

   $stmt->bind_param("ssssssssiss", $mecord_no, $full_name, $email, $phone, $gender, $birth_date, $blood_type, $allergies, $pain_level, $appointment_at, $complaint);
   $stmt->execute();
   $stmt->close();

   $message = "Data berhasil dimasukkan";
}

?>