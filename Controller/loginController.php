<?php

    require_once 'dbController.php';

    if(isset($_POST['username']) && isset($_POST['password'])){

        // declare table/s will be using
        $table = 'tbl_login';

        $username = $conn->real_escape_string(trim($_POST['username']));
        $password = $conn->real_escape_string(trim($_POST['password']));


        // Select query to find username and password at the database
        $login = $conn->query("SELECT * FROM $table WHERE `username` = '$username' AND `password` = '$password'");

        if($login->num_rows > 0){

            $res = $login->fetch_array();

            if($res['user_type_id'] == 1){

                // Update login table, input last login timestamp
                $upd = $conn->query("UPDATE $table SET `is_online` = 1 WHERE `id` = ".$res['id']);
                $details = $conn->query("SELECT * FROM tbl_userprofile WHERE user_id = ".$res['id']);

                $_SESSION['userid'] = $res['id'];
                $_SESSION['userType'] = $res['user_type_id'];
                $_SESSION['profile'] = $details->fetch_array();

                // redirect to admin dashboard
                // echo $res['user_type_id'].' admin';
                header('location:view/admin/');

            } else {

                // Update login table, input last login timestamp
                $upd = $conn->query("UPDATE $table SET `is_online` = 1 WHERE `id` = ".$res['id']);
                $details = $conn->query("SELECT * FROM tbl_userprofile WHERE user_id = ".$res['id']);

                $_SESSION['userid'] = $res['id'];
                $_SESSION['userType'] = $res['user_type_id'];
                $_SESSION['profile'] = $details->fetch_array();

                // redirect to cashier dashboard
                // echo $res['user_type_id'].' cashier';
                header('location:view/cashier/');

            }

        } else {

            $_SESSION['err_message'] = 'Username and password is incorrect';

        }

    }

?>