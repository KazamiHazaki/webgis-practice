<?php 
include 'koneksi.php';
$nama = $_POST['namaFarm'];
$alamat = $_POST['alamatFarm'];
$noTelp = $_POST['noTELP'];
$lng = $_POST['longi'];
$latidud = $_POST['latid'];
 
$sql = "UPDATE farm SET nama='$nama',alamat='$alamat', noTelp='$noTELP',lat'$latidud',lng='$lng' WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:tampil-data.php?pesan=input");

?>