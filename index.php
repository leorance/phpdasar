<?php 
    require 'function.php';
    session_start();
    $rs = mysqli_query($conn, "SELECT * FROM mahasiswa GROUP BY nama ASC");
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman awal</title>
</head>
<body>
<?php if ($_SESSION['bye'] == true) : ?>
    <h4>Data berhasil dihapus</h4>
    <?php session_destroy(); ?>
<?php endif; ?>
<?php if ($_SESSION['sip'] == true) : ?>
    <h4>Data berhasil di tambahkan</h4>
    <?php session_destroy(); ?>
<?php endif; ?>
<?php if ($_SESSION['ok'] == true) : ?>
    <h4>Data berhasil di ubah</h4>
    <?php session_destroy(); ?>
<?php endif; ?>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Mahasiswa</a>
    <table border="1px;" cellspacing="" cellpadding="15px;">
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php $h=1 ?>
    <?php foreach ($rs as $mhs) : ?>
    <tr>
        <td><?= $h++ ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td>
            <a href="edit.php?id=<?= $mhs['id']; ?>">Edit</a> |
            <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('mau hapus data?');">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>