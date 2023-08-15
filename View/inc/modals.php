<!-- Modal -->
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
        <form action="" method="POST">
            <div class="row">
                <div class="col-4">
                    <label for="Code"> Product Code </label>
                    <input type="text" name="prodCode" onkeyup="checkCode()" class="form-control">
                </div>

                <div class="col-4">
                    <label for="Name"> Name </label>
                    <input type="text" name="prodName" class="form-control">
                </div>

                <div class="col-4">
                    <label for="Price"> Price </label>
                    <input type="text" name="price" class="form-control">
                </div>

            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>