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
                <li class="breadcrumb-item active" aria-current="page">Category List</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Category List</h1>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card p-3">
                      <h4> Add Category </h4>
                      <input type="text" id="catName" name="category" onkeyup="checkCetagory()" class="form-control">
                      <div id="errMessage" class="mt-1 mb-1"></div>
                      <input type="submit" onclick="addCategory()" id="addCat" name="addCategory" value="Add" class="btn btn-sm btn-primary">
                    </div>
                </div>
                <div class="col-8">
                  <div class="card">
                    <div class="card-header">
                      <h4> Category List </h4>
                      <div>
                        <?php require 'product/category_list.php' ?>
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

      <script src="../../resources/js/medecine.js"></script>

<?php

    } else {

        header('location:../logout.php');

    }

?>