<?php 
include 'koneksi_database.php';

$data = "select * from penjualan";
$hasil = $koneksi->query ($data);
?>

<?php 
  include 'layout/header.php';
  include 'layout/navbar.php';
  include 'layout/sidebar.php';
?>
<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
       
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                            </ol>
                          </nav>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            
                <div class="row">
                    <div class="col-12">
                    <a href="PENJUALAN/create2.php" class="btn btn-primary" style="margin-bottom: 20px;margin-left: 20px;">TAMBAH</a>
                        <div class="card">
                        <table class="table">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">id_distributor</th>
      <th scope="col">id_buku</th>
      <th scope="col">jumlah</th>
      <th scope="col">total</th>
      <th scope="col">tanggal</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1; 
    foreach ($hasil as $row) {
    ?>
    <tr>
    <th scope="row"><?=$i ?></th>
      <td><?= $row["id_buku"] ?></td>
      <td><?= $row["id_kasir"] ?></td>
      <td><?= $row["jumlah"] ?></td>
      <td><?= $row["total"] ?></td>
      <td><?= $row["tanggal"] ?></td>
      <td>
      <a href="PENJUALAN/edit.php?id=<?= $row ['id_penjualan']; ?>" class="btn btn-primary">Edit</a>
        <a href="PENJUALAN/delete.php?id=<?= $row ['id_penjualan']; ?>" class="btn btn-danger">Delete</a>
      </td>
    </td>
    </tr>
    <?php 
    $i++;
    }
    ?>
  </tbody>
</table>
                        </div>
                    </div>
                </div>
             
            </div>
           <?php 
           include 'layout/footer.php'; 
           ?>
            
</body>

</html>