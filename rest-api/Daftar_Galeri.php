<?php 
require("DBConfig.php");  
$query = "SELECT * FROM galeri";
$eksekusi = mysqli_query($koneksi, $query);
$cek = mysqli_affected_rows($koneksi);

if ($cek > 0) {
  $response["code"] = 200;
  $response["status"] = "Data Tersedia";
  $response["data"] = array();

  while($ambil = mysqli_fetch_object($eksekusi)) {
    $F["id"] = $ambil->id;
    $F["nama"] = $ambil->nama;
    $F["description"] = $ambil->description;
    $F["image"] = $ambil->image;

    array_push($response["data"], $F);
  }
} else {
  $response["kode"] = 0;
  $response["status"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($koneksi);

?>