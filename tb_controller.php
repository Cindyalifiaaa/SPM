<?php
require_once('koneksi.php');
require_once('cek-login.php');
if ($sessionStatus==false) {
	header("Location: login.php");
}

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

$query = "UPDATE `tb_tb` SET `asembagus`='$asembagus',`gudang`='$gudang',`wringin`='$wringin',`trigonco`='$trigonco',`perante`='$perante',`awar`='$awar',`kedunglo`='$kedunglo',`bantal`='$bantal',`kertosari`='$kertosari',`mojosari`='$mojosari',`pkm_induk`='$pkm_induk',`luar_wilayah`='$luar_wilayah',`bulan`='$bulan' WHERE id = '$id'";
$update = mysqli_query($db,$query);

if ($update == "0") {
	echo "Gagal Update";
}else{
	header('Location: tb.php');
}
?>