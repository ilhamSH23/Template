<?php 
include "../koneksi_database.php";
$data = "INSERT INTO buku(id_distributor,nama_distributor,alamat,telepon) VALUES
(
    '".$_POST['id_distributor']."',
    '".$_POST['distributor']."',
    '".$_POST['alamat']."',
    '".$_POST['telepon']."',
)";
 
$koneksi->query($data);
?>
