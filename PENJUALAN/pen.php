<?php 
include "../koneksi_database.php";
$data = "INSERT INTO penjualan(id_buku,id_kasir,jumlah,total,tanggal) VALUES
(
    '".$_POST['id_buku']."',
    '".$_POST['id_kasir']."',
    '".$_POST['jumlah']."',
    '".$_POST['total']."',
    '".$_POST['tanggal']."'
)";
 
    $koneksi->query($data);
    Header("Location../indexpen.php")
?>
