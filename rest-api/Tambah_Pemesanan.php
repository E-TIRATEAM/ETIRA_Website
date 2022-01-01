<?php
require("DBConfig.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nama_lengkap = $_POST['nama_lengkap'];
    $id_paket = $_POST['id_paket'];
    $judul = $_POST['judul'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $status_pemesanan = $_POST['status_pemesanan'];

    $query = 
    "INSERT INTO tabel_pemesanan(nama_lengkap, id_paket, judul, tanggal_pemesanan, metode_pembayaran, status_pemesanan) 
    VALUES ('$nama_lengkap','$id_paket','$judul','$tanggal_pemesanan', '$metode_pembayaran', '$status_pemesanan')";
    $eksekusi = mysqli_query($koneksi,$query);
    $cek = mysqli_affected_rows($koneksi);

    if($cek > 0){
        $response["kode"] = 200;
        $response["pesan"] = "Berhasil melakukan pemesanan";
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