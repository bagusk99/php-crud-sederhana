<?php
    include_once("koneksi.php");

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
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
        Halaman Utama
    </h1>
    <table border="1" cellpading>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Hobi</th>
            <th>
                <a href="create.php">Tambah Data</a>
            </th>
        </tr>
        <?php
            while($mahasiswa = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>{$mahasiswa['npm']}</td>";
                echo "<td>{$mahasiswa['nama']}</td>";
                echo "<td>{$mahasiswa['hobi']}</td>";    
                echo "<td>
                    <a href='edit.php?id={$mahasiswa['id']}'>Ubah data</a>
                    <a href='delete.php?id={$mahasiswa['id']}'>Hapus data</a>
                </td>";
            }
        ?>
    </table>
</body>
</html>