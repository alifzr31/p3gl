<?php
include '../koneksi.php';
session_start();

$email = $_SESSION['email'];
    
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$jk = $_POST['jk'];
$typeuser = $_POST['typeuser'];

$limit = 10 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg');
$jumlahFile = count($_FILES['foto']['name']);

for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['foto']['name'][$x];
	$tmp = $_FILES['foto']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'][$x];	
	if($ukuran > $limit){
		header("location:profil.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:profil.php?alert=gagal_ektensi");			
		}else{		
			move_uploaded_file($tmp, '../user/file/profil/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"update users set nip='$nip', gambar='$x', nama='$nama', alamat='$alamat', no_telp='$no_telp' where email='$email'");
			header("location:profil.php?email=$email&pesan=berhasil_edit");
		}
	}
}