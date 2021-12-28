<?php
    include_once '../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($conn, "DELETE FROM data_users WHERE id = '$id'");

    echo "<script>
						alert('Hapus data Sukses!');
						document.location='kelola_akun.php';
				     </script>";

?>