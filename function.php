<?php 
    $conn = mysqli_connect("localhost", "root", "", "test");

    function ubah($data) {
        global $conn;

        $id      = $data['id'];
        $nama    = $data['nama'];
        $nim     = $data['nim'];
        $jurusan = $data['jurusan'];
        $email   = $data['email'];
        mysqli_query($conn, "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jurusan = '$jurusan', email = '$email' WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
    
    function add($data) {
        global $conn;

        $nama    = $data['nama'];
        $nim     = $data['nim'];
        $jurusan = $data['jurusan'];
        $email   = $data['email'];
        mysqli_query($conn, "INSERT INTO mahasiswa VALUES(0,'$nama','$nim','$jurusan','$email')");
        return mysqli_affected_rows($conn);
    }
?>