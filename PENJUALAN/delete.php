<?php ;
include '../koneksi_database.php';
$sql = 'DELETE from penjualan WHERE id_penjualan ='.$_GET['id'];
$koneksi->query($sql);
header ('location:../indexPen.php');
?>