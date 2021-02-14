<?php


include('database_connection.php');
session_start();

$sql = "SELECT DISTINCT b_name FROM `search` ";
$res = $db->query($sql)->fetchAll();
if ($res) {
    echo '<select class="btn btn-secondary dropdown-toggle" id="selector" onchange="selected()">';
    echo '<option class="dropdown-item" value="" selected>...</option>';

    foreach ($res as $r) {
        echo '<option class="dropdown-item" value="' . $r['b_name'] . '" >' . $r['b_name'] . '</option>';
    }
    echo '</select>';
}
