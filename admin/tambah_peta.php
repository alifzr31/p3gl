<html>
<head>
	<title>www.malasngoding.com - Upload multi file menggunakan php mysqli</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<?php
    include '../koneksi.php';

    $query = mysqli_query($koneksi, "SELECT max(id) as idTerbesar FROM peta");
    $data = mysqli_fetch_array($query);
    $idpeta = $data['idTerbesar'];

    $urutan = (int) substr($idpeta, 3, 3);

    $urutan++;

    $huruf = "PE";
    $idpeta = $huruf . sprintf("%03s", $urutan);
?>

<body>
	<div class="container">
		<h2 style="text-align: center;">UPLOAD PETA</h2>
		<?php
		if(isset($_GET['alert'])){
			if($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning">
					<strong>Warning!</strong> Ukuran File Terlalu Besar
				</div>
				<?php
			}elseif ($_GET['alert']=="gagal_ektensi") {
				?>
				<div class="alert alert-warning">
					<strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
				</div>
				<?php
			}elseif ($_GET['alert']=="simpan") {
				?>
				<div class="alert alert-success">
					<strong>Success!</strong> Gambar Berhasil Disimpan
				</div>
				<?php
			}				
		}
		?>
        <a href="index.php">Lihat data</a>
		<form action="proses_tambah_peta.php" method="post" enctype="multipart/form-data">			
        <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" value="<?php echo $idpeta; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" placeholder="Judul" required>
            </div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto[]" required="required"  multiple />
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
			</div>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" placeholder="Lokasi" required>
            </div>
            <div class="form-group">
                <label>Skala</label>
                <input type="number" name="skala" placeholder="Skala" required>
            </div>
            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" placeholder="Penulis" required>
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" name="tahun" placeholder="Tahun" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" required>
                    <option selected hidden disabled>Kategori</option>
                    <option value="sistematika">Sistematika</option>
                    <option value="tematik">Tematik</option>
                </select>
            </div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>
</body>
</html>