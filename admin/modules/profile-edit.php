<?php
$htcode = null;
$active = null;
$inactive = null;
if (isset($_SESSION['chid'])) {
    $obj = new user();
    $result = $obj->getProfile();

    if (isset($_POST['frm'])) {
        $data = $_POST['frm'];
        $img = $_FILES['img'];
        if ($obj->editUser($data, $img)) {
            echo " <meta http-equiv='refresh' content='0;url=dashboard.php?m=profile'>";

        }


    }
    if ($result->privacy == 1) {
        $active = "checked='checked'";
    } else {
        $inactive = "checked='checked'";
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
                
                    <div class="control-group success text-center">
                        <label class="control-label" for="">نام</label>
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
                        <label class="control-label" for="inputSuccess">شناسه کاربری</label>
                        <div class="controls">
                            <div class="input-append">
									<input id="appendedInput" size="16" type="text"  style="text-align: left" value="$result->username" name="frm[username]">
									<span class="add-on">@</span>
							</div>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">رمز عبور</label>
                        <div class="controls">
                            <div class="input-append">
									<input id="appendedInput" size="16" type="text"  style="text-align: left" value="*******" name="frm[password]">
									<span class="add-on">#</span>
							</div>
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
                        <label class="control-label" for="inputSuccess" >سن</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$result->age" name="frm[age]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess" >شهر</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$result->city" name="frm[city]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">بیوگرافی</label>
                        <div class="controls">

                            <textarea name="frm[bio]" class="" id="" rows="3">$result->bio</textarea>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">تصویر</label>
                 <img src="$result->image" class="img-polaroid " alt="$result->forename" style="width:150px; margin-bottom: 10px">
                        <div class="controls">
                     
                            <input type="file" id="inputSuccess" name="img">
                        </div>
                    </div>
                 <div class="control-group">
                <label class="control-label">حریم شخصی</label>
                <div class="controls">
                    <label class="radio">
                        <input type="radio" name="frm[privacy]" id="optionsRadios1" value="1" $active>
            Protected
                    </label>
                    <div style="clear:both"></div>
                    <label class="radio">
                        <input type="radio" name="frm[privacy]" id="optionsRadios2" value="0" $inactive>
                        Public </label>
                </div>
            </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="submit">ویرایش</button>
                        <a href="./dashboard.php?m=profile"><button type="submit" class="btn btn-primary" name="submit">بازگشت</button></a>
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


echo $htcode;
?>
