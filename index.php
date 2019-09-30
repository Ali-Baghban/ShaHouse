<?php
session_start();
include_once 'public/default/include/config.php';
$msg = @$_GET['m'] ? $_GET['m'] : 'index';
switch ($msg) {
    case 'registered':
        echo "<script>alert('Registered successfully ..') </script>";
        break;
    case 'sent':
        echo "<script>alert('Sent successfully ..') </script>";
        break;
}
$controller = @$_GET['c'] ? $_GET['c'] : 'index';
$action = @$_GET['a'] ? $_GET['a'] : 'index';
$type = @$_GET['t'] ? $_GET['t'] : 'default';
$h_id = @$_GET['h'] ? $_GET['h'] : '1';
$id = @$_GET['id'] ? $_GET['id'] : '00';
$path = "controller/c$controller.php";
$action_path = "view/$controller/$action.php";
$default_path = "controller/cindex.php";
if (file_exists($path)) {
    include_once $path;
} else {
    $controller = 'error';
    $action = '404';
    include_once $default_path;
}
?>