<?php
include_once '../../app/user.php';
session_start();
var_dump($_SESSION['chid']);
if (isset($_SESSION['chid'])) {
    var_dump($_SESSION['chid']);
    $obj = new user();
    if ($obj->removeUser()) {
    }
}
?>