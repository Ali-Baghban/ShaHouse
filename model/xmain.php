<?php

class xmain
{
    public function security_check()
    {
        return true;
    }

    public function sec_check()
    {
        if (isset($_SESSION['login'])) {
            return true;

        } else {
            return false;
        }
    }

    public function redirect(){
        header("Location: index.php");
    }
}