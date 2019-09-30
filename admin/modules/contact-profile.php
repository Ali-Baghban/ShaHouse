<?php
if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $obj = new contact();
        if ($result = $obj->getProfile($id)) {
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
								<li><a href="tel: $result->phone"><i class="halflings-icon phone"></i>  تماس با مخاطب  </a></li>
								<li><a href="dashboard.php?m=contact-edit&id=$id"><i class="halflings-icon edit"></i>  ویرایش مشخصات </a></li>
								<li><a href="./modules/contact-download-image.php?id=$id"><i class="halflings-icon download-alt"></i> دانلود عکس مخاطب </a></li>
								<li><a href="./modules/contact-delete.php?&id=$id"><i class="halflings-icon remove"></i> حذف مخاطب </a></li>
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
                            <label class="control-label">تلفن ثابت</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input">$result->telephone</span>
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
                            <label class="control-label">آدرس</label>
                            <div class="controls">
                                <textarea class="uneditable-textarea" id="" rows="3">$result->address</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                            
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">شبکه های اجتماعی</label>
                            <div class="controls">
                                <textarea class="uneditable-textarea" id="" rows="3">$result->social_networks</textarea>
                            </div>
                        </div>
                        <a href="./dashboard.php?m=contact-list"><button type="submit" class="btn btn-primary" name="submit">بازگشت</button></a>
                    </fieldset>
                    
            </div>
        </div>
    </div>
</div>


EOF;
        } else {
            $htcode = null;

        }

    } else
        $htcode = null;
} else {
    $htcode = null;
}


?>

    <!-- start: Content -->
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">داشبورد</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#"> پروفایل مخاطب </a></li>
    </ul>


    <hr>

<?php
echo $htcode;
?>