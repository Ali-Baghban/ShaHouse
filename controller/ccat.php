<?php
include_once 'model/mcat.php';
########################################
# Template
include_once 'model/mtemplate.php';
$template = new mtemplate();
$menu = $template->menu_list();
########################################
############################
$obj = new mcat();
############################
include_once 'public/default/template/main-header.php';
include_once 'public/default/template/navbar.php';
############################
switch ($action) {
    case 'cat':
        switch ($type) {
            case 'store':
                $category = $obj->get_cat('فروشگاه');
                break;
            case 'co':
                $category = $obj->get_cat('فروشگاه');
                include_once "view/$controller/1.php";
                break;
            case 'office':
                $category = $obj->get_cat('فروشگاه');
                include_once "view/$controller/1.php";
                break;
            case 'vila':
                $sorted = "ویلا";
                $category = $obj->get_cat($sorted);
                include_once "view/$controller/$action.php";
                break;
            default:
                $sorted = "آپارتمان";
                $category = $obj->get_cat($sorted);
                include_once "view/$controller/$action.php";
        }
        break;
    case 'house':
        if ($obj->security_check()) {
            if (isset($_POST['submit'])) {
                $data = $_POST['frm'];
                // mail --- > householder !
                header("Location: index.php?c=cat&a=house&h=$h_id&m=sent");
        }
            $gallery = $obj->get_house_gallery($h_id);
            $information = $obj->get_house_information($h_id);
            $householder_info = $obj->get_hh_info($h_id);
            //var_dump($information);
            //var_dump($housholder_info);
            include_once "view/$controller/$action.php";
        }

}
############################
include_once 'public/default/template/footer.php';

?>
