<?php

    require '../../Controller/dbController.php';

    if(isset($_SESSION['userid'])){

        $getAllProducts = $conn->query("SELECT * FROM tbl_pharma_products ORDER BY code DESC");

        if($getAllProducts->num_rows > 0){

            $data = $getAllProducts->fetch_array();

            foreach($data as $result):

?>

            <tr>
                <td> <?= $result['code'] ?> </td>
                <td> <?= $result['name'] ?> </td>
                <td> <?= $result['category_id'] ?> </td>
                <td> <?= $result['type_id'] ?> </td>
                <td> <?= $result['unit_id'] ?> </td>
                <td> <?= $result['price'] ?> </td>
                <td>
                    
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

    }

?>