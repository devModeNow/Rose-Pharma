<?php

    include '../inc/sidenav.php';

    if(isset($_SESSION['userid']) && isset($_SESSION['userType'])  == 2){

?>
        
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cashier Main Dashboard</li>
              </ol>
            </nav>


            <div class="row">
                <div>
                    <div class="col-auto form-check ml-3">
                    <input type="checkbox" id="kioskMode" onclick="kioskMode()" class="form-check-input">
                    <label class="form-check-label" for="prescribe">Kiosk mode</label>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-lg-8 col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <input type="text" class="form-control" onkeyup="findMed()" id="findMed" placeholder="Search medicine using product code or name">
                    <hr>
                    <div class="row">
                      <div class="col-12">
                        <?php require_once '../Components/medicineGrid.php'; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="card" style="height: 20rem; display: flex; flex-direction: column;">
                  <div class="card-body" style="flex: 1;">
                    <h5 class="card-title font-weight-bold">List of Medicine</h5>
                    <hr>
                    
                  </div>
                  <button style="width: 100%;" class="btn btn-primary"> Checkout </button>
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