<?php

    session_start();
    session_unset($_SESSION['userid']);
    session_destroy();
    header('location:../');

?>