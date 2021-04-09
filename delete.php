<?php

include_once("koneksi.php");

$id = $_GET['id'];

// Delete user data from table
$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = '$id'");

header('Location: index.php');
