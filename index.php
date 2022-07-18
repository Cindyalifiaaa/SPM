<?php
require_once('koneksi.php');
$halaman = "bulin";
require_once('cek-login.php');
if ($sessionStatus==false) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="bungkus">
		<?php 
		require('komponen/sidebar.php');
		require('komponen/nav-spm.php');
		?>

		<div class="konten">


			<h4>Data SPM Ibu Bersalin</h4>
			<?php
			$query = "SELECT * FROM tb_bulin";
			$result = mysqli_query($db,$query);

			?>
			<table border="1">
				<tr>
					<th>Asembagus</th>
					<th>Gudang</th>
					<th>Wringin Anom</th>
					<th>Trigonco</th>
					<th>Perante</th>
					<th>Awar-awar</th>
					<th>Kedunglo</th>
					<th>Bantal</th>
					<th>Kertosari</th>
					<th>Mojosari</th>
					<th>PKM Induk</th>
					<th>Luar Wilayah</th>
					<th>Bulan</th>
					<th>#</th>
				</tr>

				<?php
				foreach ($result as $bulin) {

					?>
					<tr>
						<td><?php echo $bulin['asembagus'];?></td>
						<td><?php echo $bulin['gudang'];?></td>
						<td><?php echo $bulin['wringin'];?></td>
						<td><?php echo $bulin['trigonco'];?></td>
						<td><?php echo $bulin['perante'];?></td>
						<td><?php echo $bulin['awar'];?></td>
						<td><?php echo $bulin['kedunglo'];?></td>
						<td><?php echo $bulin['bantal'];?></td>
						<td><?php echo $bulin['kertosari'];?></td>
						<td><?php echo $bulin['mojosari'];?></td>
						<td><?php echo $bulin['pkm_induk'];?></td>
						<td><?php echo $bulin['luar_wilayah'];?></td>
						<td><?php echo $bulin['bulan'];?></td>
						<td><a href="edit_bulin.php?id=<?php echo $bulin['id'];?>">Edit</a></td>
					</tr>
				<?php } ?>
			</table>

			<?php
			$query2 = "SELECT SUM(asembagus) AS jml_asembagus,SUM(gudang) AS jml_gudang,SUM(wringin) AS jml_wringin,SUM(trigonco) AS jml_trigonco,SUM(perante) AS jml_perante,SUM(awar) AS jml_awar,SUM(kedunglo) AS jml_kedunglo,SUM(bantal) AS jml_bantal,SUM(kertosari) AS jml_kertosari,SUM(mojosari) AS jml_mojosari,SUM(pkm_induk) AS jml_pkm_induk,SUM(luar_wilayah) AS jml_luar_wilayah,SUM(luar_wilayah) AS jml_luar_wilayah FROM tb_bulin WHERE id BETWEEN '1' AND '3'";
			$result2 = mysqli_query($db,$query2);
			$jml_data = mysqli_num_rows($result2);
			if ($jml_data == 0) {
				$jml_asembagus = 0;
				$jml_gudang = 0;		
				$jml_wringin = 0;			
				$jml_trigonco =	0;			
				$jml_perante = 0;			
				$jml_awar = 0;
				$jml_kedunglo =	0;			
				$jml_bantal = 0;		
				$jml_kertosari = 0;
				$jml_mojosari =	0;			
				$jml_pkm_induk = 0;
				$jml_luar_wilayah = 0;
			}else{

				foreach ($result2 as $jml_bulin) {
					$jml_asembagus = $jml_bulin['jml_asembagus'];
					$jml_gudang = $jml_bulin['jml_gudang'];
					$jml_wringin = $jml_bulin['jml_wringin'];
					$jml_trigonco = $jml_bulin['jml_trigonco'];
					$jml_perante = $jml_bulin['jml_perante'];
					$jml_awar = $jml_bulin['jml_awar'];
					$jml_kedunglo = $jml_bulin['jml_kedunglo'];
					$jml_bantal = $jml_bulin['jml_bantal'];
					$jml_kertosari = $jml_bulin['jml_kertosari'];
					$jml_mojosari = $jml_bulin['jml_mojosari'];
					$jml_pkm_induk = $jml_bulin['jml_pkm_induk'];
					$jml_luar_wilayah = $jml_bulin['jml_luar_wilayah'];
				}
			}

			// batas data
			$query3 = "SELECT SUM(asembagus) AS jml_asembagus,SUM(gudang) AS jml_gudang,SUM(wringin) AS jml_wringin,SUM(trigonco) AS jml_trigonco,SUM(perante) AS jml_perante,SUM(awar) AS jml_awar,SUM(kedunglo) AS jml_kedunglo,SUM(bantal) AS jml_bantal,SUM(kertosari) AS jml_kertosari,SUM(mojosari) AS jml_mojosari,SUM(pkm_induk) AS jml_pkm_induk,SUM(luar_wilayah) AS jml_luar_wilayah,SUM(luar_wilayah) AS jml_luar_wilayah FROM tb_bulin WHERE id BETWEEN '4' AND '6'";
			$result3 = mysqli_query($db,$query3);

			$jml_data2 = mysqli_num_rows($result3);
			if ($jml_data2 == 0) {
				$jml_asembagus2 = 0;
				$jml_gudang2 = 0;		
				$jml_wringin2 = 0;			
				$jml_trigonco2 =	0;			
				$jml_perante2 = 0;			
				$jml_awar2 = 0;
				$jml_kedunglo2 =	0;			
				$jml_bantal2 = 0;		
				$jml_kertosari2 = 0;
				$jml_mojosari2 =	0;			
				$jml_pkm_induk2 = 0;
				$jml_luar_wilayah2 = 0;
			}else{

				foreach ($result3 as $jml_bulin2) {
					$jml_asembagus2 = $jml_bulin2['jml_asembagus'];
					$jml_gudang2 = $jml_bulin2['jml_gudang'];
					$jml_wringin2 = $jml_bulin2['jml_wringin'];
					$jml_trigonco2 = $jml_bulin2['jml_trigonco'];
					$jml_perante2 = $jml_bulin2['jml_perante'];
					$jml_awar2 = $jml_bulin2['jml_awar'];
					$jml_kedunglo2 = $jml_bulin2['jml_kedunglo'];
					$jml_bantal2 = $jml_bulin2['jml_bantal'];
					$jml_kertosari2 = $jml_bulin2['jml_kertosari'];
					$jml_mojosari2 = $jml_bulin2['jml_mojosari'];
					$jml_pkm_induk2 = $jml_bulin2['jml_pkm_induk'];
					$jml_luar_wilayah2 = $jml_bulin2['jml_luar_wilayah'];
				}
			}

			// batas data
			$query4 = "SELECT SUM(asembagus) AS jml_asembagus,SUM(gudang) AS jml_gudang,SUM(wringin) AS jml_wringin,SUM(trigonco) AS jml_trigonco,SUM(perante) AS jml_perante,SUM(awar) AS jml_awar,SUM(kedunglo) AS jml_kedunglo,SUM(bantal) AS jml_bantal,SUM(kertosari) AS jml_kertosari,SUM(mojosari) AS jml_mojosari,SUM(pkm_induk) AS jml_pkm_induk,SUM(luar_wilayah) AS jml_luar_wilayah,SUM(luar_wilayah) AS jml_luar_wilayah FROM tb_bulin WHERE id BETWEEN '7' AND '9'";
			$result4 = mysqli_query($db,$query4);

			$jml_data3 = mysqli_num_rows($result4);
			if ($jml_data3 == 0) {
				$jml_asembagus3 = 0;
				$jml_gudang3 = 0;		
				$jml_wringin3 = 0;			
				$jml_trigonco3 =	0;			
				$jml_perante3 = 0;			
				$jml_awar3 = 0;
				$jml_kedunglo3 =	0;			
				$jml_bantal3 = 0;		
				$jml_kertosari3 = 0;
				$jml_mojosari3 =	0;			
				$jml_pkm_induk3 = 0;
				$jml_luar_wilayah3 = 0;
			}else{

				foreach ($result4 as $jml_bulin3) {
					$jml_asembagus3 = $jml_bulin3['jml_asembagus'];
					$jml_gudang3 = $jml_bulin3['jml_gudang'];
					$jml_wringin3 = $jml_bulin3['jml_wringin'];
					$jml_trigonco3 = $jml_bulin3['jml_trigonco'];
					$jml_perante3 = $jml_bulin3['jml_perante'];
					$jml_awar3 = $jml_bulin3['jml_awar'];
					$jml_kedunglo3 = $jml_bulin3['jml_kedunglo'];
					$jml_bantal3 = $jml_bulin3['jml_bantal'];
					$jml_kertosari3 = $jml_bulin3['jml_kertosari'];
					$jml_mojosari3 = $jml_bulin3['jml_mojosari'];
					$jml_pkm_induk3 = $jml_bulin3['jml_pkm_induk'];
					$jml_luar_wilayah3 = $jml_bulin3['jml_luar_wilayah'];
				}
			}

			// batas data
			$query5 = "SELECT SUM(asembagus) AS jml_asembagus,SUM(gudang) AS jml_gudang,SUM(wringin) AS jml_wringin,SUM(trigonco) AS jml_trigonco,SUM(perante) AS jml_perante,SUM(awar) AS jml_awar,SUM(kedunglo) AS jml_kedunglo,SUM(bantal) AS jml_bantal,SUM(kertosari) AS jml_kertosari,SUM(mojosari) AS jml_mojosari,SUM(pkm_induk) AS jml_pkm_induk,SUM(luar_wilayah) AS jml_luar_wilayah,SUM(luar_wilayah) AS jml_luar_wilayah FROM tb_bulin WHERE id BETWEEN '10' AND '12'";
			$result5 = mysqli_query($db,$query5);

			$jml_data4 = mysqli_num_rows($result5);
			if ($jml_data4 == 0) {
				$jml_asembagus4 = 0;
				$jml_gudang4 = 0;		
				$jml_wringin4 = 0;			
				$jml_trigonco4 =	0;			
				$jml_perante4 = 0;			
				$jml_awar4 = 0;
				$jml_kedunglo4 =	0;			
				$jml_bantal4 = 0;		
				$jml_kertosari4 = 0;
				$jml_mojosari4 =	0;			
				$jml_pkm_induk4 = 0;
				$jml_luar_wilayah4 = 0;
			}else{

				foreach ($result5 as $jml_bulin4) {
					$jml_asembagus4 = $jml_bulin4['jml_asembagus'];
					$jml_gudang4 = $jml_bulin4['jml_gudang'];
					$jml_wringin4 = $jml_bulin4['jml_wringin'];
					$jml_trigonco4 = $jml_bulin4['jml_trigonco'];
					$jml_perante4 = $jml_bulin4['jml_perante'];
					$jml_awar4 = $jml_bulin4['jml_awar'];
					$jml_kedunglo4 = $jml_bulin4['jml_kedunglo'];
					$jml_bantal4 = $jml_bulin4['jml_bantal'];
					$jml_kertosari4 = $jml_bulin4['jml_kertosari'];
					$jml_mojosari4 = $jml_bulin4['jml_mojosari'];
					$jml_pkm_induk4 = $jml_bulin4['jml_pkm_induk'];
					$jml_luar_wilayah4 = $jml_bulin4['jml_luar_wilayah'];
				}
			}


			$s_asembagus = 91; 
			$s_gudang = 61; 
			$s_wringin = 69; 
			$s_trigonco = 56; 
			$s_perante = 67; 
			$s_awar = 50; 
			$s_kedunglo = 67; 
			$s_bantal = 62; 
			$s_kertosari = 65; 
			$s_mojosari = 57;
			$s_pkm_induk = 0; 
			$s_luar_wilayah = 0; 

			?>

			<div class="laporanTW" style="margin-top: 20px; display: flex; flex-direction: column;">

				<h4 style="text-align: center;" >Laporan</h4>

				<div class="tw1" style="width: 300px; text-align: center;">

					<table border="1">
						<tr>
							<th rowspan="2">Desa</th>
							<th rowspan="2">Sasaran</th>
							<th rowspan="14"></th>
							<th colspan="3"> Triwulan Pertama</th>
							<th rowspan="14"></th>
							<th colspan="3"> Triwulan Kedua</th>
							<th rowspan="14"></th>
							<th colspan="3"> Triwulan Ketiga</th>
							<th rowspan="14"></th>
							<th colspan="3"> Triwulan Keempat</th>
						</tr>
						<tr>
							<th>Jumlah</th>
							<th>Jumlah Total</th>
							<th>%</th>
							<!-- batas -->
							<th>Jumlah</th>
							<th>Jumlah Total</th>
							<th>%</th>
							<!-- batas -->
							<th>Jumlah</th>
							<th>Jumlah Total</th>
							<th>%</th>
							<!-- batas -->
							<th>Jumlah</th>
							<th>Jumlah Total</th>
							<th>%</th>
						</tr>
						<tr>
							<td>Asembagus</td>
							<td><?=$s_asembagus?></td>
							<td> <?=$jml_bulin['jml_asembagus']?></td>
							
							<!-- data 1 -->
							<td><?=$jml_asembagus?></td>
							<?$persen = ($jml_asembagus/$s_asembagus)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!-- data 2 -->
							<td> <?echo $jml_asembagus2?></td>
							<?$totalT2 = $jml_asembagus2+$jml_asembagus;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_asembagus)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!-- data 3 -->
							<td> <?echo $jml_asembagus3?></td>
							<?$totalT3 = $jml_asembagus3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_asembagus)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>

							<!-- data 4 -->
							<td> <?echo $jml_asembagus4?></td>
							<?$totalT4 = $jml_asembagus4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_asembagus)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
						</tr>
						<tr>
							<td>Gudang</td>
							<td><?=$s_gudang?></td>
							<td> <?=$jml_bulin['jml_gudang']?></td>
							
							<!-- data 1 -->
							<td><?=$jml_gudang?></td>
							<?$persen = ($jml_gudang/$s_gudang)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>

							<!-- data 2 -->
							<td> <?echo $jml_gudang2?></td>
							<?$totalT2 = $jml_gudang2+$jml_gudang;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_gudang)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!-- data 3 -->
							<td> <?echo $jml_gudang3?></td>
							<?$totalT3 = $jml_gudang3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_gudang)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>

							<!-- data 4 -->
							<td> <?echo $jml_gudang4?></td>
							<?$totalT4 = $jml_gudang4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_gudang)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
						</tr>
						<tr>
							<td>Wringin</td>
							<td><?=$s_wringin?></td>
							<td> <?=$jml_bulin['jml_wringin']?></td>
							
							<!--data 1 -->
							<td><?=$jml_wringin?></td>
							<?$persen = ($jml_wringin/$s_wringin)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>

							<!--data 2 -->
							<td> <?echo $jml_wringin2?></td>
							<?$totalT2 = $jml_wringin2+$jml_wringin;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_wringin)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!-- data 3 -->
							<td> <?echo $jml_wringin3?></td>
							<?$totalT3 = $jml_wringin3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_wringin)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_wringin4?></td>
							<?$totalT4 = $jml_wringin4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_wringin)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>

						</tr>
						<tr>
							<td>Trigonco</td>
							<td><?=$s_trigonco?></td>
							<td><?=$jml_bulin['jml_trigonco']?></td>
							
							<!--data 1 -->
							<td><?=$jml_trigonco?></td>
							<?$persen = ($jml_trigonco/$s_trigonco)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!--data 2 -->
							<td> <?echo $jml_trigonco2?></td>
							<?$totalT2 = $jml_trigonco2+$jml_trigonco;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_trigonco)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_trigonco3?></td>
							<?$totalT3 = $jml_trigonco3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_trigonco)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_trigonco4?></td>
							<?$totalT4 = $jml_trigonco4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_trigonco)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
							
						</tr>
						<tr>
							<td>Perante</td>
							<td><?=$s_perante?></td>
							<td> <?=$jml_bulin['jml_perante']?></td>
							<!--data 1 -->
							<td><?=$jml_perante?></td>
							<?$persen = ($jml_perante/$s_perante)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!--data 2 -->
							<td> <?echo $jml_perante2?></td>
							<?$totalT2 = $jml_perante2+$jml_perante;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_perante)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_perante3?></td>
							<?$totalT3 = $jml_perante3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_perante)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_perante4?></td>
							<?$totalT4 = $jml_perante4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_perante)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
							
						</tr>
						<tr>
							<td>Awar</td>
							<td><?=$s_awar?></td>
							<td> <?=$jml_bulin['jml_awar']?></td>
							
							<!--data 1 -->
							<td><?=$jml_awar?></td>
							<?$persen = ($jml_awar/$s_awar)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!--data 2 -->
							<td> <?echo $jml_awar2?></td>
							<?$totalT2 = $jml_awar2+$jml_awar;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_awar)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_awar3?></td>
							<?$totalT3 = $jml_awar3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_awar)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_awar4?></td>
							<?$totalT4 = $jml_awar4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_awar)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
						</tr>
						<tr>
							<td>Kedunglo</td>
							<td><?=$s_kedunglo?></td>
							<td> <?=$jml_bulin['jml_kedunglo']?></td>
							
							<!--data 1 -->
							<td><?=$jml_kedunglo?></td>
							<?$persen = ($jml_kedunglo/$s_kedunglo)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!--data 2 -->
							<td> <?echo $jml_kedunglo2?></td>
							<?$totalT2 = $jml_kedunglo2+$jml_kedunglo;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_kedunglo)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_kedunglo3?></td>
							<?$totalT3 = $jml_kedunglo3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_kedunglo)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_kedunglo4?></td>
							<?$totalT4 = $jml_kedunglo4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_kedunglo)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
						</tr>
						<tr>
							<td>Bantal</td>
							<td><?=$s_bantal?></td>
							<td> <?=$jml_bulin['jml_bantal']?></td>
							
							<!--data 1 -->
							<td><?=$jml_bantal?></td>
							<?$persen = ($jml_bantal/$s_bantal)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!--data 2 -->
							<td> <?echo $jml_bantal2?></td>
							<?$totalT2 = $jml_bantal2+$jml_bantal;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_bantal)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_bantal3?></td>
							<?$totalT3 = $jml_bantal3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_bantal)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_bantal4?></td>
							<?$totalT4 = $jml_bantal4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_bantal)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
							
						</tr>
						<tr>
							<td>Kertosari</td>
							<td><?=$s_kertosari?></td>
							<td> <?=$jml_bulin['jml_kertosari']?></td>
							
							<!--data 1 -->
							<td><?=$jml_kertosari?></td>
							<?$persen = ($jml_kertosari/$s_kertosari)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>

							<!--data 2 -->
							<td> <?echo $jml_kertosari2?></td>
							<?$totalT2 = $jml_kertosari2+$jml_kertosari;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_kertosari)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_kertosari3?></td>
							<?$totalT3 = $jml_kertosari3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_kertosari)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_kertosari4?></td>
							<?$totalT4 = $jml_kertosari4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_kertosari)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>

						</tr>
						<tr>
							<td>Mojosari</td>
							<td><?=$s_mojosari?></td>
							<td> <?=$jml_bulin['jml_mojosari']?></td>
							
							<!--data 1 -->
							<td><?=$jml_mojosari?></td>
							<?$persen = ($jml_mojosari/$s_mojosari)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!--data 2 -->
							<td> <?echo $jml_mojosari2?></td>
							<?$totalT2 = $jml_mojosari2+$jml_mojosari;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = ($totalT2/$s_mojosari)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_mojosari3?></td>
							<?$totalT3 = $jml_mojosari3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = ($totalT3/$s_mojosari)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_mojosari4?></td>
							<?$totalT4 = $jml_mojosari4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = ($totalT4/$s_mojosari)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>
							
						</tr>
						<tr>
							<td>PKM Induk</td>
							<td><? echo "$s_pkm_induk";?></td>
							<!-- data 1 -->
							<td> <?=$jml_pkm_induk?></td>
							<td><?=$jml_pkm_induk?></td>
							<?$persen = @($jml_pkm_induk/$s_pkm_induk)*100;
							?>
							<td><? echo "".round($persen,2)."%" ?></td>

							<!--data 2 -->
							<td> <?echo $jml_pkm_induk2?></td>
							<?$totalT2 = $jml_pkm_induk2+$jml_pkm_induk;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = @($totalT2/$s_pkm_induk)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_pkm_induk3?></td>
							<?$totalT3 = $jml_pkm_induk3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = @($totalT3/$s_pkm_induk)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_pkm_induk4?></td>
							<?$totalT4 = $jml_pkm_induk4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = @($totalT4/$s_pkm_induk)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>

						</tr>
						<tr>
							<td>Luar Wilayah</td>
							<td><? echo "$s_luar_wilayah";?></td>
							<!-- data 1 -->
							<td> <?=$jml_luar_wilayah?></td>
							<td><?=$jml_luar_wilayah?></td>
							<?$persen = @($jml_luar_wilayah/$s_luar_wilayah)*100;?>
							<td><? echo "".round($persen,2)."%" ?></td>
							
							<!--data 2 -->
							<td> <?echo $jml_luar_wilayah2?></td>
							<?$totalT2 = $jml_luar_wilayah2+$jml_luar_wilayah;?>
							<td><?=$totalT2?></td>
							<?
							$persen2 = @($totalT2/$s_luar_wilayah)*100;
							?>
							<td><? echo "".round($persen2,2)."%" ?></td>

							<!--data 3 -->
							<td> <?echo $jml_luar_wilayah3?></td>
							<?$totalT3 = $jml_luar_wilayah3+$totalT2;?>
							<td><?=$totalT3?></td>
							<?
							$persen3 = @($totalT3/$s_luar_wilayah)*100;
							?>
							<td><? echo "".round($persen3,2)."%" ?></td>
							
							<!-- data 4 -->
							<td> <?echo $jml_luar_wilayah4?></td>
							<?$totalT4 = $jml_luar_wilayah4+$totalT3;?>
							<td><?=$totalT4?></td>
							<?
							$persen4 = @($totalT4/$s_luar_wilayah)*100;
							?>
							<td><? echo "".round($persen4,2)."%" ?></td>

						</table>
					</div>

				</div>

			</div>


		</div>
	</body>
	</html>