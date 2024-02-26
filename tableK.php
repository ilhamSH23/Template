<?php
include 'koneksi_database.php';

$data = "select * from kasir";
$hasil = $koneksi->query($data);
?>

<?php
include 'layout/header.php';
include 'layout/navbar.php';
include 'layout/sidebar.php';
?>

<body>
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

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
          <a href="KASIR/create1.php" class="btn btn-primary" style="margin-left: 20px;margin-bottom: 20px;">TAMBAH</a>
          <div class="card">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Telpon</th>
                  <th scope="col">Status</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">akses</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                foreach ($hasil as $row) {
                ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["alamat"] ?></td>
                    <td><?= $row["telepon"] ?></td>
                    <td><?= $row["status"] ?></td>
                    <td><?= $row["username"] ?></td>
                    <td><?= $row["password"] ?></td>
                    <td><?= $row["akses"] ?></td>
                    <td>
                      <a href="Kasir/edit.php?id=<?= $row['id_kasir']; ?>" class="btn btn-primary">Edit</a>
                      <a href="kasir/delete.php?id=<?= $row['id_kasir']; ?>" class="btn btn-danger">Delete</a>
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