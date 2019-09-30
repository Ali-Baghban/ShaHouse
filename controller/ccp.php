<?php

#################################################
include_once 'model/muser.php';
$class = new user();
$level = $class->get_user_level();
//var_dump($level);
#################################################
########################################
# Template

########################################
if (!$class->sec_check()) {
    $class->redirect();
} else {
    include_once 'public/admin/template/header.php';
    ######################################################
    # includes :
    include_once 'model/mnews.php';
    $news_obj = new news();
    $newslist = $news_obj->list_news();
    include_once 'model/mmenu.php';
    $menu_obj = new menu();
    $menu = $menu_obj->menu_list();
    include_once 'model/muser.php';
    $user_obj = new user();
    $user = $user_obj->user_list();
    include_once 'model/mproperty.php';
    $property_obj = new property();
    include_once 'model/morder.php';
    $order_obj = new order();
    include_once 'model/mverify.php';
    $verify_obj = new verify();
    ######################################################
    switch ($level) {
        case 'customer':

            include_once "view/$controller/menu_bar/customer.php";
            switch ($action) {
                case 'dashboard':
                    include_once "view/$controller/dashboard.php";
                    break;

                case
                'order-list':
                    $data['customer_username'] = $_SESSION['login'];
                    $order = $order_obj->order_list($data);
                    //var_dump($order);
                    include_once "view/$controller/order/order-list.php";
                    break;
                case
                'order-add':
                    if (isset($_GET['h_id'])) {
                        $data['house_id'] = $_GET['h_id'];
                        $data['customer_username'] = $_SESSION['login'];
                        $data['time'] = 'Today';
                        $order = $order_obj->order_add($data);
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }

                    //include_once "view/$controller/order/order-add.php";
                    break;
                case
                'order-delete':
                    include_once "view/$controller/order/order-delete.php";
                    break;
                case
                'profile':
                    include_once "view/$controller/profile.php";
                    break;
                default:
                    include_once "view/$controller/error.php";
            }
            break;
        case 'householder':
            $property = $property_obj->property_list($_SESSION['login']);
            include_once "view/$controller/menu_bar/householder.php";
            switch ($action) {
                case 'dashboard':
                    include_once "view/$controller/dashboard.php";
                    break;
                case
                'property-list':
                    include_once "view/$controller/property/property-list.php";
                    break;
                case
                'property-add':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        $data['chid'] = $property_obj->property_get_chid($_SESSION['login'])->id;
                        $data['status'] = 1;
                        $data['time'] = "Today";
                        if (empty($data['img1'])) {
                            $data['img1'] = "public/default/image/default.png";
                        }
                        if (empty($data['img2'])) {
                            $data['img2'] = "public/default/image/default.png";
                        }
                        if (empty($data['img3'])) {
                            $data['img3'] = "public/default/image/default.png";
                        }
                        if ($property_obj->property_add($data)) {
                            include_once "view/$controller/success.php";
                        }
                    }

                    include_once "view/$controller/property/property-add.php";
                    break;
                case
                'property-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($property_obj->property_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $property = $property_obj->property_get($id);
                    include_once "view/$controller/property/property-edit.php";
                    break;

                case 'property-delete':
                    if ($property_obj->property_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'profile':
                    include_once "view/$controller/profile.php";
                    break;
                default:
                    include_once "view/$controller/error.php";
            }
            break;
        case 'admin':
            ##
            $user = $user_obj->user_list();
            ##
            include_once "view/$controller/menu_bar/admin.php";
            switch ($action) {
                case 'dashboard':
                    include_once "view/$controller/dashboard.php";
                    break;
                case
                'message':
                    include_once "view/$controller/message.php";
                    break;
                case
                'menu-list':
                    include_once "view/$controller/menu/menu-list.php";
                    break;
                case
                'menu-add':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($menu_obj->menu_add($data)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    include_once "view/$controller/menu/menu-add.php";
                    break;
                case
                'menu-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($menu_obj->menu_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $menu = $menu_obj->menu_get($id);
                    include_once "view/$controller/menu/menu-edit.php";
                    break;
                case
                'menu-delete':
                    if ($menu_obj->menu_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'news-list':
                    include_once "view/$controller/news/news-list.php";
                    break;
                case
                'news-add':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($news_obj->news_add($data)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    include_once "view/$controller/news/news-add.php";
                    break;
                case
                'news-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($news_obj->news_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $news = $news_obj->news_get($id);
                    include_once "view/$controller/news/news-edit.php";
                    break;
                case
                'news-delete':
                    if ($news_obj->news_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'user-list':
                    include_once "view/$controller/user/user-list.php";
                    break;
                case
                'user-add':
                    include_once "view/$controller/user/user-add.php";
                    break;
                case
                'user-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($user_obj->user_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $user = $user_obj->user_get($id);
                    include_once "view/$controller/user/user-edit.php";
                    break;
                case
                'user-delete':
                    if ($user_obj->user_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'verify-list':
                    $verify = $verify_obj->verify_list();
                    var_dump($verify);
                    include_once "view/$controller/verify.php";
                    break;
                case
                'profile':
                    include_once "view/$controller/profile.php";
                    break;
                case
                'information':
                    include_once "view/$controller/general-info.php";
                    break;
                default:
                    include_once "view/$controller/error.php";
            }
            break;
    }
}

include_once 'public/admin/template/footer.php';