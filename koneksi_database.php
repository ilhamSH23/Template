<?php 

$koneksi = new mysqli("localhost","root","","toko_buku");

if ($koneksi->connect_error) {
    die("". $koneksi->connect_error);
}
?>