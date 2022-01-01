<?php
require("DBConfig.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $id_paket = $_POST['id_paket'];
    $judul = $_POST['judul'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $status_pemesanan = $_POST['status_pemesanan'];

    $query = "UPDATE tabel_pemesanan SET nama_lengkap = '$nama_lengkap', id_paket = '$id_paket', judul = '$judul', tanggal_pemesanan = '$tanggal_pemesanan', metode_pembayaran = '$metode_pembayaran', status_pemesanan = '$status_pemesanan' WHERE id = '$id'";
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