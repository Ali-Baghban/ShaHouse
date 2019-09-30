<?php
$id;
@$id = $_GET['id'];
if (menu_delete($id)):
    ?>
    <br>
    <br>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong> تبریک !</strong> اقدام مورد نطر با موفقیت صورت پذیرفت
    </div>
    <a href="dashboard.php?m=menu-list">
        <button class="btn btn-large btn-round"><i class="halflings-icon white ok"></i> بازگشت به لیست </button>
    </a>
    <?php
endif;
?>