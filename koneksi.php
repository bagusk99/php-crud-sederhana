<?php 
$servername = "localhost";
$database = "uts_database";
$username = "root";
$password = "123qweasd"; // kalo pake xampp ini kosongin aja

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}