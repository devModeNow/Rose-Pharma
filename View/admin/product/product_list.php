
<table class="table table-actions table-striped table-hover mb-0" id="data-table">
                      <thead>
                        <tr>
                          <th scope="col">Code</th>
                          <th scope="col">Name</th>
                          <th scope="col">Category</th>
                          <th scope="col">Type</th>
                          <th scope="col">Price</th>
                          <th scope="col">Expiration Date</th>
                          <th scope="col"></th>
                        </tr>
                    </thead>
                      <tbody>
<?php

        $getAllProducts = $conn->query("SELECT * FROM tbl_pharma_products ORDER BY code DESC");

        if($getAllProducts->num_rows > 0){

            foreach($getAllProducts as $result):

              $getCategoryValue = $conn->query("SELECT * FROM tbl_pharma_categories WHERE id = ".$result['category_id']);
              $categoryValue = $getCategoryValue->fetch_array();

              $getTypeValue = $conn->query("SELECT * FROM tbl_pharma_categories WHERE id = ".$result['category_id']);
              $typeValue = $getTypeValue->fetch_array();

?>

            <tr>
                <td> <?= $result['code'] ?> </td>
                <td> <?= $result['name'] ?> <br> <?php if($result['prescription']) { ?> <span class="badge badge-warning"> Requires prescription </span> <?php } ?> </td>
                <td> <?= $result['category_id'] == 0 ? '-' : $categoryValue['name'] ?> </td>
                <td> <?= $result['type_id'] == 0 ? '-' : $typeValue['name'] ?> </td>
                <td class="font-weight-bold"> &#8369; <?= $result['price'] ?> </td>
                <td class="font-weight-bold <?= $result['expiration'] < date('Y-m-d') ? 'text-danger' : 'text-primary' ?>"> <?= $result['expiration'] ?> </td>
                <td>
                  <span onclick="destroy( <?= $result['id'] ?>)" class="oi oi-trash mr-2"></span>
                  <span data-toggle="modal" data-target="#editProduct_<?= $result['id'] ?>" class="oi oi-pencil ml-2"></span>
                </td>
            </tr>

            <!-- Script for update and delete function -->
          <script src="../../resources/js/functions.js"></script>

<?php
            include '../inc/edit_product.php';
            endforeach;

        } else {

?>

            <tr>
                <td colspan="8" class="text-center">No Data </td>
            </tr>

<?php
            
        }

?>

                        </tbody>
                    </table>