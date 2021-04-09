<?php
    include_once("koneksi.php");

    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
    $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th,
        table td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>
        Tambah Data mahasiswa
    </h1>
    <form action="update.php" method="post">

        <input name="id" type="hidden" value="<?php echo $data['id'] ?>">

        <label for="">NPM</label>
        <input name="npm" type="text" value="<?php echo $data['npm'] ?>">
        <br>
        <br>
        <label for="">Nama</label>
        <input name="nama" type="text" value="<?php echo $data['nama'] ?>">
        <br>
        <br>
        <label for="">Hobi</label>
        <input name="hobi" type="text" value="<?php echo $data['hobi'] ?>">
        <br>
        <br>
        <button>Simpan</button>

    </form>
</body>
</html>

