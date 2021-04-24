<?php
require("conn.php");
require("header.php");


if(isset($_GET['i_id'])) {

    $edit_i_id = $_GET['i_id'];

    $result = "select * from items where i_id='$edit_i_id'";

    $run_query = mysqli_query($conn, $result);

    while ($row_item = mysqli_fetch_array($run_query)) {
        $i_id = $row_item['i_id'];
        $price = $row_item['price'];

    }
       }
echo '$price';
print_r($price);
require ("footer.php");


