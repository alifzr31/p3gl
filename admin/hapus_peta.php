<?php
    include '../koneksi.php';
    session_start();

    $nip = $_GET['nip'];

    $hapus = mysqli_query($koneksi, "delete from users where nip='$nip'");
    if ($hapus) {
        header('Location:data_user.php?pesan=hapus_user');
    }
?>