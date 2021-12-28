<?php


include_once '../../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = mysqli_query($conn, "INSERT INTO data_users(username, password) VALUES ('$username', '$password')");


if ($sql) {
    header("location: kelola_akun.php");
}else {
    echo "retry";
}