<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM Mahasiswa");


//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'tambah.php';
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
    <title>Tambah Data Mahasiswa</title>
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
            <legend>Tambah Data Mahasiswa</legend>
                <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
                <ul>
                    <p>
                        <label for="nama" style="margin-right: 25px;"> 
                            NAMA : </label>
                            <input type="text" name="nama" id="nama" required> 
                    </p>
                    <p>
                        <label for="npm" style="margin-right: 39px;"> 
                            NPM : </label>
                            <input type="text" name="npm" id="npm" required >
                    </p>
                    <p>
                        <label for="jurusan" style="margin-right: 1px;"> 
                            JURUSAN : </label>
                            <input type="text" name="jurusan" id="jurusan" required >
                    </p>
                    <p>
                        <label for="email" style="margin-right: 25px;"> 
                            EMAIL : </label>
                            <input type="text" name="email" id="email" required>
                    </p>
                    <p>
                        <label for="gambar" style="margin-right: 23px;">
                             PHOTO : </label>
                        <input type="file" name="gambar" id="gambar" required>
                    </p>
                    <p>
                        <button type="submit" name="submit">Tamabah Data</button>
                    </p>
                </ul>
        </fieldset>
            </form>
        </div>
        
  </div>

</body>