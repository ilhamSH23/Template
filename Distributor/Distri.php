<?php 
include "../koneksi_database.php";
$data = "INSERT INTO distributor(nama_distributor,alamat,telepon) VALUES
(
    '".$_POST['nama_distributor']."',
    '".$_POST['alamat']."',
    '".$_POST['telepon']."'
)";
 
$koneksi->query($data);
header("Location: ../indexD.php")
?>
