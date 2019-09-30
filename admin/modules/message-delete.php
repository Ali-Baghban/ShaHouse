<?php
include_once '../../include/functions.php';
if (isset($_GET['id'])){
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        if (set_delete_message($id)) {

        }
    }
}
header("Location: ../dashboard.php?m=message");
?>