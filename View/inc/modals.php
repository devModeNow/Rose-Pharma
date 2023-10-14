<?php require '../../Controller/medicineController.php'; ?>

<!-- Add Product Modal -->

<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Medicine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row col-12">
            <span id="warningMessage" class="mt-1 mb-1"></span>
          </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="Code"> Product Code </label>
                    <input type="text" onkeyup="checkProductCode()" id="prodCode" class="form-control">
                    <div id="errMessage" class="mt-1 mb-1"></div>
                </div>

                <div class="col-4">
                    <label for="Name"> Name </label>
                    <input type="text" onkeyup="checkProductName()" id="prodName" class="form-control">
                    <div id="prodnameErrMessage" class="mt-1 mb-1"></div>
                </div>

                <div class="col-4">
                    <label for="Price"> Price </label>
                    <input type="text" id="price" class="form-control">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-4">
                    <label for="Code"> Category </label>
                    <?php require_once '../Components/categories.php'; ?>
                </div>

                <div class="col-4">
                    <label for="Name"> Type </label>
                    <?php require_once '../Components/type.php'; ?>
                </div>

                <!-- <div class="col-4">
                    <label for="Price"> Unit </label>
                    <?php require_once '../Components/units.php'; ?>
                </div> -->

                <div class="col-4">
                    <label for="Code"> Quantity </label>
                    <input type="number" id="quantity" required name="quantity" class="form-control">
                </div>

            </div>

            <div class="row mt-5">
              <div class="col-4">
                <label for="Code"> Expiration Date </label>
                <input type="date" id="expiration" required name="quantity" class="form-control">
              </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <label for="Price"> Description </label>
                    <textarea id="description" class="form-control"></textarea>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-auto form-check ml-3">
                  <input type="checkbox" id="isPrescribe" class="form-check-input">
                  <label class="form-check-label" for="prescribe">Medicine requires prescription</label>
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="addProd" onclick="addMedicine()" class="btn btn-primary">Add Medicine</button>
      </div>
    </div>
  </div>
</div>