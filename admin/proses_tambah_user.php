<?php
include '../koneksi.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
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
		header("location:tambah_user.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:tambah_user.php?alert=gagal_ektensi");			
		}else{		
			move_uploaded_file($tmp, '../user/file/profil/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"INSERT INTO users VALUES('$nip', '$x', '$nama','$email','$password','$alamat','$no_telp','$jk','$typeuser')");
			header("location:data_user.php?alert=tambah_user");
		}
	}
}