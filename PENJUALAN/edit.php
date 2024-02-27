<?php 
include "../koneksi_database.php";
$sql = 'SELECT * from penjualan WHERE id_penjualan='.$_GET['id'];
$hasil = $koneksi->query($sql);
$tampil = ($hasil->fetch_assoc());
if(isset($_POST['id_penjualan'])){
    $sql='UPDATE penjualan SET 
    id_buku="'.$_POST['id_buku'].'",
    id_buku="'.$_POST['id_buku'].'",
    jumlah="'.$_POST['jumlah'].'",
    jumlah="'.$_POST['total'].'",
    tanggal="'.$_POST['tanggal'].'"
    WHERE id_penjualan = "'.$_GET['id'].'"
    ';
$koneksi->query($sql);
header  ("location:../indexPen.php");
}
; ?>


<?php
include '../layout/header.php';
include '../layout/navbar.php';
include '../layout/sidebar.php';
?>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <div class="page-wrapper">
<body>
    <div class="container">
        <div class="card p-5 mt-5">
            <div class="mt-3 mb-3">
                <h4 class="text-center">PASOK</h4>
            </div>
            <form action="pasok.php" method="post">
                <div class="mb-3">
                    <label for="id_distributor" class="form-label">id_distributor</label>
                    <input type="number" class="form-control" id="id_distributor" name="id_distributor" value="<?= $tampil['id_distributor']; ?>">
                </div>
                <div class="mb-3">
                    <label for="id_buku" class="form-label">id_buku</label>
                    <input type="number" class="form-control" id="id_buku" name="id_buku" value="<?= $tampil['id_buku']; ?>">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $tampil['jumlah']; ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $tampil['tanggal']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>