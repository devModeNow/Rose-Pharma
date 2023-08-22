<select class="form-control" required name="type">
    <option value=""> Choose Type </option>

<?php

    require_once '../../Controller/dbController.php';

    $sel = $conn->query("SELECT * FROM tbl_pharma_types WHERE status_id = 1");

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