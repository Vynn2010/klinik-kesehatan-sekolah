<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_clinic";

$conn = mysqli_connect($host, $user, $pass, $db_name);
if(!$conn){
    die("Koneksi Gagal: " . mysqli_connect_error());
}

?>