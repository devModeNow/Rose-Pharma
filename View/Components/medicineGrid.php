<?php

    include '../../Controller/dbController.php';

    if(isset($_SESSION['userid']) && isset($_SESSION['userType'])  == 2){


?>

    <div class="row">

<?php

    $selMeds = $conn->query("SELECT * FROM `tbl_pharma_products` WHERE expiration > NOW() limit 5");

    if($selMeds->num_rows > 0) {

        foreach($selMeds as $meds):

?>

        <div class="col-lg-3 col-sm-12 mb-3">
            <div class="card meds">
                <div class="card-body">
                    <h5> <?= $meds['name'] ?> </h5>
                    <span class="badge badge-pill badge-success"> &#8369; <?= $meds['price'] ?> </span>
                </div>
            </div>
        </div>

<?php 

        endforeach;

    }

?>

    </div>

<?php

    } else { ?>

    <label> Unauthorized Access | <a href="../../"> Go back </a> </label>

<?php } ?>