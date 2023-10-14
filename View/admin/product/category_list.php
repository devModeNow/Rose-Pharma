<table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php

                            require '../../Controller/dbController.php';

                            $getAllCatgories = $conn->query("SELECT * FROM tbl_pharma_categories");

                            if($getAllCatgories->num_rows > 0){

                                foreach($getAllCatgories as $result):

                    ?>

                                <tr>
                                    <td> <?= $result['name'] ?> </td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteCategory(<?= $result['id'] ?>)">Delete</button>
                                    </td>
                                </tr>

                    <?php
                                endforeach;

                            }

                    ?>

                        </tbody>
                    </table>