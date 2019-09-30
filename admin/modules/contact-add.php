<?php
if (isset($_POST['frm'])) {
    $data = $_POST['frm'];
    $img = $_FILES['img'];
    $obj = new contact();
    //var_dump($data);
    //var_dump($img);
    //var_dump($_SESSION['chid']);
    if ($obj->addContact($data,$img)){
        //var_dump($obj);
        echo "<script>alert('مخاطب با موفقیت اضافه شد')</script>";
    }

}

?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="dashboard.php">داشبورد</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#"> افزودن مخاطب جدید </a></li>
</ul>
<div class="row-fluid sortable">

        <div class="box-content text-center">
            <form class="" method="post" action="" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">نام</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[forename]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">نام خانوادگی</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[surname]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">تلفن ثابت</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[telephone]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">همراه</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[phone]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">همراه دوم</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[phone2]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">ایمیل</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[email]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">آدرس</label>
                        <div class="controls">
                            <textarea name="frm[address]" class="" id="" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">شبکه های اجتماعی</label>
                        <div class="controls">

                            <textarea name="frm[social_networks]" class="" id="" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">عکس</label>
                        <div class="controls">
                            <input type="file" id="inputSuccess" name="img">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="submit">افزودن</button>
                        <input type="reset" class="btn" value="پاک کردن">
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->

</div><!--/row-->