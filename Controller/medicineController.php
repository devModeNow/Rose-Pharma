<?php

    require 'dbController.php';

    if(isset($_POST['catName'])){

        $name = validate($conn->real_escape_string($_POST['catName']));
        // $name = 'analgesics';

        $select = $conn->query("SELECT * FROM tbl_pharma_categories WHERE name = \"$name\"");

        if($select->num_rows > 0){

            $data = array(
                            'status' => true,
                            'message' => "Category Already Exists",
                            'class' => "text-danger"
                        );

            echo json_encode($data);

        } else {

            $data = array(
                'status' => false,
                'message' => "All goods",
                'class' => "text-danger"
            );

            echo json_encode($data);

        }

    }

    if(isset($_POST['addCat'])){

        $name = validate($conn->real_escape_string($_POST['name']));

        $insert = $conn->query("INSERT INTO tbl_pharma_categories(name) VALUES(\"$name\")");

        if($insert){

            $data = array(
                'status' => true,
                'message' => "Category added successfully",
                'class' => "text-success"
            );

            echo json_encode($data);

        }

    }

    if(isset($_POST['deleteCat'])){

        $key = validate($conn->real_escape_string($_POST['key']));

        $delete = $conn->query("DELETE FROM tbl_pharma_categories WHERE id = \"$key\"");

        if($delete){

            $data = array(
                'status' => true,
                'message' => "Category deleted successfully",
                'class' => "text-success"
            );

            echo json_encode($data);

        }

    }

//    Types
if(isset($_POST['typeName'])){

    $name = validate($conn->real_escape_string($_POST['typeName']));

    $select = $conn->query("SELECT * FROM tbl_pharma_types WHERE name = \"$name\"");

    if($select->num_rows > 0){

        $data = array(
                        'status' => true,
                        'message' => "Type Already Exists",
                        'class' => "text-danger"
                    );

        echo json_encode($data);

    } else {

        $data = array(
            'status' => false,
            'message' => "All goods",
            'class' => "text-danger"
        );

        echo json_encode($data);

    }

}

if(isset($_POST['addType'])){

    $name = validate($conn->real_escape_string($_POST['name']));

    $insert = $conn->query("INSERT INTO tbl_pharma_types(name) VALUES(\"$name\")");

    if($insert){

        $data = array(
            'status' => true,
            'message' => "Type added successfully",
            'class' => "text-success"
        );

        echo json_encode($data);

    }

}

if(isset($_POST['deleteType'])){

    $key = validate($conn->real_escape_string($_POST['key']));

    $delete = $conn->query("DELETE FROM tbl_pharma_types WHERE id = \"$key\"");

    if($delete){

        $data = array(
            'status' => true,
            'message' => "Type deleted successfully",
            'class' => "text-success"
        );

        echo json_encode($data);

    }

}

    function validate($data){
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        return $data;
    }

?>