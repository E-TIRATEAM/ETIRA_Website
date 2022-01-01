<?php
require("DBConfig.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $ikon = $_POST['ikon'];

    $query = "UPDATE tabel_fasilitas SET nama = '$nama', deskripsi = '$deskripsi', ikon = '$ikon' WHERE id = '$id'";
    $eksekusi = mysqli_query($koneksi,$query);
    $cek = mysqli_affected_rows($koneksi);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Berhasil";
    }else{
        $response["kode"] = 0;
        $response["pesan"] = "Gagal";
    }
}else{
    $response["kode"] = 0;
    $response["pesan"] = "Tidak Ada Post Data";
}

echo json_encode($response);
mysqli_close($koneksi);
?>