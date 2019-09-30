<?php
include_once '../include/user_functions.php';
check_login();
if (isset($_GET['status'])) {
    get_alert($_GET['status']);
}
?>


        <div id="content" class="span10">
            <?php
            if (isset($_GET['m'])) {
                if (file_exists("modules/$_GET[m].php")) {
                    include_once "modules/$_GET[m].php";
                } elseif (empty($_GET['m'])) {
                    include_once "modules/main.php";
                } else {
                    include_once "modules/main.php";
                }
            } else {
                include_once "modules/main.php";
            }
            /* @$m = $_GET['m']?$_GET['m']:'main';
             * include_once 'modules/'.$m.'.php'; */
            ?>

