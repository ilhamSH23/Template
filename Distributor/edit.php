<?php 
include "../koneksi_database.php";
$sql = 'SELECT * from distributor WHERE id_distributor='.$_GET['id'];
$hasil = $koneksi->query($sql);
$tampil = ($hasil->fetch_assoc());
if(isset($_POST['nama_distributor'])){
    $sql='UPDATE distributor SET 
    id_distributor="'.$_POST['id_distributor'].'",
    nama_distributor="'.$_POST['nama_distributor'].'",
    alamat="'.$_POST['alamat'].'",
    telepon="'.$_POST['telepon'].'",
    WHERE id_distributor = "'.$_GET['id'].'"
    ';
$koneksi->query($sql);
header  ("location:../indexD.php");
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
                <h4 class="text-center">Distributor</h4>
            </div>
            <form action="Distri.php" method="post">
                <div class="mb-3">
                    <label for="nama_distributor" class="form-label">Nama_distributor</label>
                    <input type="text" class="form-control" id="nama_distributor" name="nama_distributor" value="<?= $tampil['nama_distributor']; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tampil['alamat']; ?>">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $tampil['telepon']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>