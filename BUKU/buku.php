<?php 
include "../koneksi_database.php";
$data = "INSERT INTO buku(judul,noisbn,penulis,tahun,stok,harga_pokok,harga_jual,ppn,diskon) VALUES
(
    '".$_POST['Judul']."',
    '".$_POST['no_isbn']."',
    '".$_POST['penulis']."',
    '".$_POST['tahun']."',
    '".$_POST['stock']."',
    '".$_POST['harga_pokok']."',
    '".$_POST['harga_jual']."',
    '".$_POST['ppn']."',   
    '".$_POST['diskon']."'
)";
 
$koneksi->query($data);
?>
