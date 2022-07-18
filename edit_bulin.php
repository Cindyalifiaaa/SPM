<?php
require_once('koneksi.php');
require_once('cek-login.php');
if ($sessionStatus==false) {
	header("Location: login.php");
}

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit BULIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="bungkus">
		<?php require('komponen/sidebar.php');?>
		
		<div class="konten edit-bulin">
			<?php
			$query = "SELECT * FROM tb_bulin WHERE id = $id";
			$result = mysqli_query($db,$query);

			$bulin = mysqli_fetch_assoc($result);

			?>
			<h4>Edit Data Bulin Bulan <?php echo ucwords($bulin['bulan']);?></h4>
			
			<form action="bulin_controller.php" method="POST">
				
				<input type="text" name="bulan" value="<?php echo $bulin['bulan'];?>" hidden>
				<input type="text" name="id" value="<?php echo $id;?>" hidden>

				<div class="form-control">
					<label>asembagus</label>
					<input type="number" name="asembagus" value="<?php echo $bulin['asembagus'];?>">
				</div>

				<div class="form-control">
					<label>gudang</label>
					<input type="number" name="gudang" value="<?php echo $bulin['gudang'];?>">
				</div>

				<div class="form-control">
					<label>wringin</label>
					<input type="number" name="wringin" value="<?php echo $bulin['wringin'];?>">
				</div>

				<div class="form-control">
					<label>trigonco</label>
					<input type="number" name="trigonco" value="<?php echo $bulin['trigonco'];?>">
				</div>

				<div class="form-control">
					<label>perante</label>
					<input type="number" name="perante" value="<?php echo $bulin['perante'];?>">
				</div>

				<div class="form-control">
					<label>Awar-awar</label>
					<input type="number" name="awar" value="<?php echo $bulin['awar'];?>">
				</div>

				<div class="form-control">
					<label>Kedunglo</label>
					<input type="number" name="kedunglo" value="<?php echo $bulin['kedunglo'];?>">
				</div>

				<div class="form-control">
					<label>bantal</label>
					<input type="number" name="bantal" value="<?php echo $bulin['bantal'];?>">
				</div>

				<div class="form-control">
					<label>kertosari</label>
					<input type="number" name="kertosari" value="<?php echo $bulin['kertosari'];?>">
				</div>

				<div class="form-control">
					<label>mojosari</label>
					<input type="number" name="mojosari" value="<?php echo $bulin['mojosari'];?>">
				</div>

				<div class="form-control">
					<label>PKM Induk</label>
					<input type="number" name="pkm_induk" value="<?php echo $bulin['pkm_induk'];?>">
				</div>

				<div class="form-control">
					<label>Luar Wilayah</label>
					<input type="number" name="luar_wilayah" value="<?php echo $bulin['luar_wilayah'];?>">
				</div>

				<input type="submit" name="submit" value="Simpan">

			</form>

		</div>
	</div>
</body>
</html>