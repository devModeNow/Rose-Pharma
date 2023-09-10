<select class="form-control" required id="unit">
    <option value=""> Choose Unit </option>

<?php

    require_once '../../Controller/dbController.php';

    $sel = $conn->query("SELECT * FROM tbl_pharma_units WHERE status_id = 1");

    if($sel->num_rows > 0){

        $data = $sel->fetch_array();

        foreach($result as $data):

?>

        <option value="<?= $result['id'] ?>"> <?= $result['name'] ?> </option>

<?php

        endforeach;

    } else {

?>

        <option value=""> No Type Found </option>

<?php

    }

?>

</select>