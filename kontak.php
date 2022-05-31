<?php
    include 'koneksi.php';

    $nm = $_POST['nama'];
    $email = $_POST['email'];
    $subj = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    $kontak = mysqli_query($koneksi, "insert into kontak values('','$nm','$email','$subj','$pesan','')");

    if ($kontak) {
    }
?>
