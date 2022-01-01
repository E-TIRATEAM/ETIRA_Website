<?php

require_once("DBConfig.php");  
$query = "SELECT * FROM tabel_fasilitas";
$eksekusi = mysqli_query($koneksi, $query);
$cek = mysqli_affected_rows($koneksi);

if ($cek > 0) {
  $response["code"] = 200;
  $response["status"] = "Data Tersedia";
  $response["data"] = array();

  while($ambil = mysqli_fetch_object($eksekusi)) {
    $F["id"] = $ambil->id;
    $F["nama"] = $ambil->nama;
    $F["deskripsi"] = $ambil->deskripsi;
    $F["ikon"] = $ambil->ikon;

    array_push($response["data"], $F);
  }
} else {
  $response["kode"] = 0;
  $response["status"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($koneksi);

?>