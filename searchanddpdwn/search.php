<?php


include('database_connection.php');
session_start();

if (isset($_GET['word'])) {
    $sql = "SELECT * FROM `search` WHERE CONCAT(b_name,' ', product_name) LIKE '%".$_GET['word']."%'";
    $res = $db->query($sql)->fetchAll();
    if ($res) {
        echo '<table class="table table-striped table-hover"><tr><th>Name</th><th>Product</th></tr>';
        foreach($res as $r){
            echo '<tr><td>'.$r['b_name'].'</td><td>'.$r['product_name'].'</td></tr>';
        }
        echo '</table>';
    }
}
