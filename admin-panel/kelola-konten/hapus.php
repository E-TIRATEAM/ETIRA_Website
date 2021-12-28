<?php
	include '../../koneksi.php';

	$id = $_GET['id'];

	mysqli_query($conn, "DELETE FROM galeri WHERE id=$id");
    header("location: kelola_konten.php");
?>