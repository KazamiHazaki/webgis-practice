<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['almt'];
$telp = $_POST['telp'];
$lat = $_POST['lat'];
$lng = $_POST['longitude'];

// menginput data ke database
mysqli_query($conn,"insert into farm values('','$nama',
'$alamat','$telp','$lat','$lng')");

// mengalihkan halaman kembali ke index.php
header("location:tampil-data.php");

?>