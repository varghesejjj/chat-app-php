<?php


include('database_connection.php');
session_start();

if (isset($_GET['word'])) {
    $sql = "SELECT * FROM `ac_type` WHERE CONCAT(plane_name) LIKE '%" . $_GET['word'] . "%'";
    $res = $db->query($sql)->fetchAll();
    if ($res) {
        foreach ($res as $r) {
            print '
            <a style="cursor:pointer;" onclick="puttosearch(\''. $r["plane_name"] . '\')">
            ' . $r['plane_name'] . '
            </a><br>
            ';
        }
    }
}
