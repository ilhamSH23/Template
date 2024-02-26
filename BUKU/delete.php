<?php ;
include '../koneksi_database.php';
$sql = 'DELETE from buku WHERE id_buku'.$_GET['id'];
$koneksi->query($sql);
header ('location:../index.php');
?>