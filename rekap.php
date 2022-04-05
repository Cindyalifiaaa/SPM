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

					// data array
					$array_persen = array();
					$array_capaian = array();

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
							
							// kondisi sum januari
							if ($ganti_bulan == "januari") {
								
								$total = $sum;

							}else{

								$total += $sum;
							}

							$persen_target = ($total/$s_tahun)*100;



							if ($target >= $persen_target) {
								$ket_sasaran = "Tidak Tercapai";
								$nilai_capaian = 0;
							}else{
								$ket_sasaran = "Tercapai";
								$nilai_capaian = 1;
							}

							if ($persen_target>100) {
								$persen_target = 100;
							}


							// push data nilai array persen
							array_push($array_persen, $persen_target);
							
							// push data nilai array persen
							array_push($array_capaian, $nilai_capaian);

							?>
							<td style="min-width: 55px;"><?php echo "$target %";?></td>
							<td><?php echo $total;?></td>
							<td><?php echo "".round($persen_target,2)."%";?></td>
							<td><?php echo $ket_sasaran?></td>

						<?php	} ?>
					</tr>
				<?php } ?>

				<tr>
					<td colspan="4">Rata Rata Capaian SPM</td>
					<?php for ($x=1; $x < 13 ; $x++) { 

						// data rata rata spm
						switch ($x) {
							case '1':
							$spm_rata = ($array_persen[0]+$array_persen[12]+$array_persen[24]+$array_persen[36]+$array_persen[48]+$array_persen[60]+$array_persen[72]+$array_persen[84]+$array_persen[96]+$array_persen[108]+$array_persen[120]+$array_persen[132])/12;

							break;
							case '2':
							$spm_rata = ($array_persen[1]+$array_persen[13]+$array_persen[25]+$array_persen[37]+$array_persen[49]+$array_persen[61]+$array_persen[73]+$array_persen[85]+$array_persen[97]+$array_persen[109]+$array_persen[121]+$array_persen[133])/12;

							break;
							case '3':
							$spm_rata = ($array_persen[2]+$array_persen[14]+$array_persen[26]+$array_persen[38]+$array_persen[50]+$array_persen[62]+$array_persen[74]+$array_persen[86]+$array_persen[98]+$array_persen[110]+$array_persen[122]+$array_persen[134])/12;

							break;
							case '4':
							$spm_rata = ($array_persen[3]+$array_persen[15]+$array_persen[27]+$array_persen[39]+$array_persen[51]+$array_persen[63]+$array_persen[75]+$array_persen[87]+$array_persen[99]+$array_persen[111]+$array_persen[123]+$array_persen[135])/12;

							break;
							case '5':
							$spm_rata = ($array_persen[4]+$array_persen[16]+$array_persen[28]+$array_persen[40]+$array_persen[52]+$array_persen[64]+$array_persen[76]+$array_persen[88]+$array_persen[100]+$array_persen[112]+$array_persen[124]+$array_persen[136])/12;

							break;
							case '6':
							$spm_rata = ($array_persen[5]+$array_persen[17]+$array_persen[29]+$array_persen[41]+$array_persen[53]+$array_persen[65]+$array_persen[77]+$array_persen[89]+$array_persen[101]+$array_persen[113]+$array_persen[125]+$array_persen[137])/12;

							break;
							case '7':
							$spm_rata = ($array_persen[6]+$array_persen[18]+$array_persen[30]+$array_persen[42]+$array_persen[54]+$array_persen[66]+$array_persen[78]+$array_persen[90]+$array_persen[102]+$array_persen[114]+$array_persen[126]+$array_persen[138])/12;

							break;
							case '8':
							$spm_rata = ($array_persen[7]+$array_persen[19]+$array_persen[31]+$array_persen[43]+$array_persen[55]+$array_persen[67]+$array_persen[79]+$array_persen[91]+$array_persen[103]+$array_persen[115]+$array_persen[127]+$array_persen[139])/12;

							break;
							case '9':
							$spm_rata = ($array_persen[8]+$array_persen[20]+$array_persen[32]+$array_persen[44]+$array_persen[56]+$array_persen[68]+$array_persen[80]+$array_persen[92]+$array_persen[104]+$array_persen[116]+$array_persen[128]+$array_persen[140])/12;

							break;
							case '10':
							$spm_rata = ($array_persen[9]+$array_persen[21]+$array_persen[33]+$array_persen[45]+$array_persen[57]+$array_persen[69]+$array_persen[81]+$array_persen[93]+$array_persen[105]+$array_persen[117]+$array_persen[129]+$array_persen[141])/12;

							break;
							case '11':
							$spm_rata = ($array_persen[10]+$array_persen[22]+$array_persen[34]+$array_persen[46]+$array_persen[58]+$array_persen[70]+$array_persen[82]+$array_persen[94]+$array_persen[106]+$array_persen[118]+$array_persen[130]+$array_persen[142])/12;

							break;
							case '12':
							$spm_rata = ($array_persen[11]+$array_persen[23]+$array_persen[35]+$array_persen[47]+$array_persen[59]+$array_persen[71]+$array_persen[83]+$array_persen[95]+$array_persen[107]+$array_persen[119]+$array_persen[131]+$array_persen[143])/12;

							break;

						}

						?>

						<td colspan="4"><?php echo "".round($spm_rata,2)." %";?></td>
					<?php } ?>

				</tr>

				<tr>
					<td colspan="4">Pencapaian Jenis Layanan Dasar SPM</td>
					<?php for ($x=1; $x < 13 ; $x++) { 

						// data rata rata spm
						switch ($x) {
							case '1':
							$spm_capaian = (($array_capaian[0]+$array_capaian[12]+$array_capaian[24]+$array_capaian[36]+$array_capaian[48]+$array_capaian[60]+$array_capaian[72]+$array_capaian[84]+$array_capaian[96]+$array_capaian[108]+$array_capaian[120]+$array_capaian[132])/12)*100;

							break;
							case '2':
							$spm_capaian = (($array_capaian[1]+$array_capaian[13]+$array_capaian[25]+$array_capaian[37]+$array_capaian[49]+$array_capaian[61]+$array_capaian[73]+$array_capaian[85]+$array_capaian[97]+$array_capaian[109]+$array_capaian[121]+$array_capaian[133])/12)*100;

							break;
							case '3':
							$spm_capaian = (($array_capaian[2]+$array_capaian[14]+$array_capaian[26]+$array_capaian[38]+$array_capaian[50]+$array_capaian[62]+$array_capaian[74]+$array_capaian[86]+$array_capaian[98]+$array_capaian[110]+$array_capaian[122]+$array_capaian[134])/12)*100;

							break;
							case '4':
							$spm_capaian = (($array_capaian[3]+$array_capaian[15]+$array_capaian[27]+$array_capaian[39]+$array_capaian[51]+$array_capaian[63]+$array_capaian[75]+$array_capaian[87]+$array_capaian[99]+$array_capaian[111]+$array_capaian[123]+$array_capaian[135])/12)*100;

							break;
							case '5':
							$spm_capaian = (($array_capaian[4]+$array_capaian[16]+$array_capaian[28]+$array_capaian[40]+$array_capaian[52]+$array_capaian[64]+$array_capaian[76]+$array_capaian[88]+$array_capaian[100]+$array_capaian[112]+$array_capaian[124]+$array_capaian[136])/12)*100;

							break;
							case '6':
							$spm_capaian = (($array_capaian[5]+$array_capaian[17]+$array_capaian[29]+$array_capaian[41]+$array_capaian[53]+$array_capaian[65]+$array_capaian[77]+$array_capaian[89]+$array_capaian[101]+$array_capaian[113]+$array_capaian[125]+$array_capaian[137])/12)*100;

							break;
							case '7':
							$spm_capaian = (($array_capaian[6]+$array_capaian[18]+$array_capaian[30]+$array_capaian[42]+$array_capaian[54]+$array_capaian[66]+$array_capaian[78]+$array_capaian[90]+$array_capaian[102]+$array_capaian[114]+$array_capaian[126]+$array_capaian[138])/12)*100;

							break;
							case '8':
							$spm_capaian = (($array_capaian[7]+$array_capaian[19]+$array_capaian[31]+$array_capaian[43]+$array_capaian[55]+$array_capaian[67]+$array_capaian[79]+$array_capaian[91]+$array_capaian[103]+$array_capaian[115]+$array_capaian[127]+$array_capaian[139])/12)*100;

							break;
							case '9':
							$spm_capaian = (($array_capaian[8]+$array_capaian[20]+$array_capaian[32]+$array_capaian[44]+$array_capaian[56]+$array_capaian[68]+$array_capaian[80]+$array_capaian[92]+$array_capaian[104]+$array_capaian[116]+$array_capaian[128]+$array_capaian[140])/12)*100;

							break;
							case '10':
							$spm_capaian = (($array_capaian[9]+$array_capaian[21]+$array_capaian[33]+$array_capaian[45]+$array_capaian[57]+$array_capaian[69]+$array_capaian[81]+$array_capaian[93]+$array_capaian[105]+$array_capaian[117]+$array_capaian[129]+$array_capaian[141])/12)*100;

							break;
							case '11':
							$spm_capaian = (($array_capaian[10]+$array_capaian[22]+$array_capaian[34]+$array_capaian[46]+$array_capaian[58]+$array_capaian[70]+$array_capaian[82]+$array_capaian[94]+$array_capaian[106]+$array_capaian[118]+$array_capaian[130]+$array_capaian[142])/12)*100;

							break;
							case '12':
							$spm_capaian = (($array_capaian[11]+$array_capaian[23]+$array_capaian[35]+$array_capaian[47]+$array_capaian[59]+$array_capaian[71]+$array_capaian[83]+$array_capaian[95]+$array_capaian[107]+$array_capaian[119]+$array_capaian[131]+$array_capaian[143])/12)*100;

							break;

						}

						?>

						<td colspan="4"><?php echo "".round($spm_capaian,2)." %"?></td>
					<?php } ?>

				</tr>

			</table>
		</div>
	</div>
</body>
</html>