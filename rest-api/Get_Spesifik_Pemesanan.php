<?php 

require("DBConfig.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama_lengkap = $_POST["nama_lengkap"];

    $query = "SELECT tabel_pemesanan.*, tabel_paket.* FROM tabel_pemesanan INNER JOIN tabel_paket ON tabel_pemesanan.id_paket = tabel_paket.id_paket WHERE nama_lengkap = '$nama_lengkap'";
    $eksekusi = mysqli_query($koneksi,$query);
    $cek = mysqli_affected_rows($koneksi);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Berhasil";
        $response["data"] = array();

        while($ambil = mysqli_fetch_object($eksekusi)){
            $F["id"] = $ambil->id;
            $F["nama_lengkap"] = $ambil->nama_lengkap;
            $F["id_paket"] = $ambil->id_paket;
            $F["judul"] = $ambil->judul;
            $F["no_paket"] = $ambil->no_paket;
            $F["lama_sewa"] = $ambil->lama_sewa;
            $F["kapasitas"] = $ambil->kapasitas;
            $F["harga"] = $ambil->harga;
            $F["fasilitas"] = $ambil->fasilitas;
            $F["tanggal_pemesanan"] = $ambil->tanggal_pemesanan;
            $F["metode_pembayaran"] = $ambil->metode_pembayaran;
            $F["status_pemesanan"] = $ambil->status_pemesanan;
    
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