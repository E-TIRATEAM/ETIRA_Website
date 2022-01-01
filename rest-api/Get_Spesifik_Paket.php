<?php
require("DBConfig.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_paket = $_POST["id_paket"];

    $koneksi = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);
    $query = "SELECT tabel_paket.*, daftar_paket.* FROM tabel_paket INNER JOIN daftar_paket ON tabel_paket.id_daftar_paket = daftar_paket.id_daftar_paket WHERE id_paket = '$id_paket'";
    $eksekusi = mysqli_query($koneksi,$query);
    $cek = mysqli_affected_rows($koneksi);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Berhasil";
        $response["data"] = array();

        while($ambil = mysqli_fetch_object($eksekusi)){
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
    
           array_push($response["data"],$F);
        }
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