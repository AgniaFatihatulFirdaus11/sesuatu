<?php 
$koneksi = mysqli_connect("localhost", "root", "", "hbd");

if (!$koneksi) {
    die("Koneksi databse gagal: " . mysqli_connct_error());
}
?>