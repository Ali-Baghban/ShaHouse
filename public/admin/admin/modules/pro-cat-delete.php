<?php
include_once '../../include/functions.php';
if (isset($_GET['id'])){
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        if (set_pro_cat_delete($id)) {
        }
    }
}
header("Location: ../dashboard.php?m=pro-cat-list");
?>