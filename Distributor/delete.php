<?php ;
include '../koneksi_database.php';
$sql = 'DELETE from distributor WHERE id_distributor ='.$_GET['id'];
$koneksi->query($sql);
header ('location:../indexD.php');
?>