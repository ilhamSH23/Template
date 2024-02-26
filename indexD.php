<?php 
include 'koneksi_database.php';

$data = "select * from distributor";
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
                    <a href="Distributor/create.php" class="btn btn-primary">TAMBAH</a>
                        <div class="card">
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama_Distributor</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telpon</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1; 
    foreach ($hasil as $row) {
    ?>
    <tr>
      <th scope="row"><?=$i ?></th>
      <td><?= $row["nama_distributor"] ?></td>
      <td><?= $row["alamat"] ?></td>
      <td><?= $row["telepon"] ?></td>
      <td>
      <a href="Distributor/edit.php?id=<?= $row ['id_distributor']; ?>" class="btn btn-primary">Edit</a>
        <a href="Distributor/delete.php?id=<?= $row ['id_distributor']; ?>" class="btn btn-danger">Delete</a>
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