<?php
$db = new mysqli("localhost","root","","spm");

if ($db->connect_error) {
	echo "Gagal Menyambung ke Database";
}
?>