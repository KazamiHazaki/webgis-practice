<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Edit</title>
</head>


<body>
<?php
	include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM farm where id='$id'";
	$db = mysqli_query($conn,$sql);
	while($d = mysqli_fetch_array($db)){
		?>
 <table>
        <form action="update.php" method="POST">
        <tr>
            <td>Nama Peternakan</td>
            
            <td>
            <input type="hidden" name="id" value="<?php echo$d['id']; ?>"> 
            <input type="text" name="namaFarm" value="<?php echo$d['nama']; ?>" >
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamatFarm" value="<?php echo$d['alamat']; ?>" ></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="text" name="noTELP" value="<?php echo$d['noTelp']; ?>" ></td>
        </tr>
        <tr>
            <td>Longitude</td>
            <td><input type="text" name="longi" value="<?php echo$d['lng']; ?>" ></td>
        </tr>
        <tr>
            <td>Latitude</td>
            <td><input type="text" name="latid" value="<?php echo$d['lat']; ?>" ></td>
        </tr>
        <tr>
            <td><input type ="submit" value="Update" name="simpan"></td>
            <td><a href = "tampil-data.php">Kembali</td>
         </tr>

    </form>

    </table>
    <?php

    }
    ?>

</body>


</html>
