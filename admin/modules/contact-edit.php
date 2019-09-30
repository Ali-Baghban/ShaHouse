<?php
$htcode = null;
if (isset($_GET['id'])){

    if (!empty($_GET['id'])){
        $id = $_GET['id'];
        $obj = new contact();
        $result = $obj->getProfile($id);
        if (isset($_POST['frm'])) {
            $data = $_POST['frm'];
            $img = $_FILES['img'];
            //$obj = new contact();
            //var_dump($data);
            //var_dump($id);
            if ($obj->editContact($data,$img,$id)){
                echo " <meta http-equiv='refresh' content='0;url=dashboard.php?m=contact-profile&id=$id'>";
            }

        }
        $htcode = <<<EOF
    <ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="dashboard.php">داشبورد</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#"> ویرایش مشخصات مخاطب </a></li>
</ul>
<div class="box-content">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail text-center">
 <form class="text-center" method="post" action="" enctype="multipart/form-data">
                <fieldset class="">
                <label class="control-label" for="">نام</label>
                    <div class="control-group success text-center">
                        
                        <div class="controls success">
                            <input type="text" id="inputSuccess" value="$result->forename" name="frm[forename]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">نام خانوادگی</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$result->surname" name="frm[surname]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">تلفن ثابت</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$result->telephone" name="frm[telephone]">
                        </div>
                    </div>
                   <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> همراه </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$result->phone" name="frm[phone]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">همراه دوم</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$result->phone2" name="frm[phone2]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess" >ایمیل</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$result->email" name="frm[email]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">آدرس</label>
                        <div class="controls">
                            <textarea name="frm[address]" class="" id="" rows="3">$result->address</textarea>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">شبکه های اجتماعی</label>
                        <div class="controls">

                            <textarea name="frm[social_networks]" class="" id="" rows="3">$result->social_networks</textarea>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">تصویر</label>
                 <img src="$result->image" class="img-polaroid " alt="$result->forename" style="width:150px; margin-bottom: 10px">
                        <div class="controls">
                     
                            <input type="file" id="inputSuccess" name="img">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="submit">ویرایش</button>
                        <a href="./dashboard.php?m=contact-list"><button type="submit" class="btn btn-primary" name="submit">بازگشت</button></a>
                    </div>
                </fieldset>
            </form>
                    
            </div>
        </div>
    </div>
</div>
        </div>
        
    </div><!--/span-->

</div><!--/row--></div></div></div>

EOF;
    }

}


echo $htcode;
?>
