<?php
    include_once '../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($conn, "DELETE FROM tb_ulasan WHERE id = '$id'");

    echo "<script>
						alert('Hapus data Sukses!');
						document.location='kelola_ulasan.php';
				     </script>";

?>