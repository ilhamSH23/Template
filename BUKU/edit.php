<?php 
include "../koneksi_database.php";
$sql = 'SELECT * from buku WHERE id_buku='.$_GET['id'];
$hasil = $koneksi->query($sql);
$tampil = ($hasil->fetch_assoc());
if(isset($_POST['Judul'])){
    $sql='UPDATE buku SET 
    Judul="'.$_POST['Judul'].'",
    noisbn="'.$_POST['no_isbn'].'",
    penulis="'.$_POST['penulis'].'",
    tahun="'.$_POST['stock'].'",
    harga_pokok="'.$_POST['harga_pokok'].'",
    harga_jual="'.$_POST['harga_jual'].'",
    ppn="'.$_POST['ppn'].'",
    diskon="'.$_POST['diskon'].'"
    WHERE id_buku = "'.$_GET['id'].'"
    ';
$koneksi->query($sql);
header  ("location:../index.php");
}
; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="card p-5 mt-5">
            <div class="mt-3 mb-3">
                <h4 class="text-center">Buku</h4></div>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="Judul" name="Judul" value="<?= $tampil['judul']; ?>">
                </div>
                <div class="mb-3">
                    <label for="no_isbn" class="form-label">no_isbn</label>
                    <input type="text" class="form-control" id="no_isbn" name="no_isbn" value="<?= $tampil['noisbn']; ?>">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $tampil['penulis']; ?>">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" value="<?= $tampil['tahun']; ?>">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="<?= $tampil['stok']; ?>">
                </div>
                <div class="mb-3">
                    <label for="harga_pokok" class="form-label">harga_pokok</label>
                    <input type="text" class="form-control" id="harga_pokok" name="harga_pokok" value="<?= $tampil['harga_pokok']; ?>">
                </div>
                <div class="mb-3">
                    <label for="harga_jual" class="form-label">harga_jual</label>
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $tampil['harga_jual']; ?>">
                </div>
                <div class="mb-3">
                    <label for="ppn" class="form-label">ppn</label>
                    <input type="text" class="form-control" id="ppn" name="ppn" value="<?= $tampil['ppn']; ?>">
                </div>
                <div class="mb-3">
                    <label for="diskon" class="form-label">diskon</label>
                    <input type="text" class="form-control" id="diskon" name="diskon" value="<?= $tampil['diskon']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>