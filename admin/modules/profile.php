<?php
$htcode = null;
if (isset($_SESSION['chid'])){

        $obj = new user();
        if ($result = $obj->getProfile()) {
            if ($result->privacy == 1){$privacy = "Protected"; }else{ $privacy = "Public"; }
            $htcode = <<<EOF
    
<div class="box-content">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail text-center">
                <a href="#">
                    <img src="$result->image" class="img-polaroid " alt="$result->forename" style="width:300px; height: 300px ">
                <div class="caption">
                    <p></p>
                </div>
                </a>
                 <div class="btn-group">
							<button class="btn btn-medium">تنظیمات</button>
							<button class="btn btn-medium dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#"></li>
								<li><a href="tel: 09335138159"><i class="halflings-icon phone"></i>  تماس با پشتیبانی  </a></li>
								<li><a href="dashboard.php?m=profile-edit"><i class="halflings-icon edit"></i>  ویرایش مشخصات </a></li>
								<li><a href="./modules/user-download-image.php"><i class="halflings-icon download-alt"></i> دانلود عکس پروفایل </a></li>
								<li><a href="./modules/user-delete.php"><i class="halflings-icon remove"></i> حذف حساب کاربری </a></li>
								<li></li>
							</ul>
						</div>
						<hr>
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">نام</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->forename</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">نام خانوادگی</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->surname</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">شناسه کاربری</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->username</span>
                            </div>
                        </div>
                       
                        <div class="control-group">
                            <label class="control-label">همراه</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->phone</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">همراه دوم</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->phone2</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">ایمیل</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->email</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">سن</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->age</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">شهر</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input"> $result->city</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">بیوگرافی</label>
                            <div class="controls">
                                <textarea class="uneditable-textarea" id="" rows="3">$result->bio</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">حریم خصوصی</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$privacy</span>
                            </div>
                        </div>
                        <a href="./dashboard.php?m=main"><button type="submit" class="btn btn-primary" name="submit">بازگشت</button></a>
                    </fieldset>
                    
            </div>
        </div>
    </div>
</div>


EOF;
        }

}

?>

    <!-- start: Content -->
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">داشبورد</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#"> پروفایل </a></li>
    </ul>


    <hr>

<?php
echo $htcode;
?>