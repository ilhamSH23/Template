<?php ;
include '../koneksi_database.php';
$sql = 'DELETE from kasir WHERE id_kasir ='.$_GET['id'];
$koneksi->query($sql);
header ('location:../indexK.php');
?>