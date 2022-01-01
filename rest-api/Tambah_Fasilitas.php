<?php
require("DBConfig.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $ikon = $_POST['ikon'];

    $query = 
    "INSERT INTO tabel_fasilitas(id, nama, deskripsi, ikon) 
    VALUES ('$id','$nama','$deskripsi','$ikon')";
    $eksekusi = mysqli_query($koneksi,$query);
    $cek = mysqli_affected_rows($koneksi);

    if($cek > 0){
        $response["kode"] = 200;
        $response["pesan"] = "Berhasil menambah fasilitas";
    }else{
        $response["kode"] = 400;
        $response["pesan"] = "Gagal";
    }
}else{
    $response["kode"] = 500;
    $response["pesan"] = "Tidak Ada Post Data";
}

echo json_encode($response);
mysqli_close($koneksi);
?>