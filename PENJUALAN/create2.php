
<?php
include '../layout/header.php';
include '../layout/navbar.php';
include '../layout/sidebar.php';
?>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <div class="page-wrapper">
    <div class="container">
        <div class="card p-5 mt-5">
            <div class="mt-3 mb-3">
                <h4 class="text-center">PENJUALAN</h4>
            </div>
            <form action="pen.php" method="post">
                <div class="mb-3">
                    <label for="id_buku" class="form-label">id_buku</label>
                    <input type="text" class="form-control" id="id_buku" name="id_buku">
                </div>
                <div class="mb-3">
                    <label for="id_kasir" class="form-label">id_kasir</label>
                    <input type="text" class="form-control" id="id_kasir" name="id_kasir">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">total</label>
                    <input type="text" class="form-control" id="total" name="total">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>