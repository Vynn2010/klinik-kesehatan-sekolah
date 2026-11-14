<?php
include "../../config/database.php";

    $message = "";
if ($medical = ""){
    $message = "Kode obat harus diisi.";
    return;
}

if (isset($_POST)){
   global $conn;
   $stmt= $conn->prepare("INSERT INTO patients (medical_record_no, full_name, email, phone, gender, birth_date, blood_type, allergies, pain_level, appointment_at, complaint) 
                          VALUES (?,?,?,?,?,?,?,?,?,?,?)");

   $mecord_no = "medical_record_no";
   $full_name = "full_name";
   $email = "email";
   $phone = "phone";
   $gender = "gender";
   $birth_date = "birth_date";
   $blood_type = "blood_type";
   $allergies = "allergies";
   $pain_level = "pain_level";
   $appointment_at = "appointment_at";
   $complaint = "complaint";

   $stmt->bind_param("sssssssiss", $mecord_no, $full_name, $email, $phone, $gender, $birth_date, $blood_type, $allergies, $pain_level, $appointment_at, $complaint);
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
    <title>Insert Patients</title>
</head>
<body>
    <?php include "../../components/landing/header.php" ?>

    <form>
        <h1>Input Medicines Data</h1>
        <label>Medical Record Number</label>
        <input type="text" id="medical_record_no" name="medical_record_no">

        <label>Full Name</label>
        <input type="text" id="full_name" name="full_name">

        <label>Email</label>
        <input type="text" id="email" name="email">

        <label>Phone</label>
        <input type="text" id="phone" name="phone">

        <label>Gender</label>
        <select name="gender" id="gender">
            <input type="radio" name="M" id="M">
            <input type="radio" name="F" id="F">
        </select>

        <label>Birth Date</label>
        <input type="date" name="birth_date" id="birth_date">

        <label>Blood Type</label>
        <select name="blood_type" id="blood_type">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>

        <label>Allergies</label>
        <select name="allergies" id="allergies">
            <input type="check" name="chocolate">
            <input type="check" name="cold">
            <input type="check" name="dust">
            <input type="check" name="seafood">
            <input type="check" name="milk">
        </select>

        <label>Pain Level</label>
            <input type="number" name="pain_level" id="pain_level">

        <label>Appointment at</label>
            <input type="date" name="appointment_at" id="appointment_at">

        <label>Complaint</label>
            <input type="text" name="complaint" id="complaint">

    </form>

    <?php include "../../components/landing/footer.php" ?>
</body>

</html>