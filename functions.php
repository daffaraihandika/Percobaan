<?php 

$conn = mysqli_connect("sql112.epizy.com", "epiz_29181820", "i3R2wBakVVF6qY9", "epiz_29181820_phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nis', '$nama', '$jeniskelamin', '$telepon', '$jurusan', '$alamat')
                ";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $jeniskelamin = ($data["jeniskelamin"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE mahasiswa SET
            nis = '$nis',
            nama = '$nama',
            jeniskelamin = '$jeniskelamin',
            telepon = '$telepon',
            jurusan = '$jurusan',
            alamat = '$alamat'
            WHERE id = $id
            ";
    
    mysqli_query($conn, $query);
    return(mysqli_affected_rows($conn));
}


function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
            nama LIKE '%$keyword%' OR nis LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR jeniskelamin LIKE '%$keyword%'
                ";
    return query($query);
}

function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user_crud WHERE username = '$username'");

    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username sudah terpakai !')
            </script>";

        return false;
    }

    if($password !== $password2) {
        echo "<script>
                alert('Password tidak sesuai !')
            </script>";

        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

   $query = "INSERT INTO user_crud VALUES
            ('', '$username', '$password')
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);



}



?>