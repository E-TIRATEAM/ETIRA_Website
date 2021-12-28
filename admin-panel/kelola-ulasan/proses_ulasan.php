<?php


include_once '../../koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];


$sql = mysqli_query($conn, "INSERT INTO tb_ulasan(nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");


if ($sql) {
    echo "<script>
						alert('Berhasil mengirim pesan!');
						document.location='../../websites/kontak.php';
				     </script>";
}else {
    echo "retry";
}