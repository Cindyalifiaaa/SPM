<?php
require_once('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rekap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="bungkus">
		<?php 
		require('komponen/sidebar.php');
		?>

		<div class="konten" style="margin-top: 0px; ">

			<h4>Hasil Rekap</h4>

			<table border="1">
				<tr>
					<th rowspan="2">No</th>
					<th rowspan="2" style="min-width: 150px;">Jenis Layanan Dasar</th>
					<th rowspan="2">Target 1 Tahun</th>
					<th rowspan="2">Sasaran 1 Tahun</th>
					<?php
					for ($i=1; $i < 13; $i++) { 
						switch ($i) {
							case '1':
							$bulan = "Januari";
							break;
							case '2':
							$bulan = "Februari";
							break;
							case '3':
							$bulan = "Maret";
							break;
							case '4':
							$bulan = "April";
							break;
							case '5':
							$bulan = "Mei";
							break;
							case '6':
							$bulan = "Juni";
							break;
							case '7':
							$bulan = "Juli";
							break;
							case '8':
							$bulan = "Agustus";
							break;
							case '9':
							$bulan = "September";
							break;
							case '10':
							$bulan = "Oktober";
							break;
							case '11':
							$bulan = "November";
							break;
							case '12':
							$bulan = "Desember";
							break;
							?>
						<?php } ?>

						<th colspan="4"><?php echo $bulan?></th>
					<?php } ?>

				</tr>
				
				<tr>
					<?php
					for ($i=1; $i < 13; $i++){?>

						<th>Target s/d Bln Ini</th>
						<th>Reaisasi s/d Bln Ini</th>
						<th>%</th>
						<th>Ket</th>

					<?php }
					?>
				</tr>

				<?php
				

				for ($i=1; $i < 13; $i++) { 

					switch ($i) {
						case '1':
						$layanan = "Pelayanan Kesehatan Ibu Hamil";
						$s_tahun = 676;
						$jenis = "tb_bumil";

						break;
						case '2':
						$layanan = "Pelayanan Kesehatan Ibu Bersalin";
						$s_tahun = 645;
						$jenis = "tb_bulin";
						break;
						case '3':
						$layanan = "Pelayanan Kesehatan Bayi Baru Lahir";
						$s_tahun = 574;
						$jenis = "tb_bbl";
						break;
						case '4':
						$layanan = "Pelayanan Kesehatan Balita";
						$s_tahun = 2352;
						$jenis = "tb_balita";
						break;
						case '5':
						$layanan = "Pelayanan Kesehatan Pada Usia Pendidikan Dasar";
						$s_tahun = 5636;
						$jenis = "tb_us";
						break;
						case '6':
						$layanan = "Pelayanan Kesehatan Usia Produktif";
						$s_tahun = 33081;
						$jenis = "tb_uspro";
						break;
						case '7':
						$layanan = "Pelayanan Kesehatan Usia Lanjut";
						$s_tahun = 8264;
						$jenis = "tb_lansia";
						break;
						case '8':
						$layanan = "Pelayanan Kesehatan Penderita Hipertensi";
						$s_tahun = 10858;
						$jenis = "tb_ht";
						break;
						case '9':
						$layanan = "Pelayanan Kesehatan Penderita Diabetes Mellitus";
						$s_tahun = 1283;
						$jenis = "tb_dm";
						break;
						case '10':
						$layanan = "Pelayanan Kesehatan ODGJ";
						$s_tahun = 96;
						$jenis = "tb_odgj";
						break;
						case '11':
						$layanan = "Pelayanan Kesehatan Orang dengan TB";
						$s_tahun = 678;
						$jenis = "tb_tb";
						break;
						case '12':
						$layanan = "Pelayanan Kesehatan Dengan Resiko Terinfekssi HIV";
						$s_tahun = 789;
						$jenis = "tb_hiv";
						break;
					}

					?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $layanan;?></td>
						<td><?php echo "100%";?></td>
						<td><?php echo $s_tahun;?></td>
						<?php
						for ($y=1; $y < 13; $y++) {

							switch ($y) {
								case '1':
								$target = 8.33;
								$ganti_bulan = "januari";
								break;
								case '2':
								$target = 16.67;
								$ganti_bulan = "februari";
								break;
								case '3':
								$target = 25;
								$ganti_bulan = "maret";
								break;
								case '4':
								$target = 33.33;
								$ganti_bulan = "april";
								break;
								case '5':
								$target = 41.67;
								$ganti_bulan = "mei";
								break;
								case '6':
								$target = 50;
								$ganti_bulan = "juni";
								break;
								case '7':
								$target = 58.33;
								$ganti_bulan = "juli";
								break;
								case '8':
								$target = 66.67;
								$ganti_bulan = "agustus";
								break;
								case '9':
								$target = 75;
								$ganti_bulan = "september";
								break;
								case '10':
								$target = 83.33;
								$ganti_bulan = "oktober";
								break;
								case '11':
								$target = 91.67;
								$ganti_bulan = "november";
								break;
								case '12':
								$target = 100;
								$ganti_bulan = "desember";
								break;

							}

							$query = "SELECT * FROM $jenis WHERE bulan = '$ganti_bulan'";
							$result = mysqli_query($db,$query);

							$r = mysqli_fetch_assoc($result);

							$sum = $r['asembagus']+$r['gudang']+$r['wringin']+$r['trigonco']+$r['perante']+$r['awar']+$r['kedunglo']+$r['bantal']+$r['kertosari']+$r['mojosari']+$r['pkm_induk']+$r['luar_wilayah'];
							
							if ($ganti_bulan == "januari") {
								$total = $sum;
							}else{

								$total += $sum;
							}

							$persen_target = ($total/$s_tahun)*100;

							if ($target >= $persen_target) {
								$ket_sasaran = "Tidak Tercapai";
							}else{
								$ket_sasaran = "Tercapai";
							}

							if ($persen_target>100) {
								$persen_target = 100;
							}

							?>
							<td style="min-width: 55px;"><?php echo "$target %";?></td>
							<td><?php echo $total;?></td>
							<td><?php echo "".round($persen_target,2)."%";?></td>
							<td><?php echo $ket_sasaran?></td>

							<?php


						} ?>
					</tr>
				<?php } ?>

				<tr>
					<td colspan="4">Rata Rata Capaian SPM</td>
					<?php for ($x=1; $x < 13 ; $x++) { ?>

						<td colspan="4"><?php echo "".round($persen_target,2)."%";;?></td>
					<?php } ?>

				</tr>

				<tr>
					<td colspan="4">Pencapaian Jenis Layanan Dasar SPM</td>
					<?php for ($x=1; $x < 13 ; $x++) { ?>

						<td colspan="4"></td>
					<?php } ?>

				</tr>

			</table>
		</div>
	</div>
</body>
</html>