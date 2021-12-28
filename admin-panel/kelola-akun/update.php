<?php

    include_once '../../koneksi.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = mysqli_query($conn, "UPDATE data_users SET username = '$username', password = '$password'  WHERE id = $id");


    if ($sql ) {
        echo "<script>
						alert('Edit Data Sukses!');
						document.location='kelola_akun.php';
				     </script>";
    }else {
        echo "not updated";
    }
    