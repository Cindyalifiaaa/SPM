<?php
require_once('koneksi.php');
//cek apakah sudah login
require_once('cek-login.php');

// dapatken variable opsi
$opsi = $_GET['opsi'];

if ($opsi == "input") {

	if (isset($_POST['username'])) {
		$username=$_POST['username'];
	}
	else{
		echo "error username <a href='../daftar.php'>Kembali</a>"; //status error
	}

	if (isset($_POST['password'])) {
		$password=$_POST['password'];
	}
	else{
		echo "error password <a href='../daftar.php'>Kembali</a>";
	}

	if (isset($_POST['repassword'])) {
		$repassword=$_POST['repassword'];
	}
	else{
		echo "error re-password <a href='daftar.php'>Kembali</a>";
	}

// pengecekan password dan konfirmasi password
	if ($password != $repassword) {
		echo "password tidak sama, ulangi mengisi pendaftaran <a href='daftar.php'>Kembali</a>";
		exit();
	}
	else{
		$password=hash("sha256", $password);
	}

// menyiapkan Query MySQL untuk dieksekusi
	$query = "INSERT INTO tb_akun (username,password) VALUES ('$username','$password')";
// mengeksekusi MySQL Query
	$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
	if ($insert == false) {
		echo "Error Dalam Eksekusi Query. <a href='daftar.php'>Kembali</a>";
	}else{
		header("Location: daftar.php");
	}
}
?>