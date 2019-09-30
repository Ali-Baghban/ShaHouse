<?php
session_start();

include_once "model/mnews.php";
//php code
$class = new news();
switch ($action) {
    case 'add':
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if (!empty($data['title'])) {
                if ($class->add_news($data)) {
                    echo "News has shared !";
                }
            }
        }
        break;
    case 'list':
        $newslist = $class->list_news();
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            if (!empty($_GET['id'])) {
                $id = $_GET['id'];
                if ($class->delete_news($id)) {
                    header("Location: search.php?c=news&a=list");
                }
            }
        }
        break;
    case 'edit':
        if (isset($_GET['id'])) {
            if (!empty($_GET['id'])) {
                $id = $_GET['id'];
                if ($news = $class->show_news($id))
                    if (isset($_POST['btn'])) {
                        $data = $_POST['frm'];
                        if (!empty($data['title'])) {
                            if ($class->edit_news($data, $id)) {
                                echo "News has updated !";
                                if ($news = $class->show_news($id));
                                //header("Location: search.php?c=news&a=edit&id=$id");
                            }
                        }
                    }
            }
        }
        break;
}
//
include_once "view/news/$action.php";
?>