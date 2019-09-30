<?php
if (isset($_POST['frm'])){
    $data = $_POST['frm'];
    $img = $_FILES['img'];
    $img = "./img/product/avatar.jpg";
    if (pro_add($data,$img)){
        echo "<script>alert('Product added successfully')</script>";
    }else{
        echo "<script>alert('Product not added')</script>";
    }
}

?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>افزودن محصول جدید</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">عنوان</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[title]">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError">سر لیست</label>
                        <div class="controls">
                            <select id="selectError" data-rel="chosen" name="frm[chid]">
                                <?php
                                $pro_parent = get_pro_parent();
                                foreach ($pro_parent as $sub){
                                    echo "<option value='$sub[id]'>$sub[title]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">قیمت</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[price]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">توضیحات</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" name="frm[caption]">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">وضعیت نمایش</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="frm[status]" id="optionsRadios1" value="1" checked="" >
                                فعال
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="frm[status]" id="optionsRadios2" value="0">
                                غیر فعال </label>
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">عکس</label>
                        <div class="controls">
                            <input type="file" id="inputSuccess" name="img">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="frm[submit]">افزودن</button>
                        <input type="reset" class="btn" value="پاک کردن">
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->

</div><!--/row-->