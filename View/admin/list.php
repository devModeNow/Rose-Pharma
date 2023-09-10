<?php

    include '../inc/sidenav.php';

    if(isset($_SESSION['userid'])){

        include '../inc/modals.php';

?>
        

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Medicine List</li>
              </ol>
            </nav>

            <div class="col-lg-12 pb-3">
              <h1>Medicine List</h1>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
                        <i data-feather="plus"></i> Add medicine
                        </button>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive-md">
                        <?php include 'product/product_list.php' ?>
                  </div>
                    </div>
                </div>    
            </div>
          </div>
        </div>

<?php

    require '../inc/footer.php';

?>

      <script src="../../resources/js/medicine.js"></script>
    
<?php

    } else {

        header('location:../logout.php');

    }

?>