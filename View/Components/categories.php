<?php

require_once '../../Controller/dbController.php';

if(isset($result['category_id'])){

    $key = $result['category_id'];

    $sel = $conn->query("SELECT a.name FROM tbl_pharma_categories a, tbl_pharma_products b WHERE a.id = b.category_id AND b.category_id = \"$key\" AND a.status_id = 1");

    $cat = $sel->fetch_array();

}

?>

<select class="form-control <?php if(isset($result['category_id'])) {echo 'categoryEdit'; } else { echo 'category'; } ?>" name="category" required>
    <option value="<?php if(isset($result['category_id'])) { echo $result['category_id']; } else { echo ""; } ?>"> <?php if(isset($result['category_id'])) { echo $cat['name']; } else { echo "Choose Category"; } ?> </option>

<?php

    $sel = $conn->query("SELECT * FROM tbl_pharma_categories WHERE status_id = 1");

    if($sel->num_rows > 0){

        foreach($sel as $data):

?>

        <option value="<?= $data['id'] ?>"> <?= $data['name'] ?> </option>

<?php

        endforeach;

    } else {

?>

        <option value=""> No Category Found </option>

<?php

    }

?>

</select>