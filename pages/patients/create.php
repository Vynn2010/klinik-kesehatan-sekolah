<?php
include "../../config/database.php";

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

    <form method="POST" action="../../actions/patients/store.php">
        <h1>Input Medicines Data</h1>
        <br><label>Medical Record Number</label>
        <br><input type="text" id="medical_record_no" name="medical_record_no">

        <br><label>Full Name</label>
        <br><input type="text" id="full_name" name="full_name">

        <br><label>Email</label>
        <br><input type="text" id="email" name="email">

        <br><label>Phone</label>
        <br><input type="text" id="phone" name="phone">

        <br><label>Gender</label>
        <br><select name="gender" id="gender">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>

        <br><label>Birth Date</label>
        <br><input type="date" name="birth_date" id="birth_date">

        <br><label>Blood Type</label>
        <br><select name="blood_type" id="blood_type">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>

        <br><label>Allergies</label>
        <br><select name="allergies" id="allergies">
            <option value="Chocolate">Chocolate</option>
            <option value="Milk">Milk</option>
            <option value="Dust">Dust</option>
            <option value="Cold">Cold</option>
        </select>

        <br><label>Pain Level</label>
        <br><input type="number" name="pain_level" id="pain_level">

        <br><label>Appointment at</label>
        <br><input type="date" name="appointment_at" id="appointment_at">

        <br><label>Complaint</label>
        <br><input type="text" name="complaint" id="complaint">
        <br><button type="submit" name="submit" id="submit" method="POST">Simpan</button>
    </form>

    <?php include "../../components/landing/footer.php" ?>
</body>

</html>