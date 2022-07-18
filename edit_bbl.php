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
	<title>Edit BBL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="bungkus">
		<?php require('komponen/sidebar.php');?>
		
		<div class="konten edit-bulin">
			<?php
			$query = "SELECT * FROM tb_bbl WHERE id = $id";
			$result = mysqli_query($db,$query);

			$data = mysqli_fetch_assoc($result);

			?>
			<h4>Edit Data BBL Bulan <?php echo ucwords($data['bulan']);?></h4>
			
			<form action="bbl_controller.php" method="POST">
				
				<input type="text" name="bulan" value="<?php echo $data['bulan'];?>" hidden>
				<input type="text" name="id" value="<?php echo $id;?>" hidden>

				<div class="form-control">
					<label>asembagus</label>
					<input type="number" name="asembagus" value="<?php echo $data['asembagus'];?>">
				</div>

				<div class="form-control">
					<label>gudang</label>
					<input type="number" name="gudang" value="<?php echo $data['gudang'];?>">
				</div>

				<div class="form-control">
					<label>wringin</label>
					<input type="number" name="wringin" value="<?php echo $data['wringin'];?>">
				</div>

				<div class="form-control">
					<label>trigonco</label>
					<input type="number" name="trigonco" value="<?php echo $data['trigonco'];?>">
				</div>

				<div class="form-control">
					<label>perante</label>
					<input type="number" name="perante" value="<?php echo $data['perante'];?>">
				</div>

				<div class="form-control">
					<label>Awar-awar</label>
					<input type="number" name="awar" value="<?php echo $data['awar'];?>">
				</div>

				<div class="form-control">
					<label>Kedunglo</label>
					<input type="number" name="kedunglo" value="<?php echo $data['kedunglo'];?>">
				</div>

				<div class="form-control">
					<label>bantal</label>
					<input type="number" name="bantal" value="<?php echo $data['bantal'];?>">
				</div>

				<div class="form-control">
					<label>kertosari</label>
					<input type="number" name="kertosari" value="<?php echo $data['kertosari'];?>">
				</div>

				<div class="form-control">
					<label>mojosari</label>
					<input type="number" name="mojosari" value="<?php echo $data['mojosari'];?>">
				</div>

				<div class="form-control">
					<label>PKM Induk</label>
					<input type="number" name="pkm_induk" value="<?php echo $data['pkm_induk'];?>">
				</div>

				<div class="form-control">
					<label>Luar Wilayah</label>
					<input type="number" name="luar_wilayah" value="<?php echo $data['luar_wilayah'];?>">
				</div>

				<input type="submit" name="submit" value="Simpan">

			</form>

		</div>
	</div>
</body>
</html>