<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h5>Login SPM</h5>

	<div class="box-login">
		<form action="action-login.php" method="POST">

			<div class="col-9"><input name="username" id="username" type="text" class="form-control bg-light" placeholder="Masukkan username Anda" required></div>

			<div class="col-9"><input name="password" id="password" type="password" class="form-control bg-light" placeholder="Masukkan Password Anda" required></div>

			<input name="submit" type="submit" value="Login" class="col-4 btn btn-info text-white mt-2">
		</form>
	</div>
</body>
</html>