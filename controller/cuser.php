<?php
//session_start();
include_once 'model/muser.php';

$class = new user();
switch ($action) {
    case 'register':
        if (isset($_POST['register'])) {
            if (isset($_POST['frm'])) {
                $data = $_POST['frm'];
                if (!empty($data['username'])
                    && !empty($data['password'])
                    && !empty($data['email'])
                    && !empty($data['phone'])
                    && !empty($data['id_number'])
                    && !empty($data['name'])
                    && !empty($data['type'])
                    && !empty($data['agree'])) {
                    $data['password'] = sha1($data['password']);
                    if ($data['type'] == "customer" || $data['type'] == "householder") {
                        //var_dump($data);

                        if ($class->register_user($data)) {
                           header("Location: index.php?m=registered");
                            echo "OK";
                        } else {
                            header("Location: index.php?m=n-registered");
                            echo "Nokey";
                        }
                    }
                } else {
                    header("Location: index.php?m=n-registered");
                }
            } else {
                header("Location: index.php?m=n-registered");
            }
        } else {
            header("Location: index.php?m=n-registered");
        }
        break;
    case 'login':
        if (!isset($_SESSION['login'])) {
            if (isset($_POST['login'])) {
                $data = $_POST['frm'];
                $pass = sha1($data['password']);
                //var_dump($data);
                if (!empty($data['username'])) {
                    if ($result = $class->select_user('username', $data['username'])) {
                        if ($result->password == $pass) {
                            $_SESSION['login'] = $result->username;
                            header("Location:index.php?c=cp&a=dashboard&$_SESSION[login]");
                        }
                    }
                } else {
                    header("Location: index.php");
                }
            } else {
                header("Location: index.php");
            }
        } else {
            header("Location: index.php?c=cp&a=dashboard");
        }

        break;
    case 'reset':
        if (isset($_POST['frm']['btn'])) {
            $data = $_POST['frm'];
            if (!empty($data['email'])) {
                //echo "Ali Baghban";
                if ($result = $class->select_user('email', $data['email'])) {

                }
            }
        }
        break;
    case 'logout';
        if (isset($_SESSION['login'])) {
            session_destroy();
            header("Location: index.php");
            echo "Logout done";
        }
        break;
    default:
        header("Location: index.php");
}
//include_once "view/$controller/$action.php";