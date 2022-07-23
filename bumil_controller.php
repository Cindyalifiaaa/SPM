<?php
// panggil file koneksi
require_once('koneksi.php');
// panggil file cek login untuk mangambil nilai session status
require_once('cek-login.php');
// cek apakah nilai session status bernilai false, jika ya, maka dilempar ke login
if ($sessionStatus==false) {
	header("Location: login.php");
}

// isi nilai masing masing variabel dengan nilai yang sudah di inputkan ada form
$id = $_POST['id'];
$bulan = $_POST['bulan'];
$asembagus = $_POST['asembagus'];
$gudang = $_POST['gudang'];
$wringin = $_POST['wringin'];
$trigonco = $_POST['trigonco'];
$perante = $_POST['perante'];
$awar = $_POST['awar'];
$kedunglo = $_POST['kedunglo'];
$bantal = $_POST['bantal'];
$kertosari = $_POST['kertosari'];
$mojosari = $_POST['mojosari'];
$pkm_induk = $_POST['pkm_induk'];
$luar_wilayah = $_POST['luar_wilayah'];

// kemudian, ketik query untuk update dan isikan nilai sesuai variabel yang telah di buat
$query = "UPDATE `tb_bumil` SET `asembagus`='$asembagus',`gudang`='$gudang',`wringin`='$wringin',`trigonco`='$trigonco',`perante`='$perante',`awar`='$awar',`kedunglo`='$kedunglo',`bantal`='$bantal',`kertosari`='$kertosari',`mojosari`='$mojosari',`pkm_induk`='$pkm_induk',`luar_wilayah`='$luar_wilayah',`bulan`='$bulan' WHERE id = '$id'";
// eksekusi update ke database
$update = mysqli_query($db,$query);

// cek nilai $update apakah bernilai false, jika ya maka gagal untuk apdate. jika tidak diarahkan kembali ke file bumil.php
if ($update == "0") {
	echo "Gagal Update";
}else{
	header('Location: bumil.php');
}
?>