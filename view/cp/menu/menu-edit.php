<?php
    $html1 = <<<EOF
    <div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> ویرایش منو : $menu->title  </h2>
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
                        <label class="control-label" for="inputSuccess">عنوان</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$menu->title" name="frm[title]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">آدرس منو</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$menu->url" name="frm[url]">
                        </div>
                    </div>
                    
EOF;
    echo $html1;
if ($menu->status == 1){ ?>
    <div class="control-group">
    <label class="control-label">وضعیت نمایش</label>
    <div class="controls">
        <label class="radio">
            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" checked="">
        فعال
        </label>
        <div style="clear:both"></div>
        <label class="radio">
            <input type="radio" name="frm[status]" id="optionsRadios2" value="0">
        غیر فعال </label>
    </div>
</div>

}
<?php }else{ ?>
<div class="control-group">
    <label class="control-label">وضعیت نمایش</label>
    <div class="controls">
        <label class="radio">
            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" >
    فعال
        </label>
        <div style="clear:both"></div>
        <label class="radio">
            <input type="radio" name="frm[status]" id="optionsRadios2" value="0" checked="">
    غیر فعال </label>
    </div>
</div>
<?php }
    $html2 = <<<EOF
    
<div class="control-group success">
    <label class="control-label" for="inputSuccess">ترتیب</label>
    <div class="controls">
        <input type="text" id="inputSuccess" value="$menu->sort" name="frm[sort]">
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
