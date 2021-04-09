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
    <form action="save.php" method="post">

        <label for="">NPM</label>
        <input name="npm" type="text">
        <br>
        <br>
        <label for="">Nama</label>
        <input name="nama" type="text">
        <br>
        <br>
        <label for="">Hobi</label>
        <input name="hobi" type="text">
        <br>
        <br>
        <button>Simpan</button>

    </form>
</body>
</html>
