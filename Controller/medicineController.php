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

if(isset($_POST['typeProdCode'])){

    $prodCode = validate($conn->real_escape_string($_POST['typeProdCode']));

    $select = $conn->query("SELECT * FROM tbl_pharma_products WHERE code = \"$prodCode\"");

    if($select->num_rows > 0){

        $data = array(
                        'status' => true,
                        'message' => "Product Code Already Exists",
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

if(isset($_POST['typeProdName'])){

    $prodName = validate($conn->real_escape_string($_POST['typeProdName']));

    $select = $conn->query("SELECT * FROM tbl_pharma_products WHERE name = \"$prodName\"");

    if($select->num_rows > 0){

        $data = array(
                        'status' => true,
                        'message' => "Product Name Already Exists",
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

// Add Product/Medicine Function
if(isset($_POST['addMed'])){

    $data = json_decode($_POST['data'], true);

    $code = validate($conn->real_escape_string($data['code']));
    $name = validate($conn->real_escape_string($data['name']));
    $price = validate($conn->real_escape_string($data['price']));
    $category = validate($conn->real_escape_string($data['category']));
    $type = validate($conn->real_escape_string($data['type']));
    $quantity = validate($conn->real_escape_string($data['quantity']));
    $expiration = validate($conn->real_escape_string($data['expiration']));
    $description = validate($conn->real_escape_string($data['description']));
    $prescribe = validate($conn->real_escape_string($data['prescribe']));

    $insertMed = $conn->query("INSERT INTO tbl_pharma_products (`code`,`name`,`price`,`category_id`,`type_id`,`quantity`,`expiration`,`description`,`prescription`)
                              VALUES (\"$code\",\"$name\",\"$price\",\"$category\",\"$type\",\"$quantity\",\"$expiration\",\"$description\",\"$prescribe\")");

    if($insertMed){

        $data = array(
            'status' => true,
            'message' => "Product Added Successfully",
            'class' => "text-success"
        );
    
        echo json_encode($data);
        
    }

}

// Update Product/Medicine Function
if(isset($_POST['updateMed'])){

    // $data = json_decode($_POST['data'], true);

    $id = validate($conn->real_escape_string($_POST['key']));
    $code = validate($conn->real_escape_string($_POST['code']));
    $name = validate($conn->real_escape_string($_POST['name']));
    $price = validate($conn->real_escape_string($_POST['price']));
    $category = validate($conn->real_escape_string($_POST['category']));
    $type = validate($conn->real_escape_string($_POST['type']));
    $quantity = validate($conn->real_escape_string($_POST['quantity']));
    $expiration = validate($conn->real_escape_string($_POST['expiration']));
    $description = validate($conn->real_escape_string($_POST['description']));
    @$prescribe = validate($conn->real_escape_string($_POST['prescribe']));

    if($prescribe){
        $prescribe = true;
    } else {
        $prescribe = false;
    }

    $updateMed = $conn->query("UPDATE tbl_pharma_products SET code = \"$code\",
                                                              name = \"$name\", 
                                                              price = \"$price\", 
                                                              category_id = \"$category\", 
                                                              type_id = \"$type\", 
                                                              quantity = \"$quantity\", 
                                                              expiration = \"$expiration\", 
                                                              description = \"$description\", 
                                                              prescription = \"$prescribe\" WHERE id = \"$id\"");

    if($updateMed){

        // $data = array(
        //     'status' => true,
        //     'message' => "Product Updated Successfully",
        //     'class' => "text-success"
        // );
    
        // echo json_encode($data);

        header('location:http://127.0.0.1/Rose-Pharma/view/admin/list.php');
        
    }

}

if(isset($_POST['deleteMed'])){

    $key = validate($conn->real_escape_string($_POST['key']));

    $delete = $conn->query("DELETE FROM tbl_pharma_products WHERE id = \"$key\"");

    if($delete){

        $data = array(
            'status' => true,
            'message' => "Medicine deleted successfully",
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