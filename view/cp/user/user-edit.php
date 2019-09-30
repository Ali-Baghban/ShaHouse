<?php
$html1 = <<<EOF
    <div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> ویرایش منو : $user->username  </h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="">
                <fieldset>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">نام</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$user->name" name="frm[name]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">ایمیل</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$user->email" name="frm[email]">
                        </div>
                    </div>
                    
EOF;
echo $html1;
if ($user->status == 1) { ?>
    <div class="control-group">
        <label class="control-label">وضعیت </label>
        <div class="controls">
            <label class="radio">
                <input type="radio" name="frm[status]" id="optionsRadios1" value="1" checked="">
                فعال
            </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[status]" id="optionsRadios2" value="0">
                غیرفعال </label>
        </div>
    </div>
<?php } else { ?>
    <div class="control-group">
        <label class="control-label">وضعیت</label>
        <div class="controls">
            <label class="radio">
                <input type="radio" name="frm[status]" id="optionsRadios1" value="1">
                مهم
            </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[status]" id="optionsRadios2" value="0" checked="">
                غیرمهم </label>
        </div>
    </div>
<?php }
if ($user->user_type == "admin") { ?>
    <div class="control-group">
        <label class="control-label">سطح دسترسی </label>
        <div class="controls">
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios1" value="admin" checked="">
                ادمین
            </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios2" value="customer">
                کاربرعادی </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios2" value="householder">
                مالک </label>
        </div>
    </div>


<?php } else if ($user->user_type == "householder") { ?>
    <div class="control-group">
        <label class="control-label">سطح دسترسی </label>
        <div class="controls">
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios1" value="admin">
                ادمین
            </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios2" value="customer">
                کاربرعادی </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios2" value="householder" checked="">
                مالک </label>
        </div>
    </div>
<?php } else { ?>
    <div class="control-group">
        <label class="control-label">سطح دسترسی </label>
        <div class="controls">
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios1" value="admin">
                ادمین
            </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios2" value="customer" checked="">
                کاربرعادی </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[level]" id="optionsRadios2" value="householder">
                مالک </label>
        </div>
    </div>

    <?php
}

$html2 = <<<EOF
    
<div class="control-group success">
    <label class="control-label" for="inputSuccess">شماره تماس</label>
    <div class="controls">
        <input type="text" id="inputSuccess" value="$user->phone" name="frm[phone]">
    </div>
</div>
<div class="form-actions">
    <button type="submit" class="btn btn-primary" name="frm[submit]">ویرابش</button>
    <input type="reset" class="btn" value="پاک کردن">
</div>
</fieldset>
</form>
</div>
</div><!--/span-->

</div><!--/row-->

EOF;
echo $html2;


?>
