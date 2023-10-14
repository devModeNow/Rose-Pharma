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

                            $getAllTypes = $conn->query("SELECT * FROM tbl_pharma_types");

                            if($getAllTypes->num_rows > 0){

                                foreach($getAllTypes as $result):

                    ?>

                                <tr>
                                    <td> <?= $result['name'] ?> </td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteType(<?= $result['id'] ?>)">Delete</button>
                                    </td>
                                </tr>

                    <?php
                                endforeach;

                            }

                    ?>

                        </tbody>
                    </table>