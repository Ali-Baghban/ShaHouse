<?php
$html1 = <<<EOF
    <div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> ویرایش مشخصات ملک : $property->name  </h2>
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
                            <input type="text" id="inputSuccess" value="$property->name" name="frm[name]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">شهر</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$property->city" name="frm[city]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">آدرس دقیق</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$property->details" name="frm[details]">
                        </div>
                    </div>
                    
                    
EOF;
echo $html1;
if ($property->private == 0){ ?>
<div class="control-group">
    <label class="control-label">نمایش آدرس دقیق</label>
    <div class="controls">
        <label class="radio">
            <input type="radio" name="frm[private]" id="optionsRadios1" value="1"  >
            محرمانه
        </label>
        <div style="clear:both"></div>
        <label class="radio">
            <input type="radio" name="frm[private]" id="optionsRadios2" value="0" checked="">
            قابل رویت </label>
        <div style="clear:both"></div>
    </div>
</div>
<?php }else{ ?>
    <div class="control-group">
        <label class="control-label">نمایش آدرس دقیق</label>
        <div class="controls">
            <label class="radio">
                <input type="radio" name="frm[private]" id="optionsRadios1" value="1" checked="" >
                محرمانه
            </label>
            <div style="clear:both"></div>
            <label class="radio">
                <input type="radio" name="frm[private]" id="optionsRadios2" value="0" >
                قابل رویت </label>
            <div style="clear:both"></div>
        </div>
    </div>
<?php }
switch ($property->type) {
    case 'ویلا': ?>
        <div class="control-group">
            <label class="control-label">کاربری</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios1" value="ویلا" checked="">
                    ویلا
                </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="آپارتمان">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="فروشگاه">
                    فروشگاه </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="دفتر">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="co">
                    خانه های تک خانوار </label>
            </div>
        </div>
        <?php break;
    case 'آپارتمان': ?>
        <div class="control-group">
            <label class="control-label">کاربری</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios1" value="ویلا">
                    ویلا
                </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="آپارتمان" checked="">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="فروشگاه">
                    فروشگاه </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="دفتر">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="co">
                    خانه های تک خانوار </label>
            </div>
        </div>
        <?php break;
    case 'فروشگاه': ?>
        <div class="control-group">
            <label class="control-label">کاربری</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios1" value="ویلا">
                    ویلا
                </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="آپارتمان">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="فروشگاه" checked="">
                    فروشگاه </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="دفتر">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="co">
                    خانه های تک خانوار </label>
            </div>
        </div>
        <?php break;
    case 'دفتر': ?>
        <div class="control-group">
            <label class="control-label">کاربری</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios1" value="ویلا">
                    ویلا
                </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="آپارتمان">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="فروشگاه">
                    فروشگاه </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="دفتر" checked="">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="co">
                    خانه های تک خانوار </label>
            </div>
        </div>
        <?php break;
    default: ?>
        <div class="control-group">
            <label class="control-label">کاربری</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios1" value="ویلا">
                    ویلا
                </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="آپارتمان">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="فروشگاه">
                    فروشگاه </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="دفتر">
                    آپارتمان </label>
                <div style="clear:both"></div>
                <label class="radio">
                    <input type="radio" name="frm[type]" id="optionsRadios2" value="co" checked="">
                    خانه های تک خانوار </label>
            </div>
        </div>
    <?php }
foreach ($property->img as $value):
    $url[] = $value;
endforeach;
$html2 = <<<EOF
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">قیمت</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$property->price" name="frm[price]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">امکانات و توضیحات</label>
                        <div class="controls">
                            <textarea class="textarea" name="frm[options]">$property->options</textarea>
                        </div>
                    </div>    
<div class="control-group success">
    <label class="control-label" for="inputSuccess">تصاویر</label>
    <div class="controls">
        <img src="$url[0]" class="img-responsive img-rounded" style="width: 200px">
    </div>
</div>
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">لینک</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$url[0]" name="frm[img1]">
                        </div>
</div>
<div class="control-group success">
    <label class="control-label" for="inputSuccess">تصاویر</label>
    <div class="controls">
        <img src="$url[1]" class="img-responsive img-rounded" style="width: 200px">
    </div>
</div>
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">لینک</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$url[1]" name="frm[img2]">
                        </div>
</div>
<div class="control-group success">
    <label class="control-label" for="inputSuccess">تصاویر</label>
    <div class="controls">
        <img src="$url[2]" class="img-responsive img-rounded" style="width: 200px">
    </div>
</div>
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">لینک</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$url[2]" name="frm[img3]">
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
