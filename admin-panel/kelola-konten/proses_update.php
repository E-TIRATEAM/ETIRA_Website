<?php
	include '../../koneksi.php';

	$id = $_POST['id'];
	$image = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
	$nama = $_POST['nama'];
	$description = $_POST['description'];

	if ($image) {
		if (move_uploaded_file($tmp, '../DataUpload/'.$image)) {
		mysqli_query($conn, "UPDATE galeri SET nama = '$nama', description = '$description', image = '$image' WHERE id = '$id'");
        header("location: kelola_konten.php");
		} else {
			echo "<script>alert('Gagal mengubah data !')</script>";
		}
	}
	else {
		mysqli_query($conn, "UPDATE galeri SET nama = '$nama', description = '$description', image = '$image' WHERE id = '$id'");
        header("location: kelola_konten.php");
	}
?>