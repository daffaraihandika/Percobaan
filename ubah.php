<?php 
session_start();

if(! isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if(isset($_POST["submit"])) {
    if(ubah($_POST) > 0){
        echo "<script>
                alert('data berhasil diubah')
                document.location.href = 'index.php'
            </script>";
    } else {
        echo "<script>
                alert('data gagal diubah')
                document.location.href = 'index.php'
            </script>";
        echo "<br>";
        echo mysqli_error($conn);    
    }
}

?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST">

    <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">

        <table cellpadding="8">
            <tr>
                <td><label for="nis">NIS</label></td>
                <td><input type="text" name="nis" id="nis" value="<?= $mahasiswa["nis"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama" value="<?= $mahasiswa["nama"]; ?>"></td>
            </tr>
            <tr>
            <tr>
                <td><label for="jeniskelamin">Jenis Kelamin</label></td>
                <td>
                    <?php if($mahasiswa["jeniskelamin"] == "Laki-Laki"){
                        echo "<input type='radio' name='jeniskelamin' value='Laki-Laki' checked='checked'> Laki-Laki";
                        echo "<input type='radio' name='jeniskelamin' value='Perempuan'> Perempuan";
                    }
                        if($mahasiswa["jeniskelamin"] == "Perempuan") {
                            echo "<input type='radio' name='jeniskelamin' value='Laki-Laki'> Laki-Laki";
                            echo "<input type='radio' name='jeniskelamin' value='Perempuan' checked='checked'> Perempuan";
                        } 
                    
                    ?>
                </td>
            </tr>
            </tr>
            <tr>
                <td><label for="telepon">No. Telepon</label></td>
                <td><input type="text" name="telepon" id="telepon" value="<?= $mahasiswa["telepon"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td><input type="text" name="jurusan" id="jurusan" value="<?= $mahasiswa["jurusan"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><textarea name="alamat" id="alamat" cols="22" rows="3"><?= $mahasiswa["alamat"]; ?></textarea></td>
            </tr>
        </table>
        
        <hr>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>