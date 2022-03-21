<?php
// Koneksi ke database
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
// ketika tombol cari di klik maka akan menampilkan hasil data yang dicari
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Mahasiswa</title>

    
</head>

    <link rel="stylesheet" href="style.css"/>
    <style>
        body{
            background-image: url("D.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
        }

    </style>
<body>

<div align="right">
    <br>
<div class="header">
    <h1>Daftar Mahasiswa</h1>
    <a class="link" href="tambah.php">Tambah Data</a>
    
</div>

  
    <br><br>

    <form action="" method="POST">
        <div align="center">
        <input type="text" name="keyword" size="105" autofocus placeholder="golek opoo.." autocomplete="off">
        <button type="submit" name="cari"> Search</button>
    </form>
    <br>
    <br>
    
    <table style="margin-left:auto;margin-right:auto"  border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Photo</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>

                <td> <?= $i; ?> </td>

                <td>
                    
                    <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Yakin ingin menghapus data?');  ">Hapus</a>
                </td>
                <td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["npm"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td><?php echo $row["email"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>