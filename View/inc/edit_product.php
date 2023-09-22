<!-- Edit Product Modal -->

<div class="modal fade" id="editProduct_<?= $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Medicine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../Controller/medicineController.php" method="POST">
          <div class="row col-12">
            <span id="warningMessage" class="mt-1 mb-1"></span>
          </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="Code"> Product Code </label>
                    <input type="hidden" value="<?= $result['id'] ?>" name="key">
                    <input type="text" onkeyup="checkProductCode()" name="code" value="<?= $result['code'] ?>" class="form-control prodCodeEdit">
                    <div id="errMessage" class="mt-1 mb-1"></div>
                </div>

                <div class="col-4">
                    <label for="Name"> Name </label>
                    <input type="text" onkeyup="checkProductName()" name="name" value="<?= $result['name'] ?>" class="form-control prodNameEdit">
                    <div id="prodnameErrMessage" class="mt-1 mb-1"></div>
                </div>

                <div class="col-4">
                    <label for="Price"> Price </label>
                    <input type="text" value="<?= $result['price'] ?>" name="price" class="form-control priceEdit">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-4">
                    <label for="Code"> Category </label>
                    <?php require '../Components/categories.php'; ?>
                </div>

                <div class="col-4">
                    <label for="Name"> Type </label>
                    <?php require '../Components/type.php'; ?>
                </div>

                <div class="col-4">
                    <label for="Code"> Quantity </label>
                    <input type="number"  value="<?= $result['quantity'] ?>" required name="quantity" class="form-control quantityEdit">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <label for="Price"> Description </label>
                    <textarea  class="form-control descriptionEdit" name="description"><?= $result['description'] ?></textarea>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-auto form-check ml-3">
                  <input <?php if($result['prescription'] === '1') { ?> checked  value="true" <?php } else { ?> value="false" <?php } ?> name="prescribe" type="checkbox"  class="form-check-input isPrescribeEdit">
                  <label class="form-check-label" for="prescribe">Medicine requires prescription</label>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="addProd" name="updateMed" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>