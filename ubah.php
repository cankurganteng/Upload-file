<?php

require 'function.php';

//ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'ubah.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<style>
            legend {
                color: #999999;
                padding: 10px;
                background: #111111;
                border-radius: 10px;
            }
            fieldset {
                max-width: 350px;
                border-radius: 15px;
                border-color: #111111;
                background: #33456835;
            }
            label {
                padding: 10px;
                border-radius: 10px;
                background: #111111;
                float: left;
                color: white;
            }
            input {
            
                border-radius: 15px;
                border-color: #27991748;
                height: 30px;
            }
           
            button{
                background: yellow;

            }       
</style>

<style>
        body{
            background-image: url("D.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
        }

    </style>

<body>

    
        <div align="center">
            <form action="" method="POST">
        <fieldset>
            <legend>Ubah Data Mahasiswa</legend>
                <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
                <ul>
                    <p>
                        <label for="nama" style="margin-right: 25px;"> 
                            NAMA : </label>
                            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>"> 
                
                    </p>
                    <p>
                        <label for="npm" style="margin-right: 39px;"> 
                            NPM : </label>
                            <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
                    </p>
                    <p>
                        <label for="jurusan" style="margin-right: 1px;"> 
                            JURUSAN : </label>
                            <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
                    </p>
                    <p>
                        <label for="email" style="margin-right: 25px;"> 
                            EMAIL : </label>
                            <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
                    </p>
                    <p>
                        <label for="gambar" style="margin-right: 23px;">
                             PHOTO : </label>
                        <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
                    </p>
                    <p>
                        <button type="submit" name="submit">Ubah Data</button>
                    </p>
                </ul>
        </fieldset>
            </form>
        </div>
        
  </div>

</body>

