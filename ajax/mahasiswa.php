<?php 
require '../functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM mahasiswa
            WHERE
        nama LIKE '%$keyword%' OR nis LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR jeniskelamin LIKE '%$keyword%'
        ";
$mahasiswa = query($query);
?>
<div id="container">
        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $data): ?>
            <tr>
                <td style="text-align: center;"><?php echo $i; ?></td>
                <td><?php echo $data["nis"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["jeniskelamin"]; ?></td>
                <td><?php echo $data["telepon"]; ?></td>
                <td><?php echo $data["alamat"]; ?></td>
                <th><?php echo $data["jurusan"]; ?></th>
                <td><a href="ubah.php?id=<?= $data["id"]; ?>">Ubah</a></td>
                <td><a href="hapus.php?id=<?= $data["id"]; ?>">Hapus</a></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <br><br>
        <table border="0" cellpadding="10" cellspacing="0" width="100%">
            <tr>
                <td>
                    <a href="logout.php">Logout</a>
                </td>
            </tr>
        </table>
    </div> 