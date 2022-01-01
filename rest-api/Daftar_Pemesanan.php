<?php 
require("DBConfig.php");  
$query = "SELECT * FROM tabel_pemesanan";
$eksekusi = mysqli_query($koneksi, $query);
$cek = mysqli_affected_rows($koneksi);

if ($cek > 0) {
  $response["code"] = 200;
  $response["status"] = "Data Tersedia";
  $response["data"] = array();

  while($ambil = mysqli_fetch_object($eksekusi)) {
    $F["id"] = $ambil->id;
    $F["nama_lengkap"] = $ambil->nama_lengkap;
    $F["id_paket"] = $ambil->id_paket;
    $F["judul"] = $ambil->judul;
    $F["tanggal_pemesanan"] = $ambil->tanggal_pemesanan;
    $F["metode_pembayaran"] = $ambil->metode_pembayaran;
    $F["status_pemesanan"] = $ambil->status_pemesanan;

    array_push($response["data"], $F);
  }
} else {
  $response["kode"] = 0;
  $response["status"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($koneksi);

?>