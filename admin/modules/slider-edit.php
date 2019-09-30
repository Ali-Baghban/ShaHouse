<?php

if (isset($_POST['frm']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $_POST['frm'];
    if (set_module_edit($data,$id)) {
        echo "<script>alert('edited')</script>";
    } else {
        //var_dump($data);
        echo "<script>alert('not edited')</script>";
    }
}
$id;
$row;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $row = get_slider_value($id);
    //var_dump($row);
    $html1 = <<<EOF
    <div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> ویرایش ماژول : $row[title]  </h2>
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
                        <label class="control-label" for="inputSuccess"> ماژول </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$row[title]" name="frm[title]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess"> استفاده شده در صفحه </label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$row[used]" name="frm[used]">
                        </div>
                    </div>
                    
EOF;
    echo $html1;
    $active = null;
    $inactive = null ;
    if ($row['status'] == 1){ $active="checked='checked'";}else{
        $inactive="checked='checked'";
    }
    $html2 = <<<EOF
<div class="control-group">
    <label class="control-label">وضعیت نمایش</label>
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
