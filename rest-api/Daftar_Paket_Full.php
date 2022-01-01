<?php 
require("DBConfig.php");
$query = "SELECT tabel_paket.*, daftar_paket.* FROM tabel_paket INNER JOIN daftar_paket ON tabel_paket.id_daftar_paket = daftar_paket.id_daftar_paket";
$eksekusi = mysqli_query($koneksi, $query);
$cek = mysqli_affected_rows($koneksi);

if ($cek > 0) {
  $response["code"] = 200;
  $response["status"] = "Data Tersedia";
  $response["data"] = array();

  while($ambil = mysqli_fetch_object($eksekusi)) {
    $F["id_paket"] = $ambil->id_paket;
    $F["judul"] = $ambil->judul;
    $F["deskripsi"] = $ambil->deskripsi;
    $F["rating"] = $ambil->rating;
    $F["no_paket"] = $ambil->no_paket;
    $F["lama_sewa"] = $ambil->lama_sewa;
    $F["kapasitas"] = $ambil->kapasitas;
    $F["harga"] = $ambil->harga;
    $F["fasilitas"] = $ambil->fasilitas;
    $F["gambar_satu"] = $ambil->gambar_satu;
    $F["gambar_dua"] = $ambil->gambar_dua;
    $F["gambar_tiga"] = $ambil->gambar_tiga;
    $F["gambar_empat"] = $ambil->gambar_empat;

    array_push($response["data"], $F);
  }
} else {
  $response["kode"] = 0;
  $response["status"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($koneksi);

?>