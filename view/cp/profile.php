<?php
    //var_dump($row);
    $html1 = <<<EOF
    <div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> ویرایش اطلاعات جامع  </h2>
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
                        <label class="control-label" for="inputSuccess"> عنوان وبسایت </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$row[title]" name="frm[title]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> توضیحات وبسایت </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$row[description]" name="frm[description]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> تلفن </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" style="text-align: left"  value="$row[phone]" name="frm[phone]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> فکس </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" style="text-align: left"  value="$row[fax]" name="frm[fax]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> آدرس </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$row[address]" name="frm[address]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> ایمیل </label>
                        <div class="controls">
                            <input type="email" style="text-align: left" id="inputSuccess"  value="$row[email]" name="frm[email]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> زمان کاری </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$row[time]" name="frm[time]">
                        </div>
                    </div>
                    <div class="control-group">
						<label class="control-label" for="appendedInput"> Facebook </label>
						<div class="controls">
							<div class="input-append">
									<input id="appendedInput" size="16" type="text"  style="text-align: left" value="$row[facebook]" name="frm[facebook]">
									<span class="add-on">@</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedInput"> Instagram </label>
						<div class="controls">
							<div class="input-append">
									<input id="appendedInput" size="16" type="text" style="text-align: left" value="$row[instagram]" name="frm[instagram]">
									<span class="add-on">@</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedInput"> Telegram </label>
						<div class="controls">
							<div class="input-append">
									<input id="appendedInput" size="16"  style="text-align: left" type="text" value="$row[telegram]" name="frm[telegram]">
									<span class="add-on">@</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedInput"> Twitter </label>
						<div class="controls">
							<div class="input-append">
									<input id="appendedInput" style="text-align: left" size="16" type="text" value="$row[twitter]" name="frm[twitter]">
									<span class="add-on">@</span>
							</div>
						</div>
					</div>
                    
                    
                    
EOF;
    echo $html1;
    $active = null;
    $inactive = null;
    if ($row['status'] == 1) {
        $active = "checked='checked'";
    } else {
        $inactive = "checked='checked'";
    }
    $html2 = <<<EOF
<div class="control-group">
    <label class="control-label">وضعیت وبسایت</label>
    <div class="controls">
        <label class="radio">
            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" $active>
            فعال
        </label>
        <div style="clear:both"></div>
        <label class="radio">
            <input type="radio" name="frm[status]" id="optionsRadios2" value="0" $inactive>
            غیر فعال </label>
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

}
?>
