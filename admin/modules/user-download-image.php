<?php
require_once '../../app/user.php';

if (isset($_SESSION['chid'])) {
    $obj = new user();
    $obj->downloadProfileImage();

    //header("Location:"."../dashboard.php?m=contact-profile&id=$id" );
}

?>