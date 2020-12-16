<?php
 include '../koneksi.php';
 $sql='SELECT * FROM farm';
 $hasil=mysqli_query($conn,$sql);
?>
var json_farm_point_5 = {
"type": "FeatureCollection",
"name": "farm_point_5",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [

    <?php
    while ($data = mysqli_fetch_array($hasil)) 
    {       
    ?>   

{ "type": "Feature", "properties": { "id": "<?php echo $data['id']; ?>", "nama": "<?php echo $data['nama']; ?>", "alamat": "<?php echo $data['alamat']; ?>", "telp": "<?php echo $data['noTelp']; ?>" }, "geometry": { "type": "Point", "coordinates": [ <?php echo $data['lng']; ?>, <?php echo $data['lat']; ?>] } },

<?php } ?>
]
}
