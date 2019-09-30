<?php
include_once '../../app/contact.php';
if (isset($_GET['id'])){
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $obj = new contact();
        if ($obj->removeContact($id)) {
        }
    }
}
header("Location: ../dashboard.php?m=contact-list");
?>