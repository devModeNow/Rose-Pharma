<?php

    include '../inc/sidenav.php';

    if(isset($_SESSION['userid'])){

?>
        

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Medicine Types</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Medicine Types</h1>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card p-3">
                      <h4> Add Type </h4>
                      <input type="text" id="typeName" name="type" onkeyup="checkType()" class="form-control">
                      <div id="errMessage" class="mt-1 mb-1"></div>
                      <input type="submit" onclick="addType()" id="addType" name="addType" value="Add" class="btn btn-sm btn-primary">
                    </div>
                </div>
                <div class="col-8">
                  <div class="card">
                    <div class="card-header">
                      <h4> Types List </h4>
                      <div>
                        <?php require 'product/type_list.php' ?>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

          </div>
        </div>

<?php

    require '../inc/footer.php';

    require_once '../../Controller/medicineController.php';
?>

      <script src="../../resources/js/medicine.js"></script>
  
<?php

    } else {

        header('location:../logout.php');

    }

?>