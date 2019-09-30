<?php
//session_start();
include_once 'model/mindex.php';
//php code
########################################
# Template
include_once 'model/mtemplate.php';
$template = new mtemplate();
$menu = $template->menu_list();
########################################
$obj = new mindex();
$slider = $obj->get_slider();
$news = $obj->list_news();
//$relinks = $obj->get_related_links();

include_once 'public/default/template/main-header.php';
include_once 'public/default/template/navbar.php';
switch ($action) {
    case 'index':
        //include_once 'public/default/template/navbar.php';

        include_once "view/$controller/$action.php";

        break;

        break;
    case 'about':

        include_once "view/$controller/$action.php";

        break;
    default:
        include_once "view/error/404.php";

}
include_once 'public/default/template/footer.php';
?>