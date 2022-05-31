<?php
    session_start();
    
    // menghubungkan php dengan koneksi database
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form login
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    
    // menyeleksi data users dengan email dan password yang sesuai
    $login = mysqli_query($koneksi,"select * from users where email='$email' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
 
    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        
	// cek jika user login sebagai admin
	if($data['typeuser']=="admin"){
 
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['typeuser'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");
 
	// cek jika user login sebagai user
	}else if($data['typeuser']=="user"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['typeuser'] = "user";
		// alihkan ke halaman dashboard user
		header("location:user/index.php");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
    }else{
        header("location:login.php?pesan=gagal");
    }
 
?>