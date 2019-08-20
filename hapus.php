<?php 
    require 'index.php';
    session_start();
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    $_SESSION['bye'] = true;
    header("Location: index.php");
?>