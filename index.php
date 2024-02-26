<?php 
include 'koneksi_database.php';

$data = "select * from buku";
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
                              <!-- <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li> -->
                              <!-- <li class="breadcrumb-item active" aria-current="page">Starter Page</li> -->
                            </ol>
                          </nav>
                        <!-- <h1 class="mb-0 fw-bold">Starter Page</h1>  -->
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            
                <div class="row">
                    <div class="col-12">
                      <a href="BUKU/create.php" class="btn btn-primary" style="margin-bottom: 20px;margin-left: 20px;">TAMBAH</a>
                        <div class="card">
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">no_isbn</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun</th>
      <th scope="col">Stok</th>
      <th scope="col">Harga_pokok</th>
      <th scope="col">Harga_jual</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1; 
    foreach ($hasil as $row) {
    ?>
    <tr>
      <th scope="row"><?=$i ?></th>
      <td><?= $row["judul"] ?></td>
      <td><?= $row["noisbn"] ?></td>
      <td><?= $row["penulis"] ?></td>
      <td><?= $row["tahun"] ?></td>
      <td><?= $row["stok"] ?></td>
      <td><?= $row["harga_pokok"] ?></td>
      <td><?= $row["harga_jual"] ?></td>
  
      <td>
        <a href="BUKU/edit.php?id=<?= $row ['id_buku']; ?>" class="btn btn-primary">Edit</a>
        <a href="BUKU/delete.php?id=<?= $row ['id_buku']; ?>" class="btn btn-danger">Delete</a>
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