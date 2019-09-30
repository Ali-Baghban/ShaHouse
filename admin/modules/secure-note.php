<?php
$htcode = null;

if (isset($_SESSION['chid'])) {

    $obj = new secure_note();
    if (isset($_POST['submit'])) {
        $key = $_POST['key'];
        $type = "decrypted";
    }elseif (isset($_POST['remove'])){
        $obj->removeNote();
    }else{
        $key = "******";
        $type = "encrypted";
    }

}
$result = $obj->getNote($type, $key);
$htcode = <<<EOF
    <ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="dashboard.php">داشبورد</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#"> دفترچه ی امن </a></li>
</ul>
<div class="box-content">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail text-center">
 <form class="text-center" method="post" action="" >
                <fieldset class="">
                
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">دفترچه یاد داشت امن</label>
                        <div class="controls">

                            <textarea name="" class="uneditable-textarea" id="" style="width: 85%" rows="8">$result</textarea>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> افزودن در دفترچه امن</label>
                        <div class="controls">

                            <textarea name="frm[note]" class="" id="" style="width: 85%" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">رمز عبور</label>
                        <div class="controls">
                            <div class="input-append">
									<input id="appendedInput" size="16" type="password"  style="text-align: left" value="*******" name="key">
									<span class="add-on">#</span>
							</div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="submit"> رمزگشایی / افزودن</button>
                        <button type="submit" class="btn btn-primary" name="remove">پاک کردن</button>
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


echo $htcode;
?>
