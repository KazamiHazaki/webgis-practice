<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Tampil Data</title>
</head>

<body>
    <a href="tambah-data.php" class="btn btn-primary">+ Tambah Peternakan</a>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Peternakan</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telp</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
    </tr>
  </thead> 
  <tbody>
            <?php
            include "koneksi.php";

            $sql = "SELECT * from farm";
            $query =  mysqli_query ($conn,$sql);

            while ($data = mysqli_fetch_array($query)) {
             ?>
            <tr>
                <th scope="row"><?php echo $data['id']; ?> </th>
                <td><?php echo $data['nama']; ?> </td>
                <td><?php echo $data['alamat']; ?> </td>
                <td><?php echo $data['noTelp']; ?></td>
                <td><?php echo $data['lat']; ?></td>
                <td><?php echo $data['lng']; ?></td>
                
                <td><a href="edit.php?id= <?php echo $data['id'];?>">EDIT</a></td>
                <td><a href="delete-data.php?id= <?php echo $data['id'];?>">HAPUS</a></td>
            </tr>

            <?php

             }

            ?>
        </tbody> 
        
        <tbody>

</table>
</body>

</html>
