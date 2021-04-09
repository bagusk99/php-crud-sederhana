<?php

include_once("koneksi.php");

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$hobi = $_POST['hobi'];

// Insert user data into table
$result = mysqli_query($conn, "INSERT INTO mahasiswa(npm,nama,hobi) VALUES('$npm','$nama','$hobi')");

header('Location: index.php');