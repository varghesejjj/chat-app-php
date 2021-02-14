<?php


include('database_connection.php');
session_start();

$sql = "SELECT *  FROM `ac_group` ";
$res = $db->query($sql)->fetchAll();
if ($res) {
    echo '<select class="btn btn-primary dropdown-toggle" id="selector" onchange="selected()">';
    echo '<option class="dropdown-item" value="" selected>...</option>';

    foreach ($res as $r) {
        echo '<option class="dropdown-item" value="' . $r['id'] . '" >' . $r['name'] . '</option>';
    }
    echo '</select>';
}