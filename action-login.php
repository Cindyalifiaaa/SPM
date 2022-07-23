<?php
require_once('koneksi.php');

// mamvalidasi inputan
if (isset($_POST['username'])) {
	$username=$_POST['username'];
}
else{
	echo "error username";
}
if (isset($_POST['password'])) {
	$password=$_POST['password'];
}
else{
	echo "error password";
}
// end validasi

// hasing password
$password=hash("sha256", $password);

// menyiapkan Query MySQL untuk dieksekusi
$query="SELECT * FROM tb_akun WHERE username='{$username}'";

// mengekesekusi MySQL Query
$result=mysqli_query($db,$query);

// karena pemanggilan data hanya satu, maka menggunakan syntax di bawah ini. (intinya tidak menggunkan perulangan foreach)
$data=mysqli_fetch_assoc($result);

// deteksi data jika isinya tidak ada
if (is_null($data)) {
	echo "Data akun tidak ditemukan<a href='login.php'>Kembali</a>";
	exit();
} //cek password yang dimasukkan sama dengan yang ada di database, jika tidak diarahkan kembali ke login
else if( $data['password'] != $password){
	echo "password salah <a href='login.php'>Kemblai</a>";
	exit();
}
else{
	// memulai fungsi SESSION, session hanya dapat digunakan setelah fungsi ini
	session_start();

	// status login dikonfirmasi benar
	$_SESSION['status']=true;

	header('Location: index.php');
}

?>