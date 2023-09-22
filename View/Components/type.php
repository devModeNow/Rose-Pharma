<?php

require_once '../../Controller/dbController.php';

if(isset($result['type_id'])){

    $key = $result['type_id'];

    $sel = $conn->query("SELECT a.name FROM tbl_pharma_types a, tbl_pharma_products b WHERE a.id = b.type_id AND b.type_id = \"$key\" AND a.status_id = 1");

    $type = $sel->fetch_array();

}

?>

<select class="form-control <?php if(isset($result['type_id'])) {echo 'typeEdit'; } else { echo 'type'; } ?>" name="type" required>
<option value="<?php if(isset($result['type_id'])) { echo $result['type_id']; } else { echo ""; } ?>"> <?php if(isset($result['type_id'])) { echo $type['name']; } else { echo "Choose Type"; } ?> </option>

<?php

    require_once '../../Controller/dbController.php';

    $sel = $conn->query("SELECT * FROM tbl_pharma_types WHERE status_id = 1");

    if($sel->num_rows > 0){

        foreach($sel as $data):

?>

        <option value="<?= $data['id'] ?>"> <?= $data['name'] ?> </option>

<?php

        endforeach;

    } else {

?>

        <option value=""> No Type Found </option>

<?php

    }

?>

</select>