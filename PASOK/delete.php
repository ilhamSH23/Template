<?php ;
include '../koneksi_database.php';
$sql = 'DELETE from pasok WHERE id_pasok ='.$_GET['id'];
$koneksi->query($sql);
header ('location:../indexP.php');
?>