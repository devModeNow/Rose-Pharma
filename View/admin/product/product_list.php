
<table class="table table-actions table-striped table-hover mb-0" id="data-table">
                      <thead>
                        <tr>
                          <th scope="col">Code</th>
                          <th scope="col">Name</th>
                          <th scope="col">Category</th>
                          <th scope="col">Type</th>
                          <th scope="col">Price</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
<?php

        $getAllProducts = $conn->query("SELECT * FROM tbl_pharma_products ORDER BY code DESC");

        if($getAllProducts->num_rows > 0){

            foreach($getAllProducts as $result):

?>

            <tr>
                <td> <?= $result['code'] ?> </td>
                <td> <?= $result['name'] ?> </td>
                <td> <?= $result['category_id'] ?> </td>
                <td> <?= $result['type_id'] ?> </td>
                <td> <?= $result['price'] ?> </td>
                <td>
                  <span class="oi oi-trash mr-2"></span>
                  <span class="oi oi-pencil ml-2"></span>
                </td>
            </tr>

<?php
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