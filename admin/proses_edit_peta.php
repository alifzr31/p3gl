<?php
include '../koneksi.php';
session_start();

$id = $_POST['id'];
$judul = $_POST['judul'];
$lokasi = $_POST['lokasi'];
$skala = $_POST['skala'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];

$limit = 10 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg');
$jumlahFile = count($_FILES['foto']['name']);

for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['foto']['name'][$x];
	$tmp = $_FILES['foto']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'][$x];	
	if($ukuran > $limit){
		header("location:tambah_peta.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:tambah_peta.php?alert=gagal_ektensi");			
		}else{		
			move_uploaded_file($tmp, 'peta/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"UPDATE peta SET id='$id', gambar='$x', judul='$judul', lokasi='$lokasi', skala='$skala', penulis='$penulis', tahun='$tahun', kategori='$kategori' where id='$id'");
			header("location:data_peta.php?alert=simpan");
		}
	}
}