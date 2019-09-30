<?php
include_once '../../include/functions.php';
if (isset($_GET['id'])){
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        if (delete_product($id)) {
        }
    }
}
header("Location: ../dashboard.php?m=pro-list");
?>