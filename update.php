<?php

include_once("koneksi.php");

$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$hobi = $_POST['hobi'];

// Insert user data into table
$result = mysqli_query($conn, "UPDATE mahasiswa set npm='$npm',nama='$nama',hobi='$hobi' WHERE id = $id");

header('Location: index.php');