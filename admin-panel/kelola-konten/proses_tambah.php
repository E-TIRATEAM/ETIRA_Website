<?php


include_once '../../koneksi.php';

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$nama = $_POST['nama'];
$description = $_POST['description'];


// $sql = mysqli_query($conn, "INSERT INTO galeri(name, img_dir) VALUES ('$name', '$gambar')");


if (move_uploaded_file($tmp, '../DataUpload/'.$gambar)) {
    $sql =  mysqli_query($conn, "INSERT INTO galeri (nama, description, image) VALUES ('$nama', '$description', '$gambar')");
    header("location: kelola_konten.php");
} else{
    echo "<script>alert('Gagal')</script>";
}