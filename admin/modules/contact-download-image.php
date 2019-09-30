<?php
require_once '../../app/contact.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $obj = new contact();
    $obj->downloadProfileImage($id);

    //header("Location:"."../dashboard.php?m=contact-profile&id=$id" );
}



?>