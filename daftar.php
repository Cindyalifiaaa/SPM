<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Daftar Akun</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div id="daftar" class="d-flex flex-column justify-content-center align-items-center">

		<h5>Daftar Akun</h5>
			<form action="action-akun.php?opsi=input" method="POST">

				<div class="from-group mb-2 row">
					<div class="col-3 d-flex align-items-center"><label for="username">username</label></div>
					<div class="col-9"><input name="username" id="username" type="text" class="form-control bg-light" placeholder="Masukkan username Anda" required></div>
				</div>

				<div class="from-group mb-2 row">
					<div class="col-3 d-flex align-items-center"><label for="password">Password</label></div>
					<div class="col-9"><input name="password" id="password" type="password" class="form-control bg-light" placeholder="Masukkan Password Anda" required></div>
				</div>

				<div class="from-group mb-2 row">
					<div class="col-3 d-flex align-items-center"><label for="repassword">Konfirmasi Password</label></div>
					<div class="col-9"><input name="repassword" id="repassword" type="password" class="form-control bg-light" placeholder="Masukkan Ulang Password Anda" required></div>
				</div>

				<div class="d-flex justify-content-center">
					<input name="submit" type="submit" value="Daftar" class="col-6 btn btn-info text-white mt-2">
				</div>
			</form>

			<div class="opsi-login mt-4 text-center">
				<p class="mb-0">---  jika sudah memiliki akun silahkan login ---</p>
				<a href="login.php" class="text-decoration-none">Login</a>
			</div>
		
	</div>
</body>
</html>