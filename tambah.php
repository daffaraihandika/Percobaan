<?php 
session_start();

if(! isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';

if(isset ($_POST["submit"])) {
    
    if(tambah($_POST) > 0){
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php'
            </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php'
            </script>";
    }
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <table cellpadding="8">
            <tr>
                <td><label for="nis">NIS</label></td>
                <td><input type="text" name="nis" id="nis" required autofocus autocomplete="off"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama" required autocomplete="off"></td>
            </tr>
            <tr>
            <tr>
                <td><label for="jeniskelamin">Jenis Kelamin</label></td>
                <td>
                    <input type="radio" name="jeniskelamin" value="Laki-Laki" required>Laki-Laki
                    <input type="radio" name="jeniskelamin" value="Perempuan" required>Perempuan
                </td>
            </tr>
            </tr>
            <tr>
                <td><label for="telepon">No. Telepon</label></td>
                <td><input type="text" name="telepon" id="telepon" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td><input type="text" name="jurusan" id="jurusan" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><textarea name="alamat" id="alamat" cols="22" rows="3" required autocomplete="off"></textarea></td>
            </tr>
        </table>
        
        <hr>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>