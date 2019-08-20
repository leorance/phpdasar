<?php 
    require 'function.php';
    session_start();
    $id = $_GET['id'];
    $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
    if(isset($_POST['btn-ok'])){
        if (ubah($_POST)) {
            $_SESSION['ok'] = true;
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
    <title>Edit mahasiswa</title>
</head>
    <h1>Ubah data mahasiswa</h1>
    <a href="index.php">Kembali ke Halaman awal</a>
<body>
    <form action="" method="post">
        <table cellpadding="4px;">
        <?php foreach ($mahasiswa as $mhs) : ?>
            <input type="hidden" value="<?= $mhs['id']; ?>" name="id">
            <tr>
                <th>Nama : </th>
                <td><input type="text" value="<?= $mhs['nama']; ?>" name="nama"></td>
            </tr>
            <tr>
                <th>Nim : </th>
                <td><input type="text" value="<?= $mhs['nim']; ?>" name="nim"></td>
            </tr>
            <tr>
                <th>Jurusan : </th>
                <td><input type="text" value="<?= $mhs['jurusan']; ?>" name="jurusan"></td>
            </tr>
            <tr>
                <th>Email : </th>
                <td><input type="text" value="<?= $mhs['email']; ?>" name="email"></td>
            </tr>
        <?php endforeach;?>
            <tr>
                <td></td>
                <td><button type="submit" name="btn-ok">Update data mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>