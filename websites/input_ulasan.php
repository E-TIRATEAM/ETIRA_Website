<?php
	include '../koneksi.php';
	header("location:kontak.php");

	$nama = ucwords(trim($_POST['nama']));
	$email = strtolower(trim($_POST['email']));
	$pesan = ucfirst(trim($_POST['pesan']));

	mysqli_query($conn, "INSERT INTO tb_ulasan(nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");
?>