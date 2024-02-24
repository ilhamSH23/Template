<?php 
include "../koneksi_database.php";
$data = "INSERT INTO pasok(id_distributor,id_buku,jumlah,tanggal) VALUES
(
    '".$_POST['id_distributor']."',
    '".$_POST['id_buku']."',
    '".$_POST['jumlah']."',
    '".$_POST['tanggal']."'
)";
 
$koneksi->query($data);
Header("Location../indexP.php")
?>
