<?php


include('database_connection.php');
session_start();

if (isset($_GET['name'])) {
    $sql = "SELECT * FROM `search` WHERE b_name LIKE '%".$_GET['name']."%'";
    $res = $db->query($sql)->fetchAll();
    if ($res) {
        echo '<table class="table table-striped table-hover"><tr><th>id</th><th>Name</th><th>Product</th></tr>';
        foreach($res as $r){
            echo '<tr><td>'.$r['id'].'</td><td>'.$r['b_name'].'</td><td>'.$r['product_name'].'</td></tr>';
        }
        echo '</table>';
    }
}
