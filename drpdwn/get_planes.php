<?php


include('database_connection.php');
// session_start();
if (isset($_GET['groupId'])) {

    $sql = "SELECT * FROM `ac_type` WHERE ac_group_id = '" . $_GET['groupId'] . "'";
    $res = $db->query($sql)->fetchAll();
    if ($res) {
        echo '<select class="btn btn-primary dropdown-toggle" id="selector">';
        echo '<option class="dropdown-item" value="" selected>...</option>';

        foreach ($res as $r) {
            echo '<option class="dropdown-item" value="' . $r['id'] . '" >' . $r['plane_name'] . '</option>';
        }
        echo '</select>';
    }
}
