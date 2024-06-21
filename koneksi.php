<?php

$server = 'localhost';
$database = 'db_sct';
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("koneksi gagal:" .mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}