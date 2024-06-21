<?php
require 'koneksi.php';
$nama_user = $_POST["nama_user"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_user (nama_user, email, password) VALUES ('$nama_user', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran gagal : " .mysqli_error($conn);
}