<?php

    $server = '127.0.0.1';
    $user = 'root';
    $password = '';
    $db = 'pharma';

    $conn = new mysqli($server, $user, $password, $db);

    if($conn->connect_errno > 0){

        echo 'DB failed to connect';

    } else {

        // echo 'Db connected successfully';

    }

?>