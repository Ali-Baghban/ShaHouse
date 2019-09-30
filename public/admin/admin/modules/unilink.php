<?php
if (isset($_GET['link'])){
    $link = $_GET['link'];
    $hash = uniqid();
    echo $hash."<br>".strlen($hash);
}
?>