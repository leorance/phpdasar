<?php 
    require 'function.php';
    session_start();
    if (isset($_POST['btn-ok'])) {
        if (add($_POST)) {
            $_SESSION['sip'] = true;
            header("Location: index.php");
        } else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah mahasiswa</title>
</head>
<body>
<h1>Tambah data mahasiswa</h1>
<a href="index.php">Kembali ke Halaman awal</a>
    <form action="" method="post">
        <table cellpadding="10px">
            <tr>
                <td>Nama </td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nim </td>
                <td>: <input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Jurusan </td>
                <td>: <input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Email </td>
                <td>: <input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="btn-ok">Tambah data mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>