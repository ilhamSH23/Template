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
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Starter Page</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Starter Page</h1> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-body">
                                This is some text within a card block.
                            </div> -->
                        </div>
                    </div>
                </div>
             
            </div>
           <?php 
           include 'layout/footer.php'; 
           ?>
            
</body>

</html>