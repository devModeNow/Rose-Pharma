<?php

    include '../inc/sidenav.php';

    if(isset($_SESSION['userid']) && isset($_SESSION['userType'])  == 1){

      require '../../Controller/dbController.php';

?>
        
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Admin Dashboard</h1>
            </div>

            <hr>

            <h3> Sales </h3>

            <div class="row">

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="shopping-cart"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Today Sales</div>
                      <h3 class="card-title mb-0">
                      <?php

                      $medCounts = $conn->query("SELECT count(*) as total FROM tbl_pharma_products");

                      if($medCounts->num_rows > 0){
                          $value = $medCounts->fetch_array();
                        echo $value['total'];
                      } else {
                        echo '0';
                      }

                      ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="shopping-cart"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Overall Sales</div>
                      <h3 class="card-title mb-0">
                      <?php

                      $medCounts = $conn->query("SELECT count(*) as total FROM tbl_pharma_products");

                      if($medCounts->num_rows > 0){
                          $value = $medCounts->fetch_array();
                        echo $value['total'];
                      } else {
                        echo '0';
                      }

                      ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <hr>

            <h3> Medicine </h3>

            <div class="row">

            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-warning text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="clipboard"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Medicine Count</div>
                      <h3 class="card-title mb-0 font-weight-bold">
                        <?php

                          $medCounts = $conn->query("SELECT count(*) as total FROM tbl_pharma_products");
                          
                          if($medCounts->num_rows > 0){
                              $value = $medCounts->fetch_array();
                            echo $value['total'];
                          } else {
                            echo '0';
                          }
                        
                        ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

<?php

    require '../inc/footer.php';

    } else {

        header('location:../logout.php');

    }

?>